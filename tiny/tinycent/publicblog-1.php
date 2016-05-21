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
  </head>

  <body role="document">
 
    <?php include("includes/header.php"); ?>

    <div class="container theme-showcase bgcontainer" role="main">
	<div class="col-md-1">&nbsp;</div>
		<div class="col-md-10">
			<div class="row">
				<?php
				$k = 0;
				$i = 1;
				$getBlog = mysql_query("SELECT * FROM ManagePost");
				$numm = mysql_num_rows($getBlog);
				for($i = 1; $i<=$numm; $i++){
					$pos = $i-(3*$k);
					for($j = 3; $j>0; $j--){
						if($j==$pos){
							?> <div class="col-md-4 portfolio-item">ADD SPACE</div> <?php
						}else{
							$showblog = mysql_fetch_array($getBlog);
							$userid = $showblog["userid"];
							$sql = mysql_query("SELECT * FROM User_Registration WHERE id = '$userid' ");
							$rows = mysql_fetch_array($sql);
							$content = $showblog["description"];
							$num_rows = mysql_num_rows($getBlog);
							if($showblog == ''){
							}else{
							?> 
								<div class="col-md-4 portfolio-item">
				  <div class="newdesign">
					  <div class="post">
					   <a href="userblog.php?bid=<?php echo $showblog["id"]; ?>">
						<img class="img-responsive" src="uploads/<?php echo $showblog["image"]; ?>"  alt="">
						</a>
					  </div>
				  
					<div class="user_post">
					<h3 class="post_heading">
						<a href="userblog.php?bid=<?php echo $showblog["userid"]; ?>"><?php echo $showblog["title"]; ?></a>
					</h3>
					</div>
					
					<div class="post_des">
						<p style="word-wrap: break-word;"><?php echo limit_words($content,20); ?></p>
						
					</div>
					
					<div class="sender">
						<hr><strong>By :</strong>"<?php echo $rows["displayName"]; ?>" 
						<div style="float:right;">
						| <a href="userblog.php?bid=<?php echo $showblog["userid"]; ?>">READ MORE </a> |
						</div>
						</div>
					
				  </div>	
				   
				</div>
							<?php
							}
						}
					}
					if($i%3==0){
						$k++;
					}
					?> </div><hr><div class="row"> <?php
					$i++;
				}
				?>
			</div>
		</div> 
		<div class="col-md-1">&nbsp;</div><!-- /container -->
   		<div class="col-md-12">
    		<div class="footercss"> <p style="margin-left:10px; margin-top:-10px;"><strong>All right reserved |</strong> <strong>Copyrights 2015 | Tinycent</strong></p> </div><br>
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
