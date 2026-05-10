<?php
require_once("include/dbcommon.php");
require_once("custom/lib/medical_dashboard.php");
md_require_login();
$user = md_current_user();

$today = md_prepare(md_today());

// Stats
$todayAppointments = md_count("citas", "fecha = " . $today . " and estado in ('Pendiente','Confirmada')");
$pending = md_count("citas", "estado = 'Pendiente'");
$patients = md_count("pacientes", "activo = 1");
$doctors = md_count("medicos", "activo = 1");

$upcoming = md_upcoming_appointments($user, 10);
$notifications = md_today_notifications($user);

md_render_header("Dashboard de Recepción", "dashboard");
?>

<div class="medical-hero p-6 mb-6">
    <div class="columns is-vcentered">
        <div class="column">
            <p class="subtitle is-6 has-text-white-bis mb-2">Panel de Control</p>
            <h1 class="title is-2 has-text-white mb-4">Bienvenida, Recepción</h1>
            <p class="has-text-white-bis">Gestiona eficientemente la agenda diaria, médicos y pacientes desde una vista centralizada y moderna.</p>
        </div>
        <div class="column is-narrow has-text-centered">
            <div class="is-flex is-flex-direction-column">
                <span class="is-size-7 has-text-white-bis uppercase has-text-weight-bold">HOY</span>
                <span class="is-size-3 has-text-white has-text-weight-bold"><?php echo date("d"); ?></span>
                <span class="is-size-6 has-text-white-bis uppercase"><?php echo date("M"); ?></span>
            </div>
        </div>
    </div>
</div>

<div class="columns is-multiline mb-6">
    <?php md_render_stat("Citas de hoy", $todayAppointments, "Pendientes o confirmadas", "is-blue", "fa-calendar-check"); ?>
    <?php md_render_stat("Pendientes", $pending, "Requieren seguimiento", "is-amber", "fa-clock"); ?>
    <?php md_render_stat("Pacientes", $patients, "Registrados activos", "is-teal", "fa-user-injured"); ?>
    <?php md_render_stat("Médicos", $doctors, "En catálogo", "is-rose", "fa-user-md"); ?>
</div>

<div class="columns">
    <div class="column is-8">
        <div class="box">
            <div class="level mb-5">
                <div class="level-left">
                    <div>
                        <h2 class="title is-4">Próximas Citas</h2>
                        <p class="subtitle is-6 has-text-grey">Agenda priorizada para hoy y próximos días.</p>
                    </div>
                </div>
                <div class="level-right">
                    <div class="buttons">
                        <a class="button is-link is-light" href="citas_list.php">
                            <i class="fas fa-list mr-2"></i> Ver Todo
                        </a>
                        <a class="button is-primary" href="citas_add.php">
                            <i class="fas fa-plus mr-2"></i> Nueva Cita
                        </a>
                    </div>
                </div>
            </div>

            <?php md_render_appointment_table($upcoming, "recepcion"); ?>
        </div>
    </div>

    <div class="column is-4">
        <div class="box medical-actions mb-5">
            <h2 class="title is-4 mb-4">Acciones Rápidas</h2>
            <a class="button is-link" href="citas_add.php">
                <span class="icon"><i class="fas fa-calendar-plus"></i></span>
                <span>Agendar nueva cita</span>
            </a>
            <a class="button is-primary is-light" href="pacientes_add.php">
                <span class="icon"><i class="fas fa-user-plus"></i></span>
                <span>Registrar paciente</span>
            </a>
            <a class="button is-info is-light" href="pacientes_list.php">
                <span class="icon"><i class="fas fa-search"></i></span>
                <span>Buscar expediente</span>
            </a>
            <a class="button is-warning is-light" href="reportes.php">
                <span class="icon"><i class="fas fa-file-alt"></i></span>
                <span>Generar reportes</span>
            </a>
        </div>

        <div class="box notification-list">
            <h2 class="title is-5 mb-4">Alertas de Hoy</h2>
            <?php if (!count($notifications)) { ?>
                <div class="has-text-centered py-4">
                    <span class="icon is-large has-text-grey-lighter mb-2">
                        <i class="fas fa-bell-slash fa-2x"></i>
                    </span>
                    <p class="has-text-grey">No hay alertas pendientes para hoy.</p>
                </div>
            <?php } ?>
            <?php foreach ($notifications as $notification) { ?>
                <article class="media">
                    <div class="media-content">
                        <div class="content">
                            <p>
                                <strong class="is-size-6"><?php echo md_h(substr($notification["hora"], 0, 5)); ?></strong>
                                <small class="ml-2 has-text-grey"><?php echo md_h($notification["paciente"]); ?></small>
                                <br>
                                <span class="tag <?php echo md_status_class($notification["estado"]); ?> is-light mt-1">
                                    <?php echo md_h($notification["estado"]); ?>
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="media-right">
                        <a href="citas_view.php?editid1=<?php echo (int)$notification["id_cita"]; ?>" class="button is-small is-rounded is-white">
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </div>
                </article>
            <?php } ?>
            <a class="button is-small is-fullwidth is-light mt-4" href="notificaciones.php">Ver todas las notificaciones</a>
        </div>
    </div>
</div>

<?php md_render_footer(); ?>
