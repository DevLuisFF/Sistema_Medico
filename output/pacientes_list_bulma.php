<?php
require_once("include/dbcommon.php");
require_once("custom/lib/medical_dashboard.php");
md_require_login();
$user = md_current_user();

// Staff only view
if ($user["tipo_usuario"] != "recepcion" && $user["tipo_usuario"] != "admin" && $user["tipo_usuario"] != "medico") {
    HeaderRedirect("dashboard");
    exit();
}

$pacientes = md_fetch_all("select * from pacientes where activo = 1 order by apellido asc, nombre asc limit 100");

md_render_header("Listado de Pacientes", "pacientes");
?>

<div class="level mb-5">
    <div class="level-left">
        <div>
            <h1 class="title is-3 mb-1">Directorio de Pacientes</h1>
            <p class="subtitle is-6 has-text-grey">Gestión de expedientes y datos de contacto.</p>
        </div>
    </div>
    <div class="level-right">
        <?php if ($user["tipo_usuario"] == "recepcion" || $user["tipo_usuario"] == "admin") { ?>
        <a href="pacientes_add.php" class="button is-primary">
            <i class="fas fa-user-plus mr-2"></i> Nuevo Paciente
        </a>
        <?php } ?>
    </div>
</div>

<div class="box">
    <div class="table-container">
        <table class="table is-fullwidth is-hoverable medical-table">
            <thead>
                <tr>
                    <th>Nombre Completo</th>
                    <th><i class="fas fa-envelope mr-1"></i> Email</th>
                    <th><i class="fas fa-phone mr-1"></i> Teléfono</th>
                    <th><i class="fas fa-calendar mr-1"></i> Nacimiento</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <?php if (!count($pacientes)) { ?>
                <tr><td colspan="5" class="has-text-centered has-text-grey py-6">No hay pacientes registrados.</td></tr>
            <?php } ?>
            <?php foreach ($pacientes as $p) { ?>
                <tr>
                    <td class="has-text-weight-semibold"><?php echo md_h($p["nombre"] . " " . $p["apellido"]); ?></td>
                    <td><?php echo md_h($p["email"]); ?></td>
                    <td><?php echo md_h($p["telefono"]); ?></td>
                    <td><span class="tag is-white"><?php echo md_h($p["fecha_nacimiento"]); ?></span></td>
                    <td class="has-text-right">
                        <div class="buttons are-small is-right">
                            <a class="button is-link is-light" href="pacientes_view.php?editid1=<?php echo (int)$p["id_paciente"]; ?>">
                                <i class="fas fa-folder-open mr-1"></i> Expediente
                            </a>
                            <?php if ($user["tipo_usuario"] == "recepcion" || $user["tipo_usuario"] == "admin") { ?>
                            <a class="button is-info is-light" href="pacientes_edit.php?editid1=<?php echo (int)$p["id_paciente"]; ?>">
                                <i class="fas fa-edit mr-1"></i> Editar
                            </a>
                            <?php } ?>
                        </div>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<?php md_render_footer(); ?>
