<?php
include('./core/header.php');
include "core\php\datafetch.php";
//$movies = getMovies();

//dumpt alle array data overzichtelijk
 //echo "<pre>";
    //var_dump( $movies); 
  //echo "</pre>";

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



   <body class="film_body">

      <div class="flex-container">
         <div id="banner">
            <h1> Film Agenda</h1>
         </div>
         <div class="radio-option">
         <input type="radio" id="films" name="agenda_categorie" value="FILMS" checked="checked">
         <label for="films">Films</label>
         </div>
         <div class="radio-option">
         <input type="radio" id="deze_week" name="agenda_categorie" value="deze_week">
         <label for="films">Deze week</label>
         </div>
         <div class="radio-option">
         <input type="radio" id="vandaag" name="agenda_categorie" value="vandaag">
         <label for="films">Vandaag</label>
         </div>
         
         <form method="POST" action="">
        <label for="genre">Categorie</label>
        <select name="genre" id="genre">
        <option value="horror">Horror</option>
        <option value="sciente_fiction">Scienefiction</option>
        <option value="komedie">Komedie</option>
        <option value="actie">Actie</option>
      </select>
        <input type="submit" value="Show Movies">
      </form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   // Check if a genre is selected from the dropdown
   if (isset($_POST['genre']) && $_POST['genre'] == 'horror') {
       // Display horror movies
       echo "<h2>Horror Movies</h2>";
       if (is_array($movies["data"])) {
   foreach ($movies["data"] as  $key => $item) {
      foreach ($item['genres'] as $key2 => $item2){
   echo "$item2[name]['Horror']";}}
   
} elseif (isset($_POST['genre']) && $_POST['genre'] == 'science_fiction') {
       // Display science fiction movies
       echo "<h2>Comedy Movies</h2>";
       echo "<ul>
               <li>Superbad</li>
               <li>The Hangover</li>
               <li>Step Brothers</li>
             </ul>";
   } elseif (isset($_POST['genre']) && $_POST['genre'] == 'komedie') {
       // Display komedie movies
       echo "<h2>Action Movies</h2>";
       echo "<ul>
               <li>Mad Max: Fury Road</li>
               <li>John Wick</li>
               <li>Die Hard</li>
             </ul>";
   }     elseif (isset($_POST['genre']) && $_POST['genre'] == 'actie') {
               // Display action movies
               echo "<h2>Action Movies</h2>";
               echo "<ul>
                       <li>Mad Max: Fury Road</li>
                       <li>John Wick</li>
                       <li>Die Hard</li>
                     </ul>";
   } else {
       echo "<p>Please select a genre to display movies.</p>";
   }
}}
?>


      <div class='card-container'>
         <?php
         if (is_array($movies["data"])) {

            foreach ($movies["data"] as $key => $item) { ?>
                  <div class="card">
                     <div class="card-image">
                        <img src="<?php echo $item['image']; ?>" alt="movie_image" ">  </div> 
                            <div class=" text_space">
                        <h2> <?php echo $item['title'] . "<br>"; ?> </h2>
                        <img src="assets\images\icons\rating_annexbios.png" alt="rating_image" style="height: 3.42vh; width: 6.51vw">
                        <p> Release date: 00-00-0000 </p>
                        <p> <?php
                        $description = $item ['description'];
                        if (strlen($description) > 150) {
                           echo substr($description, 0, 150) . '...';
                        } else {
                           echo $description;
                        }

                        //   echo  $item['description'] . "<br>"; ?> </p>
                        <!-- <a href="detail.php?=movie.php?imdb_id=<?php echo $movies["imdb_id"]?>" -->
                        <button class="info-button"> Meer info & tickets </button>
                        <!-- </a> -->
                     </div>
                  </div>
                  
                  
                  <?php }
         } ?>

</div>
      </div>