<?php 
session_start();
include '../../includes/config.php';
  

    if($_POST){
        
        $username=htmlentities($_POST['username']);
        $password=htmlentities($_POST['password']);
        
        
        
        if($result=$conn->query("SELECT * FROM users where username= '$username ' AND password = '$password' ")or die($db->error)){
            
            $_SESSION['username']=$username;
            
        if($result->num_rows)
        {
            while($row=$result->fetch_object()){
                
                $_SESSION['userId']=$row->userId;
                $_SESSION['email']=$row->email;
                $_SESSION['verified']=$row->verified;
                $_SESSION['pic']=$row->profile_pic;
                
                
                
                
            }
            
            header('location:../../user_mainpage.php');
           
        }
        
        else{
           
            echo "<script type='text/javascript'>
            alert('Your email or password did not match our records');
            location='../../Login.php';
            </script>";
        }

        
        
        
    }
    }
 mysqli_close($conn);
?>

<html>
<head><style>
body{background:darkgrey;}
</style></head>

</html>