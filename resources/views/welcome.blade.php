<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css'>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Digi Laundry</title>
  </head>
  <body>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: white;">
            <div class="container">
              <a class="navbar-brand" href="{{url('/')}}" style="font-family: 'Montserrat', sans-serif;"><b>DIGI</b> | LAUNDRY</a> &nbsp; &nbsp;
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                      <a href="#about" class="btn btn-outline-secondary btn-sm" role="button" aria-disabled="true" style="border-radius: 50px; color: black;font-family: 'Montserrat', sans-serif; ">Tentang Kami</a>
                  </li> &nbsp; &nbsp; &nbsp;
                  <li class="nav-item">
                      <a href="#" class="btn btn-outline-secondary btn-sm" role="button" aria-disabled="true" style="border-radius: 50px; color: black; font-family: 'Montserrat', sans-serif;">Komplain</a>
                  </li>
                </ul>
                <span class="navbar-text">
                    <a href="#" class="btn btn-dark btn-sm" role="button" aria-disabled="true" style="border-radius: 50px; color: white; font-family: 'Montserrat', sans-serif;">Daftar Mitra</a>
                </span>
              </div>
            </div>
          </nav>
<br><br><br>
      <div id="myCarousel" class="carousel carousel-dark slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
            </div>
        <div class="carousel-inner">
          <div class="carousel-item header active">
            <img src="{{asset('img/header.jpg')}}" alt="Header" class="img-header">
            <div class="container">
              <div class="carousel-caption text-end">
                <h1></h1>
                <p></p>
                <p style="font-family: 'Montserrat', sans-serif;"><a style="font-size: 12pt;" class="btn btn-lg btn-outline-light rounded-pill" href="{{url('search')}}">Lacak Pesananmu</a></p>
              </div>
            </div>
          </div>

          <div class="carousel-item">
              <img src="{{asset('img/banner/banner-discount.jpg')}}" alt=""width="100%" height="100%">
              <div class="container">
                </div>
              </div>
            
      
            <div class="carousel-item">
              <img src="{{asset('img/banner/banner-imlek.jpg')}}" alt="" width="100%" height="100%">
            </div>  
      
            <div class="carousel-item">
                <img src="{{asset('img/banner/banner-opening-2.jpg')}}" alt="" width="100%" height="100%">
                <div class="container">
                </div>
              </div>
      
              <div class="carousel-item">
                  <img src="{{asset('img/banner/banner-opening.jpg')}}" alt="" width="100%" height="100%">
                  <div class="container">
                  </div>
                </div> 
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
        </div>
    
<div class="container">
  <section id="about">
    <div class="jumbotron img-jumbo" style="border-radius: 50px;"><br><br><br><br><br><br>
        <h1 class="display-4" style="color: white; font-family: 'Montserrat', sans-serif;">&nbsp; &nbsp; Tentang Kami</h1>
        <p class="lead" style="color: white; font-family: 'Montserrat', sans-serif;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Digi Laundry merupakan platform digital yang mempermudah kamu mendapatkan</p>
        <p class="lead" style="color: white; font-family: 'Montserrat', sans-serif;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Layanan Laundry yang aman dan terpercaya sesuai Pilihanmu.</p>
        <p class="lead">
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a class="btn btn-outline-light btn-lg" href="#" role="button" style="border-radius: 50px;">Lanjut</a>
        </p>
        <br><br>
      </div>
  </section>

  <section id="services" style="font-family: 'Montserrat', sans-serif;">
    <div class="py-5" >
      <div class="row" >
          <!-- DEMO 1 Item-->
          <div class="col-lg-6 mb-3 mb-lg-0" >
          <div class="hover hover-1 text-white" style="border-radius: 30px;"><img src="{{asset('img/mitra.jpg')}}" alt="">
              <div class="hover-overlay"></div>
              <div class="hover-1-content px-5 py-4">
                <h3 class="font-weight-bold mb-0"> <span class="font-weight-light">Mitra</h3><br>
                <p class="hover-1-description font-weight-light mb-0" href ="as" style="margin-left: 0px; margin-top: -20px;"><a class="btn btn-outline-light" href="{{url('/mitra')}}" role="button" style="border-radius:50px">Lihat</a></p>
              </div>
            </div>
          </div>
          <!-- DEMO 1 Item-->
          <div class="col-lg-6">
            <div class="hover hover-1 text-white " style="border-radius: 30px;"><img src="{{asset('img/layanan.jpg')}}" alt="">
              <div class="hover-overlay"></div>
              <div class="hover-1-content px-5 py-4">
                  <h3 class="hover-1-title font-weight-bold mb-0"> <span class="font-weight-light">Layanan</h3><br>
                    <p class="hover-1-description font-weight-light mb-0" style="margin-left: 0px; margin-top: -20px;"><a class="btn btn-outline-light" href="{{url('/layanan')}}" role="button" style="border-radius:50px">Lihat</a></p>
                  </div>
            </div>
          </div>
        </div>
      </div>
