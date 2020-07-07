<?php
	class Restaurante_model extends Model
	{		
		function __construct(){
			parent::__construct();
		}
		function news($ini=0, $to=10){
			$sql="
				SELECT P.*, S.name sectionName FROM `post` P
				INNER JOIN sections S ON P.post_section=S.id
				WHERE P.post_section!=7
				ORDER BY P.post_date DESC, P.id DESC 
				LIMIT $ini , $to";
			return $this->db->select($sql);
		}
		function newsDetails($id){
			$sql="
				SELECT * FROM `restaurants` R
				WHERE R.id=:id";
			return $this->db->select($sql, array('id' =>$id));
		}
		function banner(){
			$sql="
				SELECT B.*
				FROM banner B
				WHERE id=1
				ORDER BY id DESC
				LIMIT 1"
			;
			return $this->db->select($sql);
		}
		function bannerCarousel(){
			$sql="
				SELECT B.*
				FROM banner B
				WHERE id>1
				AND id<5
				ORDER BY id ASC
				LIMIT 3"
			;
			return $this->db->select($sql);
		}
	}
?>