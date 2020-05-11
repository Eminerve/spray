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
  <section id="contact">

  </section>
  <?php include('footer.php'); ?>

  <script type="text/javascript">
    function pageLoaded() {
      document.querySelector("body").style.opacity = 1;
    }
    window.onload = pageLoaded;
  </script>

  <style media="screen">
    body {
      opacity:0;
      transition: 300ms opacity;
    }
  </style>
</body>
</html>
