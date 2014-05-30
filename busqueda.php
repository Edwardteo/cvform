<?php
if(!empty($_GET['q'])){
	$q=str_replace(array("'",'"'),"",$_GET['q']);
	$from=(isset($_GET['from']))?str_replace(array("'",'"'),"",$_GET['from']):"personales";
	include_once("db_config.php");
	include_once("db_class.php");
	$params=array(
		"host"=>DB_HOST,
		"user"=>DB_USER,
		"passw"=>DB_PASSW,
		"base"=>DB_BASE
	);
	$qry_params=array(
		"escolaridad"=>array(
			"tabla"=>"escolaridad",
			"campo_busqueda"=>"nombre_escuela"
		),
		"herramientas"=>array(
			"tabla"=>"herramientas",
			"campo_busqueda"=>"nombre_herramienta"
		),
		"personales"=>array(
			"tabla"=>"personales",
			"campo_busqueda"=>"nombre"
		)
	);
	if(isset($qry_params[$from])){
		$fromd=$qry_params[$from];
		$dbc=new cv_db($params);
		if($from=="personales"){
			$qry="SELECT nombre,apaterno,amaterno,session_id as session from personales where concat(nombre,apaterno,amaterno) LIKE '%{$q}%'";
		}else{
			$qry="SELECT p.nombre as nombre, p.apaterno as apaterno, p.amaterno as amaterno, p.session_id as session from personales as p inner join {$fromd['tabla']} as t where t.{$fromd['campo_busqueda']} LIKE '%{$q}%'";
		}
		$res=$dbc->consulta($qry);
		$results=array();
		while($row=$res->fetch_assoc()){
			$results[]=$row;
		}
		include "busqueda.html";
	}
}
?>
