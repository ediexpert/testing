<?php session_start();
include("connection.php"); ?>
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
	padding-top: 490px;
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
 
    <?php include("includes/header2.php"); ?>

    <div class="container theme-showcase" role="main">
     <div class="row">
	 
     <div class="col-md-4">
	  
     </div>
	 
<div class="col-md-8">
<?php if(isset($_GET["error"])){ ?>
<div style="color:red;text-align:center;" ><h4> <?php  echo $_GET["error"]; ?></h4></div>
  <?php }else if(isset($_GET["success"])){ ?>
<div style="color:green;text-align:center;" ><h4> <?php  echo $_GET["success"]; ?></h4></div>
  <?php } ?>
<?php       $email = $_SESSION['email'];
			$sqll = mysql_query("select * from User_Registration WHERE email = '$email' ");
			$row2 = mysql_fetch_array($sqll);
			$userid = $row2["id"];
			$sql = mysql_query("select * from ManagePost WHERE userid = '$userid' "); 
			while($row = mysql_fetch_array($sql)){
 		?>
 <div class="wrapper">


  
<br>
		<div class="col-sm-8">
			<div class="country">
			<div id="no-more-tables">
            <table class="col-md-12 table-striped table-condensed cf">

        		<thead class="cf">



        			<tr>
<img  src="uploads/<?php echo $row["image"]; ?>


        				<th width="80%"><h4><strong><?php echo $row["title"]; ?></strong></h4></th>
        				<th><a href="edit_managepost.php?eid=<?php echo $row["id"]; ?>" style="color:#000;text-decoration:none;"><img src="img/edit.jpg" width="30px" height="30px">Edit</a></th>
        				 <th><a href="deletepost.php?id=<?php echo $row["id"]; ?>" style="color:#000;text-decoration:none;"><img src="img/delete.jpg" width="30px" height="30px">Delete</a></th>
        			</tr>
        		</thead>
				</table>
        </div>
			</div>
			
		</div>
 </div> <br>
  <?php } ?>
 
 
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
