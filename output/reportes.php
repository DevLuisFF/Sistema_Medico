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
md_render_header("Reportes", "reportes");
?>
<div class="medical-hero p-6 mb-5">
    <p class="subtitle is-6 has-text-white-bis">Reportes</p>
    <h1 class="title is-2 has-text-white">Indicadores de gestión médica</h1>
    <p class="has-text-white-bis">Consulta métricas operativas por estado, especialidad y rendimiento mensual.</p>
</div>
<div class="columns is-multiline">
    <?php md_render_stat("Citas del mes", $monthly, "Desde el primer día del mes", "is-blue"); ?>
    <?php md_render_stat("Atendidas", $attendedMonth, "Consultas finalizadas", "is-teal"); ?>
    <?php md_render_stat("Canceladas", $cancelledMonth, "Cancelaciones del mes", "is-rose"); ?>
    <?php md_render_stat("Hoy", $todayCount, "Total programado", "is-amber"); ?>
</div>
<div class="columns">
    <div class="column is-6">
        <div class="box">
            <h2 class="title is-4">Citas por estado</h2>
            <table class="table is-fullwidth medical-table"><thead><tr><th>Estado</th><th>Total</th></tr></thead><tbody>
            <?php foreach ($byStatus as $row) { ?><tr><td><span class="tag <?php echo md_status_class($row["estado"]); ?> is-light"><?php echo md_h($row["estado"]); ?></span></td><td><?php echo (int)$row["total"]; ?></td></tr><?php } ?>
            </tbody></table>
        </div>
    </div>
    <div class="column is-6">
        <div class="box">
            <h2 class="title is-4">Demanda por especialidad</h2>
            <table class="table is-fullwidth medical-table"><thead><tr><th>Especialidad</th><th>Citas</th></tr></thead><tbody>
            <?php foreach ($bySpecialty as $row) { ?><tr><td><?php echo md_h($row["especialidad"]); ?></td><td><?php echo (int)$row["total"]; ?></td></tr><?php } ?>
            </tbody></table>
        </div>
    </div>
</div>
<?php md_render_footer(); ?>
