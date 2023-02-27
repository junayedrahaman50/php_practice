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
    <title>Mysql connection</title>
</head>
<body>
<?php
//often these are the value in $_POST
$name = "John Doe";
$address = "123 Main Street, New York";
$contact = "9780000000";

//Perform database query
$query = "insert into student_record(name, address, contact) values('{$name}', '{$address}', '{$contact}')";
$result = mysqli_query($conn, $query);
//echo $result;
$id = mysqli_insert_id($conn);
if($result) {
    // success redirect
    //redirect_to("somepage.php")
    echo "<h4> inserted values at id: " . $id . "</h4>";
}
else{
    // Failure Redirect
    //msg = "student creation failed";
    die("Database connection failed: " . mysqli_error($conn));
}
?>

</body>
</html>
<?php 
//close the connection
mysqli_close($conn);
?>