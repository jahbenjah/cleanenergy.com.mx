<?php
	class Productos_model extends Model
	{		
		function __construct(){
			parent::__construct();
		}
		function productos(){
			$sql="SELECT `productos`.* ,`categoria`.`nombre` as NombreCategoria FROM `productos` LEFT JOIN `categoria` on `productos`.`categoria` = `categoria`.id ORDER BY id DESC"; 
			return $this->db->select($sql);
		}
		function productDetails($id){
			$sql="SELECT * from `productos` p 
				WHERE p.id=:id";
			return $this->db->select($sql, array('id' =>$id));
		}
	}
?>
