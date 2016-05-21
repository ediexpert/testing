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
	padding-top: 200px;
   }
   .footercss{
   background-color:#ddd;
   padding-bottom:0px;
   height:60px;
   padding-top:30px;
   }
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
         
        </div>
        <div id="navbar" class="navbar-collapse collapse">
		 
          <ul class="nav navbar-nav">
            <li><a href="index.php"><img src="img/home-button.jpg" class="img-responsive"></a></li>
            <li><a href="publicblog.php"><img src="img/blog-button.jpg" class="img-responsive"></a></li>
			<li><form action="signin.php" method="post"><a href="signin.php"><img src="img/sign-in-button.png" class="img-responsive signin"></a></form></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container theme-showcase" role="main">




    

     <div class="row">
	<div class="col-md-3"></div>
     <div class="col-md-6">
		<img src="img/tinycent-logo.png" class="tinylogo img-responsive center-block">
        <div class="input-group add-on" style="width:70%;margin: 0% 15%;">
		<input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
		<div class="input-group-btn">
        <button class="btn btn-primary search" type="submit" style="border-radius: 0px 10px 10px 0px;">Search</button>
		</div>
    </div>
     </div
	 <div class="col-md-3"></div>
     </div> 
      
      
       
 
  
  
    </div> <!-- /container -->
   <div class="footer">
<div class="footercss"> <strong>All right reserved |</strong> <strong> © Copyrights 2015 | Tinycent</strong></div> 

   </div>

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
