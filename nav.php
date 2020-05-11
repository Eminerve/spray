<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Navigation</title>
  </head>
  <body>
    <nav class="navbar">
      <div class="navbar-container">
        <div class="logo">
          <a href="index.php">
            <img src="images/medias/logo.png" alt="Logo Spray it">
          </a>
        </div>

        <ul>
          <li><a class="a" href="projet.php">projects</a></li>
          <li><a class="a" href="artists.php">artists</a></li>
          <li><a class="a" href="contact.php">contact</a></li>
          <li> <a href="https://www.instagram.com/sprayit.collective/" target="_blank"><img src="images/medias/ig_nr.png" alt=""> </a> </li>
          <li> <a href="https://www.facebook.com/sprayit.collective/" target="_blank"><img src="images/medias/fb_nr.png"  alt=""> </a> </li>
          <li><a class="a" href="daily.php">daily</a></li>
        </ul>
      </div>
    </nav>


    <script src="https://code.jquery.com/jquery-3.5.0.js"  integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc="  crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="script.js"></script>

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



    /* ------------ Logo ---------------- */

    .logo img {
      width: 100px;
      float: left;
    }

    .navbar{
      position: absolute;
      z-index: 20;
      width: 100%;
      font-size: 14px;
      text-transform: uppercase;
      letter-spacing: .005em;
      line-height: 3;
      text-decoration: none;
      color: #ABABAB;
      background-color: white;
    }

    .navbar-container{
      width: 95%;
      max-width: 120rem;
      margin: auto;
    }

    .navbar ul {
      float: right;
      list-style: none;
    }

    .navbar ul li{
      display: inline-block;
      padding: 1rem .5rem;
      cursor: pointer;
    }

    .a{
      text-decoration: none;
      color: #ABABAB;
      font-weight: 400;
    }

    .a:hover{
      color: #303133;
    }

    .navbar ul li img{
      width: 15px;
    }

    /* ----- on scroll ------- */

    .fixed{
      position: fixed;
      top: 0;
      z-index: 20;
      width: 100%;
      font-size: 14px;
      background-color: #fff;
      transition: 1s;
      transition-duration: 0.7s;
      animation-name: effet;
      animation-duration: .5s;
    }

    @keyframes effet {
  0%   {opacity: .1;}
  25%  {opacity: .4;}
  50%  {opacity: .8;}
  100% {opacity: 1;}
}
    </style>
  </body>
</html>
