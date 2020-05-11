<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Spray-it Daily</title>
  </head>
  <body>

    <!-- Inclusion de la navigation -->
    <?php include("nav.php"); ?>

    <!-- section à copie pour ajouter un nouveau daily / balise figure à copier pour ajouter une photo au groupe-->
    <!-- <section class="principal">
      <article class="photo">
        <figure>
          <img src="images/daily/2020/" alt="daily spray it">
          <figcaption></figcaption>
        </figure>
        <figure>
          <img src="images/daily/2020/" alt="daily spray it">
          <figcaption></figcaption>
        </figure>
      </article>
      <aside class="laius">
        <h1></h1>
        <p></p>
        <p></p>
        <p></p>
      </aside>
    </section> -->

    <section class="principal">
      <article class="photo">
        <figure>
          <img src="images/daily/2020/Holem-Covid-19-City-web.jpg" alt="daily spray it">
          <figcaption></figcaption>
        </figure>
      </article>
      <aside class="laius">
        <h1>Holem Covid-19 City</h1>
        <p>Stockholm</p>
        <p>10.05.20</p>
        <p></p>
      </aside>
    </section>

    <section class="principal">
      <article class="photo">
        <figure>
          <img src="images/daily/2020/Ma╠èlning-2020-03-08-07-WEB.jpg" alt="daily spray it">
          <figcaption></figcaption>
        </figure>
        <figure>
          <a href="images/daily/2020/Ma╠èlning 2020-03-08-ok.jpg"><img src="images/daily/2020/Ma╠èlning 2020-03-08-ok.jpg" alt="daily spray it"></a>
          <figcaption></figcaption>
        </figure>
      </article>
      <aside class="laius">
        <h1>Peace, love, Unity, Havin´Fun & Stay safe</h1>
        <p>by Track BB TDS, Holem CAS GAP, Jeks THY CAS SUK, Kid Kash CAS 7$, and Balans BB OS</p>
        <p>Tantolunden Graffiti wall</p>
        <p>25.04.20</p>
        <p>#tantofame #tantolunden #opengraffitiwall</p>
      </aside>
    </section>

    <section class="principal">
      <article class="photo">
        <figure>
          <img src="images/daily/2020/Peace Love Unity 2.jpg" alt="daily spray it">
          <figcaption></figcaption>
        </figure>
        <figure>
          <a href="images/daily/2020/Peace Love Unity 2020-04-25 web.jpg"><img src="images/daily/2020/Peace Love Unity 2020-04-25 web.jpg" alt="daily spray it"></a>
          <figcaption></figcaption>
        </figure>
      </article>
      <aside class="laius">
        <h1>Free painting - The Dog</h1>
        <p>by Cake, Holem CAS GAP, Jeks THY CAS SUK, Kiss CAS PYC</p>
        <p>Snösätra Graffiti wall</p>
        <p>08.03.20</p>
        <p>#snosatra #ragsved #graffitiwall</p>

      </aside>
    </section>

    <section class="principal">
      <article class="photo">
        <figure>
          <img src="images/daily/2017/Aztek.jpg" alt="daily spray it">
          <figcaption></figcaption>
        </figure>
        <figure>
          <a href="images/daily/2017/Aztec-Kash-Holem-Rymd.jpg"><img src="images/daily/2017/Aztec-Kash-Holem-Rymd.jpg" alt="daily spray it"></a>
          <figcaption></figcaption>
        </figure>
      </article>
      <aside class="laius">
        <h1>Aztek 2017</h1>
        <p></p>
        <p></p>
        <p></p>
      </aside>
    </section>

    <!-- inclusion du pied de pages -->
    <?php include("footer.php"); ?>

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

    @font-face {
      font-family: 'OpenSans';
      font-style: normal;
      font-weight: 600;
      font-display: swap;
      src: url('fonts/open-sans-semibold.ttf');
    }

    /* --- Caractéristiques générales de la page ----- */

    body {
    animation: fadeIn ease 3s;
    -webkit-animation: fadeIn ease 3s;
    -moz-animation: fadeIn ease 3s;
    -o-animation: fadeIn ease 3s;
    -ms-animation: fadeIn ease 3s;
    }

    /* Apparition progressive Body */
    @keyframes fadeIn{
    0% {
      opacity:0;
    }
    100% {
      opacity:1;
    }
    }

    @-moz-keyframes fadeIn {
    0% {
      opacity:0;
    }
    100% {
      opacity:1;
    }
    }

    @-webkit-keyframes fadeIn {
    0% {
      opacity:0;
    }
    100% {
      opacity:1;
    }
    }

    @-o-keyframes fadeIn {
    0% {
      opacity:0;
    }
    100% {
      opacity:1;
    }
    }

    @-ms-keyframes fadeIn {
    0% {
      opacity:0;
    }
    100% {
      opacity:1;
    }
    }

    /* ---------------- Section Principale --------------- */

    .principal{
        font-family: 'OpenSans';
        display: flex;
        padding-top: 8rem;
        width: 78%;
        margin: auto;
        align-items: flex-start;
    }

    /* Partie Photo */

    figure{
        width: 143%;
        padding-bottom: 4rem;
    }

    figure img{
        width: 100%;
    }

    figcaption {
        font-size: 12px;
        font-family: 'OpenSans';
        color: #777;
        float: right;
    }

    /* Partie Texte */

    .laius {
        width: 90%;
        margin-left: 3%;
        padding-left: 30%;
    }

    .laius h1 {
        width: 18rem;
        font-size: 29px;
        font-weight: 600;
        text-align: left;
        color: #303133;
    }

    .laius p {
        width: 18rem;
        font-size: 13px;
        font-weight: 300;
        text-align: justify;
        margin-top: 15px;
        color: #777;
    }

    </style>

  </body>
</html>
