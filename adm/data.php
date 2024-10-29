<?php
// require_once "../config/koneksi.php";
// require_once "../config/function.php";
// include "../config/config.php";

if(isset($_POST['addSepatu'])){
   
    $nama = htmlspecialchars($_POST['nama']);    
    $ukuran = implode(',',$_POST['ukuran']); 
    $harga = htmlspecialchars($_POST['harga']);
    $jenis = htmlspecialchars($_POST['jenis']);
    $deskripsi = htmlspecialchars($_POST['deskripsi']);
    
    
    // htmlspecialchars digunakan untuk mengantisipasi inputan dari user.
    
    // kita memasukkan semua data yang akan di inputkan ke dalam variabel array bernama $data
    $data = [
        'nama' => $nama,
        'ukuran' => $ukuran,
        'harga' => $harga,
        'jenis' => $jenis,
        'deskripsi' => $deskripsi
    ];

    // sebelum menginputkan data kedalam database kita akan memvalidasi semua inputan, apakah sudah terisi
    // jika ternyata ada sebuah field yang tidak terisi maka fungsi validasiBarang akan mengeluarkan 
    // pesan error melalui url
    // jika berhasil, variabel validasi akan menghasilkan nilai 0
    $validasi = validasiBarang($data);
    
    // jika validasi berhasil (tidak ada inputan yang kosong atau bernilai 0)
    if($validasi === 0)
    {
        // maka input data barang akan di lakukan dengan memanggil fungsi inputBarang
        $result = inputBarang($data, $koneksi);

        // jika eksekusi query berhasil maka halaman akan di arahkan ke input_sepatu.php dengan pesan sukses = 1
        if ($result) header("Location: input_sepatu.php?status=success&no=1");  
        else header("Location: input_sepatu.php?status=error&no=1");  // jika eksekusi tidak berhasil, maka halaman akan diarahkan ke halmaan input_sepatu.php dengan error no = 1
    } 
    else 
        header("Location: input_sepatu.php?error=missing_field&field=" . $validasi); // line ini berisi pesan error jika ada salah satu inputan kosong dan inputan yang mana yang kosong

    exit();
}
// proses ketika tombol delete di tekan 
else if(isset($_POST['del'])){
    $id = $_POST['id'];

    $result = hapusBarang($id, $koneksi);

    if($result) header("Location: tampil_sepatu.php?success=2"); 
    else header("Location: tampil_sepatu.php?errno=2"); 
}


