<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorting hat</title>
    <link href="assets/css/style.css" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="icon" href="assets/images/hat.png" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
</head>
<body>
    <div>
        <div id="center">
            <div class="icon">
                <a class="home" href="index.php"><i class="fa fa-home"></i></a>
            </div>
            <div>
                <?php
                    include "includes/db.php";

                    $conn = makeConnectionWithDatabase();
                    
                    $id = intval($_GET["userId"]);

                    $profiles = getQuery("SELECT * FROM profile WHERE Profile_ID = $id;");

                    foreach ($profiles as $profile) {
                ?>
                <h1 class="header">
                <?php echo ucfirst($profile["Firstname"]);?>
                </h1>
            </div>
            <div id="houses">
                <div id="profile-pic">
                </div>
                <div id="profile">
                    <ul id="profile-list">
                        <li class="profile-house-display"><?php echo ucfirst($profile["Firstname"]) . " " . ucfirst($profile["Lastname"]); ?></li>
                        <li class="profile-house-display"><?php echo $profile["Age"] . " years old"; ?></li>
                        <li class="profile-house-display" id="profile-gender"><?php echo $profile["Gender"]; ?></li>
                        <li class="profile-house-display"><?php echo "Loves to eat " . lcfirst($profile["Food"]); ?></li>
                        <li class="profile-house-display"><?php echo $profile["Type"] . " person"; ?></li>
                    </ul>
                    <?php
                        }         
                        closeConnection($conn);
                    ?>
                </div>
                <div id="percentage-house">
                    <ul class="ul">
                        <li>
                            <p id="action-gryf" class="action-button">
                                <?php echo round(getPercentageOfHouse(1, $profile["Profile_ID"])) . "% Gryffondor"; ?>
                            </p>
                        </li>
                        <li>
                            <p id="action-rav" class="action-button">
                                <?php echo round(getPercentageOfHouse(3, $profile["Profile_ID"])) . "% Ravenclaw"; ?>
                            </p>
                        </li>
                    </ul>
                    <ul class="ul">
                        <li>
                            <p id="action-sly" class="action-button">
                                <?php echo round(getPercentageOfHouse(4, $profile["Profile_ID"])) . "% Slytherin"; ?>
                            </p>
                        </li>
                        <li>
                            <p id="action-huff" class="action-button">
                                <?php echo round(getPercentageOfHouse(2, $profile["Profile_ID"])) . "% Hufflepuff"; ?>
                            </p>
                        </li>
                        <input class="profile-house-display" id="hidden-id" name="profile" value="<?php echo $profile["Profile_ID"]; ?>">
                    </ul>
                </div>
            </div>
            <div id="next-person">
                <a class="action-button" href="<?php nextProfile($id)?>" >Vote the next person</a>
            </div>
        </div>
    </div>
    <script src="assets/js/houses.js">
    </script>
</body>
</html>