<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css'>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
        .bd-placeholder-img {
          font-size: 1.125rem;
          text-anchor: middle;
          -webkit-user-select: none;
          -moz-user-select: none;
          user-select: none;
        }
  
        @media (min-width: 768px) {
          .bd-placeholder-img-lg {
            font-size: 3.5rem;
          }
        }
      </style>
    <title>Layanan Kami</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-light navbar-light fixed-top">
        <div class="container">
          <a class="navbar-brand" href="{{url('/')}}" style="font-family: 'Montserrat', sans-serif;"><b>DIGI</b> | LAUNDRY</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                  <a href="#about" type="button" class="btn btn-outline-secondary btn-sm" role="button" aria-disabled="true" style="border-radius: 50px; color: black;">Tentang Kami</a>
              </li> &nbsp;
              <li class="nav-item">
                  <a href="#" class="btn btn-outline-secondary btn-sm" role="button" aria-disabled="true" style="border-radius: 50px; color: black;">Komplain</a>
              </li>
            </ul>
            <span class="navbar-text">
                <a href="#" class="btn btn-dark btn-sm" role="button" aria-disabled="true" style="border-radius: 50px; color: white; font-family: 'Montserrat', sans-serif;">Daftar Mitra</a>
            </span>
          </div>
        </div>
      </nav>
            
    <div class="container">

        <div id="home" style="border-radius: 50px; margin-left: 50px;">
            <div class="container">
              <div class="row text-center">
                <h3 style="color: white;">Layanan</h3>
                </div>
              </div>
            </div>



      <div class="divider">
        <div class="container">
          <div class="row" style="margin-left: 80px; margin-right: 30px;">
            <div class="col-md-4 col-sm-6" >
              <div class="divider-wrapper divider-one shadow-lg" style="border-radius: 50px;">
                <i style="color: black;"> <img src="{{asset('img/layanan/cart.png')}}" style="width: 30%;" alt=""></i>
                <h2 style="color: black;">Regular</h2>
                <p style="color: black;">2-3 Hari</p>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="divider-wrapper divider-two shadow-lg" style="border-radius: 50px;">
                  <i style="color: black;"> <img src="{{asset('img/layanan/stopwatch.png')}}" style="width: 30%;" alt=""></i>
                <h2 style="color: black;">Express</h2>
                <p style="color: black;">1 Hari</p> </div>
            </div>
            <div class="col-md-4 col-sm-12">
              <div class="divider-wrapper divider-three shadow-lg" style="border-radius: 50px;">
                <i style="color: black;"> <img src="{{asset('img/layanan/rocket.png')}}" style="width: 30%;" alt=""></i>
                <h2 style="color: black;">Flash</h2>
                <p style="color: black;">< 1 Hari</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br><br><br><br><br><br><br><br>

    <div class="container">
        <div class="album py-5" style="margin-left: 90px;">
            <div class="container">
        
              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 g-3">
                <div class="col">
                    <div class="card shadow-lg" style="border-radius: 20px;">
                        <img src="{{asset('img/layanan/baju.png')}}" alt="" width="50%" style="margin-left: 60px; margin-top: 50px;">
                         <div class="card-body text-center" >
                           <h3 style="color: black;">Pakaian</h3>
                         </div>
                       </div>
                </div>
                <div class="col">
                  <div class="card shadow-lg" style="border-radius: 20px;">
                   <img src="{{asset('img/layanan/tas.png')}}" alt="" width="50%" style="margin-left: 60px; margin-top: 50px;">
                    <div class="card-body text-center" >
                      
                      <p class="card-text">a</p>
                      <h3 style="color: black;">Tas</h3>
                    </div>
                  </div>
                </div>
                <div class="col">
                    <div class="card shadow-lg" style="border-radius: 20px;">
                     <img src="{{asset('img/layanan/sepatu.png')}}" alt="" width="50%" style="margin-left: 60px; margin-top: 50px;">
                      <div class="card-body text-center" >
                        
                        <p class="card-text">a</p>
                        <p class="card-text">a</p>
                        <h3 style="color: black;">Sepatu</h3>
                      </div>
                    </div>
                  </div>
        
                  <div class="col">
                      <div class="card shadow-lg" style="border-radius: 20px;">
                       <img src="{{asset('img/layanan/bedcover.png')}}" alt="" width="50%" style="margin-left: 60px; margin-top: 50px;">
                        <div class="card-body text-center" >
                          
                          <p class="card-text">a</p>
                          <p class="card-text">a</p>
                          <h3 style="color: black;">Bedcover</h3>
                          
                        </div>
                      </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-lg" style="border-radius: 20px;">
                         <img src="{{asset('img/layanan/helm.png')}}" alt="" width="50%" style="margin-left: 60px; margin-top: 50px;">
                          <div class="card-body text-center" >
                              <p class="card-text">a</p>
                            <h3 style="color: black;">Helmet</h3>
                          </div>
                        </div>
                      </div>
                </div>
              </div>
            </div>
        </div>



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