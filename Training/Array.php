<!DOCTYPE html>
<html>
<head>
<body>

<h1> Array Types </h1>
<?php
// Define an indexed array
$Names = array("Saravana", "Sakthi", "Raju");
echo "Names :" . $Names[0] . ", " . $Names[1] . " and " . $Names[2] . "<br>". "<br>";


// Define an associative array
$age = array("Saravana"=>"23", "Sakthi"=>"21", "Raju"=>"22");
echo "Saravana age is ".$age['Saravana']."<br>"."<br>";
echo "Sakthi age is ".$age['Sakthi']."<br>"."<br>";
echo "Raju age is ".$age['Raju']."<br>"."<br>";


// Define a multidimensional array
$contacts = array(
    array(
        "name" => "Saravana",
        "email" => "Saravana@mail.com",
    ),
    array(
        "name" => "Sakthi",
        "email" => "Sakthi@mail.com",
    ),
    array(
        "name" => "Raju",
        "email" => "Raju@mail.com",
    )
);
// Access nested value
echo "Saravana Email-id is: " . $contacts[0]["email"]."<br>"."<br>";
echo "Sakthi Email-id is: " . $contacts[1]["email"]."<br>"."<br>";
echo "Raju Email-id is: " . $contacts[2]["email"]."<br>"."<br>";






?>
