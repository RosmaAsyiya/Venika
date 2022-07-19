<?php

    $url = "https://gj96el2m.directus.app/items/jenis_layanan?filter[id]=5";

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($curl);
    $hasil = json_decode($response, true);
    for($x = 0; $x <1 ; $x++ ){
        echo "<img src='https://gj96el2m.directus.app/files/".$hasil["data"][$x]["galeri"]." alt=''>";
            echo "<div class='card-body'>";
                echo "<h4>".$hasil['data'][$x]['nama_vendor']."</h4>";
                // <p>Tembalang, Semarang <br> <span class="text-danger">Mulai dari Rp.95.000</span></p>
                // <i class="fas fa-heart"></i>
            echo "</div>";
    }
