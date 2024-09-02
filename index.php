<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,  initial-scale=1.0">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<title>My System</title>
<style>
body {
  margin: 0;
  font-family: "Raleway", sans-serif;
  padding-bottom: 60px;
}

table {
  width: 100%;
  border: 1px solid;
}

img {
  border-style: none;
  vertical-align: middle;
}

footer{
	text-align: center;
	font-size: 12px;
}

input,textarea,option, button {
	font-family: "Raleway", sans-serif;
}

.header {
	height: 120px;
    text-align: center;
	background: #f1f1f1;
	color: #000000;
    display: flex;
    align-items: center;
    justify-content: center;
 }

 /* Style the footer */
.footer {
  background-color: #9e9e9e;
  color: #ffffff;
  text-align: center;
  font-size: 12px;
  padding: 5px;
}

 footer {
   position:fixed;
   bottom: 0;
   width: 100%;
   height: 30px;    /* Height of the footer */
   background: #bd5409;
   padding: 15px;
}
 .row{
	float: left;
	width:100%;
 }

.col-left {
	float: left;
	width: 30%;
	box-sizing: border-box;
	padding: 10px;
	/* border: 1px solid #ccc; */
}
.col-right {
	margin-left: 31%;
	box-sizing: border-box;
	padding: 10px;
	/* border: 1px solid #ccc; */
}

.topnav {
	overflow: hidden;
	background-color: #944b16;
}

.topnav a {
	float: left;
	display: block;
	color: #f2f2f2;
	text-align: center;
	padding: 14px 16px;
	text-decoration: none;
	font-size: 17px;
}

.topnav a:hover {
	background-color: #ddd;
	border: 1px solid #616161;
	color: black;
}

.userAuth {
	background-color: #f1f1f1;
	text-align: right;
}

@media (max-width: 786px) {
	.col-left, .col-right {
		float: none;
		width: 100%;
		margin-left: 0; /* Reset the margin */
	}
}
</style>
</head>
<body>
    <div class="header">
        <h1>My System</h1>
	</div>

	<div class="userAuth">
		<?php
		//login&logout section
		if(isset($_SESSION["user_id"])){
			echo '<b> '. $_SESSION["user_username"] . '</b> <a href="logout.php">| Logout |</a> &nbsp;&nbsp;&nbsp; <br>';
		}
		else {
			echo '<a href="index.php?login=1">| Login |</a> &nbsp;&nbsp;&nbsp; <br>';
		}
		?>
	</div>

	<nav class="topnav" id="myTopnav">
		<a href="index.php">Home</a>
		<a href="#">Menu 2</a>
		<a href="#">Menu 3</a>
		<a href="#">Menu 4</a>
	</nav>

    <div class="row">
		<div class="col-right">
		<?php
		//Dynamic Authentication Page
		if(!isset($_GET["login"]) && empty($_GET["reg"]) && !isset($_SESSION["user_id"])){
			echo "Default landing page...";
		}
		else if (!empty($_GET["reg"])) {
			include("incl_register.php");
		}
		else if(!isset($_SESSION["user_id"])){
			include("incl_login.php");
		}
		else {
			echo "Default landing page after successful login";
		}
		?>
		</div>
	</div>
	<div class="row">
		<footer>
			<p>Copyright (c) 2023 - My Name</p>
		</footer>
	</div>
</body>
</html>
