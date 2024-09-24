<?php
//include('./core/header.php');
include "core\php\datafetch.php";
$movies = getMovies();

//dumpt alle array data overzichtelijk
// echo "<pre>";
//    var_dump( $movies); 
//    echo "</pre>";

//    //foreach die door de array loopt en data in beeld toont
// if (is_array($movies["data"])) {
//     foreach ($movies["data"] as  $key => $item) {
//        // echo "Item $key:<br>";
//          echo "title:" .$item['title']. "<br>";
//         echo "Description: " . $item['description'] . "<br>";
//         echo "afbeelding:" .$item['image']. "<br>";
//         echo "Genre: ";
//         //var_dump($item['genres']);
//         //maakt van genres een lege variabel een foreach loopt er dan doorheen 
//         $genres_simpel = [];
//         foreach ($item['genres'] as $key2 => $item2){
//             //echo "genre:" . $item2['name'] . "<br>";
//             $genres_simpel[] = $item2['name'];
        
//         }
//         //zorgt ervoor dat genres netjes in beeld wordt getoont
//         echo join(", ",$genres_simpel);

//         echo "<br>";
//         //   echo "<pre>";
//         //    var_dump($item); 
//         //    echo "</pre>";
//     }
// } else {
//     echo "No data found.";
// }


?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/moviecards.css">
    <title>Responsive flex box cards</title>
</head>
<body>

<div class="flex-container">
   <div id="banner">
      <h1> Film Agenda</h1>
   </div>
     <!-- <?php if (is_array($movies["data"])) {
    foreach ($movies["data"] as  $key => $item){ ?>  -->
    <div class="card-container">
     <div class="card">
     <div class="card-image">
          <img src="<?php echo $item['image']; ?>" alt="movie_image" ">  </div> 
          <div class="text_space">
        <h2> <?php echo  $item['title']. "<br>"; ?> </h2>
           <p> Release date: 00-00-0000 </p>
           <p> <?php 
           $description = $item['description'];
           if (strlen($description)> 300){
            echo substr($description,0, 300) . '...';
           } else {
            echo $description;
           }
           
         //   echo  $item['description'] . "<br>"; ?> </p>
           <button class="button"> Meer info & tickets </button>
           </div>
        </div>
        <?php }}?>
    </div>
    </div>
    
</body>
</html>