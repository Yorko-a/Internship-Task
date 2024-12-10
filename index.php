<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
<?php
class API{
    public function printName($name) {
        echo "Fullname: " . $name . "<br>";
    }

    public function printHobbies($hobbies){
        echo "Hobbies: <br>" . implode("<br>", $hobbies) . "<br>";
    }

    public function printPersonalDetails($details) {
        echo "Age: " . $details->age . "<br>";
        echo "Email: " . $details->email . "<br>";
        echo "Birthday: " . $details->birthday . "<br>";
    }
}
    
$API = new API();

$API->printName("Aljon James Pacheco");

$hobbies = [
    "&nbsp;&nbsp;&nbsp; Watching TV Series", 
    "&nbsp;&nbsp;&nbsp; Learning new things", 
    "&nbsp;&nbsp;&nbsp; Listening to Music"];

$API->printHobbies($hobbies);

$personalDetails = (object)[
    "age" => 22,
    "email" => "aljonjames1@gmail.com",
    "birthday" => "November 25,2002"
];
$API->printPersonalDetails($personalDetails);

?>
</body>
</html>