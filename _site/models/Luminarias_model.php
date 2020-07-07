<?php
	class Luminarias_model extends Model
	{		
		function __construct(){
			parent::__construct();
		}
		function luminarias(){
			$sql="SELECT * FROM luminarias WHERE categoria='Luminarias'";
			return $this->db->select($sql);
		}
		function productDetails($id){
			$sql="SELECT * from `luminarias` p 
				WHERE p.id=:id";
			return $this->db->select($sql, array('id' =>$id));
		}
	}
?>
