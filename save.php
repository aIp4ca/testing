<?php

include "db.php";

$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$age = $_POST['age'];
$address = $_POST['address'];

// SIMPLE VALIDATION
if ($firstname == "" || $lastname == "" || $age == "" || $address == "") {
    die("All required fields must be filled!");
}

if (!is_numeric($age)) {
    die("Age must be a number!");
}

// INSERT DATA
$sql = "INSERT INTO students (firstname, middlename, lastname, age, address)
        VALUES ('$firstname', '$middlename', '$lastname', '$age', '$address')";

if (mysqli_query($conn, $sql)) {
    echo "Student saved successfully!";
} else {
    echo "Error saving data!";
}

?>