<?php
	class Interconexion_model extends Model
	{		
		function __construct(){
			parent::__construct();
		}
		function interconexion($cat){
			$sql="SELECT * FROM interconexion WHERE categoria='".$cat."' ORDER BY id DESC"; 
			return $this->db->select($sql);
		}
		function productDetails($id){
			$sql="SELECT * from `interconexion` p 
				WHERE p.id=:id";
			return $this->db->select($sql, array('id' =>$id));
		}
	}
?>
