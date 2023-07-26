<?php
include_once './components/ads_cards.php';
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Coloclic</title>
        <!-- link to css file -->
        <link rel="stylesheet" href="./css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
        <script src="https://kit.fontawesome.com/75c6b1327b.js" crossorigin="anonymous"></script>
    </head>
  <body id="body">

      <header id="header">
          <nav class="navbar navbar-expand-lg py-3">
              <div class="container">
                  <a class="navbar-brand" href="#"><img src="./img/coloclic.png" alt="colocation" width="200"></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                          <a class="nav-link" href="#services">Trouver une colocation</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#ads">Annonces</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#contact">Contact</a>
                      </li>
                  </ul>
                  <form class="d-flex" role="search">
                      <button class="btn" type="submit" id="login"><i class="fa-regular fa-user"></i> Se connecter</button>
                      <button class="btn" type="submit" id="signup">Créer un compte</button>
                  </form>
                  </div>
              </div>
          </nav>

        </header>
        
        <main>
            <!-- hero section -->
            <section id="hero">
                <div class="container py-5">
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col col-md-6">
                            <h1>Trouver la colocation de ses <span class="red">rêves</span> n'a jamais été aussi <span class="blue">facile</span> !</h1>
                            <p>Trouver ta colocation idéale en quelques cliques.</p>
                            <button class="btn btn-danger" type="submit">Trouver une colocation <i class="fa-solid fa-angle-right"></i></button>
                        </div>
                        <div class="col col-md-4">
                            <img class="w-100" src="./img/people.png" alt="colocation">
                        </div>
                    </div>
                </div>
            </section>

        <section class="py-5" id="howTo">
            <div class="container align-items-center">
                <h2 class="text-center">Comment ca marche ?</h2>
                <div class="row row-cols-1 row-cols-lg-3 my-5">
                    <div class="col d-flex flex-column align-items-center">
                        <img src="./img/howto/2.png">
                        <h5>Créer votre compte</h5>
                    </div>
                    <div class="col d-flex flex-column align-items-center">
                        <img src="./img/howto/3.png">
                        <h5>Renseigne ta demande de colocation</h5> 
                    </div>
                    <div class="col d-flex flex-column align-items-center">
                        <img src="./img/howto/1.png">
                        <h5>Trouve la colocation de tes rêves.</h5>
                    </div>
                </div>
                <div class="container d-flex justify-content-center">
                    <button class="btn btn-danger rounded-0">Créer votre compte <i class="fa-solid fa-angle-right"></i></button>
                </div>
            </div>
        </section>

        <section class="py-5" id="services">
            <div class="container align-items-center">
                <h2 class="text-center">La solution qui vous convient</h2>
                <div class="row row-cols-1 row-cols-lg-3 py-5">
                    <div class="col d-flex flex-column align-items-center">
                        <img src="./img/services/1.png" alt="" srcset="">
                        <h5>Trouver une chambre</h5>
                    </div>
                    <div class="col d-flex flex-column align-items-center">
                        <img src="./img/services/2.png" alt="" srcset="">
                        <h5>Trouver un colocataire</h5>
                    </div>
                    <div class="col d-flex flex-column align-items-center">
                        <img src="./img/services/3.png" alt="" srcset="">
                        <h5>Chambre partagée</h5>
                    </div>
                </div>
                <div class="container d-flex justify-content-center">
                    <button class="btn"><i class="fa-solid fa-list"></i> Commencer votre recherche</i></button>
                </div>
            </div>
        </section>

        <section class="py-5" id="city">
            <div class="container px-5">
                <h2 class="text-center mb-5">Trouver votre colocation dans nos villes phares</h2>
                <div class="row row-cols-1 row-cols-md-4 px-5 d-flex justify-content-center align-items-center">

                    <div class="col mb-3 d-flex justify-content-center">
                        <div class="card">
                            <div class="card-img-overlay">
                                <h5 class="card-title">Tanger</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col mb-3 d-flex justify-content-center rounded">
                        <div class="card">
                            <div class="card-img-overlay">
                                <h5 class="card-title">Tanger</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col mb-3 d-flex justify-content-center">
                        <div class="card">
                            <div class="card-img-overlay">
                                <h5 class="card-title">Tanger</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col mb-3 d-flex justify-content-center">
                        <div class="card shadow">
                            <div class="card-img-overlay">
                                <h5 class="card-title">Tanger</h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="py-5" id="ads">
            <h2 class="text-center mb-5">Les dernières annonces</h2>
            <div class="container">
                <div class="row row-cols-1 row-cols-lg-3 my-5">
                    <?php echo cards(); ?>
                </div>
                
                <div class="d-flex justify-content-center">
                    <button class="btn"><i class="fa-solid fa-list"></i> Commencer votre recherche</i></button>
                </div>
            </div>
            
        </section>

        <section class="mb-5" id="contact">

            <div class="container">
                <div class="row row-cols-1 row-cols-lg-2 ">
                    <div class="col p-5 d-flex flex-column justify-content-center">
                        <h2 class="py-2">Contactez-nous</h2>
                        <div class="d-flex flex-column justify-content-between gap-2">
                            <div class="d-flex align-items-center gap-3">
                                <span class="material-symbols-outlined">call</span>
                                <h5>+212 601020304</h5>
                            </div>
                            <div class="d-flex align-items-center gap-3">
                                <span class="material-symbols-outlined">email</span>
                                <h5>Coloclic@contact.com</h5>
                            </div>
                            <div class="d-flex align-items-center gap-3">
                                <span class="material-symbols-outlined">location_on</span>
                                <h5>Street:  rue Liban resid. Lina, 5°et. appt. 53, Tanger</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col p-5">
                        <form>
                            <div class="mb-3">
                                <label for="nom" class="form-label">Nom et Prénom</label>
                                <input type="text" class="form-control" name="nom">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control"  name="email">
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea type="textarea" class="form-control"  name="message"></textarea>
                            </div>
                            <button type="submit" class="btn w-100">Envoyer</button>
                        </form>
                    </div>
                </div>
            </div>

        </section>

    </main>

    <footer>
        <div class="container-fluid footer-navigation py-5">
            <div class="skewed"></div>
            <div class="container">
                <div class="row row-cols-1 row-cols-lg-3">
                    <div class="col mb-3">
                        <a class="navbar-brand" href="#"><img src="./img/white-logo.png" alt="colocation" width="200"></a>
                        <p>La colocation de tes <span>rêves</span> est entre tes mains!</p>
                        
                    </div>
                    <div class="col mb-3">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="#services">Trouver une colocation</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#ads">Annonces</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col mb-3">
                        <div class="d-flex gap-2">
                            <i class="fab fa-facebook"></i>
                            <i class="fab fa-instagram"></i>
                            <i class="fab fa-twitter"></i>
                            <i class="fab fa-youtube"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid copyrights">
            <p class="text-center py-3 m-0">© Coloclic 2023 - Tous droits réservés.</p>
        </div>
        
    </footer>

    
    <script difer src="./js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>