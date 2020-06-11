<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preload" href="style_projets.css" as="style">
    <link rel="preload" href="script.js" as="script">

    <link rel="stylesheet" href="style_projets.css">
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
      <div class="galerie commission">
			     <a href="pages-projet/projet_sickla.php"><img src="images/projets/Commissions/Sickla/KSU_2153.jpg" alt="Sickla" />
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
      <div class="galerie commission">
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
           <a href="pages-projet/Nåt_Bra.php"><img src="images/projets/commissions/Na╠èt Bra/na╠èt_01-3.jpg" alt="Na╠èt Bra" />
             <div class="text">
               <h3>Nåt Bra</h3>
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
