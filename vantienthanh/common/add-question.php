<?php
    if(isset($_POST['addQuestion'])){
        $question = $_POST['question'];

        $query = "INSERT into tbl_question(question) VALUES('$question')";
        mysqli_query($conn,$query) or die("err");
        header("Location:index.php?modul=list");
    }
?>
<form method="post">
    <div class="form-group">
        <h2 class="text-center">Add your question</h2>
    </div>
    <div class="form-group">
        <label for="question">Question</label>
        <textarea class="form-control" name="question" id="question"></textarea>
    </div>
    <button type="submit" class="btn btn-success" name="addQuestion">Submit</button>
</form>