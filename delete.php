<?php
include 'con.php';
$obj= new conn();
$id = $_GET['id'];
$result=$obj->delete($id);

// echo $id;

// $query = "delete from form where id = $id";
// return $result->obj;



// mysqli_query($con,$query);
header('location:show.php');
 ?>