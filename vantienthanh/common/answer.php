<?php
if (isset($_SESSION["username"]) && isset($_SESSION["password"])) {
    $question_id = $_GET["id"];
    if (isset($_POST["addAnswer"])) {
        $question = $_POST["question"];
        $answer = $_POST["answer"];
        $query = "UPDATE tbl_question SET question ='$question' , answer ='$answer' WHERE id = $question_id";
        mysqli_query($conn, $query) or die("err to insert");
        header("Location:index.php?modul=list");
    }
    if (isset($_GET["id"])) {
        $question_id = $_GET["id"];
        $select = "SELECT * from tbl_question WHERE id = $question_id";
        $result = mysqli_query($conn, $select);
        $row = mysqli_fetch_assoc($result);
        ?>
        <form method="post">
            <div class="form-group">
                <label for="question">Question</label>
                <textarea class="form-control " name="question" id="question"
                          ><?php echo $row["question"] ?></textarea>
            </div>
            <div class="form-group">
                <label for="question">Answer</label>
                <textarea class="form-control" name="answer" id="answer"><?php echo $row["answer"] ?></textarea>
            </div>
            <button type="submit" class="btn btn-success" name="addAnswer">Submit</button>
        </form>
    <?php }
}
?>