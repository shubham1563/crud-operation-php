<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<form action="" class="container mt-5" method="post">
    <div class="form-group">
        <input type="text" placeholder="Firstname" name="name" id="name" class="form-control">
       
        
        <input type="number" placeholder="Phone Number" name="phone" id="name" class="form-control">
        
        <input type="submit" value="submit" name="update" class="form-control mt-2 btn btn-success">

    </div>
</form>

<?php 
 include 'connection.php';
    $id = $_GET['id'];
    // echo "$id";

    if(isset($_POST['update'])) {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $update= "UPDATE `users` SET `name`='$name',`phone`='$phone' WHERE id='$id'";
        // echo $update;
        $query = mysqli_query($connection, $update);

        if ($query) {
            echo "Record updated successfully";
        }else {
            echo "Record not updated successfully";
        }

    }



?>