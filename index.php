<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <title>Spray it - Home</title>
  </head>
  <body>
    <!-- Barre de navigation -->
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

    <!-- Banniere en Caroussel -->
    <header id="header">
      <div class="slideshow-container">
        <div class="mySlides fade">
          <img src="images/projets/Events/VOI/_DSC5975.JPG" style="width:100%">
        </div>

        <div class="mySlides fade">
          <img src="images/projets/Commissions/Sickla/KSU_2153.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
          <img src="images/projets/Commissions/Sickla/KSU_2211.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
          <img src="images/projets/Events/Turnable_Tables/IMG_8156.jpeg" style="width:100%">
        </div>

        <div class="mySlides fade">
          <img src="images/projets/Events/VOI/_DSC5818.jpg" style="width:100%">
        </div>
      </div>

      <br>

      <!-- Points de jauge -->
      <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
      </div>
    </header>

    <!-- Pictogramme cliquable défilement de la page jusqu'à la section intro -->
    <!-- //TODO: changer l'image pour le picto de Nabil -->
    <div class="fleche">
      <a href="#intro"><img src="images/medias/flèche.png"></a>
    </div>
    <div id="intro">

    </div>

    <!-- Texte de présentation de l'entreprise -->
    <section class="introduction">
      <h1>Spray It</h1><br />
      <p>Spray it is a creative agency of international street artists based in Stockholm working with art and graphic design. Spray it was founded in 2016 created to share our passion of graffiti and to make it more accessible for a Swedish audience. The aim is to develop all types of projects related to urban creation.</p><br>
      <p>Spray it provide a wide range of services to its clients and partners. Earlier projects include educational courses for adults and kids, wall-paintings for individuals and companies, graphic design and collaborations with product designers. The agency has also produced original exhibitions showcasing Swedish and International artists. We create the environment for your individual needs. Transform the look of your company to highlight your particular vibe and leave a lasting impression with your clients.</p> <br>
      <p>We take care of all your needs for art and graphic design, even offering courses in street art for adults as well as kids.</p>
    </section>

    <!-- Texte de présentation des prestations de l'entreprise avec titre cliquable -->
    <section class="jobs">
      <div class="commissions jobs-container">
        <h2><a href="#">Commissions</a></h2><br />
        <p>SPRAY IT offers tailored decorations for public environments, bars and restaurants, stands, meeting rooms, showrooms, product boards and more. Each creation is a unique and intimate collaboration between our team and yours.</p>
      </div>

      <div class="workshop jobs-container">
        <h2><a href="workshop.php">Workshop</a></h2><br>
        <p>Our graffiti workshops for adults, teenagers, and children, are based in promoting social connections, developing a relationship to art and expression. The workshops are designed to encourage listening, sharing, thinking and searching.</p>
      </div>
      <div class="graphique jobs-container">
        <h2><a href="#">Graphique Design</a></h2><br>
        <p>We take care of all your needs for art and graphic design.</p>
      </div>
      <div class="events jobs-container">
        <h2><a href="#">Events</a></h2><br>
        <p>Exhibitions, live paintings, and cellograffs are new ways to help you catch the attention of a new audience. Painting is also a way to promote better teamwork as a team building event, and to further the personal development your team and their imagination.</p>
      </div>
    </section>

    <!-- Galerie des derniers projets mis en valeur cliquable pour arriver à le page perso -->
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
           <a href="pages-projet/St._Eriksgatan_66.php"><img src="images/projets/Commissions/St. Eriksgatan 66/wall66_21.jpg" alt="St. Eriksgatan 66" />
             <div class="text">
               <h3>St. Eriksgatan 66</h3>
               <p><em>08.05.15</em></p>
            </div>
          </a>
      </div>

      <div class="galerie commission">
			     <a href="pages-projet/projet_sickla.php"><img src="images/projets/Commissions/Sickla/KSU_2153.jpg" alt="Sickla" />
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

    <!-- Photo des références de l'entreprise -->
    <section class="references">
      <div class="ref-container">
        <h2>Who have we worked with ?</h2><br />
        <p> <img src="images/medias/references.png" alt="references' picture"> </p>
      </div>
    </section>

    <!-- Inclusion de la page 'Footer' -->
    <?php include ('footer.php'); ?>

    <!-- Lien Script -->
    <script src="https://code.jquery.com/jquery-3.5.0.js"  integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc="  crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="script.js"></script>

  </body>
</html>
