<div id="content">

                             <!--Content starts here-->
								<script>
								function validateform() {
										var n = document.forms["signup"]["u_name"].value;
										if (n == "") {
										alert("Name must be filled out");
									return false;
									}
									var p=document.forms["signup"]["u_password"].value;
									if(p==""){
										alert("Password required");
										return false;
									}
									var e=document.forms["signup"]["u_email"].value;
									if(e==""){
										alert("Email required");
										return false;
									}
									
									
									var c=document.forms["signup"]["u_country"].value;
									if(c==""){
										alert("Country required");
										return false;
									}
									var s=document.forms["signup"]["u_sex"].value;
									if(s==""){
										alert("Sex required");
										return false;
									}
									var d=document.forms["signup"]["u_birthday"].value;
									if(d==""){
										alert("Birthday Required");
										return false;
									}
									
								}
								</script>

                                  <div id="form2">
                                  
                                  <!--Form2 starts here-->

                                  <form name="signup"action="" onsubmit="return validateform()" method="post">
									<h2> Sign Up Here </h2>
                                   <table>
                                       <tr>
                                          <td align:"right">Name<br><br><br></td>
                                          <td><input type="text" name="u_name" placeholder="Enter your name"/> </td>
                                       </tr>
									   <tr>
                                          <td align:"right">Password <br><br><br></td>
                                          <td><input type="password" name="u_password" placeholder="Enter your password"/><p id="para" style="color:blue;font-size:20px;"></p> </td>
                                       </tr>
                                       <tr>
                                          <td align:"right">Email<br><br><br></td>
                                          <td><input type="email" name="u_email" placeholder="Enter your Email"/> </td>
                                       </tr>
                                       <tr>
                                          <td align:"right">Country <br><br><br></td>
                                          <td>
                                          <select name= "u_country">
                                          <option>Select a counrty</option>
                                          <option selected>India</option>
                                          <option> Afganistan</option>
                                          <option>United states</option>
                                          <option>Nigeria</option>
                                          </td>
                                       </tr>
                                       
                                       </tr>
                                       <tr>
                                          <td align:"right">Sex:<br><br><br></td>
                                          <td>
                                          <select name= "u_sex">
                                          <option>Select Sex</option>
                                          <option>Male</option>
                                          <option> Female</option>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td align:"right">Birthday<br><br><br></td>
                                          <td><input type="date" name="u_birthday" value="24-03-1997" /> </td>
                                       </tr>
                                       <tr>
                                       <td colspan="6">
                                       <button name="sign_up"> Sign Up</button>
                                       </td>

                                </table>
                            </form>             <!--form2 ends here-->
							<?php 
							include("php_functions/user_insert.php");
							?>
							
							
                     </div>        <!-- form2 div ends here-->               

					 <!-- Content ends here-->
				
               </div>