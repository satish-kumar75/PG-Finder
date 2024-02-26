<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome
        <?php global $username;
        echo $username; ?>
    </title>
    <?php require "navbar.php" ?>
    <link rel="stylesheet" href="./pglist.css">
    <script>
        function applyFilters() {
            var minPrice = document.getElementById("minPrice").value;
            var maxPrice = document.getElementById("maxPrice").value;
            var location = document.getElementById("location").value;
            var url = "pglist.php?minPrice=" + minPrice + "&maxPrice=" + maxPrice + "&location=" + location;

            window.location.href = url;
        }
    </script>
</head>

<body>
    <form method="GET">
        <input type="text" id="search" name="search" placeholder="Enter a PG name or Location">
        <input id="button" type="submit" value="Search">
    </form>
    <div class="filter">
        <div>
            <label for="minPrice"></label>
            <input type="number" id="minPrice" name="minPrice" placeholder="Min Price">
        </div>
        <div>
            <label for="maxPrice"></label>
            <input type="number" id="maxPrice" name="maxPrice" placeholder="Max Price">
        </div>
        <div>
            <label for="location"></label>
            <input type="text" id="location" name="location" placeholder="Location">
        </div>
        <button id="applyFilter" onclick="applyFilters()">Apply Filter</button>
    </div>
    <?php
    include 'dbconnect.php';

    function prepareData($conn, $data)
    {
        return mysqli_real_escape_string($conn, $data);
    }

    $sql = "SELECT * FROM pglist WHERE 1=1";

    if (isset($_GET['search'])) {
        $searchQuery = prepareData($conn, $_GET['search']);
        $sql .= " AND (name LIKE '%$searchQuery%' OR location LIKE '%$searchQuery%')";
    }

    if (isset($_GET['minPrice'])) {
        $minPrice = prepareData($conn, $_GET['minPrice']);
        $sql .= " AND price >= $minPrice";
    }

    if (isset($_GET['maxPrice'])) {
        $maxPrice = prepareData($conn, $_GET['maxPrice']);
        $sql .= " AND price <= $maxPrice";
    }

    if (!empty($_GET['location'])) {
        $locationQuery = prepareData($conn, $_GET['location']);
        $sql .= " AND location LIKE '%$locationQuery%'";
    }

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<main>';
        while ($row = $result->fetch_assoc()) {
            echo '<div class="pg-card">';
            echo '<div class = "image-card">';
            echo '<img src="' . $row['image_url'] . '" alt="' . $row['name'] . '">';
            echo '</div>';
            echo '<h2>' . $row['name'] . '</h2>';
            echo '<p class="price">Price: ₹' . $row['price'] . '/month</p>';
            echo '<p class="location"><b>Location: </b>' . $row['location'] . '</p>';
            echo '<p class="desc"><b>Description:</b> ' . $row['description'] . '</p>';
            echo '<div class="read-more" onclick="openPopupteam()"><a href="#">Read More</a></div>';
            echo '</div>';
        }
        echo '</main>';
    } else {
        echo '<div class="center-div">';
        echo '<h3>No PG listings found.</h3>';
        echo '</div>';
    }

    $conn->close();
    ?>
    <div id="popupteam" class="popupteam">

        <button type="button" onclick="closePopupteam()"><i class="fa fa-close" style="font-size:24px"></i></button>


        <h2>Our Team</h2>
        <div class="cardteam">

            <div class="bablu">

                <img src="images/team/vikram.png" alt="">
                <h2>Vikram Soni</h2>
                <p>
                    Managing our Frontend to give you the best ui experience so that you can work
                    flawlessly.
                </p>
            </div>
            <div class="sumit">

                <img src="images/team/satish.png" alt="">
                <h2>Satish Kumar</h2>
                <p>
                    Managing our backend so that you don't have to face any issues regarding data, keeping
                    it
                    safe.
                </p>
            </div>


        </div>
    </div>
    <?php require 'footer.php'; ?>

    <script>
        let popupteam = document.getElementById("popupteam");

        function openPopupteam() {
            popupteam.classList.add("open-popupteam");
        }

        function closePopupteam() {
            popupteam.classList.remove("open-popupteam");
        }	</script>
</body>

</html>