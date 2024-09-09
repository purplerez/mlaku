<?php 

$nama = 'SEPATU BARU';
$ukuran = '30, 31, 32';
$harga = 500000;
$jenis = 1;
$deskripsi = 'bla bla bla';
$id = 1; 

$data = [
    'nama' => $nama,
    'ukuran' => $ukuran,
    'harga' => $harga,
    'jenis' => $jenis,
    'deskripsi' => $deskripsi
];

foreach ($data as $index => $value){
    echo "UPDATE sepatu SET $index = $value WHERE id = $id <br/>";
}

echo "UPDATE sepatu SET nama = $nama, ukuran = $ukuran, harga = $harga, jenis = $jenis, deskripsi = $deskripsi WHERE id = $id";

?>