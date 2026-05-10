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

function md_require_role($allowedRoles)
{
    $user = md_current_user();
    if (!in_array($user["tipo_usuario"], $allowedRoles)) {
        header("Location: " . md_role_home($user["tipo_usuario"]));
        exit();
    }
}

function md_role_can_see_catalogs($role)
{
    return $role == "admin" || $role == "recepcion";
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
    <link rel="stylesheet" href="custom/css/bulma-medical.css">
</head>
<body>
<nav class="navbar is-white medical-navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item has-text-weight-bold" href="dashboard.php">Sistema Médico</a>
        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="medicalNav"><span></span><span></span><span></span><span></span></a>
    </div>
    <div id="medicalNav" class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item <?php echo $active == 'dashboard' ? 'is-active' : ''; ?>" href="dashboard.php">Dashboard</a>
            <a class="navbar-item" href="citas_list.php">Citas</a>
            <?php if (md_role_can_see_catalogs($user["tipo_usuario"]) || $user["tipo_usuario"] == "medico") { ?><a class="navbar-item" href="pacientes_list.php">Pacientes</a><?php } ?>
            <?php if (md_role_can_see_catalogs($user["tipo_usuario"])) { ?><a class="navbar-item" href="medicos_list.php">Médicos</a><?php } ?>
            <a class="navbar-item <?php echo $active == 'reportes' ? 'is-active' : ''; ?>" href="reportes.php">Reportes</a>
            <a class="navbar-item <?php echo $active == 'notificaciones' ? 'is-active' : ''; ?>" href="notificaciones.php">Notificaciones <?php if ($badge) { ?><span class="tag is-danger is-rounded ml-2"><?php echo (int)$badge; ?></span><?php } ?></a>
        </div>
        <div class="navbar-end">
            <div class="navbar-item"><span class="tag is-link is-light"><?php echo md_h(md_role_label($user["tipo_usuario"])); ?></span></div>
            <div class="navbar-item has-text-grey">Hola, <?php echo md_h($user["username"]); ?></div>
            <div class="navbar-item"><a class="button is-light" href="login.php?a=logout">Salir</a></div>
        </div>
    </div>
</nav>
<section class="section medical-page">
    <div class="container is-fluid">
    <?php
}

function md_render_search_panel($title, $subtitle, $target, $placeholder)
{
    ?>
    <div class="box medical-search">
        <h2 class="title is-5"><?php echo md_h($title); ?></h2>
        <p class="subtitle is-7"><?php echo md_h($subtitle); ?></p>
        <form method="get" action="<?php echo md_h($target); ?>">
            <div class="field has-addons">
                <div class="control is-expanded">
                    <input class="input" type="search" name="qs" placeholder="<?php echo md_h($placeholder); ?>">
                </div>
                <div class="control">
                    <button class="button is-link" type="submit">Buscar</button>
                </div>
            </div>
        </form>
    </div>
    <?php
}

function md_render_footer()
{
    ?>
    </div>
</section>
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

function md_render_stat($label, $value, $hint, $color)
{
    ?>
    <div class="column is-3-desktop is-6-tablet">
        <div class="box medical-stat <?php echo md_h($color); ?>">
            <p class="heading"><?php echo md_h($label); ?></p>
            <p class="title is-3"><?php echo md_h($value); ?></p>
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
            <thead><tr><th>Fecha</th><th>Hora</th><th>Paciente</th><th>Médico</th><th>Estado</th><th>Motivo</th><th></th></tr></thead>
            <tbody>
            <?php if (!count($appointments)) { ?>
                <tr><td colspan="7" class="has-text-centered has-text-grey">No hay citas pendientes en este rango.</td></tr>
            <?php } ?>
            <?php foreach ($appointments as $appointment) { ?>
                <tr>
                    <td><?php echo md_h($appointment["fecha"]); ?></td>
                    <td><?php echo md_h(substr($appointment["hora"], 0, 5)); ?></td>
                    <td><?php echo md_h($appointment["paciente"]); ?></td>
                    <td><?php echo md_h($appointment["medico"]); ?></td>
                    <td><span class="tag <?php echo md_status_class($appointment["estado"]); ?> is-light"><?php echo md_h($appointment["estado"]); ?></span></td>
                    <td><?php echo md_h($appointment["motivo"]); ?></td>
                    <td><a class="button is-small is-link is-light" href="citas_view.php?editid1=<?php echo (int)$appointment["id_cita"]; ?>">Ver</a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
    <?php
}
?>
