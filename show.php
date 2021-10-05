<?php
 include 'con.php';
 
 $obj= new conn();
 $page = 1;
 if(isset($_GET['page'])) {
    $page = $_GET['page'];
 }
  
  $limit = 3;
  $offset = ($page - 1) * $limit;
 // $data = "";
    
    
 // print_r($result);
  
 
 $result=$obj->show($offset, $limit);
 // $id = 1 + $offset;
//  print_r($result)
// $sql = mysqli_query($con,$query);

?>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<meta charset="utf-8">
	<title>show</title>
</head>
<body>
	<a class="btn btn-primary" href="http://phpcrud.com/">SignUp Form</a>
<div class="container">
	<table class="table">
		 <thead class="thead-dark">
		<tbody>
		<tr>
			<th colspan="5"></th>
			<tr>
			<th scope="col">Id</th>
			<th scope="col">Username</th>
			<th scope="col">Password</th>
			<th scope="col">Action</th>
			</tr>
	</tr>
		</thead>
	<tr>
					<?php
            foreach($result as $row) {
            	echo '
            		<tr>
							<td> '.$row['id'].'</td>
							<td> '.$row['username'].'</td>
					         <td> '.$row['password'].'</td>
					       <td> <a class="btn btn-danger" scope="col" href="delete.php?id='.$row['id'].'&page='.$page.'"> Delete </a></td>
					         <td> <a class="btn btn-primary" scope="col" href="update.php?id='.$row['id'].'&page='.$page.'" > Update </a></td>
					        </tr>';
            }
            

            ?>

		</tr>

		</tbody>

	</table>
<?php
            
	require_once 'page.php';?>
	</div>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>    
	</body>
</html>

<script>
    function pageLoad(page) {
    	// console.log(page);
        $.ajax({
            url: 'show.php',
            method: 'GET',
            data: {page: page},
            success: function(result) {
                $('body').html(result)
            }
        })
    }
</script>