<?php
    function makeConnectionWithDatabase() {
        $hostname = "ID362594_Sortinghat.db.webhosting.be"; // locatie van de sql server ID362594_Sortinghat.db.webhosting.be
        $dbUser = "ID362594_Sortinghat"; // username om in te loggen ID362594_Sortinghat
        $dbPassword = "Stijnsorting123"; // password om in te loggen Stijnsorting123
        $dbName = "ID362594_Sortinghat"; // ID362594_Sortinghat
        //$port = 3306; // 3306 - default

        $conn = mysqli_connect($hostname, $dbUser, $dbPassword, $dbName);

        // connectie terug geven
        return $conn;
    }

    function getQuery($query) {
        $conn = makeConnectionWithDatabase();
        
        $result = mysqli_query($conn, $query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    function insertQuery($query) {
        $conn = makeConnectionWithDatabase();

        $result = mysqli_query($conn, $query);
        return $result;
    }

    function closeConnection($conn) {
        $conn->close();
    }

    function getPercentageOfHouse($house, $profile) {
        $total = "SELECT * FROM vote WHERE Profile_ID = $profile";
        $housePercentage = "SELECT * FROM vote WHERE House_ID = $house AND Profile_ID = $profile";
        $conn = makeConnectionWithDatabase();

        if ($result1 = mysqli_query($conn, $total)) {
            $totalrows = mysqli_num_rows($result1);
        }
        if ($result2 = mysqli_query($conn, $housePercentage)) {
            $rowsOfHouse = mysqli_num_rows($result2);
        }
        return intval($rowsOfHouse) / intval($totalrows) * 100;
    }
    function getNumberOfProfiles() {
        $total = "SELECT * FROM profile";
        $conn = makeConnectionWithDatabase();
        $result = mysqli_query($conn, $total);
        return mysqli_num_rows($result);
    }
    function nextProfile($id) {
        $totalProfiles = getNumberOfProfiles();
        if ($id < $totalProfiles) {
            echo "houses.php?userId="; echo "$id" + 1;
        }
        else {
            echo "allVoted.php";
        }
    }