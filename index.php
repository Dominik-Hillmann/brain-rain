<!DOCTYPE html>
<html lang="de">
<head>

<!-- Basic Page Needs
--------------------------------------- -->
    <meta charset="utf-8">
    <title>BRAINRAIN</title>
    <meta name="description" content="Egal, wie du es durch die bunten verwuselten Weiten des unendlichen Netzes in unser kleines, feuchtes und in der oberen linken Ecke leicht angeschimmeltes Crackloch gefunden hast, wir heißen dich willkommen!">
    <meta name="author" content="Dominik Hillmann">

<!-- Mobile Specific Metas
--------------------------------------- -->

<!-- CSS links
--------------------------------------- -->
    <link rel="stylesheet" type="text/css"  href="css/landingpage.css">

<!-- Favicon
--------------------------------------- -->
    <link rel="icon" type="image/png" href="pictures/favicon.png">

</head>

<body>

   <?php

      $possibilities = // naming options here to later call functions named the same
      [
         0 => 'sphere',
         1 => 'oldBackground'
      ];

      function sphere()
      {
         $p5sources =
         [
            0 => "https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.5.11/p5.min.js",
            1 => "https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.5.11/addons/p5.dom.min.js",
            2 => "https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.5.11/addons/p5.sound.min.js", // libs, now the sktech
            3 => "/sphere.classes.js",
            4 => "/sphere.sketch.js"
         ];

         for($i = 0; $i < count($p5sources); $i++)
            echo '<script type="text/javascript" src="' . ($p5sources[$i] . '"></script>');
      }

      sphere();


      $numPossib = 2;            // how many possible backgroudn are available?
      $r = rand(0, $numPossib);  // a random value


      $posBack =           // possible backgrounds
      [
         0 => 'sphere',    // sphere
         1 => 'start'      // old background
      ];

      // echo '<p>PHP-Version</p>';

   ?>

<!-- Page Layout
--------------------------------------- -->
   <p id="madewith">
      Made with <a href="https://media.collegetimes.com/uploads/2014/05/anigif_enhanced-buzz-18034-1381104650-21.gif"><span>♥</span></a> and <img src="pictures/brainrainwhite.png">
   </p>
      <header>
         <div>
            <img src="pictures/brainrainwhite.png" alt="Brainrain Logo">
            <h1>BRAINRAIN</h1>
            <p>Egal, wie du es durch die bunten verwuselten Weiten des unendlichen Netzes in unser kleines, feuchtes und in der oberen linken Ecke leicht angeschimmeltes Crackloch gefunden hast, wir heißen dich willkommen! Fühl dich wohl, nimm dir schonmal eine Spritze und bereite Venen und Hirn auf eine große Dosis Awesomeness vor.</p>
            <a href="texte.html"><p>Treten Sie ein.<br>Nichts anfassen.<br>ಠ_ಠ<br>PHP</p></a>
        </div>
    </header>

<!-- Links to Scripts
--------------------------------------- -->



<!-- End of HTML doc
--------------------------------------- -->
</body>
</html>
