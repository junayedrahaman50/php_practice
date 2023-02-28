<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
</head>
<body>
<form action="contact_store.php" method="POST">
 <label for="name">Name:</label>
 <input type="text" id="name" name="name" required>

 <label for="email">Email:</label>
 <input type="email" id="email" name="email" required>

 <label for="message">Message:</label>
 <textarea id="message" name="message" required></textarea>

 <input type="submit" value="Submit">
</form>
</body>
</html>