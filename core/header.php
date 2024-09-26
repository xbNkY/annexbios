<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <link rel="stylesheet" href="./assets/css/moviecards.css">
    <link rel="stylesheet" href="./assets/css/fonts.css">
    <link rel="stylesheet" href="./assets/css/home.css">
    <link rel="stylesheet" href="./assets/css/detail.css">
    <link rel="stylesheet" href="./assets/css/order.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap');
    </style>

    <title>AnnexBios - Maarssen</title>
</head>

<body>



    <div class="grid-container">

        <div class="header-container">

            <div class="header">
                <div class="container">
                    <div class="navbar">
                        <div class="header-logo"> <a href="index.php">
                                <img id="logo-header" src="assets/images/logo/logox.png">
                            </a>

                        </div>

                        <nav>
                            <ul id="MenuItems" style="max-height: 0px;">
                                <li><a href="moviecards.php">FILM AGENDA</a></li>
                                <li><a href="">ALLE VESTIGINGEN</a></li>
                                <li><a href="">CONTACT</a></li>
                            </ul>
                        </nav>

                    </div>
                </div>
            </div>

            <div class="second-header">
                <div class="h1">KOOP JE TICKETS</div>

               
                <?php
                include_once 'php\datafetch.php';

                $movies = getMovies();





                if (is_array($movies["data"]) && count($movies["data"]) > 0) {
                    echo "<div class='dropdown'>";
                    echo "<button class='dropbtn'>Kies je film</button>";
                    echo "<div class='dropdown-content'>";

                    // Loop through each movie title and create a link with the movie ID
                    foreach ($movies["data"] as $item) {
                        echo "<a href='detail.php?id={$item['api_id']}'>{$item['title']}</a>"; // Link to movie details page
                    }

                    echo "</div>"; // Close dropdown-content
                    echo "</div>"; // Close dropdown
                }
                ?>






                <a href="order.php">
                    <button type="button" class="button">BESTEL TICKETS</button>
                </a>
            </div>

        </div>
    </div>

    </div>
    </div>