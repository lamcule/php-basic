<?php 
require_once("connect.php");
$sql = "select * from tbl_questions";
$stmt = $conn->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>index</title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<?php include("header.php"); session_start(); ?>
	<?php if (!isset($_SESSION['user'])): ?>
		<?php include('login.php');die; ?>
	<?php endif ?>
	<div>
		<h2 class="text-md-center">Danh sách câu hỏi</h2>
		<table class="table">
		  <thead>
		    <tr>
			    <th scope="col" width="5%">Id</th>
			    <th scope="col" width="45%">Question</th>
			    <th scope="col" width="40%">Answer</th>
			    <?php if ($_SESSION['role'] === "admin"): ?>
					<th scope="col" width="10%"></th>		
				<?php endif ?>
		    </tr>
		  </thead>
		  <tbody>
				<?php foreach ($results as $value): ?>
					<tr>
						<td><?= $value["id"] ?></td>
						<td><?= $value["question"] ?></td>
						<td><?= $value["answer"] ?></td>					
						<?php if ($_SESSION['role'] === "admin"): ?>
							<td>
								<a href="edit.php?id=<?= $value['id'] ?>" class="btn-primary btn" title="sua cau hoi">Sửa</a>
								<a href="delete.php?id=<?= $value['id'] ?>" onclick="myFunction()" class="btn btn-danger delete" title="xoa cau hoi">Xóa</a>
							</td>			
						<?php endif ?>
					</tr>
				<?php endforeach ?>
		  </tbody>
		</table>
	</div>

	<script>
		function myFunction() {
		    var r = confirm("Press a button!");
		    if (r == true) {
		        
		    } else {
		        
		    }		    
		}
	</script>
</body>
</html>