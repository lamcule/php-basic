<?php 
require_once("connect.php");
$sql = "select * from tbl_admin";
$stmt = $conn->prepare($sql);
$stmt->execute();
$logins = $stmt->fetchAll();
session_start();
if (isset($_POST['submit'])) {	
	$user = $_POST["username"];
	$pass = $_POST["password"];
	for ($i=0; $i < count($logins) ; $i++) { 
		if ($user == $logins[$i]["username"] && $pass == $logins[$i]["pass"]) {
			$_SESSION['user'] = $user;
			$_SESSION['role'] = $logins[$i]['role'];
	 		header("location: index.php");
	 		die;
		}
		else
		{
			echo "Đăng nhập thất bại!";
			header("location:login.php");
		}
	}
} else{
	echo "Đăng nhập lỗi!";
}

 ?>