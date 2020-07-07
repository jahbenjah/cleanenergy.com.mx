<?php
	class Dashboard_model extends Model
	{		
		function __construct(){
			parent::__construct();
		}
		function restaurants(){  
			$sql="
				SELECT * FROM `restaurants`  
				ORDER BY log DESC";
			return $this->db->select($sql);
		}
		function createPost($data){
			//print_r($data);
			print($this->db->insert('products', $data));
		}
		function updateRestaurant($id, $data){
			print($this->db->update('restaurants', $data, "id=".$id));
		}
		function allcategory(){
			$sql="select * from category";
			return $this->db->select($sql);
		}
		function news($section=0){
			$sql="
				SELECT P.*, S.name sectionName FROM `post` P
				INNER JOIN sections S ON P.post_section=S.id
				WHERE P.post_section=:section
				ORDER BY P.post_date DESC ";
			return $this->db->select($sql, array('section'=>$section));
		}
		function products(){
			$sql="SELECT p.id,p.name,p.description, p.price,p.image1,c.name as category FROM `products` p INNER JOIN category c on p.category=c.id order by id desc limit 30";
			return $this->db->select($sql);
		}
		function productsResult(){
			$namelike="'%".$_POST['searchProduct']."%'";
			$sql="SELECT p.id,p.name,p.description, p.price,p.image1,c.name as category FROM `products` p INNER JOIN category c on p.category=c.id WHERE p.name LIKE $namelike order by id desc";
			return $this->db->select($sql);
		}
		function FilterbyCategoryproducts($id){
			$sql="SELECT p.id,p.name,p.description, p.price,p.image1,c.name as category FROM `products` p INNER JOIN category c ON p.category=c.id WHERE c.id=$id order by id desc";
			return $this->db->select($sql,array('category'=>$id));
		}
		function viewproduct($id){
            $sql-"SELECT p.id,p.name,p.description, p.price,p.image1,c.name as category FROM `products` p INNER JOIN category c on p.category=c.id where p.id=:id";
            return $this->db-select($sql);
		}
		function delPost($id){
			return $this->db->delete('post', 'id='.$id);
		}
		function delproduct($id){
			return $this->db->delete('products','id='.$id);
		}
		function delProd($id){
			print($this->db->delete('products', 'id='.$id));
		}
		function newsDetails($id){
			$sql="
				SELECT * FROM `restaurants` R
				WHERE P.id=:id";
			return $this->db->select($sql, array('id' =>$id));
		}
		function updateNews($id, $data){
			print($this->db->update('post', $data, "id=".$id));
		}
		function users(){
			$sql="
				SELECT U.id, U.type, U.email, U.name, U.lastname, R.name AS descRol, U.log
				FROM users U
				INNER JOIN roles R ON R.id=U.type"
			;
			return $this->db->select($sql);
		}
		function banners(){
			$sql="
				SELECT B.*
				FROM banner B
				ORDER BY id DESC"
			;
			return $this->db->select($sql);
		}
		function descBanners($id){
			$sql="
				SELECT B.*
				FROM banner B
				WHERE B.id=:id
				ORDER BY id DESC"
			;
			return $this->db->select($sql, array('id'=>$id));
		}
		function updateBanner($id, $data){
			print($this->db->update('banner', $data, "id=".$id));
		}
		function delBanner($id){
			return $this->db->delete('banner', 'id='.$id);
		}
		function createBanner($data){
			print($this->db->insert('banner', $data));
		}
		function getrestestaurantid($id){
			$sql="
				SELECT *
				FROM restaurants R
				WHERE R.id=:id"
			;
			return $this->db->select($sql, array('id'=>$id, 'status'=>0));
		}
		function permissions($id){
			$sql="
				SELECT  U.permissions
				FROM users U
				WHERE U.id=:id
				AND U.status=:status"
			;
			return $this->db->select($sql, array('id'=>$id, 'status'=>1));
		}








		/*By co-owner Gixcode ;)*/
		function getProduct($id){
			$sql="
				SELECT *
				FROM products P
				WHERE P.id=:id"
			;
			return $this->db->select($sql, array('id'=>$id));
		}
		function updateProduct($id, $data){
			print($this->db->update('products', $data, "id=".$id));
		}
	}
?>