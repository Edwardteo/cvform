<?php
session_start();
include_once "db_config.php";
include_once "db_class.php";
if(isset($_POST['table'])){
	$table=$_POST['table'];
	unset($_POST['table']);
	$data=$_POST;
	$params=array(
		"host"=>DB_HOST,
		"user"=>DB_USER,
		"passw"=>DB_PASSW,
		"base"=>DB_BASE
	);
	$dbc=new cv_db($params);
	$session=session_id();
	foreach($data as $key => $val){
		if(strstr($key,"fecha_")!== FALSE){
			$data[$key]=$val[0]."-".$val[1]."-".$val[2];
		}

	}
	if($table=="personales"){
		$qry="SELECT id_personales from personales where session_id='{$session}'";
		$res=$dbc->consulta($qry);
		$row=$res->fetch_assoc();
		if($res->num_rows>0){
			$dbc->actualiza($table,"id_".$table,$row['id_personales'],$data);
		}else{
			$data['session_id']=session_id();
			$dbc->inserta($table,$data);
		}
	}else{
		$qry="SELECT id_personales from personales where session_id='{$session}'";
		$res=$dbc->consulta($qry);
		$row=$res->fetch_assoc();
		$data['id_personales']=$row['id_personales'];
		$dbc->inserta($table,$data);
	}
}
?>
