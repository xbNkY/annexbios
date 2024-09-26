<?php
include('./core/header.php');
?>



<body class="order-body">

    <div class="text-header">
        <div class="top-text">TICKETS BESTELLEN</div>
    </div>


   
    <?php
    include_once 'core\php\datafetch.php';

    $movies = getMovies();



    if (is_array($movies["data"])) {
        foreach ($movies["data"] as $key => $item) {


            echo "<div class='text-movie'>" . $item['title'] . "</div>";
            echo "<div class='text-movie'>" . $item['first_play_time'] . "</div>";


            break;

        }
    }
    ?>



    <div class="placeholder-movie">
        <img id="movie-image" src="assets\images\films\deadpool.jpg">
    </div>

    <div class="page-container">





        <div class="ticket-container">
            <div class="titel-order">STAP 1: KIES JE TICKET</div>
            <table>
                <thead>
                    <tr>
                        <th>TYPE</th>
                        <th>PRIJS</th>
                        <th>AANTAL</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Normaal</td>
                        <td>€9,00</td>
                        <td>
                            <select>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Kind t/m 11 jaar</td>
                        <td>€5,00</td>
                        <td>
                            <select>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>65 +</td>
                        <td>€7,00</td>
                        <td>
                            <select>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="voucher-section">
                <label for="voucher">VOUCHERCODE</label>
                <input type="text" id="voucher" placeholder="Code">
                <button type="button">TOEVOEGEN</button>
            </div>
        </div>





        <div class="chair-container">
            <div class="titel-order2">
                STAP 2: KIES JE STOEL
            </div>








            <div class="container-chair">
                <div class="titel-chair">FILMDOEK</div>
                <div class="seating-area">

                    <div class="row">
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>

                    </div>
                    <div class="row">
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>

                    </div>
                    <div class="row">
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>

                    </div>
                    <div class="row">
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>

                    </div>
                    <div class="row">
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>

                    </div>
                    <div class="row">
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>

                    </div>
                    <div class="row">
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>

                    </div>
                    <div class="row">
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>

                    </div>
                    <div class="row">
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>

                    </div>
                    <div class="row">
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>
                        <div class="chair"></div>

                    </div>

                </div>

                <div class="legend">
                    <div class="legend-item free">VRIJ</div>
                    <div class="legend-item occupied">BEZET</div>
                    <div class="legend-item selected">JOUW SELECTIE</div>
                </div>
            </div>
        </div>




        <div class="bestelling-container">
            <div class="titel-bestelling">
                STAP 3: CONTROLEER JE BESTELLING
            </div>





            <?php

            if (is_array($movies["data"])) {
                foreach ($movies["data"] as $key => $item) {

                    echo "<div class='film-container'>";
                    echo "<img src='" . $item['image'] . "' alt='" . $item['title'] . "' id='movie-image2'><br>";
                    echo "<div class='movie-info'>";

                    echo "<div class='movie-title2'>" . $item['title'] . "</div>";


                    echo "<div class='symbol-container'>";
                    foreach ($item['viewing_guides']['symbols'] as $symbol) {
                        echo "<div class='viewing-symbol'>";
                        echo "<img src='" . $symbol['image'] . "' alt='" . $symbol['name'] . "' class='symbol-image2' />";
                        echo "</div>";
                    }


                    echo "<div class='play-time'>Wanneer: " . $item['first_play_time'] . "</div>";

                    echo "<div class='movie-release-date2'>Release: " . $item['release_date'] . "</div>";

                    echo "<div class='ticket-total'>Totaal 1 ticket: €" . $item['minimum_price'] . "</div>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                    break;
                }
            } else {
                echo "No data found.";
            }

            ?>





            <div class="gegevens">
                <div class="titel-gegevens">
                    STAP 4: VUL JE GEGVENS IN
                </div>

                <div class="form-container">
                    <div class="name">
                        <input type="text" name="firstName" placeholder="Voornaam">
                        <input type="text" name="lastName" placeholder="Achternaam*" required>
                    </div>
                    <div class="email">
                        <input type="text" name="email" placeholder="E-mailadres*" required>
                    </div>
                </div>


                <div class="titel-betaal">
                    STAP 5: KIES JE BETAALWIJZE
                </div>








            </div>

        </div>
        <div class="text-bottom">
            <div class="text-area-bottom">
                AFREKENEN
            </div>



        </div>



        </div>




        <?php
        include('./core/footer.php');
?>