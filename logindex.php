<?php
include('login.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: profile.php"); // Redirecting To Profile Page
}
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="CSS/stylesheet_login.css"/>
<head>
<style>
img {
    width: 100%;
    height: 130px;
}
td{
    font-size: 20px;
}
h1{
    background-color: sandybrown;
    width: auto;
    height: 60px;
    padding-top: 40px;
    padding-bottom: 25px;
}

</style>
<title>Login </title>
<div id="first" class="loginField">
	<center>
        <H1 class="center"> School Logo/Banner Goes Here</H1>
	</center>

<div id="second" class="center">
    <form action="" method="post">
  		 <table align="center">
            <tr>
				<td>
                <input type="text" class="fadetext" placeholder="Username"/>
				</td>
            </tr>

			    <td> 
				<input type="password" class="fadetext" placeholder="Password"/> 
                </td>
            </tr>
		
                <td>
                <input name="submit" type="submit" class="search" value="LOGIN"></button>                               
                </td>
             </tr>
             <tr>
                <td>
                      <br>                                 
                </td>
             </tr>
             <tr>
                <td>
                <p style="font-size: 10px;"> <a style="color: red" href="#">Forgot Password</a> | <a style="color: red" href="#">IT Support Services</a>
                <br><br>
                By signing onto this portal, you agree to abide by its 
                <a href="#">Terms of Use</a>. Violations could lead to restriction of portal privileges and/or disciplinary action.
                </p>                                 
                </td>
             </tr>

          </table>
</form>
		  
	   </div>

</div>
</body>
</html>