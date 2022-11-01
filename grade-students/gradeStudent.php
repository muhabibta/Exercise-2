<?php

function gradeStudent($nama,$nilai) {
echo "===============</br>RAPORT SD TADIKA 1</br>===============</br>";

if($nilai<=0 || $nilai>100){
    echo "Nilai Invalid";
}elseif($nilai<=34){
    echo "nama : $nama; score: E";
} elseif($nilai<=49){
    echo "nama : $nama; score: D";
} elseif($nilai<=64){
    echo "nama : $nama; score: C";
} elseif($nilai<=79){
    echo "nama : $nama; score: B";
} elseif($nilai<=100){
    echo "nama : $nama; score: A";
}
}

gradeStudent("wahyu",0);