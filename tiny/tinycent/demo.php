<?php  session_start();
include('connection.php');
function limit_words($string, $word_limit)
{
    $words = explode(" ",$string);
    return implode(" ", array_splice($words, 0, $word_limit));
}
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

    <title>Tinycent</title>

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
   .col-md-4.portfolio-item {
   height: 427px;
}
    </style>
    <script>
		$('.left').hide();

$('#carousel-example-generic').on('slid.bs.carousel', function (ev) {
  var carouselData = $(this).data('bs.carousel');
  var currentIndex = carouselData.getActiveIndex();

  if (currentIndex >= 1) {
    $('.left').show();
  }
  else {
    $('.left').hide();
  }

  if (currentIndex === (carouselData.$items.length-1)) {
    $('.right').hide();
    $('.left').show();
  }
  else {
    $('.right').show();
  }
})
    </script>
  </head>

  <body role="document">
 
    <?php include("includes/header.php"); ?>

   <div class="row">
  	<div class="col-md-10 col-md-offset-1">

      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
      
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="//placehold.it/1024x600" class="img-responsive">
            <div class="carousel-caption">
              one
            </div>
          </div>
          <div class="item">
            <img src="//placehold.it/1024x600/999" class="img-responsive">
            <div class="carousel-caption">
              two
            </div>
          </div>
          <div class="item">
            <img src="//placehold.it/1024x600/bbb" class="img-responsive">
            <div class="carousel-caption">
              three
            </div>
          </div>
        </div>
      
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>
      
      </div>  
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
