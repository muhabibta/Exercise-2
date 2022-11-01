<?php

function graduates($nama, $nilai, $absen) {
    if($nilai>70 || $absen<5){
        echo "Selamat, $nama dinyatakan lulus dengan nilai $nilai.";
    } else {
        echo "Tetap semangat! $nama dinyatakan tidak lulus.";
    }
};

graduates("Jack", 80, 3);