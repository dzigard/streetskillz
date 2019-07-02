


<?php 
include 'includes/config.php';
 
  $view=intval($_GET['vId']);
if($result=$conn->query("SELECT * from akona where vidId='$view'")){
        
       
        if($result->num_rows)
        {
            while($row=$result->fetch_object())
            {
            $user=$row->username;
            $pic=$row->profile_pic;
            $category=$row->category;
            $title=$row->title;
            $desc=$row->description;
            $video=$row->fileName;
            $thumb=$row->thumbnail;
             $newd=$row->uploadedOn;   
            }
            
            
        }
        
        
    }
   ?>
<!DOCTYPE html>
<html>
<head>
    
    
    <meta charset="utf-8">
    <meta name="Streetskills" content="">
    <meta name="Benz Barcelona" content="">

     <title>Streetskills</title>
    
    <link rel="stylesheet" href="CSS/animation.css">
    <link rel="stylesheet" href="CSS/view_style.css">
    <script type="text/javascript" src="javascript/jquery-3.1.1.js"></script>
    <script src="javascript/loadmore.js"></script>
    <script src="javascript/afterglow.min.js"></script>
    </head>
<body>
   
    <?php
    include 'includes/config.php';
     include 'includes/homver.php';
    
    
   ?>
    <!-- Page Content The videos -->
   
    <div class="content">
       
       
       <div class="videowrapper">
            <video class="afterglow" width="600" height="480">
  <source  type="video/mp4" src="uploads/videos/<?php echo $video;?>">
  <source src="uploads/videos/<?php echo $video;?>" type="video/3gp">
<source src="uploads/videos/<?php echo $video;?>" type="video/avi">
            <source src="uploads/videos/<?php echo $video;?>" type="video/wmv">
                <source src="uploads/videos/<?php echo $video;?>" type="video/flv">
                <source src="uploads/videos/<?php echo $video;?>" type="video/mpeg4">
           </video> 
             </div>
 
        <section class="details">
           <h3><?php echo $title;?></h3>
           <h5>Uploaded by:<?php echo $user;?> On <?php echo $newd;?><img style="height:40px;width:40px;position:relative;border-radius:100%;background:lightgrey;left:10px;top:10px;" src="Images/<?php echo $pic;?>"> </h5>
            <h4>Description</h4><h6 class="description"><?php echo $desc;?></h6>
            <button class="subscribe_but" type="button">Subscribe</button>
          </section>
           
           
    
    </div>
    
<hr>
    
<!--footer---->
    <div id="footer_container">
    
        <ul id="footer_1">
            <li><a href="#" id="copyright">&copy;2018 StreetSkills, All rights reserved.</a></li>
            <li><a href="#">About</a><span> | </span></li>
            <li><a href="#">Copyright</a><span> | </span></li>
            <li><a href="#">Terms</a><span> | </span></li>
            <li><a href="#">Privacy</a><span> | </span></li>
            <li><a href="#">Policy &amp; Safety</a></li>
           
        </ul>
  
    
 
    </div>

</body>

</html>