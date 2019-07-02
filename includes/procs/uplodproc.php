<?php
    
include '../../includes/config.php';
session_start();

$title=htmlentities($_POST['title']);
$category=htmlentities($_POST['category']);
$desc=htmlentities($_POST['desc']);
     $userId=$_SESSION['userId'];
    $name=$_FILES['file_input']{'name'};
    $size=$_FILES['file_input']{'size'};
    $type=$_FILES['file_input']{'type'};
    $tmp_name=$_FILES['file_input']{'tmp_name'};
           $newd=date("Y/m/d H:i:s");
    
      $img_name=$_FILES['img_file']{'name'};
    $img_size=$_FILES['img_file']{'size'};
    $img_type=$_FILES['img_file']{'type'};
    $img_tmp_name=$_FILES['img_file']{'tmp_name'};
        
        if(isset($name))
        {

if(($type=='video/mp4'||$type=='video/3gp'||$type=='video/avi'||$type=='video/wmv'||$type=='video/flv'||$type=='video/mpeg4'))



{           
    
    
    
            $location='../../uploads/videos/';
            $location2='../../uploads/thumbnails/'; 
         if(move_uploaded_file($tmp_name,$location.$name)){
             
             
             if(move_uploaded_file($img_tmp_name,$location2.$img_name)){
             }
             
               if($insert=$conn->query("INSERT INTO upload (userId,category,title,description,fileName,thumbnail,uploadedOn)VALUES('$userId','$category','$title','$desc','$name','$img_name','$newd')")or die($db->error)){
                   
                   
                    header('location:../../user_mainpage.php');
                    echo 'onload=alert(video uploade succesfully)';
                }
                
                    }
    
            
                
        
                
                        
                
}
else{
    
    echo 'wrong video format or file limit is 10GB';
    
}
            
            
        }

    else 
    {'please choose a video to upload';
    }

            


                        
       ?>