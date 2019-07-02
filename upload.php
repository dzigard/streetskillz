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
    <link rel="stylesheet" href="CSS/upload_style.css">
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
             <p id="upload_title">Select file to upload:</p>
        
     <form action="includes/procs/uplodproc.php" method="post" enctype="multipart/form-data">
  
    
	<label for="title" id="lab_title">Title:</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
         
         
         <select id="category" name="category" >
     <option value="Uncategorized">Select Category</option>
     <option value="Art">Art</option>
     <option value="Dance">Dance</option>
    <option value="Games">Games</option>
    <option value="News">News</option>
    <option value="Movies">Movies</option>
    <option value="Music">Music</option>
    <option value="Sports">Sports</option>
</select>
         
         
         <br><br /><input type="text" name="title"  placeholder="Video Title" id="title">
         
         <br /><br />
	<label id="lab_thumbnail">Choose Thumbnail:</label><br /> <br /> <output id="list"></output> <input type="file" name="img_file"  id="img_file" onclick="document.getElementById('img_file').addEventListener('change', handleFileSelect, false);" /> <br /> <br />
         
         <script type="text/javascript">
	  function handleFileSelect(evt) {
        var files = evt.target.files;
        var f = files[0];
        var reader = new FileReader();
         
          reader.onload = (function(theFile) {
                return function(e) {
                  document.getElementById('list').innerHTML = ['<img src="', e.target.result,'" title="', theFile.name, '" width="300px" " height="200px"  /><br>'].join('');
                };
          })(f);
           
          reader.readAsDataURL(f);
}
</script> 
            
Description:<br/><br /><textarea  name="desc"  id="desc"rows="10" cols="10" maxlength="240"> 
    </textarea><br><br>
    
<input name="file_input"  id="file_input" type="file" /><br><br><br>
<input type="submit"  name="upload_submit" id="upload_submit" value="Upload" /><br><br><br>
<img src="Images/ajax-loader.gif" id="loading-img" style="display:none;" alt="Please Wait"/>
</form>
        

        
        
    
    </div><!--form_wrap-->
    </div>
    
    <?php include 'includes/footer.php';?>
    </body>
</html>
    
    
    