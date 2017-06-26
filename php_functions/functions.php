<?php

$con=mysqli_connect("localhost","root","","social_network") or die("connection_aborted");
					// functions for getting topics in the select box
					function gettopics()
					{ 
						global $con;
					$get_topics="select * from topics";
					$run_topics=mysqli_query($con,$get_topics);
					
					while($row=mysqli_fetch_array($run_topics)){			
							$topic_id=$row['topic_id'];	
							$topic_name=$row['topic_name'];
								
								echo "<option value='$topic_id'>$topic_name</option>";
								
						}
					}
											
								
								
								
								
							//function for inserting posts	
								function insertpost(){
									
									
									if(isset($_POST['sub'])){
										global $con;
										global $user_id;
										$title=$_POST['title'];
										$content=$_POST['content'];
										$topic=$_POST['topic'];
										
										$insert="insert into posts(user_id,topic_id,post_title,post_content,post_date)values('$user_id','$topic','$title','$content',NOW())";
										$run=mysqli_query($con,$insert);
										
										if($run){
											$update="update users set posts='yes' where user_id='$user_id'";
											$run_update=mysqli_query($con,$update);
											echo"<h2>Posted to Timeline,amazing!!</h2>";
											
										}
										
										
									}
									
									
									
								}
								// function for displaying post
								function get_post(){
									global $con;
									$per_page=5;
									if(isset($_GET['page'])){
										
										$page=$_GET['page'];
										
									}else{
										$page=1;
										
									}
									 
									$start_from=($page-1)*$per_page;
									$get_posts="select *from posts ORDER by 1 DESC LIMIT $start_from,$per_page";
									$run_posts=mysqli_query($con,$get_posts);
									
									while($row_posts=mysqli_fetch_array($run_posts)){
										$post_id=$row_posts['post_id'];
										$user_id=$row_posts['user_id'];
										$post_title=$row_posts['post_title'];
										$content=$row_posts['post_content'];
										$post_date=$row_posts['post_date'];
										//getting the user who has posted the content
										$user="select *from users where user_id='$user_id' AND posts='yes'";
										
										$run_user=mysqli_query($con,$user);
										$row_user=mysqli_fetch_array($run_user);
										$user_name=$row_user['user_name'];
										$user_image=$row_user['user_image'];
										
										//now displaying all at once
										
										echo"<div id='content' style='margin-left:0px;width:100%;height:80px;background-color:#eee;'>
											<p><img src='profile.jpg' width='50px' height='50'></p>
											<h3><a href='user_profile.php?user_id=$user_id'>$user_name</a></h3>
											<h3>$post_title</h3>
											<p>$post_date </p>
											<a href='single.php?post_id=$post_id' style='float:left;'><button>See replies
											
											</div>
											";
											
										
										
										
									}
									
									include("pagination.php");
									
								}
								
								
								
								
								
								
 
?>
