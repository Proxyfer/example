<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$name = $_POST['name'];
	
	echo $name."<br />";
} else { // дополнительно :)
	header("Location: ../index.php"); // можно использовать конструкцию header("Location: ...") для редиректа на страницу
}