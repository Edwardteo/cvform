<?php
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
	$id_personales=session_id();
	foreach($data as $key => $val){
		if(strstr($key,"fecha_")!== FALSE){
			$data[$key]=$val[0]."-".$val[1]."-".$val[2];
		}

	}
	print_r($data);
	if($table=="personales"){
		$qry="SELECT * from personales where id_personales='{$id_personales}'";
		$res=$dbc->consulta($qry);
		if($res->num_rows>0){
			$dbc->actualiza($table,"id_".$table,$id_personales,$_POST);
		}else{
			$dbc->inserta($table,$_POST);
			session_id($dbc->db->insert_id);
		}
	}else{
		$data['id_personales']=session_id();
		$dbc->inserta($table,$data);
	}
}
?>
