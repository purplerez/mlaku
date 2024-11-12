<?php 

include "../config/config.php";
// require_once 'data.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--untuk menginclude kan icon di title bar windows -->
    <link rel="icon" href="../img/logo.ico" type="image/x-icon" />
    
    <!-- Bootstrap CSS yang sudah di pindah ke lokal, tidak lagi membutuhkan akses online-->
    <link rel="stylesheet" href="../css/bootstrap.min.css" >
   
    <!-- fontawesome adalah font yang digunakan untuk 'icon-icon' seperti icon social media, icon amplop, arrow (di bagian footer) dll akses online -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>Official Website MlakuMlaku.com | SEPATU</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama</label>
                        <input type="text" class="form-control" id="" placeholder="Nama Sepatu" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Ukuran</label>
                    </div>
                    <?php 
                    $row = 1; 
                        for($i = 30; $i <= 42; $i++) {
                    ?>

                    <div class="form-check form-check-inline">                                  
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="ukuran[]" value="<?= $i ?>">
                        <label class="form-check-label" for="inlineCheckbox1"><?= $i ?></label>
                    </div>

                    <?php 
                    if ($row % 5  == 0) echo "<br/>";

                    $row++; } ?>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Harga</label>
                        <input type="number" class="form-control" id="" placeholder="Rp. 0.0" name="harga">
                    </div>
                    <div class="form-group">
                    <label for="exampleFormControlSelect1">Jenis Sepatu</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="jenis">
                        <option value="">-- Pilih Jenis Sepatu --</option>
                        <option value="1">Formal</option>
                        <option value="2">Non-Formal</option>
                        <option value="3">Sport</option>
                        <option value="4">Sandal</option>
                    </select>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Deskripsi</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi"></textarea>
                    </div>

                    <!-- line untuk form input gambar -->
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Gambar / Movie</label>
                        <input type="file" class="form-control" id="" placeholder="" name="gambar">
                    </div>
                    <!-- endline untuk form input gambar -->

                    
                    <button type="submit" class="btn btn-primary" name="addSepatuGambar">Inputkan Data</button>         
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>