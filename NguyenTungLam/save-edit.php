<?php 
require_once("connect.php");
if (isset($_POST['submit'])) {
	$id = $_POST['id'];
	$question = $_POST['question'];
	$answer = $_POST['answer'];
	$sql = "update tbl_questions set question = '$question', answer = '$answer' where id = $id";
	$stmt = $conn->prepare($sql);
	$stmt->execute();

	header("location:index.php");
} else{
	echo "Lỗi!";
	header("location:edit.php");
}
?>