
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">




    <title>Surfers Co.</title>
</head>
<body>
  <div class="hero-video">
    <video autoplay loop muted>
      <source src="img/pexels-kammeran-gonzalezkeola-16937755 (1080p).mp4" type="video/mp4">
    </video>
    <header class="container d-flex justify-content-center">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-transparent  py-3 d-flex justify-content-between">
        <a class="navbar-brand brand-custom" href="#">Surfers Co.</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
          <div class="navbar-nav nav-custom ">
            <a class="nav-item nav-link" href="#">BOARDS</a>
            <a class="nav-item nav-link" href="#">ACCESSORIES</a>
            <a class="nav-item nav-link" href="#">BLOG</a>
            <a class="nav-item nav-link" href="#">TECHNOLOGY</a>
            <a class="nav-item nav-link" href="#">TEAM</a>
            <a class="nav-item nav-link" href="#">DEALERS</a>
          </div>
          <div class="social-icons d-flex gap-3">
            <i class="fa-brands fa-facebook fs-4"></i>
            <i class="fa-brands fa-instagram fs-4"></i>
            <i class="fa-regular fa-envelope fs-4"></i>
          </div>
        </div>
      </nav>
    </header>
    <main>
      <!--HERO PART-->
      <section class="container ">
        <div class="row text-center main-text-lower " >
          <h1 class="classy">Ride every wave as if it's your last</h1>
          <p class="classy-white mb-5">We love the motion of the ocean</p>
        </div>
        <!--Carousel-->
        <div id="carouselExampleCaptions" class="carousel margin-carousel slide w-75 mx-auto shadow-carousel">
          <div class="carousel-indicators d-none">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner ">
            <div class="carousel-item active">
              <div class="card " style="max-width: 1000px;">
                <div class="row g-0">
                  <div class="col-md-5">
                    <img src="img/Board.png" class="img-fluid rounded-start" alt="...">
                    
                  </div>
                  <div class="col-md-2 mt-5 py-1 d-none d-sm-none d-md-block">
                    <div class="d-flex align-items-start">
                      <div class="nav flex-column nav-pills me-5  " id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true"><img src="img/thumb1.png" class="img-thumbnail" alt="..."></button>
                        <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false"> <img src="img/thumb2.png" class="img-thumbnail" alt="..."></button>
                        <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false"><img src="img/thumb3.png" class="img-thumbnail" alt="..."></button>
                        <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false"><img src="img/thumb4.png" class="img-thumbnail" alt="..."></button>
                      </div>
                      <!-- <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">...</div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
                      </div> -->
                    </div>

                  </div>
                  <div class="col-md-5 py-3 ">
                    <div class="card-body ">
                      <h5 class="card-title fw-bold">JR Surfboards The Donny Stoker
                        Yellow/Green Rail Fade</h5>
                        <div class="py-1 mb-2 d-flex gap-1 ">
                        <i class="fa fa-star text-warning mt-1" aria-hidden="true"></i>
                        <i class="fa fa-star text-warning mt-1" aria-hidden="true"></i>
                        <i class="fa fa-star text-warning mt-1" aria-hidden="true"></i>
                        <i class="fa fa-star text-warning mt-1" aria-hidden="true"></i>
                        <i class="fa-solid fa-star-half text-warning mt-1"></i>
                        <p class="">(52)</p>
                        </div>

                        <nav>
                          <div class="nav nav-tabs " id="nav-tab" role="tablist">
                            <button class="nav-link active small-text" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">DESCRIPTION</button>
                            <button class="nav-link small-text" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">FEATURES</button>
                            <button class="nav-link small-text" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">DIMENSIONS</button>
                          </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <p class="card-text py-2 mt-3 small-paragraph">Easy to ride, care free surfing craft that's fun for everyone, paddles well, super fast down the line and great for any level of surfing depending on who rides it. The Donny Stoker, a rework on design from stokesys first ever pro model. A super easy to surf and fun board. The Donny Stoker is a board for total freesurfing expression.</p>
                            <div class="container d-flex align-items-start gap-3">
                              <p class="fw-bold fs-5 ">$499.99</p>
                              <button class="px-3 py-2 btn btn-info text-white small-text">BUY NOW</button>
                            </div>
                            
                          </div>
                          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <p class="card-text py-2 mt-3 small-paragraph">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                            <div class="container d-flex align-items-start gap-3">
                              <p class="fw-bold fs-5 ">$499.99</p>
                              <button class="px-3 py-2 btn btn-info text-white small-text">BUY NOW</button>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <p class="card-text py-2 mt-3 small-paragraph">Easy to ride, care free surfing craft that's fun for everyone, paddles well, super fast down the line and great for any level of surfing depending on who rides it. The Donny Stoker, a rework on design from stokesys first ever pro model. A super easy to surf and fun board. The Donny Stoker is a board for total freesurfing expression.</p>
                            <div class="container d-flex align-items-start gap-3">
                              <p class="fw-bold fs-5 ">$499.99</p>
                              <button class="px-3 py-2 btn btn-info text-white small-text">BUY NOW</button>
                            </div>
                          </div>
                        </div>
                      
                      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="card " style="max-width: 1000px;">
                <div class="row g-0">
                  <div class="col-md-5">
                    <img src="img/Board-yellow.png" class="img-fluid rounded-start" alt="...">
                    
                  </div>
                  <div class="col-md-2 mt-5 py-1 d-none d-sm-none d-md-block">
                    <div class="d-flex align-items-start">
                      <div class="nav flex-column nav-pills me-5  " id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true"><img src="img/thumb1.png" class="img-thumbnail" alt="..."></button>
                        <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false"> <img src="img/thumb2.png" class="img-thumbnail" alt="..."></button>
                        <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false"><img src="img/thumb3.png" class="img-thumbnail" alt="..."></button>
                        <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false"><img src="img/thumb4.png" class="img-thumbnail" alt="..."></button>
                      </div>
                      <!-- <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">...</div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
                      </div> -->
                    </div>

                  </div>
                  <div class="col-md-5 py-3 ">
                    <div class="card-body ">
                      <h5 class="card-title fw-bold">JR Surfboards The Donny Stoker
                        Yellow/Green Rail Fade</h5>
                        <div class="py-1 mb-2 d-flex gap-1 ">
                        <i class="fa fa-star text-warning mt-1" aria-hidden="true"></i>
                        <i class="fa fa-star text-warning mt-1" aria-hidden="true"></i>
                        <i class="fa fa-star text-warning mt-1" aria-hidden="true"></i>
                        <i class="fa fa-star text-warning mt-1" aria-hidden="true"></i>
                        <i class="fa-solid fa-star-half text-warning mt-1"></i>
                        <p class="">(52)</p>
                        </div>

                        <nav>
                          <div class="nav nav-tabs " id="nav-tab" role="tablist">
                            <button class="nav-link active small-text" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">DESCRIPTION</button>
                            <button class="nav-link small-text" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">FEATURES</button>
                            <button class="nav-link small-text" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">DIMENSIONS</button>
                          </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <p class="card-text py-2 mt-3 small-paragraph">Easy to ride, care free surfing craft that's fun for everyone, paddles well, super fast down the line and great for any level of surfing depending on who rides it. The Donny Stoker, a rework on design from stokesys first ever pro model. A super easy to surf and fun board. The Donny Stoker is a board for total freesurfing expression.</p>
                            <div class="container d-flex align-items-start gap-3">
                              <p class="fw-bold fs-5 ">$499.99</p>
                              <button class="px-3 py-2 btn btn-info text-white small-text">BUY NOW</button>
                            </div>
                            
                          </div>
                          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <p class="card-text py-2 mt-3 small-paragraph">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                            <div class="container d-flex align-items-start gap-3">
                              <p class="fw-bold fs-5 ">$499.99</p>
                              <button class="px-3 py-2 btn btn-info text-white small-text">BUY NOW</button>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <p class="card-text py-2 mt-3 small-paragraph">Easy to ride, care free surfing craft that's fun for everyone, paddles well, super fast down the line and great for any level of surfing depending on who rides it. The Donny Stoker, a rework on design from stokesys first ever pro model. A super easy to surf and fun board. The Donny Stoker is a board for total freesurfing expression.</p>
                            <div class="container d-flex align-items-start gap-3">
                              <p class="fw-bold fs-5 ">$499.99</p>
                              <button class="px-3 py-2 btn btn-info text-white small-text">BUY NOW</button>
                            </div>
                          </div>
                        </div>
                      
                      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="card" style="max-width: 1000px;">
                <div class="row g-0">
                  <div class="col-md-5">
                    <img src="img/Board-pink.png" class="img-fluid rounded-start" alt="...">
                    
                  </div>
                  <div class="col-md-2 mt-5 py-1 d-none d-sm-none d-md-block">
                    <div class="d-flex align-items-start">
                      <div class="nav flex-column nav-pills me-5  " id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true"><img src="img/thumb1.png" class="img-thumbnail" alt="..."></button>
                        <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false"> <img src="img/thumb2.png" class="img-thumbnail" alt="..."></button>
                        <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false"><img src="img/thumb3.png" class="img-thumbnail" alt="..."></button>
                        <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false"><img src="img/thumb4.png" class="img-thumbnail" alt="..."></button>
                      </div>
                      <!-- <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">...</div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
                      </div> -->
                    </div>

                  </div>
                  <div class="col-md-5 py-3 ">
                    <div class="card-body ">
                      <h5 class="card-title fw-bold">JR Surfboards The Donny Stoker
                        Yellow/Green Rail Fade</h5>
                        <div class="py-1 mb-2 d-flex gap-1 ">
                        <i class="fa fa-star text-warning mt-1" aria-hidden="true"></i>
                        <i class="fa fa-star text-warning mt-1" aria-hidden="true"></i>
                        <i class="fa fa-star text-warning mt-1" aria-hidden="true"></i>
                        <i class="fa fa-star text-warning mt-1" aria-hidden="true"></i>
                        <i class="fa-solid fa-star-half text-warning mt-1"></i>
                        <p class="">(52)</p>
                        </div>

                        <nav>
                          <div class="nav nav-tabs " id="nav-tab" role="tablist">
                            <button class="nav-link active small-text" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">DESCRIPTION</button>
                            <button class="nav-link small-text" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">FEATURES</button>
                            <button class="nav-link small-text" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">DIMENSIONS</button>
                          </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <p class="card-text py-2 mt-3 small-paragraph">Easy to ride, care free surfing craft that's fun for everyone, paddles well, super fast down the line and great for any level of surfing depending on who rides it. The Donny Stoker, a rework on design from stokesys first ever pro model. A super easy to surf and fun board. The Donny Stoker is a board for total freesurfing expression.</p>
                            <div class="container d-flex align-items-start gap-3">
                              <p class="fw-bold fs-5 ">$499.99</p>
                              <button class="px-3 py-2 btn btn-info text-white small-text">BUY NOW</button>
                            </div>
                            
                          </div>
                          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <p class="card-text py-2 mt-3 small-paragraph">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                            <div class="container d-flex align-items-start gap-3">
                              <p class="fw-bold fs-5 ">$499.99</p>
                              <button class="px-3 py-2 btn btn-info text-white small-text">BUY NOW</button>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <p class="card-text py-2 mt-3 small-paragraph">Easy to ride, care free surfing craft that's fun for everyone, paddles well, super fast down the line and great for any level of surfing depending on who rides it. The Donny Stoker, a rework on design from stokesys first ever pro model. A super easy to surf and fun board. The Donny Stoker is a board for total freesurfing expression.</p>
                            <div class="container d-flex align-items-start gap-3">
                              <p class="fw-bold fs-5 ">$499.99</p>
                              <button class="px-3 py-2 btn btn-info text-white small-text">BUY NOW</button>
                            </div>
                          </div>
                        </div>
                      
                      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <!--Carousel Closed-->
        
      </section>
      
      </div> <!--hero video closed-->
      <!--SECTION-2-->
      <section class="container d-flex justify-content-center"  >
        
          <h1 class="big " data-aos="flip-up" >ABOUT US</h1>
          <div class=" about">
            <img src="img/Photo-surf1.png" data-aos="zoom-in" class="img-fluid section2-img" alt="">
          </div>
          <div class="row ">
            <div class="col d-none d-sm-none d-md-block">
              <div class="card card-left p-5" style="width: 18rem; border: none;" >
                <div class="card-body  text-sm-end " data-aos="fade-right" >
                  <h5 class="card-title ">WE ARE SURFERS CO</h5>
                  <h6 class="card-subtitle mb-2 text-muted">X</h6>
                  <p class="card-text classy-2">Lorem ipsum dolor sit amet, aeneam<br> consectetur adipiscing elit. Fusce <br>iaculis  feugiat arcunum fermentum <br>hendrerit. Suspendisse auctor labor <br>nisi, et interdum diam facilisis,<br> aliquam pulvinar semi egetis belle <br>sollicitudin ut. Nullam tincidun <br>finibustus scelerisque.</p>
                  <a href="#" class="card-link">Read More</a>
                </div>
              </div>
            </div>
            <!--SMALLER DEVICE-->
            <div class="col-12  d-md-none d-sm-block">
              <div class="card p-5" style="width: 18rem; border: none;" >
                <div class="card-body card-smaller  text-sm-end " data-aos="fade-right" >
                  <h5 class="card-title ">WE ARE SURFERS CO</h5>
                  <h6 class="card-subtitle mb-2 text-muted">X</h6>
                  <p class="card-text classy-2">Lorem ipsum dolor sit amet, aeneam consectetur adipiscing elit. Fusce iaculis feugiat arcunum fermentum hendrerit. Suspendisse auctor labor nisi, et interdum diam facilisis, aliquam pulvinar semi egetis belle sollicitudin ut. Nullam tincidun finibustus scelerisque.</p>
                  <a href="#" class="card-link">Read More</a>
                </div>
              </div>
            </div>
          
          </div>
      </section>
      <div class="yt-video d-none d-sm-none d-md-block" data-aos="fade-left">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/a48-c7kCdYI?si=ugQMf00zLvFFiPCj" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>
      <!--SMALLER DEVICE-->
      <div class="yt-video-smaller d-md-none d-sm-block" data-aos="fade-left">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/a48-c7kCdYI?si=ugQMf00zLvFFiPCj" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>
      <!--SECTION 3-->
      <section class="container section-3">
        <div class="row">
          <div class="col-6 " data-aos="fade-right">
            <h1 class="big-insta">INSTAGRAM</h1>
            <div class="row instagram-grid">
              <div class="col-3  instagram-image">
                <img src="img/grid1.jpg" alt="Imagen 1">
              </div>
              <div class="col-3 instagram-image">
                <img src="img/grid2.jpg" alt="Imagen 2">
              </div>
              <div class="col-3 instagram-image">
                <img src="img/grid3.jpg" alt="Imagen 3">
              </div>
              <div class="col-3 instagram-image">
                <img src="img/grid4.jpg" alt="Imagen 4">
              </div>
            </div>
          </div>
          <div class="col-6 " data-aos="flip-down">
            <!--INSERT FORM ! -->
            @include('form')
          </div>
        </div>
        
      </section>
    </main>
    <footer class=" footer-black">
      <div class="footer-content d-flex gap-5">
        <ul class="footer-links">
          <li><a href="#">About</a></li>
          <li><a href="#">Boards</a></li>
          <li><a href="#">Accesories</a></li>
          <li><a href="#">Blog</a></li>
        </ul>
        <ul class="footer-links px-5">
          <li><a href="#">Technology</a></li>
          <li><a href="#">Team</a></li>
          <li><a href="#">Dealers</a></li>
          <li><a href="#">Contact us</a></li>
        </ul>
        
      </div>
      
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js">
    </script>
    <script>
      $(window).scroll(function() {
        var scrollTop = $(window).scrollTop();
        if (scrollTop > 30) { // You can adjust the scroll threshold here (in pixels)
          
          $('.navbar').removeClass('bg-transparent');
          $('.navbar').removeClass('navbar-light');
          $('.navbar').addClass('bg-dark');
          $('.navbar').addClass('navbar-dark');
          $('.social-icons').addClass('text-white');
        } else {
          $('.navbar').addClass('bg-transparent');
          $('.navbar').removeClass('bg-dark');
          $('.navbar').removeClass('navbar-dark');
          $('.social-icons').removeClass('text-white');
        }
      });
    </script>
    <script>
      AOS.init();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
    document.getElementById('form-email').addEventListener('submit', function(event) {
        event.preventDefault(); // Evitar que el formulario se envíe normalmente
        axios.defaults.headers.common['X-CSRF-TOKEN'] = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        // Enviar el formulario a través de AJAX
        axios.post(this.action, new FormData(this))
            .then(function(response) {
                // Mostrar el mensaje de éxito
                document.getElementById('success-message').innerText = response.data.success;
                document.getElementById('success-message').style.display = 'block';
            })
            .catch(function(error) {
                // Manejar errores si es necesario
            });
    });
</script>
    

</body>
</html>
    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->

