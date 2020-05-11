<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Spray-it Daily</title>
  </head>
  <body>
    <?php include("nav.php"); ?>

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
          <img src="images/daily/daily3.png" alt="daily spray it">
          <figcaption>Madame Mim</figcaption>
        </figure>
        <figure>
          <img src="images/daily/daily4.png" alt="daily spray it">
          <figcaption>Merlin et Archimède</figcaption>
        </figure>
      </article>
      <aside class="laius">
        <h1>Mim ou Merlin ?</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
          in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        <p>jj.mm.aa</p>
        <p>lieu</p>
      </aside>
    </section>
    <section class="principal">
      <article class="photo">
        <figure>
          <img src="images/daily/daily5.png" alt="daily spray it">
          <figcaption>Merlin et Archimède à la bombe</figcaption>
        </figure>
      </article>
      <aside class="laius">
        <h1>Tout sur tout ?</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
          in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        <p>jj.mm.aa</p>
        <p>lieu</p>
      </aside>
    </section>
    <section class="principal">
      <article class="photo">
        <figure>
          <img src="images/daily/daily6.png" alt="daily spray it">
          <figcaption>Sunday</figcaption>
        </figure>
      </article>
      <aside class="laius">
        <h1>Sunday</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
          in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        <p>jj.mm.aa</p>
        <p>lieu</p>
      </aside>
    </section>

    <?php include("footer.php"); ?>

    <style>

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

    body {
    animation: fadeIn ease 3s;
    -webkit-animation: fadeIn ease 3s;
    -moz-animation: fadeIn ease 3s;
    -o-animation: fadeIn ease 3s;
    -ms-animation: fadeIn ease 3s;
    }


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


      .principal{
        font-family: 'OpenSans';
        display: flex;
        padding-top: 8rem;
        width: 78%;
        margin: auto;
        align-items: flex-start;
      }

      figure{
        width: 143%;
        padding-bottom: 4rem;
      }

      figure img{
        width: 100%;
      }

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

      figcaption {
        font-size: 12px;
        font-family: 'OpenSans';
        color: #777;
        float: right;
      }

    </style>

  </body>
</html>
