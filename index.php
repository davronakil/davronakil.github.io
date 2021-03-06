<?php

//Detect special conditions devices
$iPod    = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
$iPhone  = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$iPad    = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
$Android = stripos($_SERVER['HTTP_USER_AGENT'],"Android");
$webOS   = stripos($_SERVER['HTTP_USER_AGENT'],"webOS");

?> 

<!DOCTYPE html>
<head>
  <meta charset='utf-8'>
  <meta content='IE=edge' http-equiv='X-UA-Compatible'>
  <meta content='width=device-width, initial-scale=1' name='viewport'>
  <meta name="KEYWORDS" content="Davron, Akil, web developer, designer, new york, california, technology, gwu, george washington university, gw, school of business, international business, computer science, gwsb, loyola, tashkent, toshkent, akilbaev, akilbasa, 257"> 
  <meta name="description" content="Davron Akil's Home Page">
  <title>Davron Akil | Home</title>


  <style type="text/css">
    body {
      background: url("./img/City-In-a-Bubble-1920-whatermarked.jpg") no-repeat fixed center top;
      background-size: cover;
      color: white;
      background-color: #326324;
      background-attachment: fixed;
      background-position: center center;
      background-repeat: no-repeat no-repeat;
      overflow: hidden;
    }

    p {
      font-size: 22px;
    }

    a {
      -webkit-transition: 1s cubic-bezier(0.2, 0.8, 0.2, 1); /* Safari */
      transition: 1s cubic-bezier(0.2, 0.8, 0.2, 1);
      display: inline-block;
      border-radius: 16px;
    }
    a:hover {
      color: #D2FFA9;
      transform: scale(1.045);
      background-image: linear-gradient(to right, #EA60EC 0%, #1cefff 51%, #FFED93 100%);
      background-position: 99% 50%;
      padding: 5px;
    }
    
    .headline {
      
      font-family: 'BenchNine', sans-serif;
      font-size: 32px;
      margin-bottom: 2px;
      margin-top: 8px;
      text-shadow:
      -1px -1px 0 #000,
      1px -1px 0 #000,
      -1px 1px 0 #000,
      1px 1px 0 #000;  
    }
    .subheadline {
      margin-top: 1px;
      margin-bottom: 5px;
      font-family: 'BenchNine', sans-serif;
      font-size: 22px;
      text-shadow:
      -1px -1px 0 #000,
      1px -1px 0 #000,
      -1px 1px 0 #000,
      1px 1px 0 #000;  
    }
    .subsubheadline {
      margin-top: 1px;
      font-family: 'BenchNine', sans-serif;
      font-size: 17px;
      text-shadow:
      -1px -1px 0 #000,
      1px -1px 0 #000,
      -1px 1px 0 #000,
      1px 1px 0 #000;  
    }
    .linkList {
      padding-left: 0px;
    }

    .flex-container, html, body {
      height: 100%;
      padding: 0;
      margin: 0;
      display: -webkit-box;
      display: -moz-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-flow: column;
    }

    /* Smartphones (portrait) ----------- */
    @media only screen and (max-width : 320px) {
      .headline {
        margin-bottom: 1px;
        font-family: 'BenchNine', sans-serif;
        font-size: 24px;
        text-shadow:
        -1px -1px 0 #000,
        1px -1px 0 #000,
        -1px 1px 0 #000,
        1px 1px 0 #000;  
      }
      .subheadline {
        margin-top: 1px;
        font-family: 'BenchNine', sans-serif;
        font-size: 18px;
        text-shadow:
        -1px -1px 0 #000,
        1px -1px 0 #000,
        -1px 1px 0 #000,
        1px 1px 0 #000;  
      }
    }

    .overlay {
      background:rgba(0,0,0,0.3);
      width:      100%;
      height:     100%; 
      z-index:    10;
      top:        0; 
      left:       0; 
      position: fixed;
      overflow: auto;
    }

    #preloader {
      position:fixed;
      top:0;
      left:0;
      right:0;
      bottom:0;
      background-color:#18401A; 
      z-index:99; 
    }

    #status {
      width:200px;
      height:200px;
      position:absolute;
      left:50%; /* centers the loading animation horizontally one the screen */
      top:50%; /* centers the loading animation vertically one the screen */
      background-image:url(./img/status.gif); 
      background-repeat:no-repeat;
      background-position:center;
      margin:-100px 0 0 -100px; /* width and height divided by two */
    }
    .invisible {
      display: none;
      visibility: hidden;
    }

    .content {
      width: 80%;
      max-width: 960px;
      margin: 50px auto 0px auto; 
    }

    .social {
      margin-top: -10px;
      text-align: center;
      font: 100 72px 'Raleway', sans-serif;
      color: white;
      font-size: 32px; 
    }

    .social li {
      list-style: none;
      margin-bottom: 10px; 
    }

    .social a {
      color: white;
      text-decoration: none;
      text-shadow:
      -1px -1px 0 #000,
      1px -1px 0 #000,
      -1px 1px 0 #000,
      1px 1px 0 #000;  
    }

    .social i {
      margin-right: 4px; 
    }

    @media screen and (max-width: 480px) {
      
      #headline-container {
        margin-top: 26px;
      }

    }

