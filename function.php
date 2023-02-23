<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Defined Functions</title>
</head>
<body>
    <?php 
    function say_hello($word){
        echo "<h2> Hello World {$word} </h2>";
    }
    say_hello("Everyone");
    ?>
</body>
</html>