<?php
	class Dashboard_model extends Model
	{		
		function __construct(){
			parent::__construct();
		}
		// ***** INTERCONEXIONES ** //
		function interconexiones(){
			$sql="SELECT * FROM `productos` ORDER BY id DESC";
			return $this->db->select($sql);
		}
		function addingProduct($data){
			print($this->db->insert('interconexion', $data));
		}
		function updateBusiness($id,$data){
			print($this->db->update('interconexion', $data, "id=".$id));
		}
		function getProduct($id){
			$sql="SELECT * FROM interconexion WHERE interconexion.id=:id
			limit 1";
			return $this->db->select($sql, array('id'=>$id));
		}
		// ***** INTERCONEXIONES ** //
		// ***** AUTONOMOS ** //
		function autonomos(){
			$sql="SELECT * FROM `autonomos` ORDER BY log DESC";
			return $this->db->select($sql);
		}
		function addingProductAutonomos($data){
			print($this->db->insert('autonomos', $data));
		}
		function updateAutonomos($id,$data){
			print($this->db->update('autonomos', $data, "id=".$id));
		}
		function getProductAutonomos($id){
			$sql="SELECT * FROM autonomos WHERE autonomos.id=:id
			limit 1";
			return $this->db->select($sql, array('id'=>$id));
		}

		// ***** AUTONOMOS ** //
		// ***** LUMINARIAS ** //
		function luminarias(){
			$sql="SELECT * FROM `luminarias` ORDER BY log DESC";
			return $this->db->select($sql);
		}
		function addingProductLuminarias($data){
			print($this->db->insert('luminarias', $data));
		}
		function getProductLuminarias($id){
			$sql="SELECT * FROM luminarias WHERE luminarias.id=:id
			limit 1";
			return $this->db->select($sql, array('id'=>$id));
		}
		function updateLuminarias($id,$data){
			print($this->db->update('luminarias', $data, "id=".$id));
		}


		// ***** LUMINARIAS ** //

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
		function createBusiness($data){
			print($this->db->insert('business', $data));
		}
		
		function updateRestaurant($id, $data){
			print($this->db->update('restaurants', $data, "id=".$id));
		}
		function allcategory(){
			$sql="select * from category";
			return $this->db->select($sql);
		}
		function inmobiliarias(){
			$sql="select id,name from users where type=3";
			return $this->db->select($sql);
		}
		function updateUser($id, $data){
			print($this->db->update('users', $data, "id=".$id));
		}
		
		function createAccount($data){
			print($this->db->insert('users', $data));
		}
		function checkEmail($correo){
			$sql="SELECT id, correo FROM users WHERE correo=:correo";
			return $this->db->select($sql, array('correo'=>$correo));
		}
		function business(){
			$sql="SELECT * FROM `business` order by id desc  ";
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
			$sql="SELECT p.id,p.name,p.address,p.city,p.neighborhood,p.description, p.price,p.image1 as category FROM `products` p  order by id desc limit 30";
			return $this->db->select($sql);
		}
		function productsResult(){
			$namelike="'%".$_POST['searchProduct']."%'";
			$sql="SELECT p.id,p.name,p.description, p.price,p.image1,c.name as category FROM `products` p INNER JOIN category c on p.category=c.id WHERE p.name LIKE $namelike order by id desc";
			return $this->db->select($sql);
		}

		function viewproduct($id){
            $sql-"SELECT p.id,p.name,p.description, p.price,p.image1,c.name as category FROM `products` p INNER JOIN category c on p.category=c.id where p.id=:id";
            return $this->db-select($sql);
		}
		function delPost($id){
			return $this->db->delete('post', 'id='.$id);
		}
		function delBusiness($id){
			return $this->db->delete('business', 'id='.$id);
		}
		function delproduct($id){
			return $this->db->delete('productos','id='.$id);
		}
		function delProd($id){
			print($this->db->delete('productos', 'id='.$id));
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
				SELECT U.id, U.type, U.correo, U.name, U.lastname, R.name AS descRol, U.log
				FROM users U
				INNER JOIN roles R ON R.id=U.type"
			;
			return $this->db->select($sql);
		}
		function perfil($id){
			$sql="
				SELECT U.id, U.type, U.correo,U.phone, U.name, U.lastname, U.permissions, R.name AS descRol
				FROM users U
				INNER JOIN roles R ON R.id=U.type 
				WHERE U.id=:id
				AND U.status=:status"
			;
			return $this->db->select($sql, array('id'=>$id, 'status'=>1));
		}
		function perfilBusiness($id){
			$sql="SELECT * FROM business 
			WHERE business.id=:id
			limit 1";
			return $this->db->select($sql, array('id'=>$id));
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

		function updateProduct($id, $data){
			print($this->db->update('products', $data, "id=".$id));
		}
	}
?>