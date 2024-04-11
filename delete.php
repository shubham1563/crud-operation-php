<?php 

include 'connection.php';
$id = $_GET['id'];

$delete = "DELETE FROM users WHERE id= $id";
$query = mysqli_query($connection,$delete);
if ($query){
    echo "Record deleted successfully";
}else {
    echo "Record not deleted successfully";
}


?>