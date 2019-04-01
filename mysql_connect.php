<?php
$db_host = "localhost";
$db_username = "root";
$db_pass = "";
$db_name = "mitdb";

@mysql_connect("$db_host","$db_username","$db_pass")or die ("Could Not Connect");

@mysql_select_db("$db_name")or die ("Not Database Found");

$cn=mysqli_connect("localhost","root","","mitdb");

?>
<style type="text/css">
	a
	{
		color: black;
	}
	body
	{
			/*background: black;*/
	}
	th
	{
		/*color: white;*/
	}
	.btn-pankaj
	{
		background: gold;
		color: black;
		font-weight: bold;
		box-shadow: 5px 5px black;
	}
	.btn-pankaj:hover
	{
		background: purple;
		color: white;

	}


</style>
 

  <?php include_once "footer.php";?>
