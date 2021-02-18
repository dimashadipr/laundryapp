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
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style type="text/css">

 
    

    
   

    </style>
    <title>Lacak Pesananmu</title>
</head>
<body style="background-image:url('img/background.png')">
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
                <a href="#" class="btn btn-dark btn-sm" role="button" aria-disabled="true" style="border-radius: 50px; color: white;font-family: 'Montserrat', sans-serif;">Daftar Mitra</a>
            </span>
          </div>
        </div>
      </nav>
        <br><br><br><br>
        <div class="container" style="border-radius: 50px;
        padding: 30px;
        margin-top: 50px;
        text-align: center;">
            <br>
            <div class="row">
                <div class="col-md-4">

                  </div>
                  <div class="col-md-4" style="background-color: grey; border-radius: 50px;font-family: 'Montserrat', sans-serif;">
                    <br><br><br>
                      <h5 style="color: white;">Lacak Pesananmu</h5>
                                  <div class="row">
                                          <div class="input-group center">
                                                  
                                                  <div class="input-group-append">
                                                      <input style="border-radius: 30px; margin-left: 90px;"  type="text" class="form-control" placeholder="Input your Order ID" required> 
                                                          <a style="border-radius: 50px; margin-left: -35px;" class="btn btn-light" href="{{asset('/details')}}" role="button"><i class="fa fa-search"></i></a>
                                                  </div>
                                                
                                  </div>
                                </div><br><br><br><br>
                    </div>
                    <div class="col-md-4">
      
                    </div>
            </div>
            
                <br><br>
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