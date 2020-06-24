<?php
	class Index_model extends Model
	{		
		function __construct(){
			parent::__construct();
		}
		function products(){  
			$sql="SELECT p.id,p.name,p.description,p.price,p.image1,c.name as category 
			FROM `products` p 
			inner join `category` c on p.id=c.id";
			return $this->db->select($sql);
		}
		function allcategory(){  
			$sql="SELECT  * from `category` ORDER BY orden ASC";
			return $this->db->select($sql);
		}
		function seccion($seccion=1, $ini=0, $to=12){
			$sql="
				SELECT p.*, s.name sectionName FROM `post` p
				INNER JOIN sections s ON p.post_section=s.id
				WHERE p.post_section=:section
				ORDER BY p.post_date DESC, p.id DESC 
				LIMIT $ini , $to";
			return $this->db->select($sql, array('section'=>$seccion));
		}
		function detalles(){
             $sql="
             SELECT * FROM `products` order by id desc  ";
		}
		
		function category($id){
            $sql="SELECT p.id,p.name,p.description,p.price,p.image1,c.name as category 
			FROM `products` p 
			inner join `category` c on p.id=:id";
			return $this->db->select($sql, array('id' =>$id));
		}
        function pbycategory(){
			$sql="SELECT p.id,p.name,p.category,p.description,p.price,p.image1,c.name as cname from products p inner join category c on p.category=c.id where p.category=c.id "."order by p.log DESC";
			return $this->db->select($sql);
		}
		function searchProduct(){
			$namelike="'%".$_POST['searchp']."%'";
			$sql="SELECT * FROM products R
			WHERE R.name LIKE ".$namelike;
			// ".$namelike;
			//print $sql;
			return $this->db->select($sql);
		}
	}
?>
