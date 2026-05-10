<?php
require_once("include/dbcommon.php");
require_once("custom/lib/medical_dashboard.php");
md_require_login();
$user = md_current_user();

// Staff only view
if ($user["tipo_usuario"] != "recepcion" && $user["tipo_usuario"] != "admin") {
    HeaderRedirect("dashboard");
    exit();
}

$medicos = md_fetch_all("select m.*, e.nombre as especialidad
    from medicos m
    inner join especialidades e on e.id_especialidad = m.id_especialidad
    where m.activo = 1
    order by m.apellido asc, m.nombre asc");

md_render_header("Cuerpo Médico", "medicos");
?>

<div class="level mb-5">
    <div class="level-left">
        <div>
            <h1 class="title is-3 mb-1">Cuerpo Médico</h1>
            <p class="subtitle is-6 has-text-grey">Directorio de profesionales y especialidades.</p>
        </div>
    </div>
    <div class="level-right">
        <a href="medicos_add.php" class="button is-primary">
            <i class="fas fa-plus mr-2"></i> Nuevo Médico
        </a>
    </div>
</div>

<div class="columns is-multiline">
    <?php foreach ($medicos as $m) { ?>
    <div class="column is-4">
        <div class="box medical-card h-100">
            <div class="is-flex is-align-items-center mb-4">
                <figure class="image is-48x48 mr-3">
                    <img class="is-rounded" src="https://ui-avatars.com/api/?name=<?php echo urlencode($m["nombre"]." ".$m["apellido"]); ?>&background=random&color=fff">
                </figure>
                <div>
                    <h3 class="title is-5 mb-0"><?php echo md_h($m["nombre"] . " " . $m["apellido"]); ?></h3>
                    <span class="tag is-link is-light is-small"><?php echo md_h($m["especialidad"]); ?></span>
                </div>
            </div>
            <div class="content is-size-7 has-text-grey">
                <p class="mb-1"><i class="fas fa-envelope mr-2"></i> <?php echo md_h($m["email"]); ?></p>
                <p class="mb-0"><i class="fas fa-phone mr-2"></i> <?php echo md_h($m["telefono"]); ?></p>
            </div>
            <hr class="my-4">
            <div class="buttons are-small">
                <a class="button is-link is-light is-fullwidth" href="medicos_view.php?editid1=<?php echo (int)$m["id_medico"]; ?>">Ver Perfil</a>
                <a class="button is-info is-light is-fullwidth" href="medicos_edit.php?editid1=<?php echo (int)$m["id_medico"]; ?>">Editar</a>
            </div>
        </div>
    </div>
    <?php } ?>
</div>

<?php md_render_footer(); ?>
