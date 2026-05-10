<?php
require_once("include/dbcommon.php");
require_once("custom/lib/medical_dashboard.php");
md_require_login();
$user = md_current_user();
$where = md_base_where_for_user($user);

$today = md_prepare(md_today());

// Stats
$nextAppointment = md_lookup("select min(concat(c.fecha, ' ', c.hora)) from citas c where " . $where . " and c.fecha >= " . $today . " and c.estado in ('Pendiente','Confirmada')", "Sin citas");
$pending = md_lookup("select count(*) from citas c where " . $where . " and c.estado in ('Pendiente','Confirmada')", 0);
$attended = md_lookup("select count(*) from citas c where " . $where . " and c.estado = 'Atendida'", 0);
$recipesCount = md_lookup("select count(*) from citas c where " . $where . " and c.receta is not null and c.receta <> ''", 0);

$upcoming = md_upcoming_appointments($user, 8);
$notifications = md_today_notifications($user);

md_render_header("Mi Dashboard de Salud", "dashboard");
?>

<div class="medical-hero p-6 mb-6">
    <div class="columns is-vcentered">
        <div class="column">
            <p class="subtitle is-6 has-text-white-bis mb-2">Bienvenido(a)</p>
            <h1 class="title is-2 has-text-white mb-4"><?php echo md_h($user["username"]); ?></h1>
            <p class="has-text-white-bis">Consulta tus próximas citas, revisa las recomendaciones de tu médico y mantén el control de tu salud.</p>
        </div>
        <div class="column is-narrow has-text-centered">
            <div class="box has-background-white-ter py-5 px-6" style="border-radius: 1.5rem;">
                <p class="heading has-text-grey">PRÓXIMA CITA</p>
                <p class="title is-4 has-text-link mt-2"><?php echo md_h($nextAppointment); ?></p>
                <i class="fas fa-hand-holding-medical fa-2x has-text-link-light mt-3"></i>
            </div>
        </div>
    </div>
</div>

<div class="columns is-multiline mb-6">
    <?php md_render_stat("Citas pendientes", $pending, "Por atender o confirmar", "is-blue", "fa-clock"); ?>
    <?php md_render_stat("Citas atendidas", $attended, "Tu historial clínico", "is-teal", "fa-history"); ?>
    <?php md_render_stat("Recetas", $recipesCount, "Indicaciones médicas", "is-rose", "fa-capsules"); ?>
    <?php md_render_stat("Estado", "Activo", "Paciente registrado", "is-amber", "fa-check-circle"); ?>
</div>

<div class="columns">
    <div class="column is-8">
        <div class="box">
            <div class="level mb-5">
                <div class="level-left">
                    <div>
                        <h2 class="title is-4">Mis Próximas Citas</h2>
                        <p class="subtitle is-6 has-text-grey">Detalle de tus citas médicas programadas.</p>
                    </div>
                </div>
            </div>

            <?php md_render_appointment_table($upcoming, "cliente"); ?>
        </div>
    </div>

    <div class="column is-4">
        <div class="box medical-actions mb-5">
            <h2 class="title is-4 mb-4">Mis Accesos</h2>
            <a class="button is-link" href="citas_list.php">
                <span class="icon"><i class="fas fa-calendar-alt"></i></span>
                <span>Ver historial de citas</span>
            </a>
            <?php if (isset($user["id_paciente"]) && $user["id_paciente"]) { ?>
            <a class="button is-primary is-light" href="pacientes_view.php?editid1=<?php echo (int)$user["id_paciente"]; ?>">
                <span class="icon"><i class="fas fa-id-card"></i></span>
                <span>Mi ficha de paciente</span>
            </a>
            <?php } ?>
            <a class="button is-info is-light" href="notificaciones.php">
                <span class="icon"><i class="fas fa-bell"></i></span>
                <span>Mis notificaciones</span>
            </a>
        </div>

        <div class="box notification-list">
            <h2 class="title is-5 mb-4">Recordatorios de Hoy</h2>
            <?php if (!count($notifications)) { ?>
                <div class="has-text-centered py-4">
                    <p class="has-text-grey is-size-7">No tienes citas para el día de hoy.</p>
                </div>
            <?php } ?>
            <?php foreach ($notifications as $notification) { ?>
                <article class="media">
                    <div class="media-content">
                        <p class="is-size-7">
                            <strong class="has-text-link"><?php echo md_h(substr($notification["hora"], 0, 5)); ?></strong><br>
                            Con el Dr. <span class="has-text-weight-semibold"><?php echo md_h($notification["medico"]); ?></span>
                        </p>
                    </div>
                </article>
            <?php } ?>
        </div>
    </div>
</div>

<?php md_render_footer(); ?>
