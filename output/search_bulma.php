<?php
require_once("include/dbcommon.php");
require_once("custom/lib/medical_dashboard.php");
md_require_login();
$user = md_current_user();

$q = isset($_GET["q"]) ? (string)$_GET["q"] : "";
$results_citas = array();
$results_pacientes = array();

if ($q !== "") {
    $sq = md_prepare("%" . $q . "%");
    $where_user = md_base_where_for_user($user);

    // Search Appointments
    $results_citas = md_fetch_all("select c.*, concat(p.nombre, ' ', p.apellido) as paciente, concat(m.nombre, ' ', m.apellido) as medico
        from citas c
        inner join pacientes p on p.id_paciente = c.id_paciente
        inner join medicos m on m.id_medico = c.id_medico
        where (" . $where_user . ") and (p.nombre like " . $sq . " or p.apellido like " . $sq . " or m.nombre like " . $sq . " or c.motivo like " . $sq . ")
        order by c.fecha desc limit 20");

    // Search Patients (only for staff)
    if ($user["tipo_usuario"] == "recepcion" || $user["tipo_usuario"] == "admin") {
        $results_pacientes = md_fetch_all("select * from pacientes where nombre like " . $sq . " or apellido like " . $sq . " or email like " . $sq . " or telefono like " . $sq . " limit 20");
    }
}

md_render_header("Búsqueda Global", "");
?>

<div class="box mb-6">
    <form action="search_bulma.php" method="GET">
        <div class="field has-addons">
            <div class="control is-expanded has-icons-left">
                <input class="input is-large" type="text" name="q" value="<?php echo md_h($q); ?>" placeholder="Buscar pacientes, médicos, motivos de cita...">
                <span class="icon is-medium is-left">
                    <i class="fas fa-search"></i>
                </span>
            </div>
            <div class="control">
                <button type="submit" class="button is-link is-large">Buscar</button>
            </div>
        </div>
    </form>
</div>

<?php if ($q !== "") { ?>
    <h2 class="title is-4 mb-5">Resultados para "<?php echo md_h($q); ?>"</h2>

    <div class="columns is-multiline">
        <div class="column is-12">
            <div class="box">
                <h3 class="title is-5 mb-4"><i class="fas fa-calendar-alt mr-2 has-text-link"></i> Citas Encontradas (<?php echo count($results_citas); ?>)</h3>
                <?php md_render_appointment_table($results_citas, $user["tipo_usuario"]); ?>
            </div>
        </div>

        <?php if ($user["tipo_usuario"] == "recepcion" || $user["tipo_usuario"] == "admin") { ?>
        <div class="column is-12">
            <div class="box">
                <h3 class="title is-5 mb-4"><i class="fas fa-user-injured mr-2 has-text-primary"></i> Pacientes Encontrados (<?php echo count($results_pacientes); ?>)</h3>
                <div class="table-container">
                    <table class="table is-fullwidth is-hoverable medical-table">
                        <thead>
                            <tr><th>Nombre completo</th><th>Email</th><th>Teléfono</th><th>Estado</th><th></th></tr>
                        </thead>
                        <tbody>
                            <?php if (!count($results_pacientes)) { ?>
                                <tr><td colspan="5" class="has-text-centered has-text-grey py-4">No se encontraron pacientes.</td></tr>
                            <?php } ?>
                            <?php foreach ($results_pacientes as $p) { ?>
                            <tr>
                                <td class="has-text-weight-semibold"><?php echo md_h($p["nombre"] . " " . $p["apellido"]); ?></td>
                                <td><?php echo md_h($p["email"]); ?></td>
                                <td><?php echo md_h($p["telefono"]); ?></td>
                                <td><span class="tag <?php echo $p["activo"] ? "is-success" : "is-danger"; ?> is-light"><?php echo $p["activo"] ? "Activo" : "Inactivo"; ?></span></td>
                                <td class="has-text-right">
                                    <a class="button is-small is-primary is-light" href="pacientes_view.php?editid1=<?php echo (int)$p["id_paciente"]; ?>">Expediente</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
<?php } else { ?>
    <div class="has-text-centered py-6">
        <span class="icon is-large has-text-grey-lighter mb-4">
            <i class="fas fa-search-plus fa-4x"></i>
        </span>
        <p class="is-size-5 has-text-grey">Ingresa un término de búsqueda para comenzar.</p>
    </div>
<?php } ?>

<?php md_render_footer(); ?>
