<?php
if(isset($_SESSION['username']))
{
session_start();
}

else
{
    header('location:index.php');
}
?>
   <div id="header_container">
    <div id="header">
  
        <a href=user_mainpage.php><img src="Images/logo%20v2.png" id="logo"/></a>
       
            <ul class="nav">
                <li id=menu>
                    <a href="#"><img src="Images/menu.png" onmouseover="this.src='Images/menu_hover.png'"
                    onmouseout="this.src='Images/menu.png'" id="menu_button"></a>
                   
                   
                    <ul id="sub_menu">
                        <li><a href="user_mainpage.php">Home</a></li>
                        <li><a href="#">Top Videos</a></li>
                       <div id="cat_hover">
                        <li><a href="#" i>Categories</a>
                        <ul id="cat_submenu">
                            <li><a href="">Art</a></li>
                            <li><a href="">Dance</a></li>
                            <li><a href="">Games</a></li>
                            <li><a href="">News</a></li>
                            <li><a href="">Movies</a></li>
                            <li><a href="">Music</a></li>
                            <li><a href="">Sports</a></li>
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
             
                <div id="acc_hover">
                <li id="login">
                    <a href="Login.php"><img src="Images/<?php echo $_SESSION['pic'];?>" class="profile_pic"><!--Input PHP username here-->
                        </a>
                </li>
            
                     <div id="account">
                        <img src="Images/<?php echo $_SESSION['pic'];?>" class="profile_pic2">
                         <div class="pentu">
                        <p>Name of User: <br><em><?php echo $_SESSION['username'];?></em></p>   
                         <p class="subscribers">Subscribers : </p>
                        <p>Email:</p>
                         <p class="email"> <?php  echo $_SESSION['email'];
                             
                             if($_SESSION['verified']==1){
                                 
                                 echo '<img style="height:20px;width:20px"src="images/check.png">"';
                             }
                                else{
                                    
                                    echo "<em> Needs Verification <em>";
                                    
                                }
                            
                             
                             ?>
                         
                         
                         <br>
                         <a href="logout.php">Log-Out</a>
                         </p>
                         </div>
                        
                         <a href="acc_settings.php"><img src="Images/settings.png" id="settings_image"></a>
                    
                </div>
                </div>
               
                 <li id="upload">
                     <a href="upload.php"><span id="up_tooltip">Upload</span></a>           
                </li>
            </ul>
       </div>
        
    </div>   