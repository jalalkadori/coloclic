<?php
include_once './listingsCards.php';
?>
<!doctype html>
<html lang="en">
    <?php include './components/head.php' ?>
  <body id="body">

        <?php include './components/header.php' ?>
        
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

        <?php include './components/footer.php' ?>
        

    <script difer src="./js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>