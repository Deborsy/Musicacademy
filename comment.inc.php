<?php 


// Creating a function to set comments into the database
function setcomments($conn){
	if (isset($_POST['commentSubmit'])) {
		$uid = $_POST['uid'];
		$message = $_POST['message'];

		$sql = "INSERT INTO commentsection (uid,message) VALUES ('$uid', '$message')";
		$result = $conn->query($sql);
	}
}	


// To get or retrieve sent data and paste on the webpage 
function getcomments($conn){
	$sql = "SELECT * FROM commentsection";
	$result = $conn->query($sql);
	while ($row = $result->fetch_assoc()) {
		echo "<div class='comment-box'><p>";
		echo $row['uid']."<br>";
		echo nl2br($row['message']);
		echo "</p>
			<form class='delete-form' method='POST' action='".deleteComments($conn)."'>
				<input type='hidden' name='id' value='".$row['id']."'>
				<button type='submit' name='commentDelete'>Delete</button>
			</form>
			<form class='edit-form' method='POST' action='editcomment.php'>
				<input type='hidden' name='id' value='".$row['id']."'>
				<input type='hidden' name='uid' value='".$row['uid']."'>
				<input type='hidden' name='message' value='".$row['message']."'>
				<button>Edit</button>
			</form>
		</div>
";	}
	
}


//Function edit or change the saved or set data in the database
function editcomments($conn){
	if (isset($_POST['commentSubmit'])) {
		$id = $_POST['id'];
		$uid = $_POST['uid'];
		$message = $_POST['message'];

		$sql = "UPDATE commentsection SET message='$message' WHERE cid='$id'";
		$result = $conn->query($sql);
		header("Location:forum.php");
	}
}


//To delete the comment from the database and the webpage.
function deleteComments($conn){
	if (isset($_POST['commentDelete'])) {
		$id = $_POST['id'];

		$sql = "DELETE FROM commentsection WHERE cid='$id'";
		$result = $conn->query($sql);
		header("Location:forum.php");
	}
}
