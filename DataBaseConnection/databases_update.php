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
//print_r($_POST);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Update</title>
</head>
<body>
<?php
//often these are the value in $_POST
$id = $_POST["id"];
$name = $_POST["name"];
$address = $_POST["address"];
$contact = $_POST["contact"];

//escape string protection from sql injection
$name = mysqli_real_escape_string($conn, $name);
$address = mysqli_real_escape_string($conn, $address);
$contact = mysqli_real_escape_string($conn, $contact);

//Perform database query
$query = "update student_record set name = '{$name}', address = '{$address}', contact = '{$contact}' where id=$id";
$result = mysqli_query($conn, $query);
if($result && mysqli_affected_rows($conn) >= 0) {
    // success redirect
    //redirect_to("somepage.php")
    header("Location: databases.php");
    echo "<h4> updated values at id: " . $id . "</h4>";
}
else{
    // Failure Redirect
    //msg = "student creation failed";
    die("Database connection failed: " . mysqli_error($conn));
}
$rows_affected = mysqli_affected_rows($conn);
echo $rows_affected;
?>

</body>
</html>
<?php 
//close the connection
mysqli_close($conn);
?>