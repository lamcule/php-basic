<?php
if(isset($_GET["id"])){
    $id = $_GET["id"];
    $query = "DELETE FROM tbl_question WHERE id =$id";
    mysqli_query($conn,$query);
    header("Location:index.php?modul=list");
}else{
    header("Location:index.php?modul=list");
}
