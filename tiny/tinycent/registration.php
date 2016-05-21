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
    <title> TinyCent</title>
	<link rel="shortcut icon" href="img/favicon.icon" type="image/png" />
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
<link rel="stylesheet" href="css2/datepicker.css">

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
   text-align:center;
   padding-top:5px;
 
   }
   div#submitForm input {
  background: url("img/registration-button.png") no-repeat scroll 0 0 transparent;
  color: #fff;
    cursor: pointer;
    font-weight: bold;
    height: 48px;
    padding-bottom: 2px;
    width: 264px;
    border: 0px;

}
div#selectgender input {
    border: 0 none;
    color: #fff;
    cursor: pointer;
    font-weight: bold;
    height: 100%;
    margin: 0 !important;
    opacity: 0 !important;
    position: absolute;
    width: 100%;
}
#selectgender {
    background-image: url("img/male-button.jpg");
    background-repeat: no-repeat;
    background-size: 81px auto;
    display: inline-block;
    height: 80px;
    position: relative;
    width: 20%;
}
#selectgenderf {
    background-image: url("img/female-button.jpg");
    background-repeat: no-repeat;
    background-size: 81px auto;
    display: inline-block;
    height: 80px;
    position: relative;
    width: 20%;
}
div#selectgenderf input {
  border: 0 none;
    color: #fff;
    cursor: pointer;
    font-weight: bold;
    height: 100%;
    margin: 0 !important;
    opacity: 0 !important;
    position: absolute;
    width: 100%;
}
#buttonGroupForm .btn-group .form-control-feedback {
    top: 0;
    right: -30px;
}
.gendermale:hover{
border:1px solid #ddd;
 
}
.genderfemale:hover{
border:1px solid #ddd;
 
}
 
</style>
 

 

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
 <?php include("includes/header.php"); ?>
 <script>
 $(document).ready(function(){
 $("#gender").click(function(){
            if($(this).is(':checked')){
                $(this).parent().addClass("selected");
            }
            $("#gender").not(this).each(function(){
                $(this).parent().removeClass("selected");
            });
        });
});
 </script>

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
		<div class="col-md-12">
		&nbsp;
		</div>
		<div class="col-md-12">
		&nbsp;
		</div>
	</div>
	<div class="row">
	<div class="col-md-12">
		&nbsp;
		</div>
	</div>
 </div>

    <div class="container" role="main">




  <form class="form-horizontal" method="post" action="register.php" role="form">  

     <div class="row">
		 <div class="col-md-1">



		</div>
		 
		 <div class="col-md-5">
		<div class="form-group">
			<label for="username" class="col-sm-2"><img src="img/user.jpg" width="40px" height="40px"></label>
		  <div class="col-sm-10">   
		   <input type="text" name="displayName" class="form-control" placeholder="Display name" id="email">
		  </div>
		 </div>
		 <div class="form-group">
			<label for="email" class="col-sm-2"><img src="img/email.jpg" width="40px" height="40px" ></label>
		  <div class="col-sm-10">   
		   <input type="email" name="email" placeholder="Email" class="form-control" id="email" required="">
		  </div>
		 </div>
		 <div class="form-group">
			<label for="email" class="col-sm-2"><img src="img/key.jpg" width="40px" height="40px" ></label>
		  <div class="col-sm-10">   
		   <input type="password" name="password" pattern=".{8,}" placeholder="password (Minimum 8 characters)" class="form-control" id="txtNewPassword" required="">
		  </div>
		 </div>
		 <div class="form-group">
			<label for="email" name="re_password" pattern=".{8,}" class="col-sm-2"><img src="img/key.jpg" width="40px" height="40px" ></label>
		  <div class="col-sm-10">   
		   <input type="password" placeholder="Re enter Password" class="form-control" name="re_password"id="txtConfirmPassword" onChange="isPasswordMatch();">
		   <div id="divCheckPassword"></div>
		  </div>
		  
		 </div>
   
   
		 </div>
		
		<div class="col-md-5">
			<div class="form-group">
			<label for="email" class="col-sm-2"><img src="img/user.jpg" width="40px" height="40px"></label>
		  <div class="col-sm-10">   
		   <input type="text" name="firstName" placeholder="First Name" class="form-control" required="">
		  </div>
		 </div>
		 <div class="form-group">
			<label for="email" class="col-sm-2"><img src="img/user.jpg" width="40px" height="40px" ></label>
		  <div class="col-sm-10">   
		   <input type="text" name="lastName" placeholder="Last Name" class="form-control" id="email">
		  </div>
		 </div>
		 <div class="form-group">
			<label for="email" class="col-sm-2"><img src="img/date of birth buton.jpg" width="40px" height="40px" ></label>
		  <div class="col-sm-10">   
		   <div class="input-daterange" id="dp3" >
                    <input type="text" placeholder="Date Of Birth" class="form-control" name="birthday" /> 
                   </div>
		  </div>
		 </div>
		 <div class="form-group">
			<label for="email" class="col-sm-2"><img src="img/phone number button.jpg" width="40px" height="40px" ></label>
		  <div class="col-sm-10">   
		   <input type="text" maxlength="10" placeholder="Phone no." id="text1" onkeypress="return IsNumeric(event);" onpaste="return false;" ondrop = "return false;" class="form-control" name="phoneNumber" ><span id="error" style="color: Red; display: none">* Input digits (0 - 9)</span>
		  </div> 
		 </div>
<div class="form-group">
 
<label class="col-sm-2">Gender</label>
<div class="col-sm-10" > 
<div id="selectgender" class="gendermale">
    <input type="radio"  value="male" name="gender" id="gender">
</div>	
<div id="selectgenderf" class="genderfemale">
    <input type="radio" value="Female" name="gender" id="gender">
</div>	
 </div>
 
</div>
		</div>
	
	
		 
		
		
		 
	 </div>
	 
	 
	
<div class="col-md-5 center-block"></div>
 
<div class="col-md-7">
	<div id="submitForm">
    <input type="submit" value="" name="submit">
</div>

</div>
</form>
<div class="col-md-3 center-block"></div>

      
      
	 </div>  

  
  
    </div> <!-- /container -->
 <br>
    <div class="footer">
  <div class="footercss"> <strong>All right reserved |</strong> <strong>Copyrights 2015 | Tinycent</strong></div>

   </div>
   

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
<script src="js/jquery-1.9.1.min.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script type="text/javascript">
            // When the document is ready
            $(document).ready(function () {
                
                $('.input-daterange').datepicker({
                    todayBtn: "linked"
                });
            
            });
        </script>
  </body>
</html>
 