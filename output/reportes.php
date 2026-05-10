<?php
require_once("include/dbcommon.php");
require_once("custom/lib/medical_dashboard.php");
md_require_login();
$user = md_current_user();
$where = md_base_where_for_user($user);

$monthStart = md_prepare(date("Y-m-01"));
$today = md_prepare(md_today());

$byStatus = md_fetch_all("select c.estado, count(*) as total from citas c where " . $where . " group by c.estado order by total desc");
$bySpecialty = md_fetch_all("select e.nombre as especialidad, count(*) as total from citas c inner join medicos m on m.id_medico = c.id_medico inner join especialidades e on e.id_especialidad = m.id_especialidad where " . $where . " group by e.nombre order by total desc limit 10");

$monthly = md_lookup("select count(*) from citas c where " . $where . " and c.fecha >= " . $monthStart, 0);
$attendedMonth = md_lookup("select count(*) from citas c where " . $where . " and c.fecha >= " . $monthStart . " and c.estado = 'Atendida'", 0);
$cancelledMonth = md_lookup("select count(*) from citas c where " . $where . " and c.fecha >= " . $monthStart . " and c.estado = 'Cancelada'", 0);
$todayCount = md_lookup("select count(*) from citas c where " . $where . " and c.fecha = " . $today, 0);

md_render_header("Reportes e Indicadores", "reportes");
?>

<div class="medical-hero p-6 mb-6">
    <p class="subtitle is-6 has-text-white-bis mb-2">Análisis de Gestión</p>
    <h1 class="title is-2 has-text-white mb-4">Indicadores Operativos</h1>
    <p class="has-text-white-bis">Visualiza el rendimiento mensual, la distribución de consultas y el estado de la agenda clínica.</p>
</div>

<div class="columns is-multiline mb-6">
    <?php md_render_stat("Citas del Mes", $monthly, "Total registrado", "is-blue", "fa-calendar-alt"); ?>
    <?php md_render_stat("Atendidas", $attendedMonth, "Consultas finalizadas", "is-teal", "fa-check-circle"); ?>
    <?php md_render_stat("Canceladas", $cancelledMonth, "Inasistencias / Cancelaciones", "is-rose", "fa-times-circle"); ?>
    <?php md_render_stat("Agenda de Hoy", $todayCount, "Programadas para hoy", "is-amber", "fa-clock"); ?>
</div>

<div class="columns is-multiline">
    <div class="column is-6">
        <div class="box">
            <h2 class="title is-4 mb-5"><i class="fas fa-chart-pie has-text-grey-light mr-2"></i> Distribución por Estado</h2>
            <div style="height: 300px; position: relative;" class="mb-5">
                <canvas id="statusChart"></canvas>
            </div>
            <table class="table is-fullwidth is-striped is-hoverable medical-table mt-4">
                <thead>
                    <tr><th>Estado</th><th class="has-text-right">Total</th></tr>
                </thead>
                <tbody>
                    <?php foreach ($byStatus as $row) { ?>
                    <tr>
                        <td>
                            <span class="tag <?php echo md_status_class($row["estado"]); ?> is-light">
                                <?php echo md_h($row["estado"]); ?>
                            </span>
                        </td>
                        <td class="has-text-right has-text-weight-bold"><?php echo (int)$row["total"]; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="column is-6">
        <div class="box">
            <h2 class="title is-4 mb-5"><i class="fas fa-chart-bar has-text-grey-light mr-2"></i> Demanda por Especialidad</h2>
            <div style="height: 300px; position: relative;" class="mb-5">
                <canvas id="specialtyChart"></canvas>
            </div>
            <table class="table is-fullwidth is-striped is-hoverable medical-table mt-4">
                <thead>
                    <tr><th>Especialidad</th><th class="has-text-right">Citas</th></tr>
                </thead>
                <tbody>
                    <?php foreach ($bySpecialty as $row) { ?>
                    <tr>
                        <td><?php echo md_h($row["especialidad"]); ?></td>
                        <td class="has-text-right has-text-weight-bold"><?php echo (int)$row["total"]; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Status Chart
    const statusCtx = document.getElementById('statusChart').getContext('2d');
    new Chart(statusCtx, {
        type: 'doughnut',
        data: {
            labels: <?php echo json_encode(array_column($byStatus, 'estado')); ?>,
            datasets: [{
                data: <?php echo json_encode(array_column($byStatus, 'total')); ?>,
                backgroundColor: ['#3b82f6', '#14b8a6', '#f43f5e', '#f59e0b', '#64748b'],
                borderWidth: 0,
                hoverOffset: 10
            }]
        },
        options: {
            maintainAspectRatio: false,
            plugins: {
                legend: { position: 'bottom' }
            },
            cutout: '70%'
        }
    });

    // Specialty Chart
    const specialtyCtx = document.getElementById('specialtyChart').getContext('2d');
    new Chart(specialtyCtx, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode(array_column($bySpecialty, 'especialidad')); ?>,
            datasets: [{
                label: 'Citas',
                data: <?php echo json_encode(array_column($bySpecialty, 'total')); ?>,
                backgroundColor: 'rgba(37, 99, 235, 0.7)',
                borderRadius: 8,
                borderSkipped: false
            }]
        },
        options: {
            maintainAspectRatio: false,
            plugins: {
                legend: { display: false }
            },
            scales: {
                y: { beginAtZero: true, grid: { display: false } },
                x: { grid: { display: false } }
            }
        }
    });
});
</script>

<?php md_render_footer(); ?>
