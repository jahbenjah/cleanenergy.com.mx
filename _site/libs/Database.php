<?php
/**
 * Clase extendida del PDO
 */
class database extends PDO
{
    public function __construct($DB_TYPE,$DB_HOST,$DB_USER,$DB_PASS,$DB_NAME){
        parent::__construct($DB_TYPE.":host=$DB_HOST;dbname=".$DB_NAME, $DB_USER, $DB_PASS);
    }
    /**
     * @param String 	$sql 		Consulta
     * @param array 	$array 		Parametros para hacer el bind
     * @param constant 	$fetchMode 	del fetch mode del PDO
     * @param return 	mixed
    */
    //$sql="SELECT * from USUARIOS WHERE id=:id"; $arry = array('id' => $id); 
    public function select($sql, $array=array(), $fetchMode=PDO::FETCH_ASSOC){
    	$sth=$this->prepare($sql);
    	foreach ($array as $key => $value) {
    		$sth->bindValue("$key", $value);
    	}
    	$sth->execute();
    	return $sth->fetchAll($fetchMode);
    	
    }
    /**
     * @param String 	$table 		nombre de la tabla
     * @param array 	$data 		Arreglo de strings asociativos
     * @param return 	mixed
    */
        /*
            $data=('tipo'=>2, 'correo'='bsimon902@gmail.com');
        */

    public function insert($table, $data){
    	ksort($data);
        $fieldNames = implode('`, `', array_keys($data));
        $fieldValues=':'.implode(', :', array_keys($data));
        $sth= $this->prepare("INSERT INTO $table (`$fieldNames`) VALUES($fieldValues)");
        foreach ($data as $key => $value) {
            $sth->bindValue(":$key", $value);
        }
        try {
            return $sth->execute();
        } 
        catch (PDOException $e) {
            return 'Error con los datos de conexión, Error: ' . $e->getMessage();
        }
    }
    /**
     * @param String    $table      nombre de la tabla
     * @param array     $data       Arreglo de strings asociativos
     * @param return    mixed
    */
    /**
     * @param String 	$table 		nombre de la tabla
     * @param array 	$data 		Arreglo de strings asociativos
     * @param string	$where 		condicion WHERE de la consulta
    */
    public function update($table, $data, $where){
    	ksort($data);
    	$fieldDetails=NULL;
    	foreach ($data as $key => $value) {
    		$fieldDetails.="$key=:$key,";
    	}
    	$fieldDetails=rtrim($fieldDetails, ',');
    	$sth=$this->prepare("UPDATE $table SET $fieldDetails WHERE $where");
    	foreach ($data as $key => $value) {
    		$sth->bindValue(":$key", $value);
    	}
		return $sth->execute();
    }
    /**
     * @param String 	$table 		nombre de la tabla
     * @param array 	$data 		Arreglo de strings asociativos
     * @param string	$limit		limite
     * @param return 	mixed
    */
    public function delete($table, $where, $limit = 1){
	    return $this->exec("DELETE FROM $table WHERE $where LIMIT $limit");
       /* return "DELETE FROM $table WHERE $where LIMIT $limit";*/
    }
}
?>