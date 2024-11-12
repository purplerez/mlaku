<?php 
  require_once "./config/config.php";

?>
<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--untuk menginclude kan icon di title bar windows -->
    <link rel="icon" href="./img/logo.ico" type="image/x-icon" />
    
    <!-- Bootstrap CSS yang sudah di pindah ke lokal, tidak lagi membutuhkan akses online-->
    <link rel="stylesheet" href="./css/bootstrap.min.css" >
   
    <!-- fontawesome adalah font yang digunakan untuk 'icon-icon' seperti icon social media, icon amplop, arrow (di bagian footer) dll akses online -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>Official Website MlakuMlaku.com</title>
  </head>
  <body>

  <!-- header untuk email admin & social media button --> 
  <div class="container-fluid">
      <header class="blog-header text-muted">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="pt-1 pl-4 col-8">
            <span class="fa fa-envelope" style="color : #003c57; "> </span> admin@mlaku.com 
          </div>

          <div class="col-4 d-flex justify-content-end align-items-center">
            <div class="nav-scroller">
                <nav class="nav d-flex justify-content-between">
                    <a class="p-2 text-muted" href="#"><span class="pr-4 fa fa-facebook" style="color : #003c57; "> </span></a>
                    <a class="p-2 text-muted" href="#"> <span class="pr-4 fa fa-instagram" style="color : #003c57; "> </span></a>
                    <a class="p-2 text-muted" href="#">  <span class="pr-4 fa fa-youtube" style="color : #003c57; "> </span></a>
                </nav>
            </div>
          </div>
        </div>
      </header>
  </div> 
<!-- end of header--> 

<!-- Navbar untuk logo dan Navigasi (menu - menu) -->
  <nav class="navbar navbar-expand-lg navbar-dark" style="background :#003c57;">
           <div class="container-fluid">
         <a class="navbar-brand" href="#"><img src="./img/logo.png" class="img-fluid rounded-circle" style="height : 40px; padding-right : 1px; padding-bottom:1px;"></a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
           <div class="navbar-nav">
             <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
             <a class="nav-item nav-link" href="#">Tentang Kami</a>
             <a class="nav-item nav-link" href="#">Portfolio</a>
             <a class="nav-item nav-link disabled" href="#">Contact</a>
           </div>
         </div>
           </div>  
  </nav>  
     
<!-- end of navbar -->

<!-- Area untuk jumbotron yang memuat logo dan ucapanm selamat datang -->
<div class="jumbotron jumbotron-fluid">
  <div class="text-center">
    <img src="./img/Light Blue Circle Business Logo.png" width="300" class="rounded-circle">
    <h1 class="display-4">Mlaku - Mlaku</h1>
    <p class="lead">Selamat Datang 

      
    di Official Website MlakuMlaku</p>
  </div>
</div>
<!-- end of jumbotron -->

<!-- kontainer yang memuat 3 lingkaran kecil kelebihan dari produk -->
<div class="container">
  <div class="mb-4 row">
      <div class="text-center col">
      <img src="./img/Light Blue Circle Business Logo.png" width="200" class="mt-3 mb-4 rounded-circle" style="border : solid 1px #003c57;" >
      <h4 style="color : #003c57; font-size : 20pt;  ">DURABLE </h4>
      </div>
      <div class="text-center col">
      <img src="./img/Light Blue Circle Business Logo.png" width="200" class="mt-3 mb-4 rounded-circle" style="border : solid 1px #003c57;" >
      <h4 style="color : #003c57; font-size : 20pt;  " >UNIQUE </h4>
      </div>
      <div class="text-center col">
      <img src="./img/Light Blue Circle Business Logo.png" width="200" class="mt-3 mb-4 rounded-circle" style="border : solid 1px #003c57;" >
      <h4 style="color : #003c57; font-size : 20pt; ">AFFORDABLE </h4>
      </div>
  </div>
</div>
<!-- end of kontainer -->

<!-- kontainer untuk galery 'New Arrival' -->
<div class="container pb-5 mb-4" style="border-bottom : solid 1px #eee;">
  <div class="mb-4 row" style="border-bottom : dashed 1px #eee;">
    <div class="py-4 text-center col">
      <span style="color : #003c57; font-size : 20pt;  ">NEW ARRIVALS test</span>
    </div>
  </div>

  <div class="row" >
<?php
  $tampil = tampilNewRelease($koneksi);

  foreach($tampil as $rec){
?>
    <div class="col-md">
      <div class="card">
        <img class="card-img-top" src="./upload/sepatu/<?= $rec['file_gambar'] ?>" alt="Card image cap">
        <div class="card-body">
          <p class="text-center card-text" >
          <a href="detail.php?id=<?= $rec['idsepatu'] ?>" >  <span style="color : #003c57;"><?= $rec['nama'] ?></span> </a><br/>
          <span style="color : #003c57;"> Rp. <?= number_format($rec['harga'],0,',','.') ?> </span>
          </p>
          
        </div>
      </div>
    </div>
<?php } ?>

    <!-- <div class="col-md" style="color : #003c57;">
      <div class="card">
        <img class="card-img-top" src="./img/produk/2.jpg" alt="Card image cap">
        <div class="card-body">
          <p class="text-center card-text" style="color : #003c57;">
          <span style="color : #003c57;">Active Kaze Full Black</span> <br/>
          <span style="color : #003c57;"> Rp. 295.000 </span>
          </p>
          
        </div>
      </div>
    </div>


    <div class="col-md">
      <div class="card">
        <img class="card-img-top" src="./img/produk/3.jpg" alt="Card image cap">
        <div class="card-body">
          <p class="text-center card-text">
          <span style="color : #003c57;">Active Kaze Full Black</span> <br/>
          <span style="color : #003c57;"> Rp. 295.000 </span>
          </p>
          
        </div>
      </div>
    </div> -->
  </div>

  <!-- <div class="row">
    <div class="col-md">
      <div class="card">
        <img class="card-img-top" src="./img/produk/4.jpg"alt="Card image cap">
        <div class="card-body">
          <p class="text-center card-text">
          <span style="color : #003c57;">Active Kaze Full Black</span> <br/>
          <span style="color : #003c57;"> Rp. 295.000 </span>
          </p>
          
        </div>
      </div>
    </div>
    <div class="col-md">
      <div class="card">
        <img class="card-img-top" src="./img/produk/5.jpg" alt="Card image cap">
        <div class="card-body">
          <p class="text-center card-text">
          <span style="color : #003c57;">Active Kaze Full Black</span> <br/>
          <span style="color : #003c57;"> Rp. 295.000 </span>
          </p>
          
        </div>
      </div>
    </div>
    <div class="col-md">
      <div class="card">
        <img class="card-img-top" src="./img/produk/6.jpg" alt="Card image cap">
        <div class="card-body">
          <p class="text-center card-text">
          <span style="color : #003c57;">Active Kaze Full Black</span> <br/>
          <span style="color : #003c57;"> Rp. 295.000 </span>
          </p>
          
        </div>
      </div>
    </div>
</div>-->
</div> 
<!-- end of kontainer new arrival -->

<!-- kontainer untuk testimoni pelanggan -->
<div class="container pt-5 bg-light" >
      <div class="pt-5 row inner cover">
        <div class="text-center align-middle col font-italic" style="height : 200px;">
          <p class="align-middle lead">
            <quote> 
              "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."
            </quote> <br/>
            <quote>( Customer )</quote>
          </p>
        </div>  
    </div>
</div>
<!-- end of kontainer testimoni -->

<!-- Footer -->
<footer class="px-4 pt-5 text-white ftco-footer" style="background : #003c57;">
    <div class="my-0 container-fluid">
      <div class="mb-5 row">
          <div class="col-sm-12 col-md">
              <div class="mb-4 ml-md-4">
                  <h3 class="">About Us</h3>
                  <ul class="list-unstyled text-small">
                      <li><a class="text-white" href="#"><span class="mr-2 fa fa-chevron-right"></span>Meet the Team</a></li>
                      <li><a class="text-white" href="#"><span class="mr-2 fa fa-chevron-right"></span>The Idea</a></li>
                      <li><a class="text-white" href="#"><span class="mr-2 fa fa-chevron-right"></span>Empowerment</a></li>
                  </ul>
              </div>
          </div>
          <div class="col-sm-12 col-md">
              <div class="mb-4 ml-md-4">
                  <h3 class="">Information</h3>
                  <ul class="list-unstyled text-small">
                      <li><a href="#" class="text-white"><span class="mr-2 fa fa-chevron-right"></span>About us</a></li>
                      <li><a href="#" class="text-white"><span class="mr-2 fa fa-chevron-right"></span>Catalog</a></li>
                      <li><a href="#" class="text-white"><span class="mr-2 fa fa-chevron-right"></span>Contact us</a></li>
                      <li><a href="#" class="text-white"><span class="mr-2 fa fa-chevron-right"></span>Term &amp; Conditions</a></li>
                  </ul>
              </div>
          </div>
          <div class="col-sm-12 col-md">
              <div class="mb-4">
                  <h3 class="">Quick Link</h3>
                  <ul class="list-unstyled">
                      <li><a href="#" class="text-white"><span class="mr-2 fa fa-chevron-right"></span>New User</a></li>
                      <li><a href="#" class="text-white"><span class="mr-2 fa fa-chevron-right"></span>Help Center</a></li>
                      <li><a href="#" class="text-white"><span class="mr-2 fa fa-chevron-right"></span>Report Spam</a></li>
                      <li><a href="#" class="text-white"><span class="mr-2 fa fa-chevron-right"></span>Faq's</a></li>
                  </ul>
              </div>
          </div>
          <div class="col-sm-12 col-md">
              <div class="mb-3 text-white">
                  <h3 ><a href="#" class="text-white"><span>MlakuMlaku.com</span></a></h3>
                  <p>One Step At a Time, Join With the Pack</p>
                  <ul class="mt-2 ftco-footer-social list-unstyled">
                      <li class=""><a href="#" class="text-white"><span class="pr-2 fa fa-twitter"></span> @mlaku2</a></li>
                      <li class=""><a href="#" class="text-white"><span class="pr-2 fa fa-facebook"></span> Mlaku Official Page</a></li>
                      <li class=""><a href="#" class="text-white"><span class="pr-2 fa fa-instagram"></span> @mlakumlaku</a></li>
                  </ul>
              </div>
          </div>
      </div>
    </div>

    <div class="px-0 py-2 container-fluid" >
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                  <p class="mb-0 text-center text-muted">
                    Copyright &copy; All rights reserved | This web is made with <i class="fa fa-heart color-danger" aria-hidden="true"></i> by <a href="https:/instagram.com/rezdevina" class="text-white" target="_blank">@rezdevina</a>
                  </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end of footer -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="./js/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="./js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>