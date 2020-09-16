<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="style/ind.css">
    <meta charset="utf-8">
    <title>Nakaduli</title>
  </head>
  <body>
    <div class="Header">
      <img src="resource/nakaduli-logo.png" alt="Nakaduli-logo">
      <a href="#slideshow" onclick="goto()">მთავარი</a>
      <a href="#service" onclick="goto()">სერვისი</a>
      <a href="#" onclick="goto()">მენიუ</a>
      <a href="#" onclick="goto()">გალერია</a>
      <a href="#Footer" onclick="goto()">შესახებ</a>
    </div>

    <div id="slideshow">
      <?php
        for ($i=0; $i < 3 ; $i++){
          echo "<div class='hidden'><img src='resource/".$i.".png' alt='slide-img'></div>";
        }
      ?>
    </div>
    <img class='left-arrow' src="resource/arrow.png" onclick="prev_next(-1);"alt="slide-arrow">
    <img class='right-arrow' src="resource/arrow.png" onclick="prev_next(1);"alt="slide-arrow">

    <div id="superheros">

    </div>

    <div id="service">
      <img src="resource/service1.png" alt="package-1">
      <img src="resource/service1.png" alt="package-2">
      <img src="resource/service1.png" alt="package-3">
      <img src="resource/service1.png" alt="package-4">
    </div>

    <div id="Footer">
      <h5><br><br><br>
        <a class='fa fa-address-card-o'>სულხან კვერნაძის 33ა</a></i> <br><br><br>
        <a class='fa fa-address-card-o'>555 555 555</a><br><br><br>
        <a class='fa fa-address-card-o'>GroupC@mail.com</a><br><br><br>
      </h5><br><br>
      <i class='fab fa-facebook fb'></i>
      <i class='fab fa-instagram inst'></i>
      <i class='fab fa-twitter twitter'></i><br>
      <h2>𝗣𝗼𝘄𝗲𝗿𝗲𝗱 𝗕𝘆 𝗨𝗗</h2><br>
      <p>©GROUP C &nbsp All rights reserved</p>
    </div>

    <script>
      var main = function() {
      var first = document.getElementsByClassName('hidden');
      first[0].style.display = "block";
      var paused = false

      $('.left-arrow').click(function() {
        paused = true;
        $('#slideshow > div:first')
        .fadeOut(1000)
        .next()
        .fadeIn(1000)
        .end()
        .appendTo('#slideshow');
      });

      $('.right-arrow').click(function() {
        paused = true;
        $('#slideshow > div:last')
        .fadeIn(1000)
        .prependTo('#slideshow')
        .next()
        .fadeOut(1000)
        .end();
      });

      setInterval(function() {
        if (paused === false) {
          $('#slideshow > div:first')
          .fadeOut(1000)
          .next()
          .fadeIn(1000)
          .end()
          .appendTo('#slideshow');
        };
      },  3000);
      };
      $(document).ready(main);

    </script>
  </body>
</html>
