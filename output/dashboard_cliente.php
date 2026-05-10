<?php
require_once("include/dbcommon.php");
require_once("custom/lib/medical_dashboard.php");
md_require_login();
md_require_role(array("admin", "cliente"));
$user = md_current_user();
$where = md_base_where_for_user($user);
$today = md_prepare(md_today());
$next = md_lookup("select min(concat(c.fecha, ' ', c.hora)) from citas c where " . $where . " and c.fecha >= " . $today . " and c.estado in ('Pendiente','Confirmada')", "Sin cita programada");
$pending = md_lookup("select count(*) from citas c where " . $where . " and c.estado in ('Pendiente','Confirmada')", 0);
$attended = md_lookup("select count(*) from citas c where " . $where . " and c.estado = 'Atendida'", 0);
$cancelled = md_lookup("select count(*) from citas c where " . $where . " and c.estado = 'Cancelada'", 0);
$upcoming = md_upcoming_appointments($user, 8);
$notifications = md_today_notifications($user);
md_render_header("Dashboard del paciente", "dashboard");
?>
<div class="medical-hero p-6 mb-5">
    <p class="subtitle is-6 has-text-white-bis">Paciente</p>
    <h1 class="title is-2 has-text-white">Mis citas médicas</h1>
    <p class="has-text-white-bis">Consulta tus próximas citas, estado de atención, médico asignado y recomendaciones registradas.</p>
</div>
<div class="columns is-multiline">
    <?php md_render_stat("Próxima cita", $next, "Fecha y hora programada", "is-blue"); ?>
    <?php md_render_stat("Pendientes", $pending, "Por confirmar o atender", "is-amber"); ?>
    <?php md_render_stat("Atendidas", $attended, "Historial disponible", "is-teal"); ?>
    <?php md_render_stat("Canceladas", $cancelled, "No activas", "is-rose"); ?>
</div>
<div class="columns">
    <div class="column is-8">
        <div class="box"><h2 class="title is-4">Mis próximas citas</h2><?php md_render_appointment_table($upcoming, "cliente"); ?></div>
    </div>
    <div class="column is-4">
        <div class="box medical-actions"><h2 class="title is-4">Accesos</h2><a class="button is-link" href="citas_list.php">Ver mis citas</a><?php if ($user["id_paciente"]) { ?><a class="button is-primary is-light" href="pacientes_view.php?editid1=<?php echo (int)$user["id_paciente"]; ?>">Mi ficha</a><?php } ?><a class="button is-info is-light" href="notificaciones.php">Notificaciones</a></div>
        <?php md_render_search_panel("Buscar en mis citas", "Filtra tus citas por médico, especialidad o estado.", "citas_list.php", "Médico, motivo o estado"); ?>
        <div class="box notification-list"><h2 class="title is-5">Para hoy</h2><?php if (!count($notifications)) { ?><p class="has-text-grey">No tienes citas pendientes hoy.</p><?php } ?><?php foreach ($notifications as $notification) { ?><article class="media"><div class="media-content"><strong><?php echo md_h(substr($notification["hora"], 0, 5)); ?></strong><br><?php echo md_h($notification["medico"]); ?></div></article><?php } ?></div>
    </div>
</div>
<?php md_render_footer(); ?>
