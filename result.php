<?php
session_start();
include "db_config.php";
include "db_class.php";
$params=array(
		"host"=>DB_HOST,
		"user"=>DB_USER,
		"passw"=>DB_PASSW,
		"base"=>DB_BASE
	);
	$dbc=new cv_db($params);
	if(!empty($_GET['id'])){
		$session=str_replace(array("'",'"'),"",$_GET['id']);
	}else{
		$session=session_id();
	}
	$qry="SELECT * from personales where session_id='{$session}'";
	$res=$dbc->consulta($qry);
	if($res->num_rows>0)
	{
		$personales=$res->fetch_assoc();
		$id=$personales["id_personales"];
		$qry="SELECT * from escolaridad where id_personales='{$id}'";
		$res=$dbc->consulta($qry);
		$escolaridad=array();
		while($row=$res->fetch_assoc()){
			$escolaridad[]=$row;
		}
		$qry="SELECT * from experiencia where id_personales='{$id}'";
		$res=$dbc->consulta($qry);
		$experiencia=array();
		while($row=$res->fetch_assoc()){
			$experiencia[]=$row;
		}
		$qry="SELECT * from idiomas where id_personales='{$id}'";
		$res=$dbc->consulta($qry);
		$idiomas=array();
		while($row=$res->fetch_assoc()){
			$idiomas[]=$row;
		}
		$qry="SELECT * from herramientas where id_personales='{$id}'";
		$res=$dbc->consulta($qry);
		$herramientas=array();
		while($row=$res->fetch_assoc()){
			$herramientas[]=$row;
		}
		$data['personales']=$personales;
		$data['escolaridad']=$escolaridad;
		$data['experiencia']=$experiencia;
		$data['idiomas']=$idiomas;
		$data['herramientas']=$herramientas;
		include 'plantilla.php';

	}
?>
