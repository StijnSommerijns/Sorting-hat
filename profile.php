<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create new profile</title>
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
                <h1 class="header">
                    Create a new profile!
                </h1>
            </div>
            <div id="register">
                <form id="form" action="includes/addProfile.php" method="POST" name="profile-form" onsubmit="return validateForm()">
                    <label class="label" for="firstname">
                        Firstname
                    </label>
                    <input type="text" class="input" id="firstname" autocomplete="off" name="firstname">
                    <small id="error-firstname" class="error"></small>
                    <label class="label" for="lastname">
                        Lastname
                    </label>
                    <input type="text" class="input" id="lastname" autocomplete="off" name="lastname">
                    <small id="error-lastname" class="error"></small>
                    <label class="label" for="age">
                        Age
                    </label>
                    <input type="number" class="input" id="age" name="age">
                    <small id="error-age" class="error"></small>
                    <label class="label" for="gender">
                        Gender
                    </label>
                    <select id="gender" name="gender">
                        <option value="" disabled selected>Select your option</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                    <small id="error-gender" class="error"></small>
                    <label class="label" for="food">
                        Favorite food
                    </label>
                    <input type="text" class="input" id="food" autocomplete="off" name="food">
                    <small id="error-food" class="error"></small>
                    <label class="label">
                        Type of person
                    </label>
                    <div id="radios">
                        <input type="radio" name="type" id="type-dog" name="type-dog" value="Dog" class="radio">
                        <label for="type-dog" class="label-radio">Dog <i class="fas fa-dog"></i></label><br>
                        <input type="radio" name="type" id="type-cat" name="type-cat" value="Cat" class="radio">
                        <label for="type-cat" class="label-radio">Cat <i class="fas fa-cat"></i></label><br>
                        <small id="error-type" class="error"></small>
                    </div>                   
                    <button type="submit" class="action-button">
                        Create account
                    </button>
                </form>
            </div>
        </div>
    </div>
    <script src="assets\js\profile.js"></script>
</body>
</html>