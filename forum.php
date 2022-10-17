<?php 
include 'dbh.inc.php';
include 'comment.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Forum page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
	body {
    background-color: yellow;
    position: relative;
    -webkit-animation-name: example; /* Chrome, Safari, Opera */
    -webkit-animation-duration: 4s; /* Chrome, Safari, Opera */
    -webkit-animation-iteration-count: 1000; /* Chrome, Safari, Opera */
    animation-name: example;
    animation-duration: 4s;
    animation-iteration-count: 1000;
    border-radius: 25px;
	}
	/* Chrome, Safari, Opera */
@-webkit-keyframes example {
    0%   {background-color:red;}
    25%  {background-color:yellow;}
    50%  {background-color:blue;}
    75%  {background-color:green;}
    100% {background-color:red; }
}

/* Standard syntax */
@keyframes example {
    0%   {background-color:red;}
    25%  {background-color:yellow;}
    50%  {background-color:blue;}
    75%  {background-color:green;}
    100% {background-color:red;}
}
textarea{
	padding: 15px;
}
	</style>

</head>
<body>
	<header>
	<br>
		<div class="container">
			<nav class="main_nav">
				<div class="logo">
					Musicacademy
				</div>

				<ul>
					<li>
						
						</li>
					<li><a href="index.php">Home</a></li>
					<li><a href="theory.php">Music Theory</a></li>
					<li><a href="tutorial.php">Video Tutorials</a></li>
					<li><a href="forum.php">Forum</a></li>
					<li><a href="login.php">Login</a></li>
					<li><a href="home.php">Signup</a></li>
				</ul>
			</nav>
		</div>


		<div class="clearfix"></div>
		
</header><br><br>
<img src="">
<?php
echo "<form method='POST' action='".setcomments($conn)."'>
	<input type='hidden' name='uid' value='Anonymous'>
	<textarea name='message'></textarea><br>
	<button type='submit' name='commentSubmit'>Comment</button>
</form>"; 
	getcomments($conn);
?>

</body>
</html>