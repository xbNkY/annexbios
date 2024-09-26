<?php
include('./core/header.php');
include('./data/fetch_movies.php');
?>

<?php
try {
    $movies = fetchMovieData();
} catch (Exception $e) {
    $error = $e->getMessage();
}
?>

<div class="grid-container index-body">


    <script>(g => {
            var h, a, k, p = "The Google Maps JavaScript API", c = "google", l = "importLibrary", q = "__ib__", m = document, b = window; b = b[c] || (b[c] = {}); var d = b.maps || (b.maps = {}), r = new Set, e = new URLSearchParams, u = () => h || (h = new Promise(async (f, n) => {
                await (a = m.createElement("script")); e.set("libraries", [...r] + ""); for (k in g) e.set(k.replace(/[A-Z]/g, t => "_" + t[0].toLowerCase()), g[k]); e.set("callback", c + ".maps." + q); a.src = `https://maps.${c}apis.com/maps/api/js?` + e; d[q] = f; a.onerror = () => h = n(Error(p + " could not load.")); a.nonce = m.querySelector("script[nonce]")?.nonce || ""; m.head.append(a)
            })); d[l] ? console.warn(p + " only loads once. Ignoring:", g) : d[l] = (f, ...n) => r.add(f) && u().then(() => d[l](f, ...n))
        })
            ({ key: "AIzaSyCdrSau_AMiwHsCBTcu5tJehukVHOx1-h4", v: "weekly" });</script>

    <div class="home-container">
        <div class="header-section">
            <h2>WELKOM BIJ ANNEXBIOS 2</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil maxime odio at dolorem hic, deserunt enim
                exercitationem modi vel architecto, omnis placeat explicabo tempora.</p>

                <a href="moviecards.php">
            <button class="meer-button">BEKIJK DE DRAAIENDE FILMS</button>
        </a>
        </div>

        <div class="flex-section">


            <img id="flex-tivoli-img" src="./assets/images/header/tivolio.png">



            <div class="flex-details">
                <div id="map"></div>
                <i class="fa fa-map-marker"><span> Rijksstraatweg 42 <br> 3223 KA Hellevoetsluis</span></> <br>
                <i class="fa fa-phone"><span> 020-12345678</span></i> <br>
                <h4>BEREIKBAARHEID</h4>
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, ad soluta pariatur nobis sint
                    repellendus laudantium debitis sed facere distinctio animi magnam et quaerat tenetur tempora
                    repellat cum aperiam consequuntur!</p>
            </div>

            <div class="flex-tivoli">
                
                <img src="./assets/images/header/tivolio.png">
            </div>
        </div>
        
        <div class="movie-agenda-section">
            <h2>Movie Film Agenda</h2>
            <?php if(isset($error)): ?>
                <p class="error-message"><?php echo htmlspecialchars($error); ?></p>
            <?php else: ?>
                <div class="movies-grid">
                    <?php foreach($movies as $movie): ?>
                        <div class="movie-card">
                            <img src="<?php echo htmlspecialchars($movie['image']); ?>" alt="<?php echo htmlspecialchars($movie['title']); ?>">
                            <h3><?php echo htmlspecialchars($movie['title']); ?></h3>
                            <p><?php echo htmlspecialchars($movie['description']); ?></p>
                            <p><strong>Release Date:</strong> <?php echo htmlspecialchars(date("d M Y", strtotime($movie['release_date']))); ?></p>
                            <p><strong>Rating:</strong> <?php echo htmlspecialchars($movie['rating']); ?>/10</p>
                            <p><strong>Duration:</strong> <?php echo htmlspecialchars($movie['length']); ?> minutes</p>
                            <a href="<?php echo htmlspecialchars($movie['trailer_link']); ?>" target="_blank">
                                <button class="button">MEER INFO & TICKETS</button>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>



        <script>
            let map;

            async function initMap() {

                const position = { lat: 51.8355401, lng: 4.1328773 };


                const { Map } = await google.maps.importLibrary("maps");
                const { AdvancedMarkerElement } = await google.maps.importLibrary("marker");


                map = new Map(document.getElementById("map"), {
                    zoom: 17,
                    center: position,
                    mapId: "Rijksstraatweg 42",
                    disableDefaultUI: true,
                });


                const marker = new AdvancedMarkerElement({
                    map: map,
                    position: position,
                    title: "Rijksstraatweg 42",
                });
            }

            initMap();
        </script>
    </div>
    <?php
    include('./core/footer.php');
    ?>
