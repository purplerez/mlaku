<?php 
        include "../config/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--untuk menginclude kan icon di title bar windows -->
    <link rel="icon" href="../img/logo.ico" type="image/x-icon" />
    
    <!-- Bootstrap CSS yang sudah di pindah ke lokal, tidak lagi membutuhkan akses online-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
   
    <!-- fontawesome adalah font yang digunakan untuk 'icon-icon' seperti icon social media, icon amplop, arrow (di bagian footer) dll akses online -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>Official Website MlakuMlaku.com | SEPATU</title>
<body>
    <div class="container-fluid" >
        <div class="row">
            <div class="col-10">
                <table class='table'>
                    <tr>
                            <td>#</td>
                            <td>Nama</td>
                            <td>Harga</td>
                            <td colspan=3> Menu</td>
                    </tr>
                    <?php 
                        $barang = tampilBarangGambar($koneksi);
                        if($barang == false)
                        {
                            echo 'barang kosong';
                        }
                        else {
                            $no=1;
                            foreach($barang as $rec){
                    ?>
                    <tr>
                            <td><?= $no ?></td>
                            <td><?= $rec['nama'] ?></td>
                            <td><?= $rec['harga'] ?></td>
                            <td><a href="update_barang_gambar.php?nomor=<?= $rec['id'] ?>">edit</a></td>

                            <td><a href="upload_gambar.php?id=<?= $rec['id'] ?>">gambar</a></td>
                            <td>
                                <!-- dibawah ini adalah form yang dibuat untuk mengirimkan data id barang 
                                 yang akan dihapus ketika kita klik tombol del -->
                                <form action="" method="post">
                                    <!-- data id barang disimpan dalam tag input type hidden dengan valuenya
                                     adalah id dari record/data terpilih  -->
                                    <input type="hidden" name="id" value="<?= $rec['id'] ?>">
                                    <button type="submit" class="btn-danger" name='del'>Delete</button>
                                </form>
                            </td>
                    </tr>
                    <?php  $no++; 
                            }
                     }
                     ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>