<?php
    
                include '../../includes/config.php';
                    
                  
                        
                        
                        $username   = htmlentities($_POST['username']);
                        $password  = htmlentities($_POST['password']);
                        $copassword  = htmlentities($_POST['copassword']);
                        $newd=date("Y/m/d H:i:s");

                        
                        if(!preg_match("/^[a-zA-Z0-9]*$/",$username)){

                      
                        
                           
                            
                        echo "<script type='text/javascript'>
                            alert('no special characters allowed');
                            location='../../sign_up.php';
                            </script>";
                            die();
                            
                        
                        }
                            
                        
                        
                          if(strlen($password)<8){
                              echo "<script type='text/javascript'>
                            alert('Password must be at leas 8 characters');
                            location='../../sign_up.php';
                            </script>";
                            die();
                             
                              
                              if(strlen($password)>16){
                                  
                                  echo "<script type='text/javascript'>
                            alert('Password too long');
                            location='../../sign_up.php';
                            </script>";
                            die();
                              }
                          }
                        
                            if($password!=$copassword){
                               echo "<script type='text/javascript'>
                            alert('Password Does not Match');
                            location='../../sign_up.php';
                            </script>";
                            die();
                            }    
                        
                if($result=$conn->query("SELECT username from users where username='$username'"))
                {
                    
                 if($result->num_rows){
                     
                     echo "<script type='text/javascript'>
                            alert('username already exists');
                            location='../../sign_up.php';
                            </script>";
                 }
                    else {
                        
                        if($insert=$conn->query("INSERT INTO users(username,password,created)VALUES('$username','$password','$newd')"))
                            
                            
                        {
                            header('location:../login.php');
                        }
                
                    }
                    
                }
                        

                                    

    ?>
