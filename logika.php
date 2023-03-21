<?php
// Penulisan array yang lama
$namaSiswa = array("Elia","Aldy","Nias");

// penulisan array yang baru
$nama = ["Elia","Aldy","Nias","Obed","Jakson"];

// var_dump($namaSiswa[0]);

echo "<br>". $nama[0];
echo "<br>". $nama[1];
echo "<br>". $nama[2];


foreach($nama as $siswa)
{
    echo "<br>" .$siswa;
}

// Array multi dimensi

$namaSacode =[
    [
        "namadepan" => "Jakson",
        "namabelakang" => "Tabuni",
        "usia" => "30",
        "alamat" => "Doyo kab. Sentani"
    ],
    [
        "namadepan" => "Aldy",
        "namabelakang" => "Kogoya",
        "usia" => "30",
        "alamat" => "Doyo kab. Sentani"
    ],
    [
        "namadepan" => "Nias",
        "namabelakang" => "Asso",
        "usia" => "60",
        "alamat" => "Brazil"
    ]
];

// tampilkan data
$i = 0;

foreach($namaSacode as $nama)

{
    echo "<br> <br> <br> Siswa No 1 <br>";
    echo "nama : ".$nama["namadepan"]." ".$nama["namabelakang"] ."<br>";
    echo "alamat : ".$nama["alamat"] ."<br>";
    echo "usia : ".$nama["usia"] ."<br>";

}




?>