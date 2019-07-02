<?php
session_start();
if(isset($_SESSION['username']))
{

}

else
{
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    
    
    <meta charset="utf-8">
    <meta name="Streetskills" content="">
    <meta name="Benz Barcelona" content="">

     <title>Streetskills</title>
    <link rel="stylesheet" href="CSS/acc_setting_style.css">
    <link rel="stylesheet" href="CSS/animation.css">
    <link rel="stylesheet" href="CSS/user_mainpage_style.css">
    <script type="text/javascript" src="javascript/jquery-3.1.1.js"></script>
    <script src="javascript/loadmore.js"></script>
    </head>
<body>
   <?php include 'includes/header.php';?>
        <div id="main_wrap">
         
            <div id="sett_nav">
            <ul>
                <li><a href="acc_settings.php">Account</a></li>
                 <li><a href="channels.php">Channels</a></li>
                 <li><a href="subcriptions.php">Subscriptions</a></li>
        
                </ul>
            
            </div>
    <div id="form_wrap">
             <p id="Setting_title">Account Information</p>
        
    <form action="settings.php" method="post">
        <img src="Images/user.png"><br>
        <button id="pic_change">Change Picture</button><br><br>
        <p>Username : <?php  echo $_SESSION['username'];?></p>
        <input type="text" placeholder="New Name" name="user_changed">
        <p>Email:<?php  echo $_SESSION['email'];?></p>
        <input type="text" placeholder="New Email" name="email"><br><br>
         <p>Password</p>
        <input type="password" placeholder="Old Password" name="old_pass"><br><br>
         <input type="password" placeholder="New Password" name="new_pass"><br> <br>
        <input type="submit" name="change_submit" value="Save Changes">
        </form>
    
        
      
        
        
        
    
    </div><!--form_wrap-->
    </div>
    
    <?php include 'includes/footer.php';?>
    </body>
</html>
    
    
    