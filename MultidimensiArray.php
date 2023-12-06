<?php

    // Membuat Multidimensi Array
    $kendaraan = [
        "transportasi" => ["Mobil", "Sepeda", "Truk", "Motor", "Bus"],
        "mobil" => ["merk" => "Toyota", "type" => "Vios", "year" => 2016],
        "motor" => ["Honda", "Yamaha", "Suzuki"]
    ];

    // Menampilkan Output
    echo "Ini Array Kendaraan <br><br>";
    echo implode (", ",$kendaraan["transportasi"]). "<br>";
    echo "=========================== <br>";

    echo "Ini Array Mobil <br><br>";
    echo $kendaraan["mobil"]["merk"].", ".$kendaraan["mobil"]["type"].", ".$kendaraan["mobil"]["year"]."<br>";
    echo "=========================== <br>";

    echo "Ini Array Mobil<br><br>";
    echo implode (", ",$kendaraan["motor"]),"<br>";

    // Basic-Array Multidimensi
    // $ar_jus = [
    //     ["buah"=>"Mangga","harga"=>8000],
    //     ["buah"=>"Alpukat","harga"=>10000],
    //     ["buah"=>"Durian","harga"=>14000]
    // ];

    // foreach($ar_jus as $jus){
    //     echo "jus " .$jus["buah"]." harganya : ".$jus["harga"]."<br>"; 
    // }   
?>