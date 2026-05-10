<?php
require_once("include/dbcommon.php");
require_once("custom/lib/medical_dashboard.php");
md_require_login();
$user = md_current_user();
$where_base = md_base_where_for_user($user);

$estado = isset($_GET["estado"]) ? (string)$_GET["estado"] : "";
$where = $where_base;
if ($estado !== "") {
    $where .= " and c.estado = " . md_prepare($estado);
}

$citas = md_fetch_all("select c.*, concat(p.nombre, ' ', p.apellido) as paciente, concat(m.nombre, ' ', m.apellido) as medico, e.nombre as especialidad
    from citas c
    inner join pacientes p on p.id_paciente = c.id_paciente
    inner join medicos m on m.id_medico = c.id_medico
    inner join especialidades e on e.id_especialidad = m.id_especialidad
    where " . $where . "
    order by c.fecha desc, c.hora desc limit 100");

md_render_header("Listado de Citas", "citas");
?>

<div class="level mb-5">
    <div class="level-left">
        <div>
            <h1 class="title is-3 mb-1">Agenda de Citas</h1>
            <p class="subtitle is-6 has-text-grey">Listado completo y filtros de atención médica.</p>
        </div>
    </div>
    <div class="level-right">
        <?php if ($user["tipo_usuario"] == "recepcion" || $user["tipo_usuario"] == "admin") { ?>
        <a href="citas_add.php" class="button is-primary">
            <i class="fas fa-plus mr-2"></i> Nueva Cita
        </a>
        <?php } ?>
    </div>
</div>

<div class="box mb-6">
    <div class="tabs is-toggle is-fullwidth">
        <ul>
            <li class="<?php echo $estado === "" ? "is-active" : ""; ?>">
                <a href="citas_list_bulma.php">
                    <span class="icon is-small"><i class="fas fa-list"></i></span>
                    <span>Todas</span>
                </a>
            </li>
            <li class="<?php echo $estado === "Pendiente" ? "is-active" : ""; ?>">
                <a href="citas_list_bulma.php?estado=Pendiente">
                    <span class="icon is-small"><i class="fas fa-clock"></i></span>
                    <span>Pendientes</span>
                </a>
            </li>
            <li class="<?php echo $estado === "Confirmada" ? "is-active" : ""; ?>">
                <a href="citas_list_bulma.php?estado=Confirmada">
                    <span class="icon is-small"><i class="fas fa-check-circle"></i></span>
                    <span>Confirmadas</span>
                </a>
            </li>
            <li class="<?php echo $estado === "Atendida" ? "is-active" : ""; ?>">
                <a href="citas_list_bulma.php?estado=Atendida">
                    <span class="icon is-small"><i class="fas fa-user-check"></i></span>
                    <span>Atendidas</span>
                </a>
            </li>
            <li class="<?php echo $estado === "Cancelada" ? "is-active" : ""; ?>">
                <a href="citas_list_bulma.php?estado=Cancelada">
                    <span class="icon is-small"><i class="fas fa-times-circle"></i></span>
                    <span>Canceladas</span>
                </a>
            </li>
        </ul>
    </div>
</div>

<div class="box">
    <?php md_render_appointment_table($citas, $user["tipo_usuario"]); ?>
</div>

<?php md_render_footer(); ?>
