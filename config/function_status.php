<?php 

function status($status, $kode)
{
    if($status == 'success') {
        switch ($kode) {
            case 1 : echo "Data Berhasil Di Inputkan"; break;
            case 2 : echo "Data Berhasil Di Hapus"; break;
            case 3 : echo "Data Berhasil Di Rubah"; break;
            case 4 : echo "Gambar Berhasil Di Upload"; break;
        }
    }
    else if ($status == 'error'){
        switch ($kode) {
            case 1 : echo "Error : Data Tidak Berhasil Di Inputkan"; break;
            case 2 : echo "Error : Data Tidak Berhasil Di Hapus"; break;
            case 3 : echo "Error : Data Berhasil Di Rubah"; break;
            case 4 : echo "Error : Gambar Berhasil Di Upload"; break;
        }
    }
    else {
        echo 'Kode Error Tidak Dikenali';
    }
}

?>