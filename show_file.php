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

  
  <style type="text/css">

  	th
  	{
  		text-align: center;
  		line-height: 10%;
  		color: black;
  		/*color: black;*/
  	}
  </style>
  </head>
<body>
              		<div class='embed-responsive' style='padding-bottom:150%'>

              		 		<embed src="<?php echo $path; ?>" mimmetype = "applications/vnd.ms-word" > </embed>
    						<!-- <embed src="./file/1.docx" mimmetype = "applications/vnd.ms-word" > </embed> -->
					       </div>

</body>
</html>