<?php


$conn=mysqli_connect('127.0.0.1','root','','streetskills');
    
    if(!$conn){
        
        die('Connection error'.mysqli_connect_error());
    }



?>