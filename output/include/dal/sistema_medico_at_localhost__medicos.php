<?php
$dalTablemedicos = array();
$dalTablemedicos["id_medico"] = array("type"=>3,"varname"=>"id_medico", "name" => "id_medico");
$dalTablemedicos["nombre"] = array("type"=>200,"varname"=>"nombre", "name" => "nombre");
$dalTablemedicos["apellido"] = array("type"=>200,"varname"=>"apellido", "name" => "apellido");
$dalTablemedicos["telefono"] = array("type"=>200,"varname"=>"telefono", "name" => "telefono");
$dalTablemedicos["email"] = array("type"=>200,"varname"=>"email", "name" => "email");
$dalTablemedicos["id_especialidad"] = array("type"=>3,"varname"=>"id_especialidad", "name" => "id_especialidad");
$dalTablemedicos["activo"] = array("type"=>16,"varname"=>"activo", "name" => "activo");
	$dalTablemedicos["id_medico"]["key"]=true;

$dal_info["sistema_medico_at_localhost__medicos"] = &$dalTablemedicos;
?>