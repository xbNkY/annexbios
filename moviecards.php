<?php
include('./core/header.php');
include "core\php\datafetch.php";
$movies = getMovies();

//dumpt alle array data overzichtelijk
 echo "<pre>";
    var_dump( $movies); 
  echo "</pre>";

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

   // echo "<br>";
   // // echo "
 //  <pre>";
//         //    var_dump($item); 
//         //    echo "</pre>";
   // }
   // } else {
   // echo "No data found.";
   // }


   ?>



   <body class="film-body">

      <div class="flex-container">
         <div id="banner">
            <h1> Film Agenda</h1>
         </div>
        <input type="radio" id="films" name="agenda_categorie" value="FILMS">
        <label for="films">Films</label>
        <input type="radio" id="deze_week" name="agenda_categorie" value="deze_week">
        <label for="films">Deze week</label>
        <input type="radio" id="vandaag" name="agenda_categorie" value="vandaag">
        <label for="films">Vandaag</label>
        <input type="radio" id="categorie" name="agenda_categorie" value="categorie">
        <label for="films">Categorie</label>
         <?php
         if (is_array($movies["data"])) {

            foreach ($movies["data"] as $key => $item) { ?>
               <div class='card-container'>
                  <div class="card">
                     <div class="card-image">
                        <img src="<?php echo $item['image']; ?>" alt="movie_image" ">  </div> 
                            <div class=" text_space">
                        <h2> <?php echo $item['title'] . "<br>"; ?> </h2>
                        <p> Release date: 00-00-0000 </p>
                        <p> <?php
                        $description = $item['description'];
                        if (strlen($description) > 300) {
                           echo substr($description, 0, 300) . '...';
                        } else {
                           echo $description;
                        }

                        //   echo  $item['description'] . "<br>"; ?> </p>
                        <a href="detail.php?id=<?php echo $movies["api_id"]?>">
  

                        <button class="info-button"> Meer info & tickets </button>
                        </a>
                     </div>
                  </div>
               </div>


            <?php }
         } ?>

      </div>