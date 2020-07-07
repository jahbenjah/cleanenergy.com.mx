<?php
	class Products_model extends Model
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
				SELECT p.id,p.name,c.name as category,p.description,p.price,p.image1,p.image2,p.image3,p.image4,p.image5,c.name as cname from `products` p inner join `category` c on p.category=c.id 
				WHERE p.id=:id";
			return $this->db->select($sql, array('id' =>$id));
		}
		function category($id){
			$sql="SELECT * FROM `category` p
			    WHERE p.id=:id";
			    return $this->db->select($sql, array('id' =>$id));
		}
		function allcategory(){
			$sql="select * from category";
			return $this->db->select($sql);
		}
		function pbycategory($id){
			$sql="SELECT p.id,p.name,p.category,p.description,p.price,p.image1,c.name as cname from products p inner join category c on p.category=c.id where p.category=$id "."order by p.log DESC";
			return $this->db->select($sql);
		}
		function products(){
			$sql="SELECT * FROM `products`";
			return $this->db->select($sql);
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