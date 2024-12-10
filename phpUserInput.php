<?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    
    $user_name = $_GET['name'];
    echo "Hello, " . $user_name . "! Welcome to our website.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personalized Greeting</title>
</head>
<body>
    <h1>Enter your name:</h1>
    <form method="GET" action="">
        <label for="name">Name: </label>
        <input type="text" id="name" name="name" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
