<!DOCTYPE html>
<html lang="en">
    <head>
       
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
         <title>Registration</title>
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/form.css" />
    </head>
    <body>
    <div class=topnav>
    <a href="index.php">Register</a>
    <a href="ViewUsers.php">View Users</a>

</div>
        <div class="header">
        <h1>Sign Up Form</h1>
        </div>
        <div class="content_section row">
            <div class="content">
				<form action="process/process.php" method="POST" autocomplete="off" >
                <div><label for="name">FullName:</label></div>
				<div>
					<input type="text" name="name" maxlength="50" Placeholder="Please enter your full name" required autofocus />
				</div>
                <div><label for="email"> Email:</label></div>				
				<div>
					<input type="email" name="email" maxlength="50" Placeholder="Please enter your email" required />
				</div>
                <div><label for="password">Password:</label></div>			
				<div>
					<input type="password" name="password" maxlength="100" Placeholder="Please enter your password" required />
				</div>
                <div><label for="confpassword">Confirm Password:</label></div>			
                <div>
                    <input type="password" name="confpassword" Placeholder="Confirm your password"  required/>
                </div>
				<div>
					<input type="submit" name="register" value="Register" />
				</div>
                  </form>  
            </div>
        </div>
        </body>