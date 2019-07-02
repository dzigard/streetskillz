
<!DOCTYPE html>
<html>
<head>
    
    
    <meta charset="utf-8">
    <meta name="Streetskills" content="">
    <meta name="Benz Barcelona" content="">

     <title>Streetskills</title>
    
    <link rel="stylesheet" href="CSS/animation.css">
    <link rel="stylesheet" href="CSS/home_style.css">
    <script type="text/javascript" src="javascript/jquery-3.1.1.js"></script>
    <script src="javascript/loadmore.js"></script>
    </head>
<body>
   <div id="header_container">
    <div id="header">
  
        <a href=index.php><img src="Images/logo%20v2.png" id="logo"/></a>
       
            <ul class="nav">
                <li id=menu>
                    <a href=#><img src="Images/menu.png" onmouseover="this.src='Images/menu_hover.png'"
                    onmouseout="this.src='Images/menu.png'" id="menu_button"></a>
                   
                   
                    <ul id="sub_menu">
                        <li><a href=index.php>Home</a></li>
                        <li><a href="#">Top Videos</a></li>
                       <div id="cat_hover">
                        <li><a href= "#">Categories</a>
                        <ul id="cat_submenu">
                            <li><a href="Categories.php">Art</a></li>
                            <li><a href="Categories.php">Dance</a></li>
                            <li><a href="Categories.php?catg=Games">Games</a></li>
                            <li><a href="Categories.php?catg=News">News</a></li>
                            <li><a href="Categories.php?catg=Movies">Movies</a></li>
                            <li><a href="Categories.php?catg=Music">Music</a></li>
                            <li><a href="Categories.php?catg=Sports">Sports</a></li>
                            </ul>
                        
                        </li>
                        </div>
                    </ul>

                </li>
                <li id="search">    
                    <form action="" method="">
                         <input type="text" name="searchbar" id="search_bar" placeholder="Search . . .">
                         <input type="button" name="search_button" id="search_button">
                        
                    </form>
                </li> 
             
                <li id="login">
                    <a href="Login.php">Login</a>
                </li>
            
            </ul>
       </div>
        
    </div>
   
    <!-- Page Content The videos -->
   
    <div class="content">
       <p>Recently Added</p>
       
       <div class="videos">
            
           <?php
           include 'includes/config.php';
           $catg=$_GET['catg'];
           
           if($result=$conn->query("SELECT *  from upload where category = '$catg' ORDER by uploadedOn DESC LIMIT 12"))
           {
               if($result->num_rows){
                   
                   while($row=$result->fetch_object())
                       
                   {
           ?>
                           
           
           <?php
           
                    foreach($result as $res){
                    $vidId=$res['vidId'];
                    $thumb=$res['thumbnail'];
                    
                       
           
           ?>
           
           <div id="thumbnails">
           <a href="view.php?vId=<?php echo $vidId; ?>"><img src="uploads/thumbnails/<?php echo $thumb;?>"></a>
            </div>
           
           <?php }?>
           
           
           
           <?php
           
                   }
                   
               }
           
           }
           
           ?>
           
           
           
           
        </div>
           

   /*<div id="button_load">
            <a href="" id="loadMore">Load More</a></div>
    </div>
     */ 
    
    

    
<!--footer---->
    <?php include 'includes/footer.php';?>

</body>

</html>