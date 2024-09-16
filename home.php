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

<div class="container">
    <!-- Header Section -->
    <div class="header-section">
        <h2>WELKOM BIJ ANNEXBIOS 2</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil maxime odio at dolorem hic, deserunt enim exercitationem modi vel architecto, omnis placeat explicabo tempora.</p>
        <button class="button">BEKIJK DE DRAAIENDE FILMS</button>
    </div>

    <div class="flex-section">
        <div id="googleMap" style="width:100%l;height:400px;"></div>
        <div class="flex-tivoli">
            <img src="./assets/images/maps/tivolitheater.jpg">
        </div>
        <div class="flex-details">
            <i class="fa fa-map-marker"><span> Rijksstraatweg 42 <br> 3223 KA Hellevoetsluis</span></i> <br>
            <i class="fa fa-phone"><span> 020-12345678</span></i> <br>
            <h4>BEREIKBAARHEID</h4>
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, ad soluta pariatur nobis sint repellendus laudantium debitis sed facere distinctio animi magnam et quaerat tenetur tempora repellat cum aperiam consequuntur!</p>
        </div>
    </div>
    
</div>

<script>
                    function myMap() {
                        var mapProp = {
                            center:new google.maps.LatLng(51.8355401, 4.1328773),
                            zoom:5,
                        };
                        var map = new google.maps.map(document.gelElementByID("googleMap"),mapProp);
                    };
                </script>
                <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>

</body>
</html>

<?php
include('./core/footer.php');
?>