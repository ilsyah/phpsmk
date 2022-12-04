<?php 

// operator matematika

$a = 5;
$b = 5;

$c = $a+$b;

echo $c."<br>";

$c = $a-$b;
echo $c.'<br>';

$c = $a*$b;
echo $c.'<br>';

$c = $a / $b;
echo $c .'<br>';

// pembulatan ke bawah "floor"
$c = $a / $b;
echo floor($c).'<br>';

// pembulatan ke atas "round"
$c = $a / $b;
echo round($c).'<br>';

// modulo = sisa hasil pembagian
$c = $a % $b;
echo $c.'<br>';

// OPERATOR LOGIKA

$c = $a < $b;
echo $c.'<br>';

$c = $a > $b;
echo $c.'<br>';

$c = $a == $b;
echo $c.'<br>';

$c = $a != $b;
echo $c;

// INCREMENT

// berkurang dari nilainya
$a--;
echo $a.'<br>';

// bertambah dari nilainya
// $a++;
// echo $a;


// OPERATOR STRING

$kata = 'sura';
$kota = 'baya';

$hasil = $kata . $kota;

$hasil .= ' kota pahlawan';
echo $hasil;


?>