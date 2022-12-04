<?php 

// ARRAY DIMENSI
    // $nama = array("joni","tejo","budi","siti",100,2.5);

    // var_dump($nama);
    // echo '<br>';

    // echo $nama[5];
    // echo '<br>';

    // for ($i=0; $i < 6 ; $i++) { 
    //     // echo $i;
    //     echo $nama[$i].'<br>';
    // }

    // foreach ($nama as $key) {
    //     echo $key.'<br>';
    // }

// ARRAY ASOSIATIF
    // $nama=array(
    // "joni" => "surabaya",
    // "tejo" => "malang",
    // "budi" => "jakarta",
    // "siti" => "sidoarjo"
    // );

    $nama["joni"]="surabaya";
    $nama["tejo"]="malang";
    $nama["budi"]="jakarta";
    $nama["siti"]="sidoarjo";
    $nama["edi"]="palembang";

    var_dump($nama);

    echo '<br>';

    //echo $nama['budi'];

    foreach ($nama as $i => $a) {
        echo $i." -> " .$a. '<br>';
    }

?>