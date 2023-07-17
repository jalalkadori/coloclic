<?php
// Start of PHP loop
function cards() {
    $output = '';
    for ($i = 0; $i < 1; $i++) {
        $output .= '
            <div class="col mb-3">
                <div class="card">
                    <div class="d-flex justify-content-between p-2">
                        <div class="d-flex align-items-center gap-1">
                            <span class="material-symbols-outlined">schedule</span>
                            <p class="card-text me-2"> Publié le 13 Juil 2023</p>
                        </div>
                        <a class="btn">
                            <span class="material-symbols-outlined">favorite</span>
                        </a>
                    </div>
                    <div class="wrapper">
                        <div class="img-box" style="background-image: url(./img/annonces/room1.jpg);"></div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col mb-3">
                                <h4 class="card-title">Chambres meublées privée</h4>
                                <div class="d-flex align-items-center gap-1">
                                    <span class="material-symbols-outlined">person</span> 
                                    <h5 class="card-text text-uppercase"> Said mabrouki</h5>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col d-flex flex-column align-items-center">
                                <img src="./img/location.png" alt="location">
                                <p>Ville</p>
                                <h6>Tanger</h6>
                            </div>
                            <div class="col d-flex flex-column align-items-center">
                                <img src="./img/payments.png" alt="payments">
                                <p>Budget</p>
                                <h6>1200DH</h6>
                            </div>
                            <div class="col d-flex flex-column align-items-center">
                                <img src="./img/duration.png" alt="duration">
                                <p>Durée</p>
                                <h6>+12 Mois</h6>
                            </div>
                            <div class="col d-flex flex-column align-items-center">
                                <img src="./img/canlandar.png" alt="canlandar">
                                <p>Disponiblité</p>
                                <h6>01 Oct.</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        ';
    }
    return $output;
}
?>