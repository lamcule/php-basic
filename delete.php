<?php 
require_once("connect.php");
$id = $_GET['id'];
$sql = "delete from tbl_questions where id = $id";
$stmt = $conn->prepare($sql);
$stmt->execute();

header("location: index.php");
 ?>