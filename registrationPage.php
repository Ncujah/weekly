
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <style type="text/css">
            td
            {
             border-color: black;
             background-color: pink;
             border-bottom-color: maroon;border-top-color: maroon;
            }

        </style>
    </head>
    <body style="background-color: black"><div align="center">
            <table width="85%" border="16" style="width: 80%">
            <thead>
                <tr>
                    <td colspan="4" align="center"><h2>Welcome to Ncumisa's Registration Page</h2></td>
                </tr>
                
            </thead>
            <tbody>
                <tr>
                    <td colspan="4">
                       <form method="POST" action="<?php $_SERVER['../../../../xampp/htdocs/PHP_SELF'];?>">
                           <table border="0" width="80%" cellpadding="0" cellspacing="0">
                               <thead>
                                   <tr>
                                       <th colspan="2">Register a new User</th>
                                   </tr>
                               </thead>
                               <tbody>
                                   <tr>
                                       <td>Username</td>
                                       <td><input type="text" name="username" value="<?php echo $_POST['username'];?>" /></td>
                                   </tr>
                                   <tr>
                                       <td>First Name </td>
                                       <td><input type="text" name="address" value="<?php echo $_POST['firstname'];?>" /></td>
                                   </tr>
                                   <tr>
                                       <td>Last Name </td>
                                       <td><input type="text" name="cell_num" value="<?php echo $_POST['lastname'];?>" /></td>
                                   </tr>
                                   <tr>
                                       <td>Password</td>
                                       <td><input type="password" name="password" value="<?php echo $_POST['password'];?>" /></td>
                                   </tr>
                                   <tr>
                                       <td>Confirm Password</td>
                                       <td><input type="password" name="Cpass" value="<?php echo $_POST['Cpass'];?>" /></td>
                                   </tr>
								   <tr>
                                       <td>Email</td>
                                       <td><input type="email" name="email" value="<?php echo $_POST['email'];?>" /></td>
                                   </tr>
                                   <tr>
                                     <td colspan="2"><input type="submit" name="submit" value="Register User" />
                                       <input type="reset" name="Reset" value="Clear Info"></td>
                                   </tr>
                                   <tr>
                                       <td colspan="3" style="color: red;font-size:x-small;font-family:Lucida Calligraphy;">
                                       <?php
                                        if($_POST['submit']=='Register User')
                                       {
										
  											if(!('^(a-zA-Z){5,}(0-9){2,}+&',$Username))
											 {									 
                                                    echo "Username is incorrect<br>";
	  												exit;
     										  }
											 if(!Firstname)
        										{
        
        										    echo 'enter your first name<br>';
													exit;
     										   }
											if(!$Lastname)
        									{
       
           											 echo 'enter your last name<br>';
												exit;
      										  }
       										 if(!eregi('^(a-zA-Z){5}(0-9){2,}|(a-zA-Z){3}(0-9){5}+&',$Password))
       										 {
												   echo 'provide password<br>';
													exit;
       										 }
        									if($Confirm_Password!=$Password)
       									 	{
            
           										 echo 'password entries have to match<br>';
												exit;
      									  }
        
									if (!eregi('^[a-zA-Z0-9_\-\.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$', $Email))
       								 {
           
           								 echo 'Your email address is invalid<br>';
										 exit;
   								     }
		

									else
      							  {
          							 echo "You are registered";
       							 }
                                        }
										
                                        ?>                                       </td>
                                   </tr>
                               </tbody>
                           </table>
                      </form>                    </td>
                </tr>
                <tr>
                    <td style="text-align: center" colspan="4"><a href="mailto:booshhof@gmail.com">Email: Ncumisa Booi</a></td>
                </tr>
            </tbody>
      </table>
    </div>
    </body>
</html>
