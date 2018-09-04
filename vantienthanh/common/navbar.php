<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php?modul=add-question">Add question</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?modul=list">List question</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <?php
//            echo $_SESSION["username"];
//            echo $_SESSION["password"];
                if(isset($_SESSION["username"]) && isset($_SESSION["password"])){
                    echo "<p class=\"btn mb-0\">Hi ".$_SESSION["username"]."</p>";
                    echo "<a href=\"index.php?modul=logout\" class=\"btn\">Logout</a>";
                }else{
                    echo "<a href=\"index.php?modul=login\" class=\"btn\">Login</a>";
                }
            ?>
        </form>
    </div>
</nav>