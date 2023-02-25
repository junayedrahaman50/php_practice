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

<?php
//Perform database query
$query = "select * from student_record";
$result = mysqli_query($conn, $query);
if(!$result) {
    die("Database query failed...");
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
//use returned data if any
// while there is data you can assign it to row variable loop
  while($student = mysqli_fetch_assoc($result)){
    //output dta from each row
    // var_dump($row);
    echo $student["id"] . "<br>";
    echo $student["name"] . "<br>";
    echo $student["address"] . "<br>";
    echo $student["contact"] . "<br>";
    echo " <hr> ";
  }
?>

<?php 
//Release returned data
mysqli_free_result($result);
?>
</body>
</html>
<?php 
//close the connection
mysqli_close($conn);
?>