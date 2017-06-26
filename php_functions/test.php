<?php
include('connection.php');

$get_topics="select * from users";
$run=mysqli_query($con,$get_topics);

while($raj=mysqli_fetch_array($run))
{
		$username=$raj['user_name'];
		$user_password=$raj['user_pass'];
		echo "$username $user_password";
		echo"<br>";

}	

?>