<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <title>Spray it - Home</title>
  </head>
  <body>

    <nav class="navbar">
      <div class="navbar-container">
        <div class="logo">
          <a href="index.php">
            <img class="cache" src="images/medias/logo.png" alt="Logo Spray it" hidden="hidden"><img class="ouvert" src="images/medias/logo_blanc.png" alt="Logo Spray it">
          </a>
        </div>

        <ul>
          <li><a class="a" href="projet.php">projects</a></li>
          <li><a class="a" href="artists.php">artists</a></li>
          <li><a class="a" href="contact.php">contact</a></li>
          <li> <a href="https://www.instagram.com/sprayit.collective/" target="_blank"> <img class="ouvert" src="images/medias/ig_bc.png" alt=""><img class="cache" src="images/medias/ig_nr.png" hidden='hidden' alt=""> </a> </li>
          <li> <a href="https://www.facebook.com/sprayit.collective/" target="_blank"> <img class="ouvert" src="images/medias/fb_bc.png" alt=""><img class="cache" src="images/medias/fb_nr.png" hidden='hidden' alt=""> </a> </li>
          <li><a class="a" href="daily.php">daily</a></li>
        </ul>
      </div>
    </nav>

    <!-- //TODO: trouver un moyen de slider les photos de départ -->
    <header id="header">
      <div class="slideshow-container">
        <div class="mySlides fade">
          <img src="images/projets/Events/VOI/_DSC5913.JPG" style="width:100%">
        </div>

        <div class="mySlides fade">
          <img src="images/projets/Sickla/IMG_6436.jpeg" style="width:100%">
        </div>

        <div class="mySlides fade">
          <img src="images/projets/Events/Turnable_Tables/IMG_8156.jpeg" style="width:100%">
        </div>
      </div>

      <br>

      <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
      </div>
    </header>

    <!-- //TODO: changer l'image pour le picto de Nabil -->
    <div class="fleche">
      <a href="#intro"><img src="images/medias/flèche.png"></a>
    </div>
    <div id="intro">

    </div>
    <section class="introduction">
      <h1>Spray It</h1><br />
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </section>

    <section class="jobs">
      <div class="commissions jobs-container">
        <h2><a href="#">Commissions</a></h2><br />
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
      </div>

      <div class="workshop jobs-container">
        <h2><a href="workshop.php">Workshop</a></h2><br>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
      </div>
      <div class="graphique jobs-container">
        <h2><a href="#">Graphique Design</a></h2><br>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
      </div>
      <div class="events jobs-container">
        <h2><a href="#">Events</a></h2><br>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
      </div>
    </section>

    <!-- //TODO: ouvrir les pages de tous les projets -->
    <section class="last_projects">
      <div class="galerie event">
			     <a href="pages-projet/projet_voi.php"><img src="images/projets/Events/VOI/_DSC5793.JPG" alt="Voi Project" />
             <div class="text">
               <h3>Projet Voi</h3>
               <p><em>28.09.19</em></p>
						</div>
          </a>
			</div>

      <div class="galerie commission">
           <a href="pages-projet/Nåt_Bra.php"><img src="images/projets/commissions/Na╠èt Bra/na╠èt_01-3.jpg" alt="Na╠èt Bra" />
             <div class="text">
               <h3>Nåt Bra</h3>
               <p><em>12.06.15</em></p>
            </div>
          </a>
      </div>

      <div class="galerie commission">
           <a href="pages-projet/St._Eriksgatan_66.php"><img src="images/projets/commissions/St. Eriksgatan 66/wall66_21.jpg" alt="St. Eriksgatan 66" />
             <div class="text">
               <h3>St. Eriksgatan 66</h3>
               <p><em>08.05.15</em></p>
            </div>
          </a>
      </div>

      <div class="galerie workshop">
			     <a href="pages-projet/projet_sickla.php"><img src="images/projets/Sickla/IMG_6436.jpeg" alt="Sickla" />
             <div class="text">
               <h3>Sickla</h3>
               <p><em>14.03.19</em></p>
						</div>
          </a>
			</div>

      <div class="galerie commission">
			     <a href="pages-projet/Turnable_Tables.php"><img src="images/projets/Events/Turnable_Tables/IMG_8156.jpeg" alt="Turnable Tables" />
             <div class="text">
               <h3>Turnable Tables</h3>
               <p><em>24.08.19</em></p>
						</div>
          </a>
			</div>

      <div class="galerie graphique">
			     <a href="#"><img src="images/projets/Commissions/Upplands Bro/Bro-Green-tunnel-5.jpg" alt="Bro Tunel" />
             <div class="text">
               <h3>Bro Tunel</h3>
               <p><em>09.09.18</em></p>
						</div>
          </a>
			</div>



    </section>

    <section class="references">
      <div class="ref-container">
        <h2>Who have we worked with ?</h2><br />
        <p> <img src="images/medias/references.png" alt="references' picture"> </p>
      </div>
    </section>

    <?php include ('footer.php'); ?>

    <!-- Get jQuery's CDN -->
    <script src="https://code.jquery.com/jquery-3.5.0.js"  integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc="  crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="script.js"></script>
  </body>
</html>
