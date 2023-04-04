<html>
<head>
	<title> Login Form</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"/>
</head>
<!focus later in the style>
<style>


.box
{
	width: 250px;
	max-width: 600px;
	background-color: #eba434;
	border: 1px solid #ccc;
	padding: 16px;
	margin:0 auto;
}

.captcha
{
	width:	50%;
	background: yellow;
	text-align: center;
	font-size: 24px;
	font-weight: 700px;
	
}

</style>
<?php 
session_start(); 
$text = rand(10000,99999); 
$_SESSION["captcha"] = $text;
$height = 15; 
$width = 45; 

$image_p = imagecreatetruecolor($width, $height); 
$black = imagecolorallocate($image_p, 0, 0, 0); 
$white = imagecolorallocate($image_p, 255, 255, 255); 
$font_size = 14; 

imagestring($image_p, $font_size, 5, 5, $text, $white);
//header('Content-Type: image/jpeg');
//imagejpeg($image_p);
//imagedestroy($image_p);
?>


<body>
	<form method="POST" action="redirect.php">
	<div class="container">
	<div class ="table-responsive">
	<h1 align="center"> Login Form </h1><br/>
	<div class="box">
	 <form id="validate-form" method="post">
	 <div class="form-group">
	<center> <label for="userid"> User Id </label>
	 <input typpe="text" name="userid" id="userid" placeholder="Enter UserId" required
	  data-parsley-type="email" data-parsley-trigger="keyup" class="form-control" />
	 </div>
	 <div class="form-group">
	  <center> <label for="password"> Password </label>
	  <input type="password" name="password" id="pwd" placeholder="Enter password" required 
	   data-parsley-trigger="keyup" class="form-control" />
	 </div>
	 <div class="form-group">
	 <div class="form-group">
	  <center> <label for="role"> Role </label>
	  <input type="textbox" name="role" id="role" placeholder="Enter Role" required 
	   data-parsley-trigger="keyup" class="form-control" />
	 </div>
	 <div class="form-group">
	  <center> <label for="captcha"> Captcha </label>
	  <input type="text" name="captcha" id="captcha" placeholder="Enter Captcha" required 
	   data-parsley-trigger="keyup" class="form-control" />
	 </div>
	 <div class="form-group">
	  <center> <label for="captcha-code"> Captcha Code</label>
	  <div class ="captcha"> <?php echo $text; ?> </div>
	 <div class="form-group">
	  <center> <input type="submit" id="login" name="login" class="btn btn-success" />
	  </div>
	 </form> 
	</div>
   </div>
  </div>