<?php


error_reporting(0);


?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="css/style.css" rel="stylesheet"> -->
  <script src="js/jquery.min.js"></script>
  <script src="js/password.js"></script>
  <script src="js/bootstrap.min.js"></script>
  
</head>
<body >
<?php include_once "header.php"; ?>
<hr style="font-size: 10px;">
</hr>

<div class="container" >

<div class="row" >
<div class="col-md-4"></div>
  <div class="col-md-4 col-sm-4">
    <div id="reg_form" class="panel" style="background:#0099FF;color:white;font-weight:bold;border-radius: 20px;">
          
          <div class="panel-heading"><h3 style="text-align: center;">Login Here !!!</h3></div>
          <div class="panel-body" style="background: white;">
            <form action="#" method="POST">
            
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Username"  required tabindex="1" name="name">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" placeholder="Password" id="password" required tabindex="2" name="password">
            </div>
            
            <div class="form-group">
              <input type="submit" class="btn btn-info" value="Login" tabindex="3" name="Login">
              
              <input type="reset" class="btn btn-info" value="Reset" tabindex="4">

            </div>

            <div class="form-group">
              <a href="user.php" class="btn btn-warning">Notices</a>
              
            
            </div>
            

            

            </form> 
          </div>
    </div>
    <div class="col-md-4"></div>


  </div>
  </div>
  </div>

<?php include_once "footer.php";?>

</body>
</html>
<?php

include_once "mysql_connect.php";
session_start();

$status=0;
// $_SESSION['status']=$status;

$name=$_POST['name'];
 $_SESSION['name']=$name;  // store the Username id  into the session variable
  
                  $u=mysql_real_escape_string($_POST['name']);
                $p=mysql_real_escape_string($_POST['password']);
  
  if (isset($_POST['Login'])) 
  {
    
  $sql="SELECT * FROM `user` WHERE(name='".$u."' AND password='".$p."')";
  
  $query=mysql_query($sql);
  
  $result=mysql_fetch_array($query);
  

  if($result[0]>0)
  {
    if(isset($_SESSION['name']))
    {
        header("location:index.php");
    }


  }
  else
  {
    ?>
    <script type="text/javascript">
    alert("Username Name or Password Wrong !");
    </script>
    <?php
    
  }   
    
  }


?>
