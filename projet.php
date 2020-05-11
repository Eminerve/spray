<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Spray it-Projects</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  </head>
  <body>
    <?php include("nav.php"); ?>
    <section id="menu_selec">
      <ul>
        <li id="bouton_tout">Tout</li>
        <li id="bouton_commission">Commissions</li>
        <li id="bouton_workshop">workshop</li>
        <li id="bouton_graphique">Graphique</li>
        <li id="bouton_event">Events</li>
      </ul>
    </section>
    <section class="projects">
      <div class="galerie event">
			     <a href="pages-projet/projet_voi.php"><img src="images/projets/Events/VOI/_DSC5793.JPG" alt="Voi Project" />
             <div class="text">
               <h3>Projet Voi</h3>
               <p><em>28.09.19</em></p>
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
      <div class="galerie event">
			     <a href="pages-projet/Turnable_Tables.php"><img src="images/projets/Events/Turnable_Tables/IMG_8156.jpeg" alt="Turnable Tables" />
             <div class="text">
               <h3>Turnable Tables</h3>
               <p><em>24.08.19</em></p>
						</div>
          </a>
			</div>
      <div class="galerie comission">
			     <a href="pages-projet/Upplands_Bro.php"><img src="images/projets/commissions/Upplands Bro/Bro-Green-tunnel-5.jpg" alt="Upplands Bro" />
             <div class="text">
               <h3>Upplands Bro</h3>
               <p><em>09.09.18</em></p>
						</div>
          </a>
			</div>
      <div class="galerie commission">
			     <a href="pages-projet/The_Good_Gringo.php"><img src="images/projets/commissions/The Good Gringo/The good gringo-3.jpg" alt="The Good Gringo" />
             <div class="text">
               <h3>The Good Gringo</h3>
               <p><em>30.04.17</em></p>
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
      <div class="galerie commission">
           <a href="pages-projet/Nafet_Bra.php"><img src="images/projets/commissions/Na╠èt Bra/na╠èt_01-3.jpg" alt="Na╠èt Bra" />
             <div class="text">
               <h3>Na╠èt Bra</h3>
               <p><em>12.06.15</em></p>
            </div>
          </a>
      </div>

    </section>

    <?php include("footer.php"); ?>

    <script src="https://code.jquery.com/jquery-3.5.0.js"  integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc="  crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="script.js"></script>
<!--
    <script type="text/javascript">
      function pageLoaded() {
        document.querySelector("body").style.opacity = 1;
      }
      window.onload = pageLoaded;
    </script>-->


  </body>
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

  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  html{
    font-size: 14px;
    font-family: 'OpenSans',halvetica, sans-serif,serif;
    color: #303133;
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


  #menu_selec{
    padding-top: 8rem;
    margin: auto;
    display: flex;
    text-transform: uppercase;
    justify-content: center;
    align-items: center;
    align-content: center;
    color: #CCCCCC;
    width: 100%;
  }

  #menu_selec ul {
    margin: auto;
    list-style: none;
  }

  #menu_selec ul li{
    font-weight: 300;
    display: inline-block;
    padding: 1rem .5rem;
    cursor: pointer;
    font-size: 16px;
  }

  #menu_selec ul li:hover{
    color: #303133;
    font-weight: 300;
  }

  .projects{
    width: 95%;
    padding-top: 1rem;
    padding-bottom: 2rem;
    margin: auto;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    font-family: 'OpenSans';
  }

  .galerie
  {
  	position: relative;
  	width: 350px;
  	margin-left: 8px;
  	margin-right: 8px;
  	margin-bottom: 16px;
  	margin-top: 0;
  }

  .galerie img
  {
  	display: block;
  	width: 100%;
  	height: 250px;
  }

  .galerie .text
  {
  	visibility: hidden;
  	text-align: center;
  	position: absolute;
  	transform: translate(-50%, -50%);
  }

  .galerie:hover .text h3{
    text-transform: uppercase;
    font-size: 29px;
    line-height: 29px;
    color: #303133;
    font-weight: 300;
  }

  .galerie:hover .text em{
    font-style: normal;
    font-size: 16px;
    color: #777;
    line-height: 24px;
    font-weight: 300;
  }
  	/*---Avec hover---*/

  .galerie:hover .text
  {
  	visibility: visible;
  	color: #000;
  	line-height: 150%;
  	text-align: center;
  	position: absolute;
  	top: 50%;
  	left: 50%;
  	transform: translate(-50%, -50%);
  	width: 100%;
    transition: visibility 1s;
  }

  .galerie:hover img
  {
  	width: 100%;
  	height: 250px;
    opacity: 0.3;
  	transition: opacity 0.7s;
  }
  </style>
  <script>
  $(document).ready(function(){
    $("#bouton_tout").click(function(){
      $("#bouton_tout").css('color', '#303133');
      $("#bouton_commission").css('color', '#CCCCCC');
      $("#bouton_event").css('color', '#CCCCCC');
      $("#bouton_graphique").css('color', '#CCCCCC');
      $("#bouton_workshop").css('color', '#CCCCCC');
      $(".galerie").show();
    });
    $("#bouton_commission").click(function(){
      $(".commission").show();$(".event").hide();$(".graphique").hide();$(".workshop").hide();
      $("#bouton_tout").css('color', '#CCCCCC');
      $("#bouton_commission").css('color', '#303133');
      $("#bouton_event").css('color', '#CCCCCC');
      $("#bouton_graphique").css('color', '#CCCCCC');
      $("#bouton_workshop").css('color', '#CCCCCC');
    });
    $("#bouton_event").click(function(){
      $(".event").show();$(".commission").hide();$(".graphique").hide();$(".workshop").hide();
      $("#bouton_tout").css('color', '#CCCCCC');
      $("#bouton_commission").css('color', '#CCCCCC');
      $("#bouton_event").css('color', '#303133');
      $("#bouton_graphique").css('color', '#CCCCCC');
      $("#bouton_workshop").css('color', '#CCCCCC');
    });
    $("#bouton_graphique").click(function(){
      $(".event").hide();$(".commission").hide();$(".graphique").show();$(".workshop").hide();
      $("#bouton_tout").css('color', '#CCCCCC');
      $("#bouton_commission").css('color', '#CCCCCC');
      $("#bouton_event").css('color', '#CCCCCC');
      $("#bouton_graphique").css('color', '#303133');
      $("#bouton_workshop").css('color', '#CCCCCC');
    });
    $("#bouton_workshop").click(function(){
      $(".event").hide();$(".commission").hide();$(".graphique").hide();$(".workshop").show();
      $("#bouton_tout").css('color', '#CCCCCC');
      $("#bouton_commission").css('color', '#CCCCCC');
      $("#bouton_event").css('color', '#CCCCCC');
      $("#bouton_graphique").css('color', '#CCCCCC');
      $("#bouton_workshop").css('color', '#303133');
    });
  });
  </script>

</html>
