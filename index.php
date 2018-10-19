<!doctype html>
<html lang="en">
<head>
/*
* Authors : IONITA Mathias, GUENOT Fabien, BEZIAT Audrey.
* Team : 3
* Event : IPI HACKATHON
* Year : 2018
*/
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="index.css">

  <title>Salon de l'automobile</title>
</head>

<body>
  <nav class="navbar navbar-dark bg-dark">
    <img src="salon/e_auto.png" class="mx-auto d-block" />
  </nav>

  /*Carroussel bootstrap 3 slide*/
  <div id="fadeC" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="salon/salon_2.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="salon/salon_1.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="salon/salon_3.jpg" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#fadeC" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#fadeC" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  /*Catégories marques avec liens collapse*/
  <div id="groupLo" class="container-fluid">
    <div class="row">
      <div class="col-4">
        <a href="#audi" aria-controls="#audi" data-toggle="collapse">
          <img class="img-marques" src="voiture/audi/Audi.png" alt="Audi">
        </a>
      </div>
      <div class="col-4">
        <a href="#bmw" aria-controls="#bmw" data-toggle="collapse">
          <img class="img-marques" src="voiture/BMW/BMW_logo.png" alt="BWM">
        </a>
      </div>
      <div class="col-4">
        <a href="#renault" aria-controls="#renault" data-toggle="collapse">
          <img class="img-marques" src="voiture/Renault/Renault_logo.png" alt="Tesla">
        </a>
      </div>
      <div class="col-4">
        <a href="#volkswagen" aria-controls="#volkswagen" data-toggle="collapse">
          <img class="img-marques" src="voiture/Volkswagen/Volkswagen_logo.png" alt="volkswagen">
        </a>
      </div>
      <div class="col-4">
        <a href="#telsa" aria-controls="#telsa" data-toggle="collapse">
          <img class="img-marques" src="voiture/Tesla/Tesla_logo.png" alt="Tesla">
        </a>
      </div>
      <div class="col-4">
        <a href="#peugeot" aria-controls="#peugeot" data-toggle="collapse">
          <img class="img-marques" src="voiture/Peugeot/Peugeot_logo.png" alt="Peugeot">
        </a>
      </div>
    </div>

    /*Sous-catégories en lien avec les marques*/
    <div class="row" id="all-modeles">
      <div id="audi" class="collapse container-fluid" data-parent="#groupLo">
        <div class="titre"><img class="mini_logo" src="voiture/audi/Audi.png" alt="Audi">
          <h4>Audi</h4>
        </div>
        <div class="row">
          <div class="col-6">
            <img class="img-modeles rounded" src="voiture/audi/Audi1.jpg" />
            <p>TT RS</p>
          </div>
          <div class="col-6">
            <img class="img-modeles rounded" src="voiture/audi/Audi2.jpg" />
            <p>R8</p>
          </div>
          <div class="col-6">
            <img class="img-modeles rounded" src="voiture/audi/Audi3.jpg" />
            <p>E-tron</p>
          </div>
          <div class="col-6">
            <img class="img-modeles rounded" src="voiture/audi/Audi4.jpg" />
            <p>A8</p>
          </div>
        </div>
      </div>

      <div id="bmw" class="collapse container-fluid" data-parent="#groupLo">
        <div class="titre"><img class="mini_logo" src="voiture/BMW/BMW_logo.png" alt="BWM">
          <h4>BMW</h4>
        </div>
        <div class="row">
          <div class="col-6">
            <img class="img-modeles rounded" src="voiture/BMW/BMW_1.jpg" />
            <p>M2</p>
          </div>
          <div class="col-6">
            <img class="img-modeles rounded" src="voiture/BMW/BMW_2.jpg" />
            <p>X7</p>
          </div>
          <div class="col-6">
            <img class="img-modeles rounded" src="voiture/BMW/BMW_3.jpg" />
            <p>Serie 8 Coupé</p>
          </div>
          <div class="col-6">
            <img class="img-modeles rounded" src="voiture/BMW/BMW_4.jpg" />
            <p>I8</p>
          </div>
        </div>
      </div>

      <div id="renault" class="collapse container-fluid" data-parent="#groupLo">
        <div class="titre"><img class="mini_logo" src="voiture/Renault/Renault_logo.png" alt="Tesla">
          <h4>Renault</h4>
        </div>
        <div class="row">
          <div class="col-6">
            <img class="img-modeles rounded" src="voiture/Renault/Renault_1.png" />
            <p>Mégane</p>
          </div>
          <div class="col-6">
            <img class="img-modeles rounded" src="voiture/Renault/Renault_2.png" />
            <p>Captur</p>
          </div>
          <div class="col-6">
            <img class="img-modeles rounded" src="voiture/Renault/Renault_3.png" />
            <p>Clio</p>
          </div>
          <div class="col-6">
            <img class="img-modeles rounded" src="voiture/Renault/Renault_4.png" />
            <p>Zoe</p>
          </div>
        </div>
      </div>

      <div id="volkswagen" class="collapse container-fluid" data-parent="#groupLo">
        <div class="titre"><img class="mini_logo" src="voiture/Volkswagen/Volkswagen_logo.png" alt="volkswagen">
          <h4>Volkswagen</h4>
        </div>
        <div class="row">
          <div class="col-6">
            <img class="img-modeles rounded" src="voiture/Volkswagen/volkswagen_1.png" />
            <p>Up!</p>
          </div>
          <div class="col-6">
            <img class="img-modeles rounded" src="voiture/Volkswagen/volkswagen_2.png" />
            <p>E-Golf</p>
          </div>
          <div class="col-6">
            <img class="img-modeles rounded" src="voiture/Volkswagen/volkswagen_3.png" />
            <p>Polo GTI</p>
          </div>
          <div class="col-6">
            <img class="img-modeles rounded" src="voiture/Volkswagen/volkswagen_4.png" />
            <p>Touareg</p>
          </div>
        </div>
      </div>

      <div id="telsa" class="collapse container-fluid" data-parent="#groupLo">
        <div class="titre"><img class="mini_logo" src="voiture/Tesla/Tesla_logo.png" alt="Tesla">
          <h4>Tesla</h4>
        </div>
        <div class="row">
          <div class="col-6">
            <img class="img-modeles rounded" src="voiture/Tesla/tesla_1.png" />
            <p>Model S</p>
          </div>
          <div class="col-6">
            <img class="img-modeles rounded" src="voiture/Tesla/tesla_2.png" />
            <p>Model X</p>
          </div>
          <div class="col-6">
            <img class="img-modeles rounded" src="voiture/Tesla/tesla_3.png" />
            <p>Model Z</p>
          </div>
          <div class="col-6">
            <img class="img-modeles rounded" src="voiture/Tesla/tesla_4.png" />
            <p>Model Y</p>
          </div>
        </div>
      </div>
      <div id="peugeot" class="collapse container-fluid" data-parent="#groupLo">
        <div class="titre"><img class="mini_logo" src="voiture/Peugeot/Peugeot_logo.png" alt="Peugeot">
          <h4>Peugeot</h4>
        </div>
        <div class="row">
          <div class="col-6">
            <img class="img-modeles rounded" src="voiture/Peugeot/Peugeot_1.png" />
            <p>5008</p>
          </div>
          <div class="col-6">
            <img class="img-modeles rounded" src="voiture/Peugeot/Peugeot_2.png" />
            <p>508</p>
          </div>
          <div class="col-6">
            <img class="img-modeles rounded" src="voiture/Peugeot/Peugeot_3.png" />
            <p>Ion</p>
          </div>
          <div class="col-6">
            <img class="img-modeles rounded" src="voiture/Peugeot/Peugeot_4.png" />
            <p>108</p>
          </div>
        </div>
      </div>

    </div>
  </div>
  <footer class="footer border-dark">
    <div class="container">
      <p class="text-center">Copyright @2018 | Designed by team 3</p>

      <ul class="text-right">
        <li><img src="Icons-RS/facebook.png" class="rs-footer" /></li>
        <li><img src="Icons-RS/instagram.png" class="rs-footer" /></li>
        <li><img src="Icons-RS/linkedin.png" class="rs-footer" /></li>
        <li><img src="Icons-RS/twitter.png" class="rs-footer" /></li>
        <li><img src="Icons-RS/youtube.png" class="rs-footer" /></li>
      </ul>
    </div>

  </footer>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
