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
    <title>Contact Store</title>
</head>
<body>
 
<?php
// Validate email
// if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//     echo "Invalid email format";
//    }
   

if($_SERVER["REQUEST_METHOD"] == "POST") {
 $name = $_POST["name"];
 $email = $_POST["email"];
 $message = $_POST["message"];
 if(filter_var($email, FILTER_VALIDATE_EMAIL)){

 // Prepare and bind SQL statement
 $stmt = mysqli_prepare($conn, "INSERT INTO contacts (name, email, message)
VALUES (?, ?, ?)");
 mysqli_stmt_bind_param($stmt, "sss", $name, $email, $message);

 // Execute SQL statement
 mysqli_stmt_execute($stmt);

 // Close statement and connection
 mysqli_stmt_close($stmt);
 mysqli_close($conn);

 // Redirect to thank you page
 //header("Location: thank-you.html");
 exit();
 }
 else{
    echo "Invalid Email";
 }
}
?>

</body>
</html>