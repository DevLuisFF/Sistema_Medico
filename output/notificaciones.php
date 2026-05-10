<?php
require_once("include/dbcommon.php");
require_once("custom/lib/medical_dashboard.php");
md_require_login();
$user = md_current_user();
$notifications = md_today_notifications($user);
$upcoming = md_upcoming_appointments($user, 20);
md_render_header("Notificaciones", "notificaciones");
?>
<div class="columns">
    <div class="column is-8">
        <div class="box notification-list">
            <h1 class="title is-3">Notificaciones de hoy</h1>
            <p class="subtitle is-6">Citas pendientes o confirmadas que requieren atención durante <?php echo md_h(md_today()); ?>.</p>
            <?php if (!count($notifications)) { ?>
                <div class="notification is-success is-light">No tienes citas pendientes de atender hoy.</div>
            <?php } ?>
            <?php foreach ($notifications as $notification) { ?>
                <article class="media">
                    <div class="media-content">
                        <p><strong><?php echo md_h(substr($notification["hora"], 0, 5)); ?></strong> — <?php echo md_h($notification["paciente"]); ?></p>
                        <p class="is-size-7 has-text-grey">Médico: <?php echo md_h($notification["medico"]); ?> · Motivo: <?php echo md_h($notification["motivo"]); ?></p>
                    </div>
                    <div class="media-right"><a class="button is-small is-link is-light" href="citas_view.php?editid1=<?php echo (int)$notification["id_cita"]; ?>">Abrir</a></div>
                </article>
            <?php } ?>
        </div>
    </div>
    <div class="column is-4">
        <div class="box">
            <h2 class="title is-4">Próximas alertas</h2>
            <?php if (!count($upcoming)) { ?><p class="has-text-grey">No hay citas próximas.</p><?php } ?>
            <?php foreach ($upcoming as $appointment) { ?>
                <div class="mb-4">
                    <span class="tag <?php echo md_status_class($appointment["estado"]); ?> is-light"><?php echo md_h($appointment["estado"]); ?></span>
                    <p class="has-text-weight-semibold mt-2"><?php echo md_h($appointment["fecha"]); ?> <?php echo md_h(substr($appointment["hora"], 0, 5)); ?></p>
                    <p class="is-size-7 has-text-grey"><?php echo md_h($appointment["paciente"]); ?> con <?php echo md_h($appointment["medico"]); ?></p>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php md_render_footer(); ?>
