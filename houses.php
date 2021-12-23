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
                    // in begin als nog geen id krijgt, standaard op 1 komen. Daarna telkens id +1

                    $id = intval($_GET["userId"]);
 
                    if ($id == null) {
                        $profiles = getQuery("SELECT * FROM profile WHERE Profile_ID = 1;");
                    }
                     else {
                        $profiles = getQuery("SELECT * FROM profile WHERE Profile_ID = $id;");
                    }

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
                <form id="form-house" action="includes/addToHouse.php" method="POST" name="house-form">
                    <ul class="ul">
                        <li>
                            <img id="gryf-hat" class="hat-image-hidden" src="assets/images/hat.png">
                            <button onmouseover="showHat('gryf')" onmouseout="hideHat('gryf')" id="action-gryf" type="submit" class="action-button" name="house" value="1">
                                This is a Gryffondor!
                            </button>
                        </li>
                        <li>
                            <img id="rav-hat" class="hat-image-hidden" src="assets/images/hat.png">
                            <button onmouseover="showHat('rav')" onmouseout="hideHat('rav')" id="action-rav" type="submit" class="action-button" name="house" value="3">
                                This is a Ravenclaw!
                            </button>
                        </li>
                    </ul>
                    <ul class="ul">
                        <li>
                            <img id="sly-hat" class="hat-image-hidden" src="assets/images/hat.png">
                            <button onmouseover="showHat('sly')" onmouseout="hideHat('sly')" id="action-sly" type="submit" class="action-button" name="house" value="4">
                                This is a Slytherin!
                            </button>
                        </li>
                        <li>
                            <img id="huff-hat" class="hat-image-hidden" src="assets/images/hat.png">
                            <button onmouseover="showHat('huff')" onmouseout="hideHat('huff')" id="action-huff" type="submit" class="action-button" name="house" value="2">
                                This is a Hufflepuff!
                            </button>
                        </li>
                        <input class="profile-house-display" id="hidden-id" name="profile" value="<?php echo $profile["Profile_ID"]; ?>">
                    </ul>
                </form>
            </div>
        </div>
    </div>
    <script src="assets/js/houses.js">
    </script>
</body>
</html>