<?php
$title = 'Ismael Shepherd';

?><!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <title><?= $title ?? 'Ismael Shepherd' ?></title>


    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" />
    <link rel="stylesheet" href="../css/all.min.css" />
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../slick/slick.css"/>    
    <link rel="stylesheet" href="../slick/slick-theme.css"/>    
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/templatemo-dream-pulse.css" />
    <link rel="stylesheet" href="../sass/style.css">
    <link rel="stylesheet" href="../css/progress.css">
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
    <main class="container-fluid">
      <div class="row">        
          <nav id="tmSidebar" class="tm-bg-black-transparent tm-sidebar">
            <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
              <i class="fas fa-bars"></i>
            </button>
            <div class="tm-sidebar-sticky">
              <div class="tm-brand-box">
                    <h1 class="tm-brand text-uppercase">Ismael Shepherd</h1>
              </div>

              <ul id="tmMainNav" class="nav flex-column text-uppercase text-right tm-main-nav">
                <li class="nav-item">
                  <a href="#intro" class="nav-link active">
                    <span class="d-inline-block mr-3">Présentation</span>
                    <span class="d-inline-block tm-white-rect"></span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#about" class="nav-link">
                    <span class="d-inline-block mr-3">Expèrience</span>
                    <span class="d-inline-block tm-white-rect"></span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#work" class="nav-link">
                    <span class="d-inline-block mr-3">Projet</span>
                    <span class="d-inline-block tm-white-rect"></span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#clients" class="nav-link">
                    <span class="d-inline-block mr-3">Client</span>
                    <span class="d-inline-block tm-white-rect"></span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#talk" class="nav-link">
                    <span class="d-inline-block mr-3">Contact</span>
                    <span class="d-inline-block tm-white-rect"></span>
                  </a>
                </li>
              </ul>
              <ul class="nav flex-row tm-social-links">
                <li class="nav-item">
                  <a href="https://github.com/ismael-shepherd" class="nav-link tm-social-link">
                  <i class="fab fa-github-square"></i>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="https://twitter.com/use_saylose" class="nav-link tm-social-link">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="https://dribbble.com" class="nav-link tm-social-link">
                    <i class="fab fa-dribbble"></i>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="https://www.linkedin.com/in/ismael-shepherd-770a38203/" class="nav-link tm-social-link">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
              <footer class="text-center text-white small">
                <p class="mb--0 mb-2">Copyright 2021 Ismael Shepherd</p>
              </footer>
            </div>
          </nav>
          
          <main role="main" class="ml-sm-auto col-12">
            <div
              class="parallax-window"
              data-parallax="scroll"
              data-image-src="../img/dream-pulse-header.jpg">
              <div class="tm-section-wrap">
                <section id="intro" class="tm-section">
                    <div class="tm-bg-white-transparent tm-intro">
                        <h2 class="tm-section-title mb-5 text-uppercase tm-color-primary">Présentation</h2>
                        <p class="tm-color-gray">
                          Bonjour, je m'appelle Ismael j'ai 17 ans et je developpe des sites depuis 2 ans maintenant.
                          Je suis dev <strong>FullStack php</strong> principalement.
                        </p>
                        <p class="mb-0 tm-color-gray">
                          J'ai deja eu plusieurs gros client et participer sur de gros projet !
                        </p>
                    </div>              
                </section>
            </div>            
          </div>

          <div class="tm-section-wrap bg-white">
            <section id="about" class="row tm-section">
              <div class="container">
                <h1 class="title-ex">Expèrience</h1>
                <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="progress-title">PHP</h3>
                                <div class="progress red">
                                    <div class="progress-bar progress-bar-danger progress-bar-striped active" style="width:89%;">
                                        <div class="progress-value">89%</div>
                                    </div>
                                </div>
                                <h3 class="progress-title">HTML, CSS, SASS</h3>
                                <div class="progress blue">
                                    <div class="progress-bar progress-bar-info progress-bar-striped active" style="width:90%;">
                                        <div class="progress-value">90%</div>
                                    </div>
                                </div>
                                <h3 class="progress-title">JS</h3>
                                <div class="progress red">
                                    <div class="progress-bar progress-bar-danger progress-bar-striped active" style="width:30%;">
                                        <div class="progress-value">30%</div>
                                    </div>
                                </div>
                                <h3 class="progress-title">SQL</h3>
                                <div class="progress red">
                                    <div class="progress-bar progress-bar-danger progress-bar-striped active" style="width:80%;">
                                        <div class="progress-value">80%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
              </div>
            </section>
          </div>
            
          <div class="tm-section-wrap bg-white">
            <section id="work" class="row tm-section">
              <div class="col-12">
                <div class="w-100 tm-double-border-1 tm-border-gray">
                    <div class="tm-double-border-2 tm-border-gray tm-box-pad">
                      <div class="tm-gallery-wrap">
                          <h2 class="tm-color-primary tm-section-title mb-4 ml-2">Projet</h2>
                          <div class="tm-gallery">
                            <div class="tm-gallery-item">                        
                              <figure class="effect-bubba">
                                <img src="../img/gallery/01.jpg" alt="Our Work Image" class="img-fluid">
                                <figcaption>
                                  <h2>Fresh <span>Bubba</span></h2>
                                  <p>Bubba likes to appear out of thin air.</p>
                                  <a href="../img/gallery/large/01.jpg">View more</a>
                                </figcaption>
                              </figure>
                            </div>
                            <div class="tm-gallery-item">
                              <figure class="effect-bubba">
                                <img src="../img/gallery/02.jpg" alt="Our Work Image" class="img-fluid">
                                <figcaption>
                                  <h2>Fresh <span>Bubba</span></h2>
                                  <p>Bubba likes to appear out of thin air.</p>
                                  <a href="../img/gallery/large/02.jpg">View more</a>
                                </figcaption>
                              </figure>
                            </div>
                            <div class="tm-gallery-item">
                              <figure class="effect-bubba">
                                <img src="../img/gallery/03.jpg" alt="Our Work Image" class="img-fluid">
                                <figcaption>
                                  <h2>Fresh <span>Bubba</span></h2>
                                  <p>Bubba likes to appear out of thin air.</p>
                                  <a href="../img/gallery/large/03.jpg">View more</a>
                                </figcaption>
                              </figure>
                            </div>
                            <div class="tm-gallery-item">
                              <figure class="effect-bubba">
                                <img src="../img/gallery/04.jpg" alt="Our Work Image" class="img-fluid">
                                <figcaption>
                                  <h2>Fresh <span>Bubba</span></h2>
                                  <p>Bubba likes to appear out of thin air.</p>
                                  <a href="../img/gallery/large/04.jpg">View more</a>
                                </figcaption>
                              </figure>
                            </div>
                            <div class="tm-gallery-item">
                              <figure class="effect-bubba">
                                <img src="../img/gallery/05.jpg" alt="Our Work Image" class="img-fluid">
                                <figcaption>
                                  <h2>Fresh <span>Bubba</span></h2>
                                  <p>Bubba likes to appear out of thin air.</p>
                                  <a href="../img/gallery/large/05.jpg">View more</a>
                                </figcaption>
                              </figure>
                            </div>
                            <div class="tm-gallery-item">
                              <figure class="effect-bubba">
                                <img src="../img/gallery/06.jpg" alt="Our Work Image" class="img-fluid">
                                <figcaption>
                                  <h2>Fresh <span>Bubba</span></h2>
                                  <p>Bubba likes to appear out of thin air.</p>
                                  <a href="../img/gallery/large/06.jpg">View more</a>
                                </figcaption>
                              </figure>
                            </div>
                            <div class="tm-gallery-item">
                              <figure class="effect-bubba">
                                <img src="../img/gallery/07.jpg" alt="Our Work Image" class="img-fluid">
                                <figcaption>
                                  <h2>Fresh <span>Bubba</span></h2>
                                  <p>Bubba likes to appear out of thin air.</p>
                                  <a href="../img/gallery/large/07.jpg">View more</a>
                                </figcaption>
                              </figure>
                            </div>
                            <div class="tm-gallery-item">
                              <figure class="effect-bubba">
                                <img src="../img/gallery/08.jpg" alt="Our Work Image" class="img-fluid">
                                <figcaption>
                                  <h2>Fresh <span>Bubba</span></h2>
                                  <p>Bubba likes to appear out of thin air.</p>
                                  <a href="../img/gallery/large/08.jpg">View more</a>
                                </figcaption>
                              </figure>
                            </div>
                          </div>
                      </div>                        
                    </div>                  
                  </div>     
              </div>         
            </section>
          </div>
            
          <div class="tm-section-wrap bg-white">
            <section id="clients" class="row tm-section">
              <div class="col-12 tm-section-pad">
                  <div class="tm-flex-item-left">
                      <div class="tm-w-80">
                          <h2 class="tm-color-primary tm-section-title mb-4">Our Clients</h2>
                          <p class="mb-5">
                            Aenean est augue, iaculis ut arcu a, cursus tempus eros.
                            Maecenas ut efficitur lectus, vel commodo nibh. Vivamus
                            consequat massa non euismod facilisis. Morbi assumsan non libero
                            a vehicula. Donec blandit suscipit magna sit amet elementum.
                          </p>
                      </div>
                      
                      <div class="row tm-clients-images">
                        <div class="col-xl-3 col-lg-6 col-md-4 col-sm-6 tm-img-wrap">
                          <a href="https://google.com">
                            <img src="../img/client-1.png" alt="Client Image" class="img-fluid tm-client-img" />
                          </a>                          
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-4 col-sm-6 tm-img-wrap">
                          <a href="https://facebook.com">
                            <img src="../img/client-2.png" alt="Client Image" class="img-fluid tm-client-img" />
                          </a>                          
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-4 col-sm-6 tm-img-wrap">
                          <a href="https://twitter.com">
                            <img src="../img/client-3.png" alt="Client Image" class="img-fluid tm-client-img" />
                          </a>                          
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-4 col-sm-6 tm-img-wrap">
                          <a href="https://instagram.com">
                            <img src="../img/client-4.png" alt="Client Image" class="img-fluid tm-client-img" />
                          </a>                          
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-4 col-sm-6 tm-img-wrap">
                            <a href="https://google.com">
                              <img src="../img/client-5.png" alt="Client Image" class="img-fluid tm-client-img" />
                            </a>                          
                          </div>
                          <div class="col-xl-3 col-lg-6 col-md-4 col-sm-6 tm-img-wrap">
                            <a href="https://facebook.com">
                              <img src="../img/client-6.png" alt="Client Image" class="img-fluid tm-client-img" />
                            </a>                          
                          </div>
                          <div class="col-xl-3 col-lg-6 col-md-4 col-sm-6 tm-img-wrap">
                            <a href="https://twitter.com">
                              <img src="../img/client-7.png" alt="Client Image" class="img-fluid tm-client-img" />
                            </a>                          
                          </div>
                          <div class="col-xl-3 col-lg-6 col-md-4 col-sm-6 tm-img-wrap">
                            <a href="https://instagram.com">
                              <img src="../img/client-8.png" alt="Client Image" class="img-fluid tm-client-img" />
                            </a>                          
                          </div>
                      </div>
                  </div> 
              </div>                             
            </section>
          </div>
            
          <div class="tm-section-wrap bg-white">
            <section id="talk" class="row tm-section">
                <div class="col-xl-6 mb-5">
                  <div class="tm-double-border-1 tm-border-gray">
                    <div class="tm-double-border-2 tm-border-gray tm-box-pad">
                        <h2 class="tm-color-primary tm-section-title mb-4">Talk to Us</h2>
                        <p class="mb-4">
                          Sed aliquet, nibh ac hendrerit faucibus, tellus metus viverra
                          tellus, vel volutpat purus orci ac ex.
                        </p>
                        <p class="mb-3">
                          120-240 Orci varius natoque penatibus, <br>
                          parturient montes, 10660 <br>
                          nasvetur ridiculus mus
                        </p>
                    </div>                    
                  </div>                  
                </div>
                <div class="col-xl-6 mb-5">
                  <div class="tm-contact-form-wrap">
                    <form action="" method="POST" class="tm-contact-form">
                        <div class="form-group">
                          <input type="text" id="contact_name" name="contact_name" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Your Name" required="" />
                        </div>
                        <div class="form-group">
                          <input type="email" id="contact_email" name="contact_email" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Your Email" required="" />
                        </div>
                
                        <div class="form-group">
                          <textarea rows="4" id="contact_message" name="contact_message" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Message..." required=""></textarea>
                        </div>
                
                        <div class="form-group mb-0">
                          <button type="submit" class="btn rounded-0 d-block ml-auto tm-btn-primary">
                            SEND
                          </button>
                        </div>
                      </form>
                  </div>                    
                </div>
              </section>
          </div>
        </main>        
      </div>
    </div>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/jquery.singlePageNav.min.js"></script>
    <script src="../js/parallax.min.js"></script>
    <script src="../slick/slick.min.js"></script>
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/templatemo-scripts.js"></script>
  </body>
</html>