</style>

</head>
<body>

<!-- Preloader -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>


<div class="flex-container">
  
  <!--   <div class="profile"><img class="invisible" itemprop="image" src="./davron.jpg" alt="Davron Akil's Profile"></div>   -->
    <p class="headline">DAVRON AKIL</p>
    <p class="subheadline">Designer, Developer, Creator of Things</p>  
    <span class="invisible">The George Washington University</span>
    <!-- p class="subsubheadline">and frankly lots of other things</p -->  

  <div class='section social'>
    <ul class="linkList">
    <li class='twitter'>
      <?php 
      if( $iPad || $iPhone || $iPod ){
        echo "<a href='twitter:///user?screen_name=dav917'>";
      }
      else {
       echo "<a href='//twitter.com/dav917'>";
      }
      ?>
         <i class='fab fa-twitter'></i>
          Twitter
      </a>
    </li>
    <li class='briefcase'>
      <a href='//pixelkraft.net'>
      <i class="fas fa-th-large"></i>
        Portfolio
      </a>
    </li>
    <li class='facebook'>
        <?php 
      if( $iPad || $iPhone || $iPod ){
        echo "<a href='fb://profile?id=%davron'>";
      }
      else {
       echo "<a href='//facebook.com/davron'>";
      }
      ?>
        <i class='fab fa-facebook'></i>
        Facebook
      </a>
    </li>
    <li class='instagram'>
        <?php 
      if( $iPad || $iPhone || $iPod ){
        echo "<a href='instagram://user?username=davron.jpg'>";
      }
      else {
       echo "<a href='//instagram.com/davron.jpg'>";
      }
      ?>
        <i class='fab fa-instagram'></i>
        Instagram
      </a>
    </li>
    <li class='keybase'>
      <a href='//keybase.io/akilbasa'>
        <i class='fab fa-keybase'></i>
        Keybase
      </a>
    </li>
    <li class='linkedin'>
      <a href='//www.linkedin.com/in/davron/'>
        <i class='fab fa-linkedin'></i>
        LinkedIn
      </a>
    </li>
    <li class='telegram'>
      <a href='//github.com/davronakil'>
        <i class='fab fa-github'></i>
        Github
      </a>
    </li>
    <li class='envelope'>
      <a href='mailto:get@akil.me'>
        <i class='fas fa-envelope'></i>
        Email
      </a>
    </li>
  </ul>
    
  </div>
</div>



<link rel="stylesheet" href="//use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

<link href='//fonts.googleapis.com/css?family=BenchNine:700' rel='stylesheet' type='text/css'>

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>

<script type="text/javascript">
  //<![CDATA[
    $(window).load(function() { // makes sure the whole site is loaded
      $('#status').fadeOut(); // will first fade out the loading animation
      $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
      $('body').delay(350).css({'overflow':'visible'});
    })
  //]]>
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-18130523-1', 'akil.me');
  ga('send', 'pageview');

</script>

<script type='application/ld+json'> 
{
  "@context": "http://www.schema.org",
  "@type": "person",
  "name": "Davron Akil",
  "url": "https://akil.me"
}
</script>

  </body>
</html>
