<?php

//Create mysql connection
$host = 'localhost'; //
$user = 'root';
$pass = '';
$dname = 'student';
$conn = mysqli_connect($host, $user, $pass, $dname);

//Test if connection occured
if(mysqli_connect_errno()){
    die("Database connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Form</title>
</head>
<body>
    <?php
    

$id = $_POST["id"];
//Perform database query
$query = "select * from student_record where id=$id";
$result = mysqli_query($conn, $query);
if(!$result) {
    die("Database query failed...");
}

$student = mysqli_fetch_assoc($result);

    ?>
<form action="databases_update.php" method="POST">
<input type="hidden" name="id" value="<?php echo $student["id"] ?>">
<input type="text" name="name" value="<?php echo $student["name"] ?>">
<input type="text" name="address" value="<?php echo $student["address"] ?>">
<input type="text" name="contact" value="<?php echo $student["contact"] ?>">
<input type="submit">
</form>



</body>
</html>
<?php  mysqli_close($conn); ?>