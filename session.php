 <?php
 session_start();
$name=$_SESSION['name'];

if(!isset($_SESSION['name'])) 
{
  header("Location: user.php");
  exit;
}

?>