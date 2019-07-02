
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="CSS/login_signup_style.css">
    <link rel="stylesheet" type="text/css" href="CSS/animation.css">
</head>
<body>
  <a href="index.html">Back to Site</a>
    <div id="form">
        <div class="expandOpen">
            <div class="pullDown">
                <img src="Images/logo%20v2.png"></div>
        <div id="container">
            <form action="includes/procs/signuproc.php" method="post">
            <input type="text" name="username" placeholder="Username" maxlength="60" required><br>
            <input type="password" name="password" placeholder="Password" maxlength="20" required><br>
            <input type="password" name="copassword" placeholder="Confirm Password" maxlength="20" required><br>
                <button type="submit" name="signup_submit" id="signup_submit">Sign Up</button>
 
        </form>
        </div>
        </div>
    </div>
<div id="footer">
    
<p>&copy;Streetskills 2018</p>
    </div>   
    
    
</body>
    
</html>