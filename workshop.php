<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Spray-it Workshop</title>
</head>
<body>
  <?php include('nav.php'); ?>
  <section id="workshop">
    <h1>Workshop</h1>
    <div class="image">
      <img src="images/projets/workshop/sample.jpg" alt="Workshop image">
    </div>
    <div class="para">
      <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br>
      <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
    <div class="prices">
      <table>

      </table>
    </div>
  </section>
  <?php include('footer.php'); ?>


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
    font-family: 'OpenSans', halvetica, sans-serif,serif;
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


  #workshop{
    padding-top: 4rem;
    margin: auto;
    width: 70%;
    text-align: center;
  }

  img{
    width: 100%;
  }

  h1 {
    text-transform: uppercase;
    font-size: 29px;
    font-weight: 400;
    line-height: 120px;
  }

  .para{
    padding-top: 4rem;
    margin: auto;
    width: 90%;
    font-size: 14px;
    font-weight: 300;
    text-align: center;
  }
  </style>
</body>
</html>
