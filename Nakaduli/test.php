<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta charset="utf-8">
    <title></title>
    <style >
    html {
      background-color: #3F51B5;
    }

    .hidden {
      display: none;
    }

    .container {
      margin: 0;
      max-width: 750px;
      margin:10vh auto 0 auto;
    }

    .container > div {
      display: inline-block;
    }

    #slideshow {
      margin: 0;
    	position: relative;
    	width: 620px;
      height: 250px;
    }

    #slideshow > div {
    	position: absolute;
    	top: 0;
    	left: 0;
    	right: 0;
    	bottom: 0;
    }

    #slideshow img {
    	width: 100%;
      margin: 0;
      border: solid 1px #283593;
    }

    a {
      width: 40px;
      font-size: 64px;
      display: inline-block;
      color: #9FA8DA;
      text-decoration: none;
      text-align: center;
      vertical-align: middle;
      line-height: 400px;
      font-weight: bold;
      padding: 0 10px;
    }
    </style>
  </head>
  <body>
    <div class=container>
      <a href="#" class="arrowL">&lt;</a>
      <div id="slideshow">
        <div class="hidden"><img src="http://unsplash.it/620/450?image=401"/></div>
        <div class="hidden"><img src="http://unsplash.it/620/450?image=368"/></div>
        <div class="hidden"><img src="http://unsplash.it/620/450?image=266"/></div>
      </div>
      <a href="#" class="arrowR">&gt;</a>
    </div>
    <script>
    var main = function() {

var paused = false

$('.arrowR').click(function() {
  paused = true;
  $('#slideshow > div:first')
  .fadeOut(1000)
  .next()
  .fadeIn(1000)
  .end()
  .appendTo('#slideshow');
});

$('.arrowL').click(function() {
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
