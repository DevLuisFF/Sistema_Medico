<?php
$dalTablecitas = array();
$dalTablecitas["id_cita"] = array("type"=>3,"varname"=>"id_cita", "name" => "id_cita");
$dalTablecitas["id_paciente"] = array("type"=>3,"varname"=>"id_paciente", "name" => "id_paciente");
$dalTablecitas["id_medico"] = array("type"=>3,"varname"=>"id_medico", "name" => "id_medico");
$dalTablecitas["fecha"] = array("type"=>7,"varname"=>"fecha", "name" => "fecha");
$dalTablecitas["hora"] = array("type"=>134,"varname"=>"hora", "name" => "hora");
$dalTablecitas["estado"] = array("type"=>200,"varname"=>"estado", "name" => "estado");
$dalTablecitas["motivo"] = array("type"=>201,"varname"=>"motivo", "name" => "motivo");
$dalTablecitas["diagnostico"] = array("type"=>201,"varname"=>"diagnostico", "name" => "diagnostico");
$dalTablecitas["tratamiento"] = array("type"=>201,"varname"=>"tratamiento", "name" => "tratamiento");
$dalTablecitas["receta"] = array("type"=>201,"varname"=>"receta", "name" => "receta");
$dalTablecitas["notas"] = array("type"=>201,"varname"=>"notas", "name" => "notas");
$dalTablecitas["created_at"] = array("type"=>135,"varname"=>"created_at", "name" => "created_at");
	$dalTablecitas["id_cita"]["key"]=true;

$dal_info["sistema_medico_at_localhost__citas"] = &$dalTablecitas;
?>