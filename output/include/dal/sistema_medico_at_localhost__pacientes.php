<?php
$dalTablepacientes = array();
$dalTablepacientes["id_paciente"] = array("type"=>3,"varname"=>"id_paciente", "name" => "id_paciente");
$dalTablepacientes["nombre"] = array("type"=>200,"varname"=>"nombre", "name" => "nombre");
$dalTablepacientes["apellido"] = array("type"=>200,"varname"=>"apellido", "name" => "apellido");
$dalTablepacientes["fecha_nacimiento"] = array("type"=>7,"varname"=>"fecha_nacimiento", "name" => "fecha_nacimiento");
$dalTablepacientes["telefono"] = array("type"=>200,"varname"=>"telefono", "name" => "telefono");
$dalTablepacientes["email"] = array("type"=>200,"varname"=>"email", "name" => "email");
$dalTablepacientes["direccion"] = array("type"=>201,"varname"=>"direccion", "name" => "direccion");
$dalTablepacientes["activo"] = array("type"=>16,"varname"=>"activo", "name" => "activo");
	$dalTablepacientes["id_paciente"]["key"]=true;

$dal_info["sistema_medico_at_localhost__pacientes"] = &$dalTablepacientes;
?>