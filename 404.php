<!-- 404.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>404 Not Found</title>
    <link rel="stylesheet" href="error.css" />
    <?php require 'navbar.php' ?>

</head>

<body>
    <div class="error-container">
        <div class="svg-cont">
            <img src="./images/error.png" alt="" loading="lazy">
        </div>
        <h1>Page Not Found</h1>
        <p>The page you are looking for might have been removed had its name changed or is temporarily unavailable.</p>
        <div class="home-btn">
            <a href="Home.php">Home</a>
        </div>


    </div>


    <?php require 'footer.php' ?>

    <script>

        var loader = document.getElementById("preloader");
        window.addEventListener("load", function () {
            preloader.style.display = "none";
        })
    </script>
</body>


</html>