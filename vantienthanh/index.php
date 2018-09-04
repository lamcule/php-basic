<?php
include ("connection.php");
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <title>Document</title>
</head>
<body>
<?php
include ("common/navbar.php");
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <?php
            if(isset($_GET["modul"])){
                $modul= $_GET["modul"];
                include ("common/".$modul.".php");
            }else{
                include ("common/add-question.php");
            }

            ?>
        </div>
    </div>
</div>
<?php mysqli_close($conn);?>
<script src="script.js"></script>
</body>
</html>