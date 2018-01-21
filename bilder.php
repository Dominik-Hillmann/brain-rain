<!DOCTYPE html>
<html lang="de">
<head>

<!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>Bilder | BRAINRAIN</title>
    <meta name="description" content="Bilder | BRAINRAIN">
    <meta name="author" content="Dominik Hillmann">

<!-- Mobile Specific Metas -->
    <meta>

<!-- CSS links -->
    <link rel="stylesheet" href="css/desktop.css">
    <link rel="stylesheet" href="css/gallery.css">

<!-- Favicon -->
    <link rel="icon" type="image/png" href="pictures/favicon.png">

</head>
<body>

<!-- Page Layout -->
<header>
    <div id="logocontainer">
        <a href="http://www.brain-rain.net"><img alt="Brainrain Logo" src="pictures/brainrainwhite.png"></a>
        <a href="http://www.brain-rain.net"><h1>BRAINRAIN</h1></a>
    </div>
    <ul id="navigation">
        <a href="bilder.php"><li id="current">Bilder</li></a>
        <a href="texte.html"><li>Texte</li></a>
        <a href="about.html"><li>Über Uns</li></a>
    </ul>
</header>

<div id="gallerywrapper">
   <?php
   // Definition der Klassen und Aufbau des Kategorien-Arrays
   require "picCategories.inc.php";

   //****** AUSWAHL EINER KATEGORIE *******//
   if(!(isset($_GET["category"])) || $_GET["category"] >= count($categories))
      $chosen = $categories[0];
   else
      $chosen = $categories[$_GET["category"]];

   $firstRow = $chosen->rows[0];
   $secRow = $chosen->rows[1];

   //****** VERWERTUNG DER KATEGORIE ******//

   echo '<div class = "category">';
   echo '<div class="title" id="' . $chosen->name . '">' . $chosen->name . '</div>';
   echo '<div class="pictures">';

   echo '<div class="first row">';
   for($i = 0; $i < count($firstRow->pics); $i++)
   {
      $currentPic = $firstRow->pics[$i];
      echo '<div class="infoboxWrapper">';
      echo '<img src="' . $currentPic->link . '">';
      echo '<div class="infobox">';

      echo '<h1>' . $currentPic->name . '</h1>';
      echo '<p>' . $currentPic->description . '</p>';

      echo '</div>'; // class="infobox"
      echo '</div>'; // class="infoboxWrapper"

      if($i != count($firstRow->pics) - 1)
         echo ' '; // std distance between pictures
   }
   echo '</div>'; // class="first row"

   echo '<div class="second row">';
   for($i = 0; $i < count($secRow->pics); $i++)
   {
      $currentPic = $secRow->pics[$i];
      echo '<div class="infoboxWrapper">';
      echo '<img src="' . $currentPic->link . '">';
      echo '<div class="infobox">';

      echo '<h1>' . $currentPic->name . '</h1>';
      echo '<p>' . $currentPic->description . '</p>';

      echo '</div>'; // class="infobox"
      echo '</div>'; // class="infoboxWrapper"

      if($i != count($secRow->pics) - 1)
         echo ' ';
   }
   echo '</div>'; // class="second row"

   echo '</div>'; // class="pictures"
   echo '<div class="pushBack"></div>';
   echo '</div>'; // class="category"
   ?>
</div>

<footer>
   <div id="copyright">
      <p id="c">© BRAINRAIN 2018</p>
      <div>
         <a href="https://twitter.com/brainrain_"><img src="../pictures/twitterlogo.png"  alt="Twitter"></a>
         <a href="#"><img src="../pictures/facebooklogo.png" alt="facebook"></a>
         <a href="#"><img src="../pictures/githublogo.png" alt="Github"></a>
         <a href="http://uniikat96.deviantart.com/"><img src="../pictures/deviantartlogo.PNG"></a>
      </div>
      <p id="madewith">Made with  <span id="heart"> ♥</span> and <img src="../pictures/brainrainwhite.png"></p>
   </div>
</footer>

<!-- End of HTML doc -->
<script type="text/javascript" src="dropdown.js"></script>
<script type="text/javascript" src="imageRows.js"></script>
<script type="text/javascript" src="pictureInfo.js"></script>

</body>
</html>
