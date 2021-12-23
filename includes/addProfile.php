<?php 
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $food = $_POST["food"];
    $type = $_POST["type"];

    include "db.php";
    // connection maken
    $conn = makeConnectionWithDatabase();
    // toevoegen aan db
    if ($firstname != null && $lastname != null && $age != null && $gender != null && $food != null && $type != null) {
        insertQuery("INSERT INTO profile (firstname, lastname, age, gender, food, type) VALUES ('$firstname', '$lastname', '$age', '$gender', '$food', '$type');");
        // show user is added
        header("Location: http://www.stijnsommerijns.com/profileCreated.php");
    }