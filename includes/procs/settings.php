  <?php
        
        include '../../includes/config.php';
                    if($_POST){
                        
                    session_start();
                        $user_changed=htmlentities($_POST['user_changed']);
                        $email=htmlentities($_POST['email']);
                        $old_pass=htmlentities($_POST['old_pass']);
                        $new_pass=htmlentities($_POST['new_pass']);
;                       $name=$name=$_SESSION['username'];
                        
                        
                            if($user_changed){
                                
                                if($update=$conn->query("UPDATE users SET username='$user_changed' where username='$name'"))
                                {
                                    $_SESSION['username']=$user_changed;
                                    header('location:../../acc_settings.php');
                                }
                                 
                       
                            }
                        
                        
                        
                         if($email){
                             
                              if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                echo "<script type='text/javascript'>
                            alert('Invalid e-mail format');
                            location='../../signup.php';
                            </script>";
                            die();
                               
                               
 
                            }
                                
                             else   ($update=$conn->query("UPDATE users SET email= '$email' where username='$name'"))
                                {
                                    $_SESSION['email']=$email;
                                    header('location:../../acc_settings.php');
                                }
                                 
                       
                            }
                        
                           if($old_pass&&$new_pass){
                                
                                if($result=$conn->query("SELECT password FROM users where username='$name' and password='$old_pass'"))
                                {
                                    if($result->num_rows){
                                        
                                        if($update=$conn->query("UPDATE users SET password='$new_pass' where username='$name'"))
                                        {
                                    header('location:acc_settings.php');
                                        }
                                        
                                    }
                                    
                                    else
                                        {
                                            echo "wrong password";
                                        }
                                }
                                 
                       
                            }
                        
                        
                            
                                
                            }




                       

?>
        