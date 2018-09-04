<?php 
require_once('connect.php');
$ques = $_POST["question"];
$sql = "insert into tbl_questions (question) values ('$ques')";
$stmt = $conn->prepare($sql);
$stmt->execute();
header("location:index.php");
?>