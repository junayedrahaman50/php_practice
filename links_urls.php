<!-- 3 ways of getting data from user
URL - GET
Forms - POST
Cookies - COOKIE PIGGYBACKS IN EACH REQUEST -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Links and Urls</title>
</head>
<body>
    <?php 
    $linkName = "Second Page";
    ?>
    <a href="function.php"> <?php echo $linkName ?> </a>
    
</body>
</html>