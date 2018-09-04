<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>add question</title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<?php include("header.php") ?>
	<h2 class="text-md-center">Thêm câu hỏi</h2>	
	<form class="col-md-6 offset-md-3" method="post" action="save-question.php">
		<div class="form-group">
		    <label for="question">Question</label>
		    <textarea class="form-control" rows="4" id="question" name="question"></textarea>
		</div>
		<div class="form-group row">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</div>
	</form>
</body>
</html>