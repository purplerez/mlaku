<?php 
    require_once "../config/config.php";

    $tampil = tampilSatuBarangGambar($koneksi, $_GET['nomor']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!--untuk menginclude kan icon di title bar windows -->
<link rel="icon" href="../img/logo.ico" type="image/x-icon" />

<!-- Bootstrap CSS yang sudah di pindah ke lokal, tidak lagi membutuhkan akses online-->
<link rel="stylesheet" href="../css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

<!-- fontawesome adalah font yang digunakan untuk 'icon-icon' seperti icon social media, icon amplop, arrow (di bagian footer) dll akses online -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<title>Official Website MlakuMlaku.com | SEPATU</title>
</head>
<body>
<div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <form action="" method="POST" enctype="multipart/form-data">
                    <?php 
                        // foreach($tampil as $rec) {
                    ?>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama</label>
                        <input type="text" class="form-control" id="" placeholder="Nama Sepatu" name="nama" value="<?= $tampil['nama'] ?>"  />
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Ukuran</label>
                    </div>
                    <?php 
                    $ukuran = explode(',', $tampil['ukuran']);

                    $row = 1; 
                        for($i = 30; $i <= 42; $i++) {
                    ?>

                    <div class="form-check form-check-inline">                                  
                        <input <?php if(in_array($i, $ukuran)) { echo 'checked'; } ?> class="form-check-input" type="checkbox" id="inlineCheckbox1" name="ukuran[]" value="<?= $i ?>">
                        <label class="form-check-label" for="inlineCheckbox1"><?= $i ?></label>
                    </div>

                    <?php 
                    if ($row % 5  == 0) echo "<br/>";

                    $row++; } ?>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Harga</label>
                        <input type="number" class="form-control" id="" placeholder="Rp. 0.0" name="harga" value="<?= $tampil['harga'] ?>">
                    </div>
                    <div class="form-group">
                    <label for="exampleFormControlSelect1">Jenis Sepatu</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="jenis">
                        <option value="">-- Pilih Jenis Sepatu --</option>
                        <?php 
                                $kategori = tampilKategori($koneksi);

                                foreach ($kategori as $kat) {
                        ?>
                            <option value="<?= $kat['id'] ?>" <?php if($kat['id'] == $tampil['jenis']) { echo 'selected'; } ?> ><?= $kat['nama'] ?></option>
                        <?php } ?>
                        
                    </select>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Deskripsi</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi"><?= $tampil['deskripsi'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Gambar</label>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1"><img src="../upload/sepatu/<?= $tampil['gambar'] ?>"  style="width : 70%;" /></label>
                        <input type="file" name="gambar" id="">
                    </div>     
                        
                    <input type="hidden" name="id" value="<?= $tampil['id'] ?>" />
                    <input type="hidden" name="gambar_lama" value="<?= $tampil['gambar'] ?>">
                    <button type="submit" class="btn btn-primary" name="updateSepatuGambar">Update Sepatu</button>         
                </form>
                <?php 
                        // }
                ?>
            </div>
        </div>
    </div>
    
</body>
</html>