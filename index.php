<?php
include('php_functions/connection.php');
session_start();


	
	

if( isset($_SESSION['user_name']) )
    
	{
		header( "location:../make_social/home.php" );
	}
		include("templates/header.php");
		include("templates/content.php");
		include("templates/footer.php");
		include("php_functions/login.php");
		include("php_functions/functions.php");



?>