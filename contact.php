<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Spray-it Contact</title>
</head>
  <body>

    <!-- Iclusion de la page nav.php -->
    <?php include('nav.php'); ?>

    <!-- section principale de la page -->
    <section id="contact">

        <!-- Lien d'information et des médias -->
        <div class="informations">
            <p>
              <h1>Informations</h1><br>
              <h2> <a href="https://www.google.com/search?q=BORGARGATAN+2%2C+117+34+Stockholm&oq=BORGARGATAN+2%2C+117+34+Stockholm&aqs=chrome..69i57.3980j0j7&sourceid=chrome&ie=UTF-8" target="_blank">Borgargatan 2,<br>117 34 Stockholm</a></h2><br>
              <h2> <a href="mailto:sprayit.collective@gmail.com" target="_blank">sprayit.collective@gmail.com</a></h2><br>
              <h2>+46 (0) 73 617 95 11</h2>
            </p><br><br>
            <p>
                <h1>Medias</h1><br>
                <div class="media">
                  <h2> <a href="https://www.facebook.com/sprayit.collective/" target="_blank"> <img src="images/medias/fb_nr.png" alt="facebook sprayit"></h2></a>
                  <h2><a href="https://www.instagram.com/sprayit.collective/" target="_blank"> <img src="images/medias/ig_nr.png" alt="instagram sprayit"></h2></a>
                </div>
            </p>
        </div>

        <!-- Partie téléchargement du portfolio -->
        <div class="download">
          <p>
            <!-- Lien à changer selon l'adresse du portfolio -->
            <a href="images/portfolio.zip" download>
              <img src="images/medias/logo _DL.png" alt="Download Press Kit">
            </a><br>
            <h3>Download Spray-it's Portfolio</h3>
          </p><br><br>
        </div>

    </section>

    <!-- Inclusion du pied de page -->
    <?php include('footer.php'); ?>


    <style>

    /* ---------------- Fonts de la page --------------- */

    @font-face {
      font-family: 'OpenSans';
      src: url('fonts/OpenSans-Light.ttf');
      font-style: normal;
      font-weight: 300;
      font-display: swap;
    }

    @font-face {
      font-family: 'OpenSans';
      font-style: normal;
      font-weight: 400;
      font-display: swap;
      src: url('fonts/OpenSans-Regular.ttf');
    }

    /* --- Caractéristiques générales de la page ----- */

    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html{
      font-size: 14px;
      font-family: 'OpenSans', halvetica, sans-serif,serif;
      color: #303133;
    }

    body {
      animation: fadeIn linear .5s;
      -webkit-animation: fadeIn linear .5s;
      -moz-animation: fadeIn linear .5s;
      -o-animation: fadeIn linear .5s;
      -ms-animation: fadeIn linear .5s;
    }

    /* Apparition progressive Body */

    @keyframes fadeIn{
      0% {
        opacity:0.2;
      }
      100% {
        opacity:1;
      }
    }

    @-moz-keyframes fadeIn {
      0% {
        opacity:0.2;
      }
      100% {
        opacity:1;
      }
    }

    @-webkit-keyframes fadeIn {
      0% {
        opacity:0.2;
      }
      100% {
        opacity:1;
      }
    }

    @-o-keyframes fadeIn {
      0% {
        opacity:0.2;
      }
      100% {
        opacity:1;
      }
    }

    @-ms-keyframes fadeIn {
      0% {
        opacity:0.2;
      }
      100% {
        opacity:1;
      }
    }

    /* ---------------- Section Principale --------------- */
    #contact{
      padding-top: 8rem;
      margin: auto;
      display: flex;
      flex-direction: row;
      justify-content: center;
      align-items: center;
      align-content: center;
      width: 60%;
    }

    /* ---- Informations et Médias ------ */
    .informations {
      min-width: 320px;
      color: #303133;
      border-right: solid 1px #333;
      margin-right: 20%;
    }

    .informations h1 {
      color: #000;
      font-size: 26px;
      font-weight: 400;
    }

    .informations p {

      color: #303133;
      font-size: 16px;
      font-weight: 300;
    }

    .informations h2 {

      color: #303133;
      font-size: 16px;
      font-weight: 300;
    }

    .informations a {
      color: #303133;
      text-decoration: none;
      font-size: 16px;
      font-weight: 300;
    }

    .informations img{
      width: 25px;
    }

    .media {
      display: flex;
    }

    .media a{
      padding-right:7px;
      padding-left: 7px;
    }

    /* --- Téléchargement Partfolio --- */
    .download {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      align-content: center;
      text-align: center;
      color: #777;
      font-weight: 300;
      font-size: 16px;
      margin-left: 10%;
    }
    .download img{
      width: 50%;
    }

    .download h3{
      color: #777;
      font-weight: 300;
      font-size: 16px;
    }
    </style>

  </body>
</html>
