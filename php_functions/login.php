 <?php
    
   include("connection.php");
     
	if(isset($_POST['login']))
	{
		
		$email=mysqli_real_escape_string($con,$_POST['email']);
		$password=mysqli_real_escape_string($con,$_POST['pass']);
		
	$get_user="select * from users where user_email='$email' AND user_pass='$password'";
	
	$run_user=mysqli_query($con,$get_user);
	
	$check = mysqli_num_rows($run_user);
	
	$get_username="select * from users where user_email='$email'";
	
	$run_username=mysqli_query($con,$get_username);
	
	$row=mysqli_fetch_array($run_username);
	
	$username=$row['user_name'];
	

	
		
		
	
	if($check==1)
	{
		
		$_SESSION['user_email']=$email;
		$_SESSION['user_name']=$username;
		echo"<script>window.open('home.php','_self')</script>";
		
		
	}

	else{
		
		echo"<script> alert('Password or Email Incorrect')</script>";
		
	}
	
	
	
	}
   
 ?>