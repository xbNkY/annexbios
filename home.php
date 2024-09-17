<?php
include('./core/header.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>AnnexBios - Home</title>
</head>

<body>

    <script>(g => {
            var h, a, k, p = "The Google Maps JavaScript API", c = "google", l = "importLibrary", q = "__ib__", m = document, b = window; b = b[c] || (b[c] = {}); var d = b.maps || (b.maps = {}), r = new Set, e = new URLSearchParams, u = () => h || (h = new Promise(async (f, n) => {
                await (a = m.createElement("script")); e.set("libraries", [...r] + ""); for (k in g) e.set(k.replace(/[A-Z]/g, t => "_" + t[0].toLowerCase()), g[k]); e.set("callback", c + ".maps." + q); a.src = `https://maps.${c}apis.com/maps/api/js?` + e; d[q] = f; a.onerror = () => h = n(Error(p + " could not load.")); a.nonce = m.querySelector("script[nonce]")?.nonce || ""; m.head.append(a)
            })); d[l] ? console.warn(p + " only loads once. Ignoring:", g) : d[l] = (f, ...n) => r.add(f) && u().then(() => d[l](f, ...n))
        })
            ({ key: "AIzaSyCdrSau_AMiwHsCBTcu5tJehukVHOx1-h4", v: "weekly" });</script>

    <div class="home-container">
        <!-- Header Section -->
        <div class="header-section">
            <h2>WELKOM BIJ ANNEXBIOS 2</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil maxime odio at dolorem hic, deserunt enim
                exercitationem modi vel architecto, omnis placeat explicabo tempora.</p>
            <button class="button">BEKIJK DE DRAAIENDE FILMS</button>
        </div>

        <div class="flex-section">
            <div id="map"></div>
            <div class="flex-tivoli">
                <!-- <img src="./assets/images/header/tivolio.png"> -->
            </div>
            <div class="flex-details">
                <i class="fa fa-map-marker"><span> Rijksstraatweg 42 <br> 3223 KA Hellevoetsluis</span></i> <br>
                <i class="fa fa-phone"><span> 020-12345678</span></i> <br>
                <h4>BEREIKBAARHEID</h4>
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, ad soluta pariatur nobis sint
                    repellendus laudantium debitis sed facere distinctio animi magnam et quaerat tenetur tempora
                    repellat cum aperiam consequuntur!</p>
            </div>
        </div>

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

</body>

</html>

<?php
include('./core/footer.php');
?>