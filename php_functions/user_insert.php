<?php

include('connection.php');


if(isset($_POST['sign_up']))
	{ 	
		$name=mysqli_real_escape_string($con,$_POST['u_name']);
		$password=mysqli_real_escape_string($con,$_POST['u_password']);
		$email=mysqli_real_escape_string($con,$_POST['u_email']);
		$country=mysqli_real_escape_string($con,$_POST['u_country']);
		$sex=mysqli_real_escape_string($con,$_POST['u_sex']);
		$birthday=mysqli_real_escape_string($con,$_POST['u_birthday']);
		$register_date=date('d-m-y');  
		
		
		
	 
	 $get_email="select * from users where user_email='$email'";
	 $run_email=mysqli_query($con,$get_email);
	 $check=mysqli_num_rows($run_email);
	 
	 if($check==1)
	 {
		 echo  "<script>alert('Email already  registered') </script>";
		 exit();
		 }
	 if(strlen($password)<8){
		 
		 echo"<script>alert('Password should have more than 8 characters')</script>";
		exit();
	 }
	 else
	 {
		$insert="insert into users(user_name,user_pass,user_email,user_country,user_gender,user_birthday,register_date) 
		 values('$name','$password','$email','$country','$sex','$birthday','$register_date')";
	 
		$run_insert=mysqli_query($con,$insert);
		
		if($run_insert){
			$_SESSION['user_email']=$email;
			$_SESSION['user_name']=$name;
			echo"<script>alert('Registration successfull')</script>";
			echo"<script>window.open('home.php','self')</script>";
			
		}
		
		
	 }
	}
 
 
?>
