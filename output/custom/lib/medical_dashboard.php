<?php
/**
 * Funciones compartidas para las vistas Bulma del sistema de citas médicas.
 * Archivo independiente para no alterar el código generado por PHPRunner.
 */

function md_connection()
{
    return getDefaultConnection();
}

function md_h($value)
{
    return runner_htmlspecialchars((string)$value);
}

function md_prepare($value)
{
    return md_connection()->prepareString($value);
}

function md_query($sql)
{
    return md_connection()->query($sql);
}

function md_fetch_all($sql)
{
    $rows = array();
    $rs = md_query($sql);
    if (!$rs) {
        return $rows;
    }
    while ($row = $rs->fetchAssoc()) {
        $rows[] = $row;
    }
    return $rows;
}

function md_lookup($sql, $default)
{
    $rs = md_query($sql);
    if (!$rs) {
        return $default;
    }
    $row = $rs->fetchAssoc();
    if (!$row) {
        return $default;
    }
    $values = array_values($row);
    if (!count($values) || $values[0] === null) {
        return $default;
    }
    return $values[0];
}

function md_has_column($table, $column)
{
    $safeTable = md_prepare($table);
    $safeColumn = md_prepare($column);
    return (int)md_lookup("select count(*) from information_schema.columns where table_schema = database() and table_name = " . $safeTable . " and column_name = " . $safeColumn, 0) > 0;
}

function md_current_user()
{
    $username = isset($_SESSION["UserID"]) ? $_SESSION["UserID"] : "";
    $safeUsername = md_prepare($username);
    $hasPatientColumn = md_has_column("usuarios", "id_paciente");
    $patientSelect = $hasPatientColumn ? "id_paciente" : "null as id_paciente";
    $row = md_fetch_all("select id_usuario, username, tipo_usuario, id_medico, " . $patientSelect . ", activo from usuarios where username = " . $safeUsername . " limit 1");
    if (count($row)) {
        return $row[0];
    }
    return array(
        "id_usuario" => 0,
        "username" => $username,
        "tipo_usuario" => "admin",
        "id_medico" => null,
        "id_paciente" => null,
        "activo" => 1
    );
}

function md_role_label($role)
{
    $labels = array(
        "admin" => "Administrador",
        "recepcion" => "Recepción",
        "medico" => "Médico",
        "cliente" => "Paciente"
    );
    return isset($labels[$role]) ? $labels[$role] : ucfirst($role);
}

function md_require_login()
{
    if (!isLogged()) {
        HeaderRedirect("login");
        exit();
    }
}

function md_role_home($role)
{
    if ($role == "recepcion") {
        return "dashboard_recepcion.php";
    }
    if ($role == "medico") {
        return "dashboard_medico.php";
    }
    if ($role == "cliente") {
        return "dashboard_cliente.php";
    }
    return "dashboard_recepcion.php";
}

function md_redirect_to_role_home()
{
    $user = md_current_user();
    header("Location: " . md_role_home($user["tipo_usuario"]));
    exit();
}

function md_status_class($estado)
{
    $estado = strtolower((string)$estado);
    if ($estado == "confirmada") {
        return "is-info";
    }
    if ($estado == "atendida") {
        return "is-success";
    }
    if ($estado == "cancelada") {
        return "is-danger";
    }
    return "is-warning";
}

function md_status_icon($estado)
{
    $estado = strtolower((string)$estado);
    if ($estado == "confirmada") {
        return "fa-check-circle";
    }
    if ($estado == "atendida") {
        return "fa-user-check";
    }
    if ($estado == "cancelada") {
        return "fa-times-circle";
    }
    return "fa-clock";
}

function md_today()
{
    return date("Y-m-d");
}

function md_count($table, $where)
{
    $sql = "select count(*) as total from " . $table;
    if ($where != "") {
        $sql .= " where " . $where;
    }
    return (int)md_lookup($sql, 0);
}

function md_base_where_for_user($user)
{
    if ($user["tipo_usuario"] == "medico" && $user["id_medico"]) {
        return "c.id_medico = " . (int)$user["id_medico"];
    }
    if ($user["tipo_usuario"] == "cliente") {
        if (isset($user["id_paciente"]) && $user["id_paciente"]) {
            return "c.id_paciente = " . (int)$user["id_paciente"];
        }
        return "c.id_paciente = -1";
    }
    return "1=1";
}

function md_today_notifications($user)
{
    $today = md_prepare(md_today());
    $where = md_base_where_for_user($user);
    $sql = "select c.id_cita, c.fecha, c.hora, c.estado, c.motivo, "
        . "concat(p.nombre, ' ', p.apellido) as paciente, "
        . "concat(m.nombre, ' ', m.apellido) as medico "
        . "from citas c "
        . "inner join pacientes p on p.id_paciente = c.id_paciente "
        . "inner join medicos m on m.id_medico = c.id_medico "
        . "where " . $where . " and c.fecha = " . $today . " and c.estado in ('Pendiente','Confirmada') "
        . "order by c.hora asc limit 8";
    return md_fetch_all($sql);
}

function md_upcoming_appointments($user, $limit)
{
    $today = md_prepare(md_today());
    $where = md_base_where_for_user($user);
    $sql = "select c.id_cita, c.fecha, c.hora, c.estado, c.motivo, "
        . "concat(p.nombre, ' ', p.apellido) as paciente, "
        . "concat(m.nombre, ' ', m.apellido) as medico, e.nombre as especialidad "
        . "from citas c "
        . "inner join pacientes p on p.id_paciente = c.id_paciente "
        . "inner join medicos m on m.id_medico = c.id_medico "
        . "inner join especialidades e on e.id_especialidad = m.id_especialidad "
        . "where " . $where . " and c.fecha >= " . $today . " and c.estado in ('Pendiente','Confirmada') "
        . "order by c.fecha asc, c.hora asc limit " . (int)$limit;
    return md_fetch_all($sql);
}

function md_render_header($title, $active)
{
    $user = md_current_user();
    $notifications = md_today_notifications($user);
    $badge = count($notifications);
    ?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo md_h($title); ?> | Sistema Médico</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="custom/css/bulma-medical.css">
</head>
<body>
<nav class="navbar is-white medical-navbar" role="navigation" aria-label="main navigation">
    <div class="container is-fluid">
        <div class="navbar-brand">
            <a class="navbar-item has-text-weight-bold is-size-4" href="dashboard.php" style="color: var(--medical-primary);">
                <i class="fas fa-heartbeat mr-2"></i> MedGestión
            </a>
            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="medicalNav">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>
        <div id="medicalNav" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item <?php echo $active == 'dashboard' ? 'is-active' : ''; ?>" href="dashboard.php">
                    <i class="fas fa-columns mr-2"></i> Dashboard
                </a>
                <a class="navbar-item <?php echo $active == 'citas' ? 'is-active' : ''; ?>" href="citas_list_bulma.php">
                    <i class="fas fa-calendar-alt mr-2"></i> Citas
                </a>
                <a class="navbar-item <?php echo $active == 'pacientes' ? 'is-active' : ''; ?>" href="pacientes_list_bulma.php">
                    <i class="fas fa-user-injured mr-2"></i> Pacientes
                </a>
                <a class="navbar-item <?php echo $active == 'medicos' ? 'is-active' : ''; ?>" href="medicos_list_bulma.php">
                    <i class="fas fa-user-md mr-2"></i> Médicos
                </a>
                <a class="navbar-item <?php echo $active == 'reportes' ? 'is-active' : ''; ?>" href="reportes.php">
                    <i class="fas fa-chart-pie mr-2"></i> Reportes
                </a>
                <a class="navbar-item" href="search_bulma.php">
                    <i class="fas fa-search mr-2"></i> Buscar
                </a>
            </div>
            <div class="navbar-end">
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link is-arrowless">
                        <span class="icon is-medium">
                            <i class="fas fa-bell"></i>
                        </span>
                        <?php if ($badge) { ?>
                            <span class="tag is-danger is-rounded" style="position: absolute; top: 5px; right: 5px;"><?php echo (int)$badge; ?></span>
                        <?php } ?>
                    </a>
                    <div class="navbar-dropdown is-right is-boxed" style="min-width: 300px;">
                        <p class="navbar-item is-size-7 has-text-weight-bold has-text-grey">NOTIFICACIONES DE HOY</p>
                        <hr class="navbar-divider">
                        <?php if (!count($notifications)) { ?>
                            <p class="navbar-item has-text-grey-light">No hay alertas para hoy</p>
                        <?php } ?>
                        <?php foreach ($notifications as $notification) { ?>
                            <a class="navbar-item" href="citas_view.php?editid1=<?php echo (int)$notification["id_cita"]; ?>">
                                <div class="is-flex is-flex-direction-column">
                                    <span class="is-size-7 has-text-weight-semibold"><?php echo md_h(substr($notification["hora"], 0, 5)); ?> - <?php echo md_h($notification["paciente"]); ?></span>
                                    <span class="is-size-7 has-text-grey"><?php echo md_h($notification["estado"]); ?></span>
                                </div>
                            </a>
                        <?php } ?>
                        <hr class="navbar-divider">
                        <a class="navbar-item has-text-centered has-text-link is-size-7" href="notificaciones.php">Ver todas</a>
                    </div>
                </div>
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">
                        <div class="is-flex is-align-items-center">
                            <figure class="image is-24x24 mr-2">
                                <img class="is-rounded" src="https://ui-avatars.com/api/?name=<?php echo urlencode($user["username"]); ?>&background=2563eb&color=fff" alt="User">
                            </figure>
                            <span><?php echo md_h($user["username"]); ?></span>
                        </div>
                    </a>
                    <div class="navbar-dropdown is-right is-boxed">
                        <div class="navbar-item">
                            <span class="tag is-link is-light is-medium is-fullwidth"><?php echo md_h(md_role_label($user["tipo_usuario"])); ?></span>
                        </div>
                        <hr class="navbar-divider">
                        <a class="navbar-item" href="login.php?a=logout">
                            <i class="fas fa-sign-out-alt mr-2"></i> Cerrar sesión
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<section class="section medical-page">
    <div class="container is-fluid">
    <?php
}

