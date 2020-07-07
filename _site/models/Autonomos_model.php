<?php
	class Autonomos_model extends Model
	{		
		function __construct(){
			parent::__construct();
		}
		function autonomos($cat){
			$sql="SELECT * FROM autonomos WHERE categoria='".$cat."' ORDER BY id DESC"; 
			return $this->db->select($sql);
		}
		function productDetails($id){
			$sql="SELECT * from `autonomos` p 
				WHERE p.id=:id";
			return $this->db->select($sql, array('id' =>$id));
		}
	}
?>
