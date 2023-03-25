<?php
session_start();
if(!$_SESSION['loggedInUser']){
	header("Location:login.php?reason=Please Login first to access the website");
}
?>