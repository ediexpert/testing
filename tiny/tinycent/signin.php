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
    div#submitForm input {
  background: url("img/sign-in-button.png") no-repeat scroll 0 0 transparent;
  color: #fff;
    cursor: pointer;
    font-weight: bold;
    height: 48px;
    padding-bottom: 2px;
    width: 100px;
    border: 0px;
    </style>
  </head>

  <body role="document">
 
    <?php include("includes/header.php"); ?>

    <div class="container theme-showcase" role="main">




    <form class="form-horizontal" method="post" action="login.php" role="form">  
     <div class="row">
	 
     <div class="col-md-3">
	  
     </div>
	 
<div class="col-md-6">
<?php if(isset($_GET["error"])){ ?>
<div style="color:red;text-align:center;" ><h4> <?php  echo $_GET["error"]; ?></h4></div>
  <?php }else if(isset($_GET["success"])){ ?>
<div style="color:green;text-align:center;" ><h4> <?php  echo $_GET["success"]; ?></h4></div>
  <?php } ?>
 <div class="wrapper">
        <label for="inputEmail3" class="col-sm-3 control-label"><img src="img/user.jpg" width="50px" height="50px"></label>
		<div class="col-sm-9">
			<input type="text" name="email" class="form-control signintext"  placeholder="Display Name /  Email" required="">
		</div>
<br><br><br><br>
		<label for="inputEmail3" class="col-sm-3 control-label"><img src="img/key.jpg" width="50px" height="50px" ></label>
		<div class="col-sm-9">
			 <input type="password" name="password" class="form-control signintext" required=""  placeholder="Password">
		</div><br><br><br><br>
		<label for="inputEmail3" class="col-sm-3 control-label"></label>
				<div class="col-sm-9">
		
		</div>
		 <div class="col-md-12">
 <div class="col-md-4"></div>

<div class="col-md-8">
<div id="submitForm">
    <input type="submit" value="" name="login">
</div>
</div>
 
</div>
		
 <div class="col-md-12">
 <div class="col-md-3"></div>

<div class="col-md-9"><h3 class="">Not Registered Yet ?</h3></div>
 
</div>
		<div class="col-sm-9 center-block">
		
		</div>
		 

		  <div class="col-md-12">
 <div class="col-md-3"></div>

<div class="col-md-6"><a href="registration.php"><img src="img/registration-button.png" class="center-block image-responsive" style="margin-left: -27px;"></a></div>
 
</div>
	 </div>
	 
	 </div>
<div class="col-md-3">
     </div>	 
      
     
       
 </div>
  
  </form>
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
