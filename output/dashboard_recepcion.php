<?php
require_once("include/dbcommon.php");
require_once("custom/lib/medical_dashboard.php");
md_require_login();
$user = md_current_user();
$today = md_prepare(md_today());
$tomorrow = md_prepare(date("Y-m-d", strtotime("+1 day")));
$week = md_prepare(date("Y-m-d", strtotime("+7 day")));
$todayAppointments = md_count("citas", "fecha = " . $today . " and estado in ('Pendiente','Confirmada')");
$pending = md_count("citas", "estado = 'Pendiente'");
$patients = md_count("pacientes", "activo = 1");
$doctors = md_count("medicos", "activo = 1");
$upcoming = md_upcoming_appointments($user, 10);
$notifications = md_today_notifications($user);
md_render_header("Dashboard de recepción", "dashboard");
?>
<div class="medical-hero p-6 mb-5">
    <p class="subtitle is-6 has-text-white-bis">Recepción</p>
    <h1 class="title is-2 has-text-white">Panel operativo de citas</h1>
    <p class="has-text-white-bis">Gestiona agenda diaria, pacientes, médicos y confirmaciones desde una vista simple e intuitiva.</p>
</div>
<div class="columns is-multiline">
    <?php md_render_stat("Citas de hoy", $todayAppointments, "Pendientes o confirmadas", "is-blue"); ?>
    <?php md_render_stat("Pendientes", $pending, "Requieren confirmación", "is-amber"); ?>
    <?php md_render_stat("Pacientes activos", $patients, "Registrados en el sistema", "is-teal"); ?>
    <?php md_render_stat("Médicos activos", $doctors, "Disponibles para agenda", "is-rose"); ?>
</div>
<div class="columns">
    <div class="column is-8">
        <div class="box">
            <div class="level"><div><h2 class="title is-4">Próximas citas</h2><p class="subtitle is-6">Agenda priorizada para recepción.</p></div><a class="button is-link is-light" href="citas_list.php">Buscar citas</a></div>
            <?php md_render_appointment_table($upcoming, "recepcion"); ?>
        </div>
    </div>
    <div class="column is-4">
        <div class="box medical-actions">
            <h2 class="title is-4">Acciones rápidas</h2>
            <a class="button is-link" href="citas_add.php">Nueva cita</a>
            <a class="button is-primary is-light" href="pacientes_add.php">Registrar paciente</a>
            <a class="button is-info is-light" href="pacientes_list.php">Buscar paciente</a>
            <a class="button is-warning is-light" href="reportes.php">Ver reportes</a>
        </div>
        <div class="box notification-list">
            <h2 class="title is-5">Notificaciones de hoy</h2>
            <?php if (!count($notifications)) { ?><p class="has-text-grey">No hay alertas pendientes para hoy.</p><?php } ?>
            <?php foreach ($notifications as $notification) { ?>
                <article class="media"><div class="media-content"><strong><?php echo md_h(substr($notification["hora"], 0, 5)); ?></strong> — <?php echo md_h($notification["paciente"]); ?><br><span class="tag <?php echo md_status_class($notification["estado"]); ?> is-light"><?php echo md_h($notification["estado"]); ?></span></div></article>
            <?php } ?>
            <a class="button is-small is-fullwidth is-light mt-3" href="notificaciones.php">Ver todas</a>
        </div>
    </div>
</div>
<?php md_render_footer(); ?>
