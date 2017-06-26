

<?php
session_start();
include("functions.php");


?>

<!DOCTYPE html>

      <head>
            <title> DONUT:GIthub of writing</title>
            <link rel="stylesheet" href="style.css"/>
      </head>
      
      
      

<body>


      <div class= "container">
                               <!--Container starts here-->
             <div id="head_wrap">
                                      <!--Headwrap starts here-->
                <a href="http://www.facebook.com" >   <img id="shub" src="logo3.jpg" float:left;/> </a>
           
                   <div id="header">


                                    <form id="form1" action="index.php" method="post">
                                    <input type="email" name="email" placeholder="Email"/>
                                    <input type="password" name="pass" placeholder="******"/>
                                    <button>Login</button>
                                     </form>

                                            <!--header Ends here-->

                     </div>


                           <!--headwrap ends here-->
                </div>
                

                      <div id="content">

                             <!--Content starts here-->
                           <div id="donut1">
                           
                            </div>

                                  <div id="form2">
                                  
                                  <!--Form2 starts here-->

                                  <form action="#" method="post">
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
                                          <option>India</option>
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
                                          <td><input type="date" name="u_birthday" placeholder="Enter your name"/> </td>
                                       </tr>
                                       <tr>
                                       <td colspan="6">
                                       <button name="sign_up"> Sign Up</button>
                                       </td>

                                </table>
                            </form>             <!--form2 ends here-->
							<?php 
							include("user_insert.php");
							?>
							
                     </div>        <!-- form2 div ends here-->               

					 <!-- Content ends here-->
				
               </div>
					
			
			   <div id="footer">
				<h2>&copy; Shubham Tripathi</h2>

				
							   
           </div>

</body>
          
				


</html>