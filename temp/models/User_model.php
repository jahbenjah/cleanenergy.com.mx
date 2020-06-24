<?php
	class User_model extends Model
	{		
		function __construct(){
			parent::__construct();
		}

		function createAccount($data){
			print($this->db->insert('users', $data));
		}
		function registerUser($data){
			//print ('estoy dentro de registerUser'.$data);
			print($this->db->insert('users', $data));
		}
		function login($correo){
			$sql="
				SELECT U.id, U.type, U.correo, U.name, U.lastname, U.contrasena, U.salt, R.name AS descRol
				FROM users U
				INNER JOIN roles R ON R.id=U.type 
				WHERE U.correo=:correo
				AND U.status=:status"
			;
			return $this->db->select($sql, array('correo'=>$correo, 'status'=>1));
		}
		function perfil($id){
			$sql="
				SELECT U.id, U.type, U.correo, U.name, U.lastname, U.permissions, R.name AS descRol
				FROM users U
				INNER JOIN roles R ON R.id=U.type 
				WHERE U.id=:id
				AND U.status=:status"
			;
			return $this->db->select($sql, array('id'=>$id, 'status'=>1));
		}
		function updateUser($id, $data){
			print($this->db->update('users', $data, "id=".$id));
		}
		function users(){
			//$sql="SELECT * from users";
			$sql="
				SELECT U.id, U.type, U.correo, U.name, U.lastname, R.name AS descRol, U.log
				FROM users U
				INNER JOIN roles R ON R.id=U.type"
			;
			return $this->db->select($sql);
		}
		function delUser($id){
			print($this->db->delete('users', 'id='.$id));
		}		
		function editUser($id){
			print($this->db->select('users', 'id='.$id));
		}
		function checkEmail($correo){
			$sql="SELECT id, correo FROM users WHERE correo=:correo";
			return $this->db->select($sql, array('correo'=>$correo));
		}
	}
?>