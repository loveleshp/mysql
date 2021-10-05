<?php 

 include 'con.php';
 $obj= new conn();

  $id = $_GET['id'];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>form</title>
</head>
<body>
<form method="POST">
	<table>
		<tr>
			<td>Username</td>
			<td><input type="test" name="username"></td>
		</tr>
		    <td>Password</td>
		    <td><input type="password" name="password"></td>
		</tr>
		    <td>Submit</td>
		    <td><input type="submit" name="submit"></td>
		</tr>
	</table>

	<?php 

	if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
		$result=$obj->update($id,$username,$password);
		//print_r($result);
		//return $result->obj;

		// mysqli_query($con,$query);
		header('location:show.php');
}
	?>
</form>
</body>
</html>