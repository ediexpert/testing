<?php
session_start();
include("connection.php");
$Eid  = $_GET["eid"];
 ?>
 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/favicon.png" type="image/png" />

    <title>TinyCent</title>

    <!-- Bootstrap core CSS -->
	
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="theme.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
   
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
   body{
    margin-top: 100px;
   }
   .footer{
    margin-bottom: 0px;
    text-align: center;
	padding-top: 300px;
   }
   .footercss{
   background-color:#ddd;
   padding-bottom:0px;
   height:60px;
   padding-top:30px;
 
   }
  .image-preview-input {
    position: relative;
    overflow: hidden;
    color: #333;
    background-color: #fff;
    border-color: #ccc;
    margin-left: 6px;
    width: 150px;
    height: 150px;
    padding-top: 34px;
}
.image-preview-input input[type=file] {
	position: absolute;
	top: 0;
	right: 0;
	margin: 0;
	padding: 0;
	font-size: 20px;
	cursor: pointer;
	opacity: 0;
	filter: alpha(opacity=0);
}
.image-preview-input-title {
    margin-left:2px;
}
   div#submitForm input {
  background: url("img/submit-post-button.png") no-repeat scroll 0 0 transparent;
  color: #fff;
    cursor: pointer;
    font-weight: bold;
    height: 48px;
    padding-bottom: 2px;
    width: 162px;
    border: 0px;
	margin-left: 182px;}
div#plagarism input {
    background: url("img/plagiarism-check-button.png") no-repeat scroll 0 0 transparent;
    color: #fff;
    cursor: pointer;
    font-weight: bold;
    height: 48px;
    padding-bottom: 2px;
    width: 203px;
    border: 0px;
    margin-left: 164px;
}
img#imgprvw {
    margin-left: 171px;
    margin-top: -150px;
}
.buttonword{
 background: url(img/count-words-button.png) no-repeat !important;
            cursor:pointer;
                        border: none;
width: 228px;
    height: 70px;
	margin-left: 276px;

}
.wrdtxt {
    text-align: center;
    margin-top: -83px;
    padding: 10px;
}
 
    </style>
	  <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>
<script type="text/javascript">
function showimagepreview(input) {
if (input.files && input.files[0]) {
var filerdr = new FileReader();
filerdr.onload = function(e) {
$('#imgprvw').attr('src', e.target.result);
}
filerdr.readAsDataURL(input.files[0]);
}
}
</script>
  </head>

  <body role="document">
 
    <?php include("includes/header2.php"); ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
		&nbsp;
		</div>
		<div class="col-md-12">
		&nbsp;
		</div>
		<div class="col-md-12">
		&nbsp;
		</div>
		<div class="col-md-12">
		&nbsp;
		</div>
	</div>
 </div>
    <div class="container theme-showcase" role="main">




   <form class="form-horizontal" method="post" action="edit_post.php?eID=<?php echo $Eid ; ?>" name="wordcount"  enctype="multipart/form-data" role="form">   
	<?php 
	$sql = mysql_query("SELECT * FROM ManagePost WHERE id = '$Eid' ");
	$row = mysql_fetch_array($sql);
	?>
     <div class="row">
	 
     <div class="col-md-3">
	  
     </div>
	 
<div class="col-md-6">
<?php if(isset($_GET["error"])){ ?>
<div style="color:red;text-align:center;" ><h4> <?php  echo $_GET["error"]; ?></h4></div>
  <?php }else if(isset($_GET["success"])){ ?>
<div style="color:green;text-align:center;" ><h4> <?php  echo $_GET["success"]; ?></h4></div>
  <?php } ?>
  <div class="form-group">
			<label for="username" class="col-sm-2"></label>
		  <div class="col-sm-10">   
		   <input type="text" name="post_title" value="<?php echo $row["title"]; ?>" class="form-control" placeholder="Title" id="email">
		  </div>
		 </div>
		 <div class="form-group">
			<label for="username" class="col-sm-2"></label>
		  <div class="col-sm-10">   
		   <div class="btn btn-default image-preview-input">
                        <img src="img/add-image.png" height="50px" width="50px"><br>
                        <span class="image-preview-input-title imagebrowse">Add Image</span>
						
                        <input type="file" id="filUpload" onchange="showimagepreview(this)" accept="image/png, image/jpeg, image/gif" name="post_image" value="<?php echo $row["image"]; ?>" style="height:100%;width:100%;"/> <!-- rename it -->
                    </div>
                    
                    <div><img id="imgprvw" src="uploads/<?php echo $row["image"]; ?>"  alt="Image Preview" width="355px" height="250px"/></div>
					<input type="hidden" name="oldimage" value="<?php echo $row["image"]; ?>">
		  </div>
		 </div>
		 <div class="form-group">
		 
			<label for="username" class="col-sm-2"></label>
		  <div class="col-sm-10">   
		   <textarea type="text" name="post_description" class="form-control desheight" placeholder="Description" id="email"><?php echo $row["description"]; ?></textarea>
		   
		  </div>
		 </div>
		 <div class="form-group">
			<label for="username" class="col-sm-2"></label>
		  <div class="col-sm-10">   
		   <input type="text" name="post_keywords" value="<?php echo $row["keywords"]; ?>" class="form-control" placeholder="Keyword" id="email">
		  </div>
		 </div>
		  <div class="form-group">
		  <input type="button" class="buttonword" onClick="countit()">

    	  <div class="wrdtxt"><input type="text" name="wordcount3" size="2" style=" height: 42px; margin-right: -394px; border-radius: 6px;border-color: 1px #66afe9;"></div>
			<label for="username" class="col-sm-2"></label>
		  <div class="col-sm-10">   
		   <div id="plagarism">
				<input type="submit" value="" name="addpost">
			</div>
		    
		  </div>
		 </div>
	   <div class="form-group">
			<label for="username" class="col-sm-2"></label>
		  <div class="col-sm-10">  
		  <div id="submitForm">
    <input type="submit" value="" name="addpost">
</div>
		
		  </div>
		 </div>
		 
	 </div>
	 
	 
<div class="col-md-3">
	 
     </div>	 
      
     
       
 </div>
  </form>
  
    </div> <!-- /container -->
   
    <div class="footer">

    <div class="footercss"> <strong>All right reserved |</strong> <strong> © Copyrights 2015 | Tinycent</strong></div>

   </div>
  </body> 

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	
	
	<script language="JavaScript">

function countit(){
var formcontent=document.wordcount.post_description.value
formcontent=formcontent.split(" ")
document.wordcount.wordcount3.value=formcontent.length
}
</script>
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>