<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      .menu{
        height: 80vh;
        width: 90vw;
        margin:10vh 0 0 5vw;
      }
      .menu img{
        height: 80vh;
        width: 100%;
      }
      .map{
        width: 75vw;
        height:60vh;
        text-align: center;
        margin:10vh 0 0 13.5vw;
      }
      .superheros{
        height:50vh;
        width: 50vw;
        opacity: 0.8;
        margin:10vh 0 30vh 25vw;
        position:relative;
      }
      .first_half{
        width: 50%;
        height:50vh;
        position: relative;
        float: left;
      }
      .second_half{
        width: 50%;
        height:50vh;
        position: relative;
        float: right;
      }
      .hero{
        width: 24.85vw;
        height:10vh;
        background-color: red;
        float: left;
        border:0.1px solid white;
        transition: 1s;
        position:relative;
      }
      .hero:hover{
        background-color:blue;
        height:30vh;
        transition: 1s;
      }
      .hero:hover + .superheros{
      }
    </style>
  </head>
  <body>
    <!-- SuperHeroes -->
    <div class="superheros">
      <div class="first_half">
        <div class="hero">
        </div>
        <div class="hero">
        </div>
        <div class="hero">
        </div>
        <div class="hero">
        </div>
        <div class="hero">
        </div>
      </div>
      <div class="second_half">
        <div class="hero">
        </div>
        <div class="hero">
        </div>
        <div class="hero">
        </div>
        <div class="hero">
        </div>
        <div class="hero">
        </div>
      </div>
    </div>
    <!-- Menu Of Food -->
    <div class="menu">
      <img src="resource/menu.jpg">
    </div>
    <!-- Maps And Location -->
    <div class="map">
      <h1>Suxishvilis 104</h1>
      <iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d1489.4241401455754!2d44.87555352040292!3d41.70221087704291!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e3!4m0!4m3!3m2!1d41.7022529!2d44.875575!5e0!3m2!1ska!2sge!4v1600243780605!5m2!1ska!2sge"
      width="1000" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
  </body>
</html>
