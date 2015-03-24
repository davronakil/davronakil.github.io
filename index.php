<!DOCTYPE html>
<head>
  <meta charset='utf-8'>
    <meta content='IE=edge' http-equiv='X-UA-Compatible'>
    <meta content='width=device-width, initial-scale=1' name='viewport'>
    <meta name="KEYWORDS" content="Davron, Akil, uzbek, russian, interpreter, web developer, new york, california, technology, entrepreneur, gwu, george washington university, gw, school of business, international business, computer science, gwsb, loyola, tashkent, toshkent, akilbaev, даврон, акилбаев, акил, акыл, ташкент, юнус-абад, 257, школа"> 
    <meta name="DESCRIPTION" content="Davron Akil's Home Page">
    <title>Davron Akil | Home</title>
    <link href='//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css' rel='stylesheet'>
    <link href='css/screen.css' rel='stylesheet'>
    <link href='http://fonts.googleapis.com/css?family=BenchNine:700' rel='stylesheet' type='text/css'>

  <style>   

    body {
      text-align: center;
      background: url("img/03425_windowtogothamcity_2560x1600.jpg") no-repeat fixed center top;
      background-size: cover;
      color: white;
      height: auto;
      margin-left: auto;
      margin-right: auto;
      background-attachment: fixed;
      background-position: 0% 0%;
      background-repeat: no-repeat no-repeat;
      overflow: hidden;
      }

    p {
      font-size: 22px;
    }

    .profile {
    width: 180px;
    height: 180px;
    border-radius: 150px;
    -webkit-border-radius: 150px;
    -moz-border-radius: 150px;
    background: url(prof3.png) no-repeat;
    margin-left:auto;
    margin-right:auto;
    margin-top: 15px;
    box-shadow: 0 0 8px rgba(0, 0, 0, .8);
    -webkit-box-shadow: 0 0 8px rgba(0, 0, 0, .8);
    -moz-box-shadow: 0 0 8px rgba(0, 0, 0, .8);
    }

    .headline {
      margin-bottom: 1px;
    font-family: 'BenchNine', sans-serif;
    font-size: 32px;
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

    /* Smartphones (portrait) ----------- */
    @media only screen 
    and (max-width : 320px) {
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
    background-color:#060019; /* change if the mask should have another color than white */
    z-index:99; /* makes sure it stays on top */
}

#status {
    width:200px;
    height:200px;
    position:absolute;
    left:50%; /* centers the loading animation horizontally one the screen */
    top:50%; /* centers the loading animation vertically one the screen */
    background-image:url(../img/status.gif); /* path to your loading animation */
    background-repeat:no-repeat;
    background-position:center;
    margin:-100px 0 0 -100px; /* is width and height divided by two */
}

  </style>
</head>
<body>

<!-- Preloader -->
<div id="preloader">
    <div id="status">&nbsp;
      <!-- font color="#FFFFFF">Loading components...</font --></div>
</div>

<div class="profile"></div>  
<p class="headline">DAVRON AKÍL</p>
<p class="subheadline">Web Developer, Tech Enthusiast, Crypto-Evangelist</p>  
<p class="subsubheadline">and frankly lots of other things</p>  
<?php 
$iPod    = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
$iPhone  = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$iPad    = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");

?>


<div class='section social'>
  <li class='twitter'>
    
<?php if($iPod || $iPhone || $iPad) 
{
 echo "<a href='twitter:///user?screen_name=dav917'>";
}
else {
echo "<a href='http://www.twitter.com/dav917'>";
}
?>
      <i class='fa fa-twitter'></i>
      Twitter
    </a>
  </li>
  <li class='linkedin'>
    <?php if($iPod || $iPhone || $iPad) 
{
 echo "<a href='linkedin://#profile/84245914'>";
}
else {
echo "<a href='http://www.linkedin.com/in/davron'>";
}
?>
      <i class='fa fa-linkedin'></i>
      LinkedIn
    </a>
  </li>
    <li class='facebook'>

<?php if($iPod || $iPhone || $iPad) 
{
 echo "<a href='fb://profile?id=%davron'>";
}
else {
echo "<a href='http://www.facebook.com/davron'>";
}
?>
      <i class='fa fa-facebook'></i>
      Facebook
    </a>
  </li>
  <li class='briefcase'>
    <a href='http://pixelkraft.net'>
    <i class="fa fa-book"></i>
      Portfolio
    </a>
  </li>
  <li class='envelope'>
    <a href='mailto:get@akil.me'>
      <i class='fa fa-envelope'></i>
      Email
    </a>
  </li>
  <li class='github'>
    <a href='http://github.com/davronakil'>
      <i class='fa fa-github'></i>
      Email
    </a>
  </li>
  <!-- li class='bitcoin'>
    <a href='bitcoin:1D7MmZUbk1Wttpt722ipoar8P6uJY2NUqJ'>
      <i class='fa fa-bitcoin'></i>
      
    </a>
  </li -->
  
  
  <!-- li class='btc'>
    <a href=''>
      <i class='icon-btc'></i>
      
    </a>
  </li -->

<!-- Icon list: http://fortawesome.github.io/Font-Awesome/3.2.1/icons/ -->

  <!-- li class='github'>
    <a href='http://www.github.com/davronakil'>
      <i class='icon-github'></i>
      GitHub
    </a>
  </li -->
</div>



<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-18130523-1', 'akil.me');
  ga('send', 'pageview');

</script>


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>


<!-- Preloader -->
<script type="text/javascript">
  //<![CDATA[
    $(window).load(function() { // makes sure the whole site is loaded
      $('#status').fadeOut(); // will first fade out the loading animation
      $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
      $('body').delay(350).css({'overflow':'visible'});
    })
  //]]>
</script>

  </body>
</html>
