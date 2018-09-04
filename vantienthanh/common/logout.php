<?php
if(isset($_SESSION["username"]) && isset($_SESSION["password"])){
    session_unset();
    header("Location:index.php");
}