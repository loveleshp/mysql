<?php

include 'con.php';

?>

<html>
<style>
    form{
        height: 20%;
        width: 50%;
        left: 20%;
        position: relative;
        border: 2px solid orangered;
        background-color: orchid;
    }
    h3{
        margin: 2px;
        padding: 2px;
        height: 30px;
        text-align: left;
        background-color: powderblue;
        border: 1px solid brown;
        border-radius: 0px;
    }
    .container{
        border: 2px solid powderblue;

    }
    .errorMsg{
    color: #cc0000;
    margin-bottom: 10px;
    display:none;
}
.sucessMsg{
 color: #6B8E23;
 margin-bottom: 10px;
}
    
</style>
<head>
    <meta charset="utf-8">
    <title>SignUp</title>
    
</head>
<body>
    <div>
    <div style="font-size: 1.5rem; color: red;">SIGN-UP</div>
        <a href="show.php">Back</a>
        
    </div>
    <div>
    </div>
      <form method="POST">
        <label>Username</label>
            <input type="text" id="username" name="username" required>
            
        <br> <br>

        <label>Password</label>
            <input type="password" id="password" name="password" required>
        <br> <br>

        <label>Submit</label>
           <input type="submit" id="submit" name="submit" value="Register">             
         
      </form> <br><br><br><br>

      <?php
        $Obj = new conn();
        if(isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $result=$Obj->insert($username,$password);
            print_r($result);
// mysqli_query($con,$query);
        header('location:show.php');

        }

      ?>


     
  
</body>
</html>

