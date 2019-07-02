<?php
session_start();
if(isset($_SESSION['username']))
{

}

else
{
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    
    
    <meta charset="utf-8">
    <meta name="Streetskills" content="">
    <meta name="Benz Barcelona" content="">

     <title>StreetSkillz</title>
    
    <link rel="stylesheet" href="CSS/animation.css">
    <link rel="stylesheet" href="CSS/user_mainpage_style.css">
    
    <script type="text/javascript" src="javascript/jquery-3.1.1.js"></script>
    <script src="javascript/loadmore.js"></script>
    </head>
<body>
    <?php include'includes/config.php';?>
 
    <?php include'includes/header.php';?>
      <div class="content">
      <h1 style="text-align:center;color:orange;font:40px bold tahoma;">Recently Added</h1>
       
       <div class="videos">
            
    
        
            
           <?php
           include 'includes/config.php';
           
           if($result=$conn->query("SELECT *  from upload ORDER by uploadedOn DESC LIMIT 12"))
           {
               if($result->num_rows){
                   
                   while($row=$result->fetch_object())
                       
                   {
           
                           
           
           
           
                    foreach($result as $res){

                    $vidId=$res['vidId'];
                    $thumb=$res['thumbnail'];
                    
                       
           
           ?>
           
           <div id="thumbnails">
           <a href="view.php?vId=<?php echo $vidId; ?>"><img src="uploads/thumbnails/<?php 
           if(empty($thumb)){
            echo '../../images/default.JPG';
           }
           else{echo $thumb;}
           
           
           ?>"></a>
            </div>
           
           <?php }
           
           
           
          
           
                   }
                   
               }
           
           }
           
           ?>
           
           
        </div>
           

   <div id="button_load">
            <a href="" id="loadMore">Load More</a></div>
    </div>
   
      
    
    

    
<!--footer---->
   <?php include 'includes/footer.php';?>

</body>

</html>