<?php
	class Calentadores_model extends Model
	{		
		function __construct(){
			parent::__construct();
		}
		function calentadores(){
			$sql="SELECT * FROM calentadores WHERE categoria='Calentadores'";
			return $this->db->select($sql);
		}
		function productDetails($id){
			$sql="SELECT * from `calentadores` p 
				WHERE p.id=:id";
			return $this->db->select($sql, array('id' =>$id));
		}
	}
?>
