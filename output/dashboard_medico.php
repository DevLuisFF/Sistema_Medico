<?php
require_once("include/dbcommon.php");
require_once("custom/lib/medical_dashboard.php");
md_require_login();
$user = md_current_user();
$where = md_base_where_for_user($user);

$today = md_prepare(md_today());

// Stats
$todayAppointments = md_lookup("select count(*) from citas c where " . $where . " and c.fecha = " . $today . " and c.estado in ('Pendiente','Confirmada')", 0);
$attended = md_lookup("select count(*) from citas c where " . $where . " and c.estado = 'Atendida'", 0);
$pendingTotal = md_lookup("select count(*) from citas c where " . $where . " and c.estado in ('Pendiente','Confirmada')", 0);
$recipes = md_lookup("select count(*) from citas c where " . $where . " and c.receta is not null and c.receta <> ''", 0);

$upcoming = md_upcoming_appointments($user, 12);
$notifications = md_today_notifications($user);

md_render_header("Dashboard Médico", "dashboard");
?>

<div class="medical-hero p-6 mb-6">
    <div class="columns is-vcentered">
        <div class="column">
            <p class="subtitle is-6 has-text-white-bis mb-2">Panel Clínico</p>
            <h1 class="title is-2 has-text-white mb-4">Dr. <?php echo md_h($user["username"]); ?></h1>
            <p class="has-text-white-bis">Consulta tu agenda, revisa expedientes de pacientes y registra el seguimiento clínico de tus consultas.</p>
        </div>
        <div class="column is-narrow">
            <figure class="image is-128x128">
                <img class="is-rounded" src="https://ui-avatars.com/api/?name=<?php echo urlencode($user["username"]); ?>&background=fff&color=2563eb&size=128" style="border: 4px solid rgba(255,255,255,0.3);">
            </figure>
        </div>
    </div>
</div>

<div class="columns is-multiline mb-6">
    <?php md_render_stat("Citas para hoy", $todayAppointments, "Pendientes de atender", "is-blue", "fa-user-clock"); ?>
    <?php md_render_stat("Total pendientes", $pendingTotal, "En tu agenda clínica", "is-amber", "fa-calendar-alt"); ?>
    <?php md_render_stat("Consultas atendidas", $attended, "Historial acumulado", "is-teal", "fa-check-double"); ?>
    <?php md_render_stat("Recetas emitidas", $recipes, "Seguimiento farmacológico", "is-rose", "fa-prescription"); ?>
</div>

<div class="columns">
    <div class="column is-9">
        <div class="box">
            <div class="level mb-5">
                <div class="level-left">
                    <div>
                        <h2 class="title is-4">Mi Agenda Clínica</h2>
                        <p class="subtitle is-6 has-text-grey">Listado de pacientes programados para consulta.</p>
                    </div>
                </div>
                <div class="level-right">
                    <a class="button is-link is-light" href="citas_list.php">
                        <i class="fas fa-external-link-alt mr-2"></i> Abrir Listado Completo
                    </a>
                </div>
            </div>

            <?php md_render_appointment_table($upcoming, "medico"); ?>
        </div>
    </div>

    <div class="column is-3">
        <div class="box medical-actions mb-5">
            <h2 class="title is-4 mb-4">Herramientas</h2>
            <a class="button is-link" href="citas_list.php">
                <span class="icon"><i class="fas fa-stethoscope"></i></span>
                <span>Atender consulta</span>
            </a>
            <a class="button is-primary is-light" href="pacientes_list.php">
                <span class="icon"><i class="fas fa-folder-open"></i></span>
                <span>Buscar expediente</span>
            </a>
            <a class="button is-info is-light" href="reportes.php">
                <span class="icon"><i class="fas fa-chart-line"></i></span>
                <span>Rendimiento clínico</span>
            </a>
        </div>

        <div class="box notification-list">
            <h2 class="title is-5 mb-4">Alertas</h2>
            <?php if (!count($notifications)) { ?>
                <div class="has-text-centered py-4">
                    <p class="has-text-grey is-size-7">No hay citas críticas para hoy.</p>
                </div>
            <?php } ?>
            <?php foreach ($notifications as $notification) { ?>
                <article class="media">
                    <div class="media-content">
                        <p class="is-size-7">
                            <strong class="has-text-link"><?php echo md_h(substr($notification["hora"], 0, 5)); ?></strong><br>
                            <span class="has-text-weight-semibold"><?php echo md_h($notification["paciente"]); ?></span>
                        </p>
                    </div>
                    <div class="media-right">
                        <a href="citas_view.php?editid1=<?php echo (int)$notification["id_cita"]; ?>" class="button is-small is-white">
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </div>
                </article>
            <?php } ?>
        </div>
    </div>
</div>

<?php md_render_footer(); ?>
