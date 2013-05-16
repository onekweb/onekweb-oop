<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Onekweb.com</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	
   <div id="content"> 
  
        <form id ="login" action="<?php echo $_SERVER['PHP_SELF'];?>"  method="post">
            <h1>Registration</h1>

            <fieldset id="inputs">
                <p><input id="userame"type="name" name="user_name" value="" placeholder="Username"></p>
                <p><input id="userame"type="name" name="user_email" value="" placeholder="Email"></p>        
                <p><input id="password"type="password" name="user_password_new" value="" placeholder="Password"></p>
                <p><input id="password"type="password" name="user_password_repeat" value="" placeholder="Confirm password"></p>
		
                </fieldset>        
            <fieldset id="actions">
                <input id="submit"type="submit" name="submit" value="Register"><br/>
                    <a href="index.php">Back to Login Page</a> 
            </fieldset>
               
        </form>

   </div>                
</body>
</html>
