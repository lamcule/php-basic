<?php
$query = "SELECT * from tbl_question";
$result = mysqli_query($conn, $query);
?>
<table class="table table-hover">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Question</th>
        <th scope="col">Answer</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $i = 0;
    while ($row = mysqli_fetch_array($result)) {
        $i++;
        ?>
        <tr>
            <th scope="row"><?php echo $i ?></th>
            <td><?php echo $row["question"] ?></td>
            <td><?php echo $row["answer"] ?></td>
            <?php
            if (isset($_SESSION["username"]) && isset($_SESSION["password"]) && $_SESSION["role"] == 1) {
                ?>
                <td>
                    <a href="index.php?modul=answer&id=<?php echo $row["id"] ?>"><i class="fas fa-edit"></i></a>
                    <a href="javascript:void(0)" onclick="delete_question(<?php echo $row["id"]?>)"><i class="fas fa-trash-alt"></i></a>
                </td>
                <?php
            }
            ?>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>