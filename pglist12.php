<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Welcome
        <?php global $username;
        echo $username; ?>
    </title>
    <?php require "navbar.php" ?>
    <link rel="stylesheet" href="pglist.css">
</head>

<body>
    <form>
        <input type="text" id="search" name="search" placeholder="Enter a PG name or Location">
        <input id="button" type="submit" value="Search">
    </form>


    <main>
        <div class="pg-card ">
            <img src="./images/Pg/pg1.jpg" alt="PG 1">
            <h2>Sai Residency PG</h2>
            <p class="price">Price: ₹7,500/month</p>
            <p class="location"><b>Location: </b> New Delhi</p>
            <p class="desc"><b>Description:</b> A serene and comfortable place for students and working professionals.
            </p>
            <button class="read-more">Read More</button>
        </div>
        <!-- Repeat this block for other PG listings -->

        <div class="pg-card">
            <div class="image">
                <img src="./images/Pg/pg2.jpg" alt="PG 2">
            </div>
            <h2>Lakshmi PG</h2>
            <p class="price">Price: ₹6,000/month</p>
            <p class="location"><b>Location: </b> Patna</p>
            <p class="desc"><b>Description:</b>: Your peaceful home away from home in the heart of the city.</p>
            <button class="read-more">Read More</button>
        </div>
        <div class="pg-card">
            <img src="./images/Pg/pg3.jpg" alt="PG 3">
            <h2>Green View PG</h2>
            <p class="price">Price: ₹8,000/month</p>
            <p class="location"><b>Location: </b> New Delhi</p>
            <p class="desc"><b>Description:</b>: Live in harmony with nature in our eco-friendly PG.</p>
            <button class="read-more">Read More</button>
        </div>
        <div class="pg-card">
            <img src="./images/Pg/pg4.jpg" alt="PG 4">
            <h2>Cosmo PG</h2>
            <p class="price">Price: ₹7,200/month</p>
            <p class="location"><b>Location: </b> Jalandhar</p>
            <p class="desc"><b>Description:</b>: A modern PG with all the amenities you need.</p>
            <button class="read-more">Read More</button>
        </div>
        <div class="pg-card">
            <img src="./images/Pg/pg5.jpg" alt="PG 5">
            <h2>Royal Mansion PG</h2>
            <p class="price">Price: ₹12,000/month</p>
            <p class="location"><b><b>Location: </b> </b>Patna</p>
            <p class="desc"><b>Description:</b>: Experience luxury living at our royal PG mansion.</p>
            <button class="read-more">Read More</button>
        </div>
        <div class="pg-card">
            <img src="./images/Pg/pg6.jpg" alt="PG 6">
            <h2>Student Inn PG</h2>
            <p class="price">Price: ₹5,500/month</p>
            <p class="location"><b>Location: </b> Ranchi</p>
            <p class="desc"><b>Description:</b>: Affordable and convenient PG for students near the university.</p>
            <button class="read-more">Read More</button>
        </div>
        <div class="pg-card">
            <img src="./images/Pg/pg7.jpg" alt="PG 7">
            <h2>Blue Haven PG</h2>
            <p class="price">Price: ₹7,800/month</p>
            <p class="location"><b>Location: </b> Chandigarh</p>
            <p class="desc"><b>Description:</b>: Stay in our beautifully designed blue-themed PG.</p>
            <button class="read-more">Read More</button>
        </div>
        <div class="pg-card">
            <img src="./images/Pg/pg8.jpg" alt="PG 8">
            <h2>Golden Nest PG</h2>
            <p class="price">Price: ₹9,500/month</p>
            <p class="location"><b>Location: </b> Jalandhar</p>
            <p class="desc"><b>Description:</b>: Find comfort and warmth at the Golden Nest PG.</p>
            <button class="read-more">Read More</button>
        </div>
        <div class="pg-card">
            <img src="./images/Pg/pg9.jpg" alt="PG 9">
            <h2>Serene Home PG</h2>
            <p class="price">Price: ₹6,800/month</p>
            <p class="location"><b>Location: </b> Ranchi</p>
            <p class="desc"><b>Description:</b>: A serene and homely PG for a peaceful stay.</p>
            <button class="read-more">Read More</button>
        </div>
        <div class="pg-card">
            <img src="./images/Pg/pg10.jpg" alt="PG 10">
            <h2>Star PG</h2>
            <p class="price">Price: ₹9,200/month</p>
            <p class="location"><b>Location: </b> Hardaspur</p>
            <p class="desc"><b>Description:</b>: Enjoy a star-level experience at our premium PG.</p>
            <button class="read-more">Read More</button>
        </div>
        <div class="pg-card">
            <img src="./images/Pg/pg11.jpg" alt="PG 11">
            <h2>Satyam PG</h2>
            <p class="price">Price: ₹5,800/month</p>
            <p class="location"><b>Location: </b>Phagwara</p>
            <p class="desc"><b>Description:</b>: A serene and homely PG for a peaceful stay.</p>
            <button class="read-more">Read More</button>
        </div>
        <div class="pg-card">
            <img src="./images/Pg/pg12.jpg" alt="PG 12">
            <h2>Alph Star PG</h2>
            <p class="price">Price: ₹4,200/month</p>
            <p class="location"><b>Location: </b>Phagwara</p>
            <p class="desc"><b>Description:</b>: Enjoy a star-level experience at our premium PG.</p>
            <button class="read-more">Read More</button>
        </div>
    </main>

    <?php require 'footer.php'; ?>


</body>

</html>