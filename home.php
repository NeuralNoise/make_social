<?php session_start();
include("php_functions/functions.php");
include("php_functions/connection.php");
if($_SESSION['user_email']=='' and !isset($_COOKIE['user_email']))
{
	header("Location:..\make_social\index.php");
} 
else{
$email=$_SESSION['user_email'];
setcookie('user_email', $email, time() + (86400 * 30), "/");
}

?>
<!doctype HTML>
			<head>
				
					<title>Welcome <?php  echo $_SESSION['user_name']; ?> </title>
					<link rel="stylesheet" href="home.css"/>
			</head>
			<script>
				function validateform() {
										var t = document.forms["writebox"]["title"].value;
										if (t == "") 
										{
										alert("Come on!! Give a title atleast");
										return false;
										
										}
										var c=document.forms["writebox"]["content"].value;
										if(c==""){
											
											alert("Write something!!Don't be shy!!");
											return false;
										}
										
										var z=document.forms["writebox"]["topic"].value;
										if(z=="Select Topic"){
										
										alert("Select a topic");
										return false;
										
										}
										
										
									}
									
									
			</script>
		<body>
			<div class="container">
				<div id="noscroll">
					<ul>
						<li><a href="#">Fiction</a></li>
						<li><a href="#">Non-Fiction</a></li>
						<li><a href="#">You</a></li>
						   <strong>Topics:</strong>    
						   <?php 
						   $get_topics="select *from topics";
						   $run_topics=mysqli_query($con,$get_topics);
						   while($row=mysqli_fetch_array($run_topics)){
							   $topic_id=$row['topic_id'];
							   $topic_title=$row['topic_name'];
							echo"<li> <a href='home.php?topic=$topic_id'> $topic_title</a></li>";  
						   }
						   ?>
						   
						<input id="search" type="text" name="search" placeholder="Search"/>
				
				    </ul>
				
					</div>
							<div id="leftnav">
							<?php 
								$user=$_SESSION['user_email'];
								$get_user="select * from users where user_email='$user'";
								$run_user=mysqli_query($con, $get_user);
								$row=mysqli_fetch_array($run_user);
								
								$user_id=$row['user_id'];
								$user_name=$row['user_name'];
								$user_country=$row['user_country'];
								$register_date=$row['register_date'];
								$user_birthday=$row['user_birthday'];
							
							
							?>	
						     <img id="dp" src="profile.jpg" width="60%" height="20%"/>
								<br><br>
								<p><br>Name:-<?php echo $_SESSION['user_name']; ?> <br>
								<br>Country:-<?php echo $user_country ;?><br>
								<br>User Since:-<?php echo $register_date; ?><br>
								<br>User Birthday:-<?php echo $user_birthday;?>                      <br>
								<br><a href="my_messages.php">Messages(2)</a><br>
								<br><a href="my_posts.php">Writings(2)</a><br>
								<br><a href="edit_profile.php">Edit Profile</a><br>
								<br><a href="php_functions/logout.php">Logout</a><br>
								</p>
								
							</div>
							<div id="content">
							
								
								 <form name="writebox" onsubmit="return validateform()" action="home.php?id=<?php echo $user_id;?>" method="post" id="f">
								 <p style="font-size:25px;margin-left:2%;margin-top:2%;"> What's on your mind?? Write it and make the world know</p>
								 <input style="margin-left:2%;margin-top:2%;width:95%;height:30px;border:1px solid black;background-color:#fff;border-radius:5px;"type="text" name="title" placeholder="Write a title" size="70"/><br>
								 <textarea style="margin-left:2%;margin-top:2%;width:95%;height:200px;border:1px solid black;border-radius:5px;background-color:#fff;" cols="71" rows="4" name="content"placeholder="Write your glory"></textarea><br>
								 <select style="margin-left:2%;margin-top:2%;width:15%;height:10%;"name="topic">
									<option>Select Topic</option>
									<?php gettopics(); ?>
								</select>
								
								<input style="width:100px;height:30px;"type="submit" name="sub" value="Post to blog"/>
								 
								 
								 </form><br>
								<?php insertpost();   ?>
								<div id="posts">
								
									<h3 style="font-size:50px;text-align:center;">Most Recent Discussions</h3>
									<?php get_post(); ?>
									
								
								</div>
							</div>	
						
						 
							<div id="rightnav">	
								<p style="margin-left:20px;margin-top:30px;font-size:30px;">
								<a href="shub.html">No not Again</a><br></p>
								<p style="margin-left:80px;">--Shubham Tripathi (Engineer)<br><br></p>
								<p style="margin-left:20px;margin-top:30px;font-size:30px;">
								<a href="shub.html">I lived my live</a><br></p>
								<p style="margin-left:80px;">--Vipin dixit (Artist)<br><br></p>
								<p style="margin-left:20px;margin-top:30px;font-size:30px;">
								<a href="shub.html">She met me(Most read)</a><br></p>
								<p style="margin-left:80px;">--Arpit Saxena(Thinker-IITK)<br><br></p>
								<p style="margin-left:20px;margin-top:30px;font-size:30px;">
								<a href="shub.html">God and his ways(300 views)</a><br></p>
								<p style="margin-left:80px;">--Mailini Gupta (Engineer-IITB)<br><br></p>
								<p style="margin-left:20px;margin-top:30px;font-size:30px;">
								<a href="shub.html">Hona tha pyar</a><br></p>
								<p style="margin-left:80px;">--Avinash Raja(Engineer-IITM)<br><br></p>
							</div>
				
				</div>
			
		</body>
			
			
			
			
			
			
			
			
			
			
			
			</div>



</body>
</html>