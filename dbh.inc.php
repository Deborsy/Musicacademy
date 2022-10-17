<?php 

$conn = mysqli_connect('localhost', 'root', '', 'musicacademy');
if (!$conn) {
	die("Connection failed:".mysqli_connect_error());
}
