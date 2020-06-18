<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Spray-it Artists</title>
</head>
<body>
  <?php include('nav.php'); ?>
  <section id="artists">
    <div class="titre">
        <h1>Notre équipe pour réussir tous vos projets et évènements !</h1>
    </div>
    <div class="container">
      <div class="element">
        <img class="personne1" src="images/medias/nabil_dorbane.jpg" width="250px" height="320px" alt="">
        <div class="description personne1">
          <h1>Nabil</h1>
          <p>petite description avec son parcours, son univers, son utilité/poste dans l'entreprise ...</p>
        </div>
      </div>
      <div class="element">
        <img class="nabil" src="images/medias/nabil_dorbane.jpg" width="250px" height="320px" alt="">
        <div class="description nabil">
          <h1>Nabil</h1>
          <p>petite description avec son parcours, son univers, son utilité/poste dans l'entreprise ...</p>
        </div>
      </div>
      <div class="element">
        <img class="personne2" src="images/medias/nabil_dorbane.jpg" width="250px" height="320px" alt="">
        <div class="description personne2">
          <h1>Nabil</h1>
          <p>petite description avec son parcours, son univers, son utilité/poste dans l'entreprise ...</p>
        </div>
      </div>
    </div>
  </section>
  <?php include('footer.php'); ?>

  <script type="text/javascript">
    function pageLoaded() {
      document.querySelector("body").style.opacity = 1;
    }
    window.onload = pageLoaded;
  </script>

  <style media="screen">

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

/*--------------- container ---------------------- */

  .container{
    padding-top: 3rem;
    display: flex;
    flex-direction: row;
    width: 80%;
    margin: auto;
    text-align: center;
    justify-content: space-around;
    align-items: flex-start;
    align-content: space-between;
  }

  .element{
    width: 250px;
  }

  .description{
    display: none;
  }

  .description h1{
    line-height: 50px;
    font-weight: 400;
  }
  .description p{
    padding: 4px;
    font-weight: 300;
    color: #777;
  }

  .titre{
    padding-top: 5rem;
  }

  .titre h1{
    font-size: 1.5rem;
    font-weight: 400;
    text-align: center;
  }
  </style>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>

<!-- Show on hover -->
$(document).ready(function(){
  $(".personne1").hover(function(){
    $(".description.personne1").slideDown("slow");
  });
  $(".personne2").hover(function(){
    $(".description.personne2").slideDown("slow");
  });
  $(".nabil").hover(function(){
    $(".description.nabil").slideDown("slow");
  });
});
</script>
</body>
</html>
