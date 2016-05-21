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
	padding-top: 500px;
   }
   .footercss{
   background-color:#ddd;
   padding-bottom:0px;
   height:60px;
   padding-top:30px;
 
   }
   div#submitForm input{
  background: url("img/sign-in-button.png") no-repeat scroll 0 0 transparent;
  color: #fff;
    cursor: pointer;
    font-weight: bold;
    height: 48px;
    padding-bottom: 2px;
    width: 100px;
    border: 0px;
margin-left: 223px;
}
   div#submitForm2 input{
  background: url("img/sign-in-button.png") no-repeat scroll 0 0 transparent;
  color: #fff;
    cursor: pointer;
    font-weight: bold;
    height: 48px;
    padding-bottom: 2px;
    width: 100px;
    border: 0px;}
    </style>
  </head>

  <body role="document">
 
  <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
		
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         <a class="navbar-brand" href="index.php"><img src="img/tinycent-logo2.png" class="tinylogo1 img-responsive"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
			
          <ul class="nav navbar-nav">
            <li><a href="index.php"><img src="img/home-button.jpg"></a></li>
            <li><a href="#"><img src="img/blog-button.jpg">&nbsp;&nbsp;&nbsp;</a></li>
			<li>
<div id="submitForm2"><form action="signin.php">
    <input type="submit" value="" name="signin"></form>
</div></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="container theme-showcase" role="main">




    

     <div class="row">
	 
     <div class="col-md-3">
	  
     </div>
	 
<?php
include("connection.php");
$rand_no = $_GET["key"];

$sql1 = mysql_query("SELECT * FROM User_Registration WHERE user_Rndmno = '$rand_no' ");


if($sql1){
	$count=mysql_num_rows($sql1);
		if($count==1){
			$rows=mysql_fetch_array($sql1);
			$sql2 = mysql_query("Update User_Registration set active =1 WHERE user_Rndmno = '$rand_no' ");
			echo "Thank You, Email verification successful ";?>
			<a href="signin.php">Click here  </a>
		        to Sign In 
			<?php
		}else{
			echo "Email  already exists , Please register with another email !! ";?>
			<a href="registration.php">Click here for registration</a>
			<?php
		}
}else{
			echo "No record in database";
		}

?> 

 </div>

  
    </div> <!-- /container -->
   
    <div class="footer">

    <div class="footercss"> <strong>All right reserved |</strong> <strong> © Copyrights 2015 | Tinycent</strong></div>

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
