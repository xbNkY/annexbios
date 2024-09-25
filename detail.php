<?php
include "core\php\datafetch.php";
$movies = getMovies();
?>

<?php
include('./core/header.php');
?>

<body class="detail-body">

    <?php

    if (is_array($movies["data"])) {
        // Loop through the movie data
        foreach ($movies["data"] as $key => $item) {
            echo "<div class='movie-title'>" . $item['title'] . "</div>";

            echo "<div class='movie-wrapper'>";



            echo "<img src='" . $item['image'] . "' alt='" . $item['title'] . "' class='movie-image'><br>";

            echo "<div class='movie-container'>";
           

        
            foreach ($item['viewing_guides']['symbols'] as $symbol) {
                echo "<div class='viewing-symbol'>";
                echo "<img src='" . $symbol['image'] . "' alt='" . $symbol['name'] . "' class='symbol-image' />";
                echo "</div>";
            }


            echo "<div class='movie-release-date'>Release: " . $item['release_date'] . "</div>";


            echo "<div class='movie-description'>" . $item['description'] . "</div>";

            echo "<div class='movie-rating'>Rating: " . $item['rating'] . "</div>";
            echo "<div class='movie-length'>Length: " . $item['length'] . " minutes</div>";
            echo "<div class='movie-genres'>Genres: ";
            $genres_simpel = [];
            foreach ($item['genres'] as $item2) {
                $genres_simpel[] = $item2['name'];
            }
            echo join(", ", $genres_simpel);
            echo "</div>";



            if (isset($item['actors']) && is_array($item['actors'])) {
                echo "<div class='actors-section'>";
                echo "<div class='actor-title'>Acteurs:</div>";
                echo "<div class='actor-list'>";
                foreach ($item['actors'] as $actor) {
                    echo "<div class='actor-item'>";
                    echo "<img src='" . $actor['image'] . "' alt='" . $actor['name'] . "' class='actor-image'><br>";
                    echo "<div class='actor-name'>" . $actor['name'] . "</div>";
                    echo "</div>";
                }
                echo "</div>";
                echo "</div>";

            }

            echo "</div>";
            echo "</div>";
            break;
        }
    } else {
        echo "No data found.";
    }






    ?>



    <a href="order.php">
        <div class="tickets_kopen">

            <h1>KOOP JE TICKETS</h1>
        </div>
    </a>

<?php

echo "<div class='movie-trailer-link'><a href='" . $item['trailer_link'] . "' target='_blank'>Watch Trailer</a></div>";
echo "<div class='trailer'><iframe id='trailer-link' src='" . $item['embedded_trailer_link'] . "' frameborder='0' allowfullscreen></iframe></div>";
   

?>

    <?php
    include('./core/footer.php');
    ?>