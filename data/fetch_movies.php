<?php
function fetchMovieData() {
    // until api is fixed add some test data
    $movie = [
        "imdb_id" => "tt2049403",
        "api_id" => 73,
        "title" => "Beetlejuice Beetlejuice",
        "image" => "https://annexbios.nickvz.nl/assets/img/movies/tt2049403.jpg",
        "description" => "Zesendertig jaar na de gebeurtenissen in de eerste film keert de familie Deetz terug naar Winter River na de onverwachte dood van Charles Deetz. Lydia's leven staat op zijn kop als haar rebelse tienerdochter Astrid het mysterieuze model van de stad op zolder ontdekt en het portaal naar het hiernamaals per ongeluk wordt geopend, waardoor Betelgeuze vrijkomt.",
        "genres" => [
            [
                "name" => "horror"
            ]
        ],
        "directors" => [
            [
                "name" => "Tim Burton",
                "image" => "https://annexbios.nickvz.nl/assets/img/directors/510.jpg"
            ]
        ],
        "actors" => [
            [
                "name" => "Michael Keaton",
                "image" => "https://annexbios.nickvz.nl/assets/img/directors/2232.jpg"
            ]
        ],
        "viewing_guides" => [
            "age" => "16+",
            "symbols" => [
                [
                    "name" => "Grof taalgebruik",
                    "image" => "https://annexbios.nickvz.nl/assets/img/viewing_guides/taal.png"
                ]
            ]
        ],
        "rating" => 7.3,
        "length" => 105,
        "release_date" => "2024-09-04",
        "trailer_link" => "https://www.youtube.com/watch?v=6b7-49Y23vg",
        "embedded_trailer_link" => "https://www.youtube.com/embed/6b7-49Y23vg",
        "first_play_time" => "2024-09-26 22:00:00",
        "minimum_price" => "9,00"
    ];

    return array_fill(0, 6, $movie);

    $url = 'https://annexbios.nickvz.nl/api/v1/movieData';
    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Authorization: Bearer ' . '87myiOkW34gPWzFYYmxrrOg3j7cEM9CM',
        'Accept: application/json'
    ]);

    $response = curl_exec($ch);

    if(curl_errno($ch)){
        throw new Exception('Request Error: ' . curl_error($ch));
    }

    curl_close($ch);
    $data = json_decode($response, true);

    if(!$data['success']) {
        throw new Exception('API Error: Unable to fetch movie data.');
    }

    return $data['data'];
}

