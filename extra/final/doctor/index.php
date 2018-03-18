<!DOCTYPE html>
<html lang = "eng">
	<head>
		<title>San Roque Medical Clinic</title>
		<meta charset = "utf-8" />
		<link rel = "shortcut icon" href = "images/logo.png">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css" />
		<link rel = "stylesheet" type = "text/css" href = "css/customize.css" />
	</head>
<body>
	<div class = "navbar navbar-default navtop">
		<img src = "images/logo.png" style = "float:left;" height = "55px" /><label class = "navbar-brand"><a href="../index.html"><input type = "button" value = "SAN ROQUE MEDICAL CLINIC - Muntinlupa City" ></A></label>
	</div>
	<body style =  "background:url('images/background.jpg') no-repeat;">
		<div id = "sidelogin">
			<form action = "login.php" enctype = "multipart/form-data" method = "POST" >
				<label class = "lbllogin" >Please Login Here.</label>
				<br />
				<hr /style = "border:1px dotted #000;">
				<br />
				<div class = "form-group">
					<label for = "username">Username</label>
					<input class = "form-control" type = "text" name = "username"  required = "required"/>
				</div>
				
				<div class = "form-group">
					<label for = "password">Password</label>
					<input class = "form-control" type = "password" name = "password" required = "required" />
				</div>
				<br />
		
				<div class = "form-group">
					<button class  = "btn btn-success form-control" type = "submit" name = "login" ><span class = "glyphicon glyphicon-log-in"></span> Login</button>
				</div>
				<p class="forgot"><a href="forgot.php">Forgot Password?</a></p>
			</form>
		</div>	
		</style>
					
	<div id = "footer">
		<label class = "footer-title">&copy; IETI-ALABANG ALL RIGHTS RESERVED 2018</label>
	</div>
</body>
<?php
	include("../admin/script.php");
?>
</html>