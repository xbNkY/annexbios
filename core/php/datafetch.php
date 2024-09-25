<?php
function getMovies(){
    $curl = curl_init();
    $decodedData = [];

    curl_setopt($curl, CURLOPT_URL,  
    "https://annexbios.nickvz.nl/api/v1/movieData");

    
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        'Authorization:  Bearer 4d8e9f1a2b3c6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6a7b8c9d0e1f',
        'Content-Type: application/json',
    ));
    
    $response = curl_exec($curl);
    
    if($e = curl_error($curl)) {
       echo $e;
    } else {
        $decodedData = 
        json_decode($response, true);
        
    }
    
    
    
    curl_close($curl);
   
    return $decodedData;

}



//var_dump($movies);