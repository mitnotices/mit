
<?php
error_reporting(0);
 $date=date('Y-m-d');
  $path=$_GET['xyz'];
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Dashboard</title>

    <!-- Bootstrap core CSS -->
  
    <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
    
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  
 
  </head>
<body>
<div class="container">
	

<?php include_once "header.php" ?>



	<div class="row">
<?php include_once "userpan.php" ?> 


		<div class="col-md-9" style="">
			<div class="panel panel-primary">
            <div class="panel-heading main-color-bg"><b style="color:;">Notices</b></div>
              <div class="panel-body">
                  <div class="table-responsive">
                  
                  <table class="table table-bordered">
                    <tr class="info">
                      <th>Sr.No</th><th>Date</th><th>Name</th><th>Options</th>
                    </tr>
                 
                  <?php
include_once "mysql_connect.php";
// <th><a href='$file'>Download</a></th>
error_reporting(0);
// $date=date('Y-m-d');
$query=mysql_query("select * from notices ORDER BY id DESC "); 
  $no=0;
  while($row=mysql_fetch_array($query))
  {
    $no++;
    $id=$row['id'];
    $cdate=$row['cdate'];
    $name=$row['name'];
    $path=$row['path'];
    
    echo "
      
        <tr>
  
          <th>$no</th>
          <th>$cdate</th>
          <th>$name</th>
          <th><a href='show_file.php?xyz=$path' class='btn btn-warning' target='_blank'>Open</a>
       
          
          
          
        </tr>";
  }
?>
              		
 </table>
						
              </div>
          </div>

		</div>

	</div>
</div> <!-- container close -->



</body>
</html>