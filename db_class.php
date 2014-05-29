<?php
class cv_db{
	public $db;
	public function __construct($params){
		if(
			isset($params['host']) &&
			isset($params['user']) &&
			isset($params['passw']) &&
			isset($params['base'])
		){
			$this->connect($params);
		}else{
			return false;
		}
	}
	public function  connect($params){
		if(!$this->db=new mysqli($params['host'],$params['user'],$params['passw'],$params['base']))
			return false;
	}
	public function consulta($qry){
		if(!empty($qry)){
			return $this->db->query($qry);
		}else{
			return false;
		}
	}
	public function inserta($table,$datos){
		if(!empty($datos) && !empty($table) && is_array($datos)){
			$str_campos="";
			$str_values="";
			foreach($datos as $campo => $valor){
				$str_campos.="{$campo},";
				$str_values.="'".str_replace(array("'",'"'),"",$valor)."',";
			}
			$str_campos=substr($str_campos,0,-1);
			$str_values=substr($str_values,0,-1);
			$qry="Insert into {$table}({$str_campos}) values({$str_values})";
			if($this->consulta($qry)){
				return true;
			}else{
				return false;
			}
		}
	}
	public function actualiza($table,$campo_id,$id,$datos){
		if(!empty($datos) && !empty($table) && !empty($campo_id) && !empty($id) && is_array($datos)){
			$str_update="";
			foreach($data as $campo => $valor){
				$str_update.="{$campo}='".str_replace(array("'",'"'),"",$valor)."',";
			}
			$str_update=substr($str_update,0,-1);
			$qry="UPDATE {$table} set {$str_update} where {$campo_id}={$id}";
			if($this->db->consulta($qry)){
				return true;
			}else{
				return false;
			}
		}
	}
	public function borra($table,$campo_id,$id){
		if(!empty($table) && !empty($campo_id) && !empty($id)){
			$qry="DELETE from {$table} where {$campo_id}={$id}";
			if($this->db->consulta($qry)){
				return true;
			}else{
				return false;
			}
		}
	}
	public function select($table,$campo_id,$id){
		if(!empty($table) && !empty($campo_id) && !empty($id)){
			$qry="SELECT * from {$table} where {$campo_id}={$id}";
			if($res=$this->db->consulta($qry)){
				return $res->fetch_assoc();
			}else{
				return false;
			}
		}
	}
}	
?>