// tambahan baru untuk mengupload gambar
if(isset($_POST['addSepatuGambar'])){
   
    $nama = htmlspecialchars($_POST['nama']);    
    $ukuran = implode(',',$_POST['ukuran']); 
    $harga = htmlspecialchars($_POST['harga']);
    $jenis = htmlspecialchars($_POST['jenis']);
    $deskripsi = htmlspecialchars($_POST['deskripsi']);
    $gambar = basename($_FILES['gambar']['name']); // untuk mengambil nama file yang diupload user
    
    // echo $gambar;
    // kita memasukkan semua data yang akan di inputkan ke dalam variabel array bernama $data
    $data = [
        'nama' => $nama,
        'ukuran' => $ukuran,
        'harga' => $harga,
        'jenis' => $jenis,
        'deskripsi' => $deskripsi,
        'gambar' => $gambar    // sisipkan variabel gambar untuk divalidasi
    ];

    $validasi = validasiBarang($data);
    
    // jika validasi berhasil (tidak ada inputan yang kosong atau bernilai 0)
    if($validasi === 0)
    {
        // maka input data barang akan di lakukan dengan memanggil fungsi inputBarang
        $result = inputBarangGambar($data, $koneksi);
        if($result)
        {
            // document root adalah htdocs nya anda
            $dir = $_SERVER['DOCUMENT_ROOT'].'/mlaku/upload/sepatu/';
            $upload = tambahGambar($dir, $_FILES['gambar']);
            if($upload) header("location: input_sepatu_gambar.php?success=3");
            else header("location: input_sepatu_gambar.php?errno=1");
        } 
        else header("Location: input_sepatu.php?errno=1");  // jika eksekusi tidak berhasil, maka halaman akan diarahkan ke halmaan input_sepatu.php dengan error no = 1
    } 
    else 
         header("Location: input_sepatu.php?error=missing_field&field=" . $validasi); // line ini berisi pesan error jika ada salah satu inputan kosong dan inputan yang mana yang kosong
}
if (isset($_POST['uploadGambar'])){

    $id = $_POST['id'];
    $gambar = basename($_FILES['gambar']['name']);

    $data = [
        'id' => $id,
        'gambar' => $gambar
    ];

    $validasi = validasiBarang($data);

    if($validasi === 0) {
        $result = inputGambarPisah($data, $koneksi);

        if($result){
            $dir = $_SERVER['DOCUMENT_ROOT'].'/mlaku/upload/sepatu/';
            $upload = tambahGambar($dir, $_FILES['gambar']);
            if($upload) header("location: upload_gambar.php?id=$id&success=4");
            else header("location:upload_gambar.php?id=$id&errno=2");
        }
        else header("location:upload_gambar.php?id=$id&errno=2");
    }
    else 
         header("Location: upload_gambar.php?id=$id&error=missing_field&field=" . $validasi); // line ini berisi pesan error jika ada salah satu inputan kosong dan inputan yang mana yang kosong


    exit();
}
if(isset($_POST['updateSepatu'])){
    // copas dari input data 
    $nama = htmlspecialchars($_POST['nama']);    
    $ukuran = implode(',',$_POST['ukuran']); 
    $harga = htmlspecialchars($_POST['harga']);
    $jenis = htmlspecialchars($_POST['jenis']);
    $deskripsi = htmlspecialchars($_POST['deskripsi']);
    //  end of copas dari input data 

    $id = $_POST['id'];   
//    khusus di part ini nama index WAJIB sama dengan nama field / kolom dalam tabel yang dituju
    $data = [
        'nama' => $nama,
        'ukuran' => $ukuran,
        'harga' => $harga,
        'jenis' => $jenis,
        'deskripsi' => $deskripsi
    ];

    $validasi = validasiBarang($data);

    if($validasi === 0){
        $result = updateBarang($koneksi, $data, $id);
        
        if ($result) header("location: tampil_barang.php?success=3");
        else header("location: tampil_barang.php?errno=1");
    }
    else 
        header("Location: tampil_barang.php?&error=missing_field&field=" . $validasi); // line ini berisi pesan error jika ada salah satu inputan kosong dan inputan yang mana yang kosong
}

if(isset($_POST['updateSepatuGambar']))
{
    $nama = htmlspecialchars($_POST['nama']);    
    $ukuran = implode(',',$_POST['ukuran']); 
    $harga = htmlspecialchars($_POST['harga']);
    $jenis = htmlspecialchars($_POST['jenis']);
    $deskripsi = htmlspecialchars($_POST['deskripsi']);
    $id = $_POST['id'];   

    // variabel gambar yang baru jika diupdate maka variabel ini akan terisi
    $gambar = basename($_FILES['gambar']['name']);

    // variabel gambar yang lama ditabel barang
    $gblama = $_POST['gambar_lama'];

    if(!empty($gambar)){
        $data = [
            'nama' => $nama, 
            'ukuran' => $ukuran,
            'harga' => $harga,
            'jenis' => $jenis, 
            'deskripsi' => $deskripsi,
            'gambar' => $gambar
        ];
    }
    else {
        $data = [
            'nama' => $nama, 
            'ukuran' => $ukuran,
            'harga' => $harga,
            'jenis' => $jenis, 
            'deskripsi' => $deskripsi
        ];
    }

    $validasi = validasiBarang($data);

    if($validasi === 0){
        $result = updateBarangGambar($data, $koneksi, $id);
        if($result) {
            if(!empty($gambar))
            {
                $gb = tampilSatuBarangGambar($koneksi, $id);
                $dest = $_SERVER['DOCUMENT_ROOT'].'/mlaku/upload/sepatu/';
                $upload = tambahGambar($dest, $_FILES['gambar']);
                if($upload) 
                { 
                    unlink("../upload/sepatu/$gblama");
                    header("location: tampil_barang_gambar.php?success=4");
                }
                else {
                    header("location: tampil_barang_gambar.php?errno=2");
                }
            }
            else {
                header("location: tampil_barang_gambar.php?success=3");
            }
        }
        else {
            header("location: tampil_barang_gambar.php?errno=1");
        }
    }
    else 
        header("Location: tampil_barang.php?id=$id&error=missing_field&field=" . $validasi); // line ini berisi pesan error jika ada salah satu inputan kosong dan inputan yang mana yang kosong
    
    exit();
}
?>