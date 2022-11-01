<?php

function kunjunganCafe($nama,$umur,$uang) {
 echo "===================</br>CAFE EXERCISE</br>===================</br></br>";
 
 $menu = new stdClass;
 $menu->anggur = 'Anggur';
 $menu->juice = 'Juice';

 if(!$nama){
    echo "Anda tidak boleh masuk!";
 } elseif($umur<17){
    $menu = $menu->juice;
    $harga = 50000;
    if($uang<$harga){
        echo "Uang tidak cukup. Pulang deck minta sama mamah.";
    } elseif($uang===$harga){
        echo "Uangnya pas ya dek, minumannya akan segera diantar :).";
    } else{
        echo "Anda bisa pesan minum. Sisa uang anda: $uang - $harga. Terimakasih :).";
    }
 } elseif($umur>=17){
    $menu = $menu->anggur;
    $harga = 300000;
    if($uang<$harga){
        echo "Uang tidak cukup. Pulang bang minta sama mamah.";
    } elseif($uang===$harga){
        echo "Uangnya pas ya bang, minumannya akan segera diantar :).";
    } else{
        echo "Anda bisa pesan minum. Sisa uang anda: $uang - $harga. Terimakasih :).";
    }
 }
}

kunjunganCafe("Sopo",17,50000);