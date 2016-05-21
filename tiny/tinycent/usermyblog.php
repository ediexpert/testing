<?php  session_start();
include('connection.php');
 $pblog = $_GET["bid"];
 
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
    </style>
    
    
   <!------ Get Social Widget -------!>

<script>
    var GETSOCIAL_ID = "109e5c";
    var GETSOCIAL_LANG = "en";
    (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = '//api.at.getsocial.io/widget/v1/gs_async.js?id='+GETSOCIAL_ID;
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
    })();
    </script>    
     
    
     
  </head>

  <body role="document">
 
    <?php include("includes/header2.php"); ?>

    <div class="container theme-showcase" role="main">
		 <div class="row">
 
		<div class="col-md-12 center-block">
		 <?php
		 $getBlog = mysql_query("SELECT * FROM ManagePost where id = '$pblog'");
		 $fetchblog = mysql_fetch_array($getBlog);
		 $userid = $fetchblog["userid"];
				$sql = mysql_query("SELECT * FROM User_Registration WHERE id = '$userid' ");
				$rows = mysql_fetch_array($sql);
		  

		 ?>
		  
			<div class="col-md-2"></div>
			 <div class="col-md-8">
			  <div>
			  <br>
			  <br>
			  
			  <h2 class="text-center"><?php echo $fetchblog["title"]; ?></h2>

				<a href="#"><img src="uploads/<?php echo $fetchblog["image"]; ?>" width="100%" height="315px"></a>
				
				<p style="font-size:14px;text-align:justify;word-wrap: break-word;padding:10px;">
					
					<pre><h4><font face="Arial"><?php echo $fetchblog["description"]; ?><h4></pre>
				</p>
				
				<!----Get Social Fetch ------!>
				
				<div class="getsocial gs-inline-group"></div>
				
				<hr>
				<strong>Posted By : </strong><?php echo $rows["displayName"]; ?>
				<div class="about"><h4 class="text-left"> 
				
				<?php 
                    	$sql = mysql_query("SELECT * FROM User_Registration WHERE id = '$userid' ");
                    	$row = mysql_fetch_array($sql);
                     ?>




					<div class= "col-sm-10 "> <div> <img id="imgprvw" src= "images/<?php echo $rows["user_image"]; ?>" alt="User Image Preview" width="100px" height="100px" /> 








<br><br>  About : <?php echo $rows["displayName"]; ?>
			
			
								
			
			
				</h4>
					<p><br><br><br><br><br><br><br>					
					 <style="text-align:justify">
					<?php echo $rows["Aboutme"]; ?>
					</p>
				</div>
			  </div>
			 </div>
			 
			<div class="col-md-2"></div>
			  <!--<div class="col-md-4">
				<div class="middlepart"><p class="ad">Ad slot</p></div>
			 </div>
			  <div class="col-md-3">
			  <div class="slot"><hr class="partation"><div class="read">Read More</div></div>
			 </div>-->
			 
			  
		 </div>
		 
		</div>
		
    </div> <!-- /container -->
   
    <div class="footer">

    <div class="footercss"> <strong>All right reserved |</strong> <strong>Copyrights 2015 | Tinycent</strong></div>

   </div>
  </body> 

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>