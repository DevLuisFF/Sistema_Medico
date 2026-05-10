<?php
$dalTablecitas_medicas_ugmembers = array();
$dalTablecitas_medicas_ugmembers["UserName"] = array("type"=>200,"varname"=>"UserName", "name" => "UserName");
$dalTablecitas_medicas_ugmembers["GroupID"] = array("type"=>3,"varname"=>"GroupID", "name" => "GroupID");
	$dalTablecitas_medicas_ugmembers["UserName"]["key"]=true;
	$dalTablecitas_medicas_ugmembers["GroupID"]["key"]=true;

$dal_info["sistema_medico_at_localhost__citas_medicas_ugmembers"] = &$dalTablecitas_medicas_ugmembers;
?>