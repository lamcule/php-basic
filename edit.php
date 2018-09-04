<?php 
require_once("connect.php");
$id = $_GET['id'];
$sql = "select * from tbl_questions where id = $id";
$stmt = $conn->prepare($sql);
$stmt->execute();
$results = $stmt->fetch();
// var_dump($results);die;

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>edit questions</title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<?php include("header.php") ?>
	<h2 class="text-md-center">Sửa câu hỏi và câu trả lời</h2>
	<div class="container">
		<form action="save-edit.php" method="post">
			<input type="hidden" name="id" value="<?=$results['id']?>">
		  <div class="form-group">
		    <label for="question">Question</label>
		    <textarea class="form-control" id="question" name="question" rows="4"><?= $results['question']?></textarea>
		  </div>
		  <div class="form-group">
		    <label for="answer">Answer</label>
		    <textarea class="form-control" id="answer" name="answer" rows="4"><?= $results['answer']?></textarea>
		  </div>
		  <button type="submit" name="submit" class="btn btn-primary">Save</button>
		</form>
	</div>
</body>
</html>