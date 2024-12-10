<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$host = 'localhost:3307';
$username = 'pma';
$password = '';
$database = 'p8_exercise_backend';

$conn = new mysqli($host, $username, $password, $database);

if($conn -> connect_error){
    die('Connection failed: ' . $conn -> connect_error);
}

// Query 1
$sql = "INSERT INTO employee (first_name, last_name, middle_name, birthday, address)
VALUES ('Jane', 'Doe', 'Marie', '1990-01-01', '456 Elm Street');";

if ($conn->query($sql) === TRUE) {
    echo "New employee record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
// Query 2
$sql = "SELECT first_name, last_name, birthday FROM employee";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "First Name: " . $row["first_name"]. " - Last Name: " . $row["last_name"]. " - Birthday: " . $row["birthday"]. "<br>";
    }
} else {
    echo "0 results";
}

// Query 3
echo "Employee with the HIGHEST ID ";
$sql =  "SELECT first_name, last_name, address FROM employee WHERE id = (SELECT MAX(id) FROM employee)";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "First Name: " . $row["first_name"]. " - Last Name: " . $row["last_name"]. " - Birthday: " . $row["birthday"]. "<br>";
    }
} else {
    echo "0 results";
}


// Query 4
echo "Updating data";
$sql =  "UPDATE employee SET first_name = 'John', last_name = 'Smith' WHERE id = 1";
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}






// Query 5
echo "Deleting Data";
$sql = "DELETE FROM employee WHERE id = 1";
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();







?>

</body>
</html>