function md_render_footer()
{
    ?>
    </div>
</section>
<footer class="footer has-background-white mt-6 py-5">
    <div class="content has-text-centered">
        <p class="is-size-7 has-text-grey">
            &copy; <?php echo date("Y"); ?> <strong>MedGestión</strong> - Sistema de Gestión de Citas Médicas Internas.
        </p>
    </div>
</footer>
<script>
document.addEventListener('DOMContentLoaded', function () {
    var burgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
    burgers.forEach(function (el) {
        el.addEventListener('click', function () {
            var target = document.getElementById(el.dataset.target);
            el.classList.toggle('is-active');
            target.classList.toggle('is-active');
        });
    });
});
</script>
</body>
</html>
    <?php
}

function md_render_stat($label, $value, $hint, $color, $icon = "fa-chart-bar")
{
    ?>
    <div class="column is-3-desktop is-6-tablet">
        <div class="box medical-stat <?php echo md_h($color); ?>">
            <div class="level is-mobile mb-2">
                <div class="level-left">
                    <p class="heading"><?php echo md_h($label); ?></p>
                </div>
                <div class="level-right">
                    <span class="icon is-medium has-text-grey-light">
                        <i class="fas <?php echo md_h($icon); ?> fa-lg"></i>
                    </span>
                </div>
            </div>
            <p class="title is-3 mb-1"><?php echo md_h($value); ?></p>
            <p class="is-size-7 has-text-grey"><?php echo md_h($hint); ?></p>
        </div>
    </div>
    <?php
}

function md_render_appointment_table($appointments, $audience)
{
    ?>
    <div class="table-container">
        <table class="table is-fullwidth is-hoverable medical-table">
            <thead>
                <tr>
                    <th><i class="far fa-calendar mr-1"></i> Fecha</th>
                    <th><i class="far fa-clock mr-1"></i> Hora</th>
                    <th><i class="far fa-user mr-1"></i> Paciente</th>
                    <?php if ($audience != "medico") { ?><th><i class="fas fa-user-md mr-1"></i> Médico</th><?php } ?>
                    <th><i class="fas fa-info-circle mr-1"></i> Estado</th>
                    <th><i class="fas fa-notes-medical mr-1"></i> Motivo</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <?php if (!count($appointments)) { ?>
                <tr><td colspan="7" class="has-text-centered has-text-grey py-6">No hay citas registradas en este periodo.</td></tr>
            <?php } ?>
            <?php foreach ($appointments as $appointment) { ?>
                <tr>
                    <td class="has-text-weight-semibold"><?php echo md_h($appointment["fecha"]); ?></td>
                    <td><span class="tag is-white"><?php echo md_h(substr($appointment["hora"], 0, 5)); ?></span></td>
                    <td><?php echo md_h($appointment["paciente"]); ?></td>
                    <?php if ($audience != "medico") { ?><td><?php echo md_h($appointment["medico"]); ?></td><?php } ?>
                    <td>
                        <span class="tag <?php echo md_status_class($appointment["estado"]); ?> is-light">
                            <i class="fas <?php echo md_status_icon($appointment["estado"]); ?> mr-1"></i>
                            <?php echo md_h($appointment["estado"]); ?>
                        </span>
                    </td>
                    <td class="is-size-7 has-text-grey"><?php echo md_h($appointment["motivo"]); ?></td>
                    <td class="has-text-right">
                        <div class="buttons are-small is-right">
                            <a class="button is-link is-light" href="citas_view.php?editid1=<?php echo (int)$appointment["id_cita"]; ?>">
                                <i class="fas fa-eye mr-1"></i> Ver
                            </a>
                            <?php if ($audience == "recepcion" || $audience == "admin") { ?>
                            <a class="button is-info is-light" href="citas_edit.php?editid1=<?php echo (int)$appointment["id_cita"]; ?>">
                                <i class="fas fa-edit mr-1"></i> Editar
                            </a>
                            <?php } ?>
                        </div>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
    <?php
}
?>
