<?php
session_start();
$uid = isset($_SESSION['uid']) ? $_SESSION['uid'] : 0;
if ($uid === 0) {
    $uid = 'compass_test_'.rand(1, 100);
    $_SESSION['uid'] = $uid;
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>My VS Hair Dresser</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <link href="resources/css/jquery-ui-themes.css" type="text/css" rel="stylesheet"/>
    <link href="resources/css/axure_rp_page.css" type="text/css" rel="stylesheet"/>
    <link href="data/styles.css" type="text/css" rel="stylesheet"/>
    <link href="files/my_vs_hair_dresser/styles.css" type="text/css" rel="stylesheet"/>
    <script src="resources/scripts/jquery-1.7.1.min.js"></script>
    <script src="resources/scripts/jquery-ui-1.8.10.custom.min.js"></script>
    <script src="resources/scripts/prototypePre.js"></script>
    <script src="data/document.js"></script>
    <script src="resources/scripts/prototypePost.js"></script>
    <script src="files/my_vs_hair_dresser/data.js"></script>
    <script type="text/javascript">
      $axure.utils.getTransparentGifPath = function() { return 'resources/images/transparent.gif'; };
      $axure.utils.getOtherPath = function() { return 'resources/Other.html'; };
      $axure.utils.getReloadPath = function() { return 'resources/reload.html'; };
    </script>
  </head>
  <body>
    <div id="base" class="">

      <!-- Unnamed (Image) -->
      <div id="u0" class="ax_default image">
        <img id="u0_img" class="img " src="images/my_vs_hair_dresser/u0.png"/>
        <!-- Unnamed () -->
        <div id="u1" class="text" style="display:none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

      <!-- Unnamed (Image) -->
      <div id="u2" class="ax_default image">
        <img id="u2_img" class="img " src="images/my_vs_hair_dresser/u2.png"/>
        <!-- Unnamed () -->
        <div id="u3" class="text" style="display:none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u4" class="ax_default heading_1">
        <div id="u4_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u5" class="text">
          <p><span>My VS Hair Dresser</span></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u6" class="ax_default heading_2">
        <div id="u6_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u7" class="text">
          <p><span>Step1: You're a </span></p>
        </div>
      </div>
    </div>
  </body>
</html>



<!--
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Olay</title>
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="yes" name="apple-touch-fullscreen">
    <meta content="telephone=no,email=no" name="format-detection">
    <meta name="App-Config" content="fullscreen=yes,useHistoryState=yes,transition=yes">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <link href="./assets/style.css" rel="stylesheet" type="text/css">
    <style>
.start {
    border: 0 solid transparent;
    border-radius: 0;
    padding: .5rem 1.65rem;
    font-size: 1.6rem;
    color: #000;
    text-decoration: none;
    text-transform: uppercase;
    cursor: pointer;
    text-align: center;
    background: #868686;
    background-image: -webkit-linear-gradient(left bottom,#868686 0,#e5e5e5 25%,#eaeaea 26%,#bfbfbf 0,#fff 46%,#fff 55%,#bcbcbc 79%,#bababa);
}

.logo {
    width: 65%;
    height: auto;
    max-height: 32rem;
}

.intro {
    color: #d9d9d9;
    font-family: "NeutrafaceText-Light,Microsoft Yahei, 黑体,Heiti SC";
    font-size: 1.5rem;
    line-height: 1.5rem;
    margin: 2.75rem 0 0;
    width: 80%;
}
    </style>    
  </head>
  <body>
    <div class="container">
        <img src="assets/images/logofull.png" background-size="cover" mode="widthFix" class="logo"></img>
        <p class="intro">Identify unknown faces from a person group. </p>
        <img src="assets/images/youtube_thumbnail.png"></img>

        <a class="start btn btn-block" href="upload.php">Get Started</a>
    </div>    
  </body>
</html>
-->