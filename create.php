

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/style.css">
<form action="" class="container mt-5" method="post">
    <div class="form-group">
        <input type="text" placeholder="Firstname" name="name" id="" class="form-control">
       
        
        <input type="number" placeholder="Phone Number" name="phone" id="" class="form-control">
        
        <input type="submit" value="submit" class="form-control mt-2 btn btn-success">

    </div>
</form>


<?php 
 include 'connection.php';

 error_reporting(0);
 
 $name = $_POST['name'];
 $phone = $_POST['phone'];
 $submit = $_POST['submit'];

 $insert = "INSERT INTO `users`(`name`, `phone`) VALUES ('$name','$phone')";

 $query = mysqli_query($connection , $insert);

 if($query){
    echo "data inserted successfully";

 }else{
    echo "data not inserted successfully";
 }




?>
