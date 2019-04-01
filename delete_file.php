<?php

error_reporting(0);
include_once "mysql_connect.php";
include_once "session.php";

/*
session_start();
$User=$_SESSION['name'];

if(!isset($_SESSION['name']))	
{
	header("Location: login.php");
	exit;
}
*/

	$id=$_GET['id'];
	
	
	$query=mysql_query("select * from `notices`  WHERE id=".$id." ");
	while($row=mysql_fetch_array($query))
	{
	
		mysql_query("DELETE FROM notices WHERE id=".$id."");
		$path=$row['path'];
		
		unlink($path) or die("Failed to <strong class='highlight'>delete</strong> file");
		echo "<script>window.location.href='index.php';</script>";
		//unlink($path . "/" . $photo) or die("Failed to <strong class='highlight'>delete</strong> file");

	}
	
	unlink();
	
	header("location: index.php");
	
?>


