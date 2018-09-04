<?php
if(isset($_POST['login'])){
    $username = $_POST["email"];
    $password = $_POST["password"];
    $role;
    $query = "SELECT * FROM tbl_user";
    $result = mysqli_query($conn,$query);
    $check=0;
    while($row = mysqli_fetch_assoc($result)){
        if($username == $row["username"]){
            if($password == $row["password"]){
                $check = 1;
                $role = $row["role"];
            }
        }
    }
    if($check==1){
        $_SESSION["username"] = $username;
        $_SESSION["password"] = $password;
        $_SESSION["role"] = $role;
        header("Location:index.php?modul=list");
    }else{
        echo "dang nhap that bai";
    }
}
?>
<form method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary" name="login">Submit</button>
</form>