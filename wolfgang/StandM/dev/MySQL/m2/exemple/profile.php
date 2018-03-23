<?php
session_start();
if(empty($_SESSION['username']))
{
	header("location:sform.php");
}
?>



Welcome <?php echo $_SESSION['username'];


?>

<a href="logout.php">Logout</a>