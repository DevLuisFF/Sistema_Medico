<?php
require_once("include/dbcommon.php");
require_once("custom/lib/medical_dashboard.php");
md_require_login();
$user = md_current_user();
$notifications = md_today_notifications($user);
$upcoming = md_upcoming_appointments($user, 20);

md_render_header("Notificaciones y Alertas", "notificaciones");
?>

<div class="columns">
    <div class="column is-8">
        <div class="box">
            <div class="level mb-5">
                <div class="level-left">
                    <div>
                        <h1 class="title is-3 mb-1">Notificaciones de Hoy</h1>
                        <p class="subtitle is-6 has-text-grey">Citas críticas que requieren atención durante el <?php echo md_h(md_today()); ?>.</p>
                    </div>
                </div>
                <div class="level-right">
                    <span class="tag is-link is-light is-medium">
                        <i class="fas fa-bell mr-2"></i> <?php echo count($notifications); ?> alertas
                    </span>
                </div>
            </div>

            <?php if (!count($notifications)) { ?>
                <div class="notification is-success is-light has-text-centered py-6">
                    <span class="icon is-large mb-3">
                        <i class="fas fa-check-circle fa-3x"></i>
                    </span>
                    <p class="is-size-5">¡Todo en orden! No tienes citas críticas pendientes para atender hoy.</p>
                </div>
            <?php } ?>

            <div class="notification-list-full">
                <?php foreach ($notifications as $notification) { ?>
                    <div class="box is-shadowless border-bottom-1 p-4 mb-0" style="border-radius: 0; border-bottom: 1px solid var(--medical-border);">
                        <div class="columns is-mobile is-vcentered">
                            <div class="column is-narrow">
                                <div class="has-text-centered px-3" style="border-right: 2px solid var(--medical-primary);">
                                    <p class="is-size-5 has-text-weight-bold"><?php echo md_h(substr($notification["hora"], 0, 5)); ?></p>
                                    <p class="is-size-7 has-text-grey uppercase">Hora</p>
                                </div>
                            </div>
                            <div class="column">
                                <p class="is-size-6 mb-1">
                                    <strong>Paciente:</strong> <?php echo md_h($notification["paciente"]); ?>
                                </p>
                                <p class="is-size-7 has-text-grey">
                                    <i class="fas fa-user-md mr-1"></i> Médico: <?php echo md_h($notification["medico"]); ?>
                                    <span class="mx-2">|</span>
                                    <i class="fas fa-comment-medical mr-1"></i> Motivo: <?php echo md_h($notification["motivo"]); ?>
                                </p>
                                <div class="mt-2">
                                    <span class="tag <?php echo md_status_class($notification["estado"]); ?> is-light">
                                        <?php echo md_h($notification["estado"]); ?>
                                    </span>
                                </div>
                            </div>
                            <div class="column is-narrow">
                                <a class="button is-link is-outlined is-small" href="citas_view.php?editid1=<?php echo (int)$notification["id_cita"]; ?>">
                                    Gestionar
                                </a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <div class="column is-4">
        <div class="box">
            <h2 class="title is-4 mb-4"><i class="fas fa-calendar-alt has-text-grey-light mr-2"></i> Próximas Citas</h2>
            <p class="is-size-7 has-text-grey mb-4">Recordatorio de los compromisos agendados para los siguientes días.</p>

            <?php if (!count($upcoming)) { ?>
                <p class="has-text-grey has-text-centered py-4">No hay citas próximas programadas.</p>
            <?php } ?>

            <?php foreach ($upcoming as $appointment) { ?>
                <div class="mb-5 pb-4" style="border-bottom: 1px dashed var(--medical-border);">
                    <div class="level is-mobile mb-2">
                        <div class="level-left">
                            <span class="tag <?php echo md_status_class($appointment["estado"]); ?> is-light is-small">
                                <?php echo md_h($appointment["estado"]); ?>
                            </span>
                        </div>
                        <div class="level-right">
                            <span class="is-size-7 has-text-grey"><?php echo md_h($appointment["fecha"]); ?></span>
                        </div>
                    </div>
                    <p class="has-text-weight-semibold is-size-6 mb-1"><?php echo md_h(substr($appointment["hora"], 0, 5)); ?> - <?php echo md_h($appointment["paciente"]); ?></p>
                    <p class="is-size-7 has-text-grey">
                        <i class="fas fa-hospital-user mr-1"></i> <?php echo md_h($appointment["especialidad"]); ?>
                    </p>
                </div>
            <?php } ?>

            <a href="citas_list.php" class="button is-fullwidth is-white has-text-link is-size-7">Ver agenda completa</a>
        </div>
    </div>
</div>

<style>
.border-bottom-1:last-child {
    border-bottom: 0 !important;
}
</style>

<?php md_render_footer(); ?>
