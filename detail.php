<?php
include('./core/header.php');
include "core\php\datafetch.php";
?>


<body class="detail_body">

    <div class="titel_div">
        <h1>JURASSIC WORLD: FALLEN KINGDOM</h1>
    </div>
    <div class="detail_container">


       
            <img id="detail_foto" src="assets/images/films/Jurassic-World_-Fallen-Kingdom.jpg">
 

        <div class="details_film">
            <div class="rating">
                <!-- <img src="">
                <img src="">
                <img src="">
                <img src="">
                <img src=""> -->
            </div>
            <div class="kijk_wijzer">
                <img class="kijkwijzer_img" src="assets/images/kijkwijzers/kijkwijzer-12.png">
                <img class="kijkwijzer_img" src="assets/images/kijkwijzers/kijkwijzer-eng.png">
                <img class="kijkwijzer_img" src="assets/images/kijkwijzers/kijkwijzer-geweld.png">
            </div>
            <h2 class="release">Release: 7-06-2018</h2>
            <?php if (is_array($movies["data"])) {
            foreach ($movies["data"] as $key => $item) { 

           ?> <P><?php if ($movies['api_id'] == $_GET['api_id']) {echo $item['description']; } }}?></P>
            <div class="info">
                <h3>Genre: Actie</h3>
                <h3>Filmlengte: 128 minutes</h3>
                <h3>Land: USA</h3>
                <h3>Imdb score: 8.3/10</h3>
                <h3>Regisseur: Juan Antonio Bayona</h3>
                <h3>Acteurs: </h3>
            </div>
            <div class="acteurs">
                <figcaption><img src="assets/images/acteurs/BryceDallas.jpg"></figcaption>
                <p class="acteurs_namen">Bryce Dallas</p>
                </figcaption><img src="assets/images/acteurs/Chris_Pratt.jpg"></figcaption>
                <p class="acteurs_namen">Chris Pratt</p>
                </figcaption><img src="assets/images/acteurs/rafe_spall.jpg"></figcaption>
                <p class="acteurs_namen">Rafe Spall</p>
                </figcaption> <img src="assets/images/acteurs/Toby_Jones.jpg"></figcaption>
                <p class="acteurs_namen">Toby Jones</p>
            </div>
        </div>

    </div>
    <div class="tickets_kopen">
        <h1>KOOP JE TICKETS</h1>
    </div>
    <div class="trailer">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/vn9mMeWcgoM?si=8fZQ42hBpwhxjQVP"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>


    <?php
    include('./core/footer.php'); ?>