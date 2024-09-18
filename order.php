<?php
include('./core/header.php');
?>

<body class="order-body">

    <div class="text-header">
        <div class="top-text">TICKETS BESTELLEN</div>
    </div>

    <div class="text-movie">
        INSERT MOVIE
    </div>

    <div class="button-head">
        <button class="butdrdwn">
            DATUM
            <span class="arrow">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                    <polyline points="40,40 50,50 60,40" style="fill:none;stroke:#9E2629;stroke-width:4;" />
                </svg>
            </span>
        </button>
        <div class="button-head-content">
            <a href="#">Film 1</a>
            <a href="#">Film 2</a>
            <a href="#">Film 3</a>
        </div>
    </div>
    <div class="button-head2">
        <button class="butdrdwn2">
            TIJDSTIP
            <span class="arrow">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                    <polyline points="40,40 50,50 60,40" style="fill:none;stroke:#9E2629;stroke-width:4;" />
                </svg>
            </span>
        </button>
        <div class="button-head-content2">
            <a href="#">Film 1</a>
            <a href="#">Film 2</a>
            <a href="#">Film 3</a>
        </div>
    </div>

    <div class="placeholder-movie">
        <img id="movie-image" src="assets\images\films\deadpool.jpg">
    </div>

    <div class="page-container">




        <body>
            <div class="ticket-container">
                <h2>STAP 1: KIES JE TICKET</h2>
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
    </div>

















    <div class="text-bottom">
        <div class="text-area-bottom">
            AFREKENEN
        </div>



    </div>
    </d>



    <?php
    include('./core/footer.php');


