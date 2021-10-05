<?php 
// session_start();
// define('DB_SERVER','localhost');
// define('DB_USER','test');
// define('DB_PASS' ,'test123');
// define('DB_NAME', 'crud1');
class conn {
  public $con;
	public function __construct() {
		$this->con = new mysqli('localhost','test','test123','crud1');
    $this->con->autocommit(false);
	}

 
 public function insert($username,$password){
   $this->con->begin_transaction();
   try{
    $query = "insert into form (username,password) values ('$username','$password')";
    $result = $this->con->query($query);
    $this->con->commit();
    return $result;
   }catch(Exception $e){
     $this->con->rollback();
     throw $e;
    }
 }

 public function show($offset, $limit){
 	$query = "SELECT * FROM form LIMIT $offset, $limit";
  $result=$this->con->query($query);
  $data = [];
  if($result->num_rows > 0) {
    while ($rows = $result->fetch_assoc()) {
      array_push($data, $rows);
    }
  }
  return $data;
 }

  public function update($id,$username,$password){
      // $this->con->begin_transaction();
      try{
        $query = "update form set username='$username', password='$password' where id='$id' ";
      $result=$this->con->query($query);
       $this->con->commit();
      return $result;
      }catch(Exception $e){
       $this->con->rollback();
       throw $e;
      }
 } 
  public function delete($id){
    // $this->con->begin_transaction();
    try{
      $query = "delete from form where id = $id";
    $result=$this->con->query($query);
    $this->con->commit();
    return $result;
    }catch(Exception $e){
    $this->con->rollback();
    throw $e;
   } 
 }
  
  public function getpages($limit){
   $query = "SELECT * FROM form" ;
   $result =$this->con->query($query);
   $total_record = $result->num_rows;
   $pages = ceil($total_record/$limit);
   return $pages;
  }
}

  ?>
