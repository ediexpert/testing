<?php session_start();
 include("connection.php");
 $email = $_SESSION['email'];
 $uid = mysql_query("SELECT id FROM	User_Registration WHERE email = '$email'");
 $userid = mysql_fetch_array($uid);
$user = $userid['id'];
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
    <link rel="icon" href="favicon.ico">

    <title>TinyCent</title>
	<link rel="shortcut icon" href="img/favicon.png" type="image/png" />

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
        body
        {
            font-size: 9pt;
            font-family: Arial;
        }
    </style>
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
    margin-left: 0px;
    width: 127px;
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
      color: #fff;
    cursor: pointer;
    font-weight: bold;
    height: 43px;
    padding-bottom: 2px;
    width: 197px;
    border: 0px;
   background: url("img/save details.png") no-repeat scroll 0 0 transparent;
	}
    div#ChangePassword input {
	background: url("img/change password.png") no-repeat scroll 0 0 transparent;
    color: #fff;
    cursor: pointer;
    font-weight: bold;
    height: 43px;
    padding-bottom: 2px;
    width: 194px;
    border: 0px;
     
	margin-left: 70px;
	}
	 div#BankSettings input {
    color: #fff;
    cursor: pointer;
    font-weight: bold;
    height: 42px;
    padding-bottom: 2px;
    width: 210px;
    border: 0px;
    
      background: url("img/save-bank-settings-button.png") no-repeat scroll 0 0 transparent;
	}
	img#imgprvw {
    margin-left: 122px !important;
    margin-top: -123px !important;
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
<script type="text/javascript">
        var specialKeys = new Array();
        specialKeys.push(8); //Backspace
        function IsNumeric(e) {
            var keyCode = e.which ? e.which : e.keyCode
            var ret = ((keyCode >= 48 && keyCode <= 57) || specialKeys.indexOf(keyCode) != -1);
            document.getElementById("error").style.display = ret ? "none" : "inline";
            return ret;
        }
    </script>
<script>
 	function isPasswordMatch() {
    var password = $("#txtNewPassword").val();
    var confirmPassword = $("#txtConfirmPassword").val();

    if (password != confirmPassword) $("#divCheckPassword").html("Passwords do not match!");
    else $("#divCheckPassword").html("Passwords match.");
}

$(document).ready(function () {
    $("#txtConfirmPassword").keyup(isPasswordMatch);
});
 </script>
  </head>

  <body role="document">
 
    <?php include("includes/header2.php"); ?>

    <div class="container theme-showcase" role="main">
      <div class="row">
	  <div class="col-md-12">&nbsp;</div>
		<div class="col-md-12">&nbsp;</div>
		<div class="col-md-12">
			<div class="col-md-4">
				 <form class="form-horizontal" id="form1" runat="server" method="post"  enctype="multipart/form-data" action="personal.php" role="form"> 
					<div class="">
						<strong>Personal Settings</strong> 
					 </div>
					 <div class="col-sm-10">   &nbsp;</div>
					 <div class="btn btn-default image-preview-input">
                        <img src="img/add-image.png" height="50px" width="50px"><br>
                        <span class="image-preview-input-title imagebrowse">Add Image</span>
						
                        <input  type="file"  id="filUpload" onchange="showimagepreview(this)" accept="image/png, image/jpeg, image/gif"  name="user_image" style="height:100%;width:100%;" required=""/> <!-- rename it -->
                    </div>
                    <?php 
                    	$sql = mysql_query("SELECT * FROM User_Registration WHERE email = '$email' ");
                    	$row = mysql_fetch_array($sql);
                     ?>
					<div class="col-sm-10"><div><img id="imgprvw" src="images/<?php echo $row["user_image"]; ?>"  alt="Image Preview" width="100px" height="100px"/></div></div>
					<div class="form-group">
						  <div class="col-sm-10">   
							<textarea type="text" name="aboutme" rows="10
" class="form-control newheight" placeholder="About Me :" id="email"></textarea>
						  </div>
					 </div>
					 <div class="col-sm-10">   &nbsp;</div>
					 <div class="form-group">
						  <div class="col-sm-10">   
							 <div id="submitForm">
								<input type="submit" value="" name="personaldetails">
							 </div>
						  </div>
					 </div>
				</form>
		    </div>
			<div class="col-md-4">
				<div class="form-group">
						<strong>Account Settings</strong>
						
					<form class="form-horizontal" method="post" action="changepassword.php" role="form"> 
						<div class="form-group">
						
						</div>
						<div class="form-group">
							<label for="email" class="col-sm-2"><img src="img/key.jpg" width="35px" height="35px" ></label>
						  <div class="col-sm-10">   
						   <input type="password" pattern="[0-9]{8}" name="chng_password" placeholder="password (8 characters)" class="form-control" id="txtNewPassword" required="">
						  </div>
						 </div>
						 <div class="form-group">
							<label for="email" class="col-sm-2"><img src="img/key.jpg" width="35px" height="35px" ></label>
						  <div class="col-sm-10">   
						   <input type="password" name= "re_password"  placeholder="Re enter Password" class="form-control" id="txtConfirmPassword" onChange="isPasswordMatch();">
						   <div id="divCheckPassword"></div>
						  </div>
						  
						 </div>
						 <div class="form-group">
						  <div class="col-sm-10">  
							<div id="ChangePassword">
								<input type="submit" value="" name="changepassword">
							 </div>
							</div>
						 </div>
						 </form>
			    </div>
		    </div>
			<div class="col-md-4">
				<div class="form-group">
						<strong>Bank Settings ( Please Check T & C Before You Update )</strong>
						<?php 
                    	$sql = mysql_query("SELECT * FROM Payment_settings WHERE user = '$email' ");
                    	$row = mysql_fetch_array($sql);
                     ?>
						<form class="form-horizontal" method="post" action="payment_settings.php" role="form"> 
							<div class="col-sm-10">   
								 &nbsp;
							</div>
							<div class="form-group">
								 <div class="col-sm-10">   
								   <input type="text" name="bankname" value="<?php echo $row["bankname"]; ?>"  placeholder="Select Bank" class="form-control" id="email">
								 </div>
							</div>
							<div class="form-group">
								 <div class="col-sm-10">   
								   <input type="text"  value="<?php echo $row["account_number"]; ?>" name="account_number" placeholder="Account Number" class="form-control" id="text1" onkeypress="return IsNumeric(event);" onpaste="return false;" ondrop = "return false;"><span id="error" style="color: Red; display: none">* Input digits (0 - 9)</span>
								 </div>
							</div>
							<div class="form-group">
								 <div class="col-sm-10">   
								   <input type="text" placeholder="Confirm Account Number" class="form-control" id="email">
								 </div>
							</div>
							<div class="form-group">
								 <div class="col-sm-10">   
								   <input type="text" value="<?php echo $row["ifsccode"]; ?>" pattern="[a-zA-Z0-9]{11}" name="ifsccode" placeholder="IFSC Code (11 character alphanumeric)" class="form-control" id="email">
								 </div>
							</div>
							<hr>
							<div class="form-group">
								 <div class="col-sm-10">   
								   <input type="text" value="<?php echo $row["paypal_account"]; ?>" name="paypal_account" placeholder="Paypal Account" class="form-control" id="email">
								 </div>
							</div>
							<div class="form-group">
								 <div class="col-sm-10">   
								   <div id="BankSettings">
								     <input type="submit" value="" name="banksettings">
							      </div>
								 </div>
							</div>
							
				        </form>
			    </div>
		    </div>
			
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