<?php 
include 'dbh.inc.php';
include 'comment.inc.php';
require 'header.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		textarea {
			padding: 15px;
		}
	</style>
</head>
<body>
<!-------------------------------- A page to edit the comment ------------------------------------->
<?php
$id = $_POST['id'];
$uid = $_POST['uid'];
$message = $_POST['message'];

echo "<form method='POST' action='".editcomments($conn)."'>
	<input type='hidden' name='id' value='".$id."'>
	<input type='hidden' name='uid' value='".$uid."'>
	<textarea name='message'>".$message."</textarea><br>
	<button type='submit' name='commentSubmit'>Edit</button>
</form>"; 

?>

</body>
</html>