</section>
</div>
    

    
      
  
      <section id="team" style="background-image: url('img/background.png');">
          <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
              <h1 class="display-4" style="color: black;">Fitur Kami</h1>
         </div>
         <br>
          <div class="row" style="padding-left: 200px; margin-right: 200px;">

            <div class="col-md-4">
              <div class="card" style="background-color: rgba(0, 0, 0, 0.5); border-radius: 30px;" >
                <br>
                <div class="img1" style="margin-top: -20px;"><img src="{{asset('img/tracking.png')}}" alt="" width="100%"></div><br><br>
                <div class="main-text text-center" style="margin-top: -50px;">
                  <h2 style="font-family: 'Montserrat', sans-serif; font-size: 14pt; margin-top: -13px;"><b>S M A R T &nbsp; T R A C K I N G</b></h2>
                  <p></p>
                  <p style="font-family: 'Montserrat', sans-serif; font-size: 11pt; margin-top: 15px;">
                    Konsumen dapat <br>
                    melakukan pelacakan <br>
                    progres laundry mereka <br>
                    sehingga mereka bisa <br>
                    melihat sampai mana <br>
                    layanan mereka sedang <br>
                    dikerjakan <br><br> <br>
                  </p>
                </div>
              </div>
            </div>

            <div class="col-md-4">
                <div class="card" style="background-color: rgba(0, 0, 0, 0.5); border-radius: 30px;">
                  <div class="img1" style="margin-top: -5px;"><img src="{{asset('img/alert.png')}}" alt=""></div><br><br>
                  <div class="main-text text-center" style="margin-top: -50px;">
                    <h2 style="font-family: 'Montserrat', sans-serif; font-size: 14pt;margin-top: -5px;"><b>A L E R T &nbsp; S Y S T E M</b> </h2>
                    <p></p>
                    <p style="font-family: 'Montserrat', sans-serif; font-size: 11pt;">
                      Sistem kami dapat memberi <br>
                      peringatan kepada <br>
                      konsumen terkait baju yang<br>
                      harus melakukan perlakuan <br>
                      khusus sehingga <br>
                      meminimalisir kerusakan <br>
                      yang terjadi <br> <br> <br>

                    </p>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                  <div class="card" style="background-color: rgba(0, 0, 0, 0.5); border-radius: 30px;">
                    <div class="img1" style="margin-top: -10px;"><img src="{{asset('img/browser.png')}}" alt=""></div><br><br>
                    <div class="main-text text-center" style="margin-top: -50px;">
                      <h2 style="font-family: 'Montserrat', sans-serif; font-size: 14pt;"><b>C U S T O M &nbsp; S E R V I C E</b></h2>
                      <p></p>
                      <p style="font-family: 'Montserrat', sans-serif; font-size: 11pt;">
                        Memberi kesempakan <br>
                        kepada konsumen untuk <br>
                        dapat mengubah status <br>
                        layanan sesuai kebutuhan <br>
                        pelanggan <br><br><br> <br> <br>
                      </p>
                      
                      </div>
                      
                  </div>
                  <br><br><br><br><br> <br><br> <br><br><br><br>
                </div>
          </div>
                
          
      </section>
  
        <div class="container">
            <div class="gtco-testimonials" style="margin-left: 30px; font-family: 'Montserrat', sans-serif;"> 
                <h2>Testimoni</h2>
                <div class="owl-carousel owl-carousel1 owl-theme">
                  <div>
                    <div class="card text-center">
                      <div class="card-body" >
                        <h5>Ronne Galle <br />
                          <span> Project Manager </span></h5>
                        <p class="card-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                          impedit quo minus id quod maxime placeat ” </p>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="card text-center">
                      <div class="card-body">
                        <h5>Missy Limana<br />
                          <span> Engineer </span></h5>
                        <p class="card-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                          impedit quo minus id quod maxime placeat ” </p>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="card text-center">
                      <div class="card-body">
                        <h5>Martha Brown<br />
                          <span> Project Manager </span></h5>
                        <p class="card-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                          impedit quo minus id quod maxime placeat ” </p>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="card text-center">
                      <div class="card-body">
                        <h5>Hanna Lisem<br />
                          <span> Project Manager </span></h5>
                        <p class="card-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                          impedit quo minus id quod maxime placeat ” </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
          
<div class="container">
  <footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      
      
      <div class="col-6 col-md">
        <h5>Alamat</h5>
        <ul class="list-unstyled text-small">
          <p>Jl. Masjid Al-Farouq NO.29 Kukusan, Beji, Depok</p>
          <p>16425</p>
          <br><br>
          <p>PT Omnisia Creative</p>
        </ul>
      </div>
      <div class="col-6 col-md">
        <ul class="list-unstyled text-small">
          <li><a class="link-secondary" href="#">Tentang Kami</a></li>
          <li><a class="link-secondary" href="#">Mitra</a></li>
          <li><a class="link-secondary" href="#">Layanan</a></li>
          <li><a class="link-secondary" href="#">Fitur Kami</a></li>
          <li><a class="link-secondary" href="#">Testimoni</a></li>
        </ul>
      </div>
    </div>
  </footer>
</div>
      
  
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
    <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js'></script>
<script  src="{{asset('js/script.js')}}"></script>
    
  
      
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
      <script>
        
        $("a").on('click', function(event) {
          if (this.hash !== "") {
  
            event.preventDefault();
  
            var hash = this.hash;
  
            $('html, body').animate({
              scrollTop: $(hash).offset().top
            }, 'slow', function(){
       
              window.location.hash = hash;
            });
  
          } 
        });
      </script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    

  </body>
</html>