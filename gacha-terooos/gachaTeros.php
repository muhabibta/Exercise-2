<?php

function gachaTeros(){
    $angka = rand(1,5);
    switch ($angka) {
        case 1:
            echo "Angka kamu : $angka </br></br>NT kadang-kadang, coba lagi ya ^-^";
            break;
        
        case 2:
            echo "Angka kamu : $angka </br></br>Selamat! kamu mendapatkan kupon sebanyak 5";
            break;
        
        case 3:
            echo "Angka kamu : $angka </br></br>Selamat! kamu mendapatkan kupon sebanyak 15";
            break;
        
        case 4:
            echo "Angka kamu : $angka </br></br>Selamat! kamu mendapatkan kupon sebanyak 50";
            break;
        
        case 5:
            echo "Angka kamu : $angka </br></br>WOWOWOW! kamu menang jackpot, selamat!";
            break;
        
        default:
            # code...
            break;
    }
};

gachaTeros();