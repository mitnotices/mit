<?php

include_once "session.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Admin Area | Dashboard</title>

    <!-- Bootstrap core CSS -->
	
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
    </head>

  <body>
<div class="container">

<?php include_once "header.php" ?>		
			<div class="row">
				
				<?php include_once "adminpan.php" ?>  

				<div class="col-md-9">
					<div class="panel panel-primary">
						<div class="panel-heading "><b style="color:white;">Upload Notices</b></div>
							<div class="panel-body">
								
											<table class="table table-responsive">
											<H3>PLEASE UPLOAD NOTICE</H3>
													<form method="POST" enctype="multipart/form-data" action="">
														<div class="form-group">
														<input type="file" name="file" id="file" class="form-control" required>
														</div>
														<div class="form-group">
														<input  type="submit" value="Upload" name="submit" class="btn btn-info" />
														</div>
														
													</form>			
													
									</div>
								
								</div>
								
								
								
								
								
							</div>
							
							<!-- <div class="alert alert-warning"><h1 style="text-align:center;">Designed By Mr.Pankaj</div> -->
					</div>
				
				
				
				</div>
			
			</div>
		
		</div>
		
	</section>
 <?php include_once "footer.php"; ?> 
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
  </body>
</html>

<?php
 include_once "mysql_connect.php";
 error_reporting(0);

	$location = './files/';
	$date =date('Y-m-d');
	$name=$_FILES['file']['name'];	

		
		$file =$_FILES['file']['name'];
		$tmp_name =$_FILES['file']['tmp_name'];
		
		if (isset($file))
		{
		  if(!empty($file))
		  {
				$location = './files/';
			move_uploaded_file($tmp_name, $location.$file);
			
		   $file_path =$location.$file;
		  
		  }
		}


		if(isset($_POST['submit']))
		{
			  mysql_query("insert into `notices`(name,path,cdate) values('".$name."','".$file_path."','".$date."')");  
			// mysql_query("insert into `notices`(name) values('".$name."')");  

			echo "<script>alert('Notices Uploaded Successfully');</script>";
			echo "<script>window.location.href='index.php';</script>";
          
		}

	
	?>
