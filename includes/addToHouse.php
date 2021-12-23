<?php
    $profileId = intval($_POST["profile"]);
    $houseId = intval($_POST["house"]);
    
    include "db.php";
    // connection maken
    $conn = makeConnectionWithDatabase();
    // toevoegen aan db
    
    insertQuery("INSERT INTO vote (Profile_ID, House_ID) VALUES ('$profileId', '$houseId');");
    // show user is added
    
    header("Location: http://www.stijnsommerijns.com/profileVoted.php?userId=$profileId");