<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<?php

include 'connection.php';



$query = "SELECT *FROM users";

$result = mysqli_query($connection , $query);
?>

<table class="table container mt-2 table-bordered">
    <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>phone</th>
            <th class="text-center">Actions </th>
        </tr>

        <?php
        foreach($result as $res) {
            ?>
            <tr>
                <td><?php echo $res ['id'] ?></td>
                <td><?php echo $res ['name'] ?></td>
                <td><?php echo $res ['phone'] ?></td>
                <td> <a href="update.php?id=<?php echo $res['id'] ?>">update</a></td>
                <td> <a href="delete.php?id=<?php echo $res['id'] ?>">delete</a></td>
            </tr>
            <?php
        }
        ?>
    </thead>
</table>
