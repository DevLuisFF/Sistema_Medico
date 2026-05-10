<?php
require_once("include/dbcommon.php");
require_once("custom/lib/medical_dashboard.php");
md_require_login();
$user = md_current_user();
$where = md_base_where_for_user($user);
$today = md_prepare(md_today());
$todayAppointments = md_lookup("select count(*) from citas c where " . $where . " and c.fecha = " . $today . " and c.estado in ('Pendiente','Confirmada')", 0);
$attended = md_lookup("select count(*) from citas c where " . $where . " and c.estado = 'Atendida'", 0);
$pending = md_lookup("select count(*) from citas c where " . $where . " and c.estado in ('Pendiente','Confirmada')", 0);
$recipes = md_lookup("select count(*) from citas c where " . $where . " and c.receta is not null and c.receta <> ''", 0);
$upcoming = md_upcoming_appointments($user, 12);
$notifications = md_today_notifications($user);
md_render_header("Dashboard médico", "dashboard");
?>
<div class="medical-hero p-6 mb-5">
    <p class="subtitle is-6 has-text-white-bis">Médico</p>
    <h1 class="title is-2 has-text-white">Consultas y seguimiento clínico</h1>
    <p class="has-text-white-bis">Revisa tus citas de hoy, consulta expedientes y registra diagnóstico, tratamiento, receta y notas.</p>
</div>
<div class="columns is-multiline">
    <?php md_render_stat("Citas de hoy", $todayAppointments, "Pacientes por atender", "is-blue"); ?>
    <?php md_render_stat("Pendientes", $pending, "Agenda clínica abierta", "is-amber"); ?>
    <?php md_render_stat("Atendidas", $attended, "Histórico de consultas", "is-teal"); ?>
    <?php md_render_stat("Recetas", $recipes, "Citas con receta registrada", "is-rose"); ?>
</div>
<div class="columns">
    <div class="column is-9">
        <div class="box">
            <div class="level"><div><h2 class="title is-4">Mi agenda</h2><p class="subtitle is-6">Citas pendientes ordenadas por fecha y hora.</p></div><a class="button is-link is-light" href="citas_list.php">Abrir listado</a></div>
            <?php md_render_appointment_table($upcoming, "medico"); ?>
        </div>
    </div>
    <div class="column is-3">
        <div class="box medical-actions">
            <h2 class="title is-4">Herramientas</h2>
            <a class="button is-link" href="citas_list.php">Atender cita</a>
            <a class="button is-primary is-light" href="pacientes_list.php">Buscar expediente</a>
            <a class="button is-info is-light" href="reportes.php">Reportes clínicos</a>
        </div>
        <div class="box notification-list"><h2 class="title is-5">Alertas</h2><?php if (!count($notifications)) { ?><p class="has-text-grey">Sin citas pendientes hoy.</p><?php } ?><?php foreach ($notifications as $notification) { ?><article class="media"><div class="media-content"><strong><?php echo md_h(substr($notification["hora"], 0, 5)); ?></strong><br><?php echo md_h($notification["paciente"]); ?></div></article><?php } ?></div>
    </div>
</div>
<?php md_render_footer(); ?>
