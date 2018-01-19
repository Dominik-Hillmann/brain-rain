<!DOCTYPE html>
<html lang="de">
<head>

<!-- Basic Page Needs
--------------------------------------- -->
    <meta charset="utf-8">
    <title>Bilder | BRAINRAIN</title>
    <meta name="description" content="Hier später eine richtige Beschreibung einfügen.">
    <meta name="author" content="Dominik Hillmann">

<!-- Mobile Specific Metas
--------------------------------------- -->
    <meta>

<!-- CSS links
--------------------------------------- -->
    <link rel="stylesheet" href="css/desktop.css">
    <link rel="stylesheet" href="css/gallery.css">

<!-- Favicon
--------------------------------------- -->
    <link rel="icon" type="image/png" href="pictures/favicon.png">

</head>
<body>

<!-- Page Layout
--------------------------------------- -->
<header>
    <div id="logocontainer">
        <a href="http://www.brain-rain.net"><img alt="Brainrain Logo" src="pictures/brainrainwhite.png"></a>
        <a href="http://www.brain-rain.net"><h1>BRAINRAIN</h1></a>
    </div>
    <ul id="navigation">
        <a href="bilder.html"><li id="current">Bilder</li></a>
        <a href="texte.html"><li>Texte</li></a>
        <a href="about.html"><li>Über Uns</li></a>
    </ul>
</header>

<!-- spaeter die Sprungmarken/Anker nicht vergessen!, fuer die Navigation aus dem Dropdown heraus -->
<div id="gallerywrapper">
   <?php

   class MyClass
   {
      public $prop1 = "I'm a class property!";

      public function getProperty()
      {
         return $this->prop1 . "testtesttest<br />";
      }
   }

   $obj = new MyClass;

   echo $obj->prop1; // Output the property

   ?>

   <?php

   // a category always contains two rows. The rows can contain one to three pictures.
   //
   class Category
   {
      public $name;  // string
      public $rows;  // array of Rows

      public function __construct($name, $rows)
      {
         $this->name = $name;
         $this->rows = $rows;
      }
   }

   class Row
   {
      public $pics;  // array of Pictures

      public function __construct($pics)
      {
         $this->pics1 = $pics;
      }
   }

   class Picture
   {
      public $name;        // string
      public $link;        // string, url
      public $description; // string

      public function __construct($name, $link, $description)
      {
         $this->name = $name;
         $this->link = $link;
         $this->description = $description;
      }
   }


   $categories =
   [
      0 => new Category
      (
         'Polygon',
         [
            0 => new Row
            ([
               0 => new Picture('Polygon Katze', 'pictures/gallery/runterskaliert/Polygon%20CatRS.png', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.'),
               1 => new Picture('Polygon Frosch', 'pictures/gallery/runterskaliert/Polygon%20FrogRS.png', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.'),
               2 => new Picture('Polygon Wolf', 'pictures/gallery/runterskaliert/Polygon%20WolfRS.png', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.')
            ]),
            1 => new Row
            ([
               0 => new Picture('Polygon Tiger', 'pictures/gallery/runterskaliert/Polygon%20TigerRS.png', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.'),
               1 => new Picture('Polygon Tucan', 'pictures/gallery/runterskaliert/Polygon%20TucanRS.png', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.')
            ])
         ]
      ),


      1 => new Category
      (
         'Gem&auml;lde',
         [
            0 => new Row
            ([
               0 => new Picture('Neural Network', 'pictures/gallery/runterskaliert/Neural%20NetworkRS.png', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.'),
               1 => new Picture('The Neuron', 'pictures/gallery/runterskaliert/The%20NeuronRS.png', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.'),
               2 => new Picture('The Hand of An Alien', 'pictures/gallery/runterskaliert/The%20Hand%20of%20An%20AlienRS.png', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.')
            ]),
            1 => new Row
            ([
               0 => new Picture('The Laughing Kaburra', 'pictures/gallery/runterskaliert/The%20Laughing%20KaburraRS.png', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.'),
               1 => new Picture('Black Shadows in My Head', 'pictures/gallery/runterskaliert/Black%20Shadows%20In%20My%20HeadRS.png', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.'),
               2 => new Picture('Toucan In The Rainforest', 'pictures/gallery/runterskaliert/Polygon%20TucanRS.png', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.')
            ])
         ]
      ),


      2 => new Category
      (
         'Digital',
         [
            0 => new Row
            ([
               0 => new Picture('Death In A Bottle', 'pictures/gallery/runterskaliert/Death%20In%20A%20BottleRS.png', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.')
            ]),
            1 => new Row
            ([
               0 => new Picture('Jigoro Kano', 'pictures/gallery/runterskaliert/Jigoro%20KanoRS.png', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.'),
               1 => new Picture('The Color Does Not Matter', 'pictures/gallery/runterskaliert/The%20Color%20Does%20Not%20MatterRS.png', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.')
            ])
         ]
      ),


      3 => new Category
      (
         'Abstrakt',
         [
            0 => new Row
            ([
               0 => new Picture('The Green Invasion', 'pictures/gallery/runterskaliert/The%20Green%20InvasionRS.png', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.')
            ]),
            1 => new Row
            ([
               0 => new Picture('Cube City', 'pictures/gallery/runterskaliert/Cube%20CityRS.png', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.'),
               1 => new Picture('The Holes Behind The Holes', 'pictures/gallery/runterskaliert/The%20Holes%20Behind%20The%20HolesRS.png', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.')
            ])
         ]
      )
   ];


   //****** AUSWAHL EINER KATEGORIE *******//
   $chosen = categories[0];
   //****** VERWERTUNG DER KATEGORIE ******//

   echo '<div class = "category">';
   echo '<div class="title" id="' . $chosen->name . '">' . $chosen->name . '</div>';
   echo '<div class="pictures">'

   echo '</div>'
   echo '</div>'


   ?>

    <div class="category">
        <div class="title" id="Polygon">Polygon</div>
        <div class="pictures">
            <div class="first row">

               <div class="infoboxWrapper">
                  <img src="pictures/gallery/runterskaliert/Polygon%20CatRS.png">
                  <div class="infobox">
                     <h1>Polygon Katze</h1>
                     <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                        sed diam nonumy eirmod tempor invidunt ut labore et dolore
                        magna aliquyam erat, sed diam voluptua.
                     </p>
                  </div>
               </div>
               <div class="infoboxWrapper">
                  <img src="pictures/gallery/runterskaliert/Polygon%20FrogRS.png">
                  <div class="infobox">
                     <h1>Polygon Frosch</h1>
                     <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                        eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
                        sed diam voluptua. At vero eos et accusam et Brainrain.
                     </p>
                  </div>
               </div>
               <div class="infoboxWrapper">
                  <img src="pictures/gallery/runterskaliert/Polygon%20WolfRS.png">
                  <div class="infobox">
                     <h1>Polygon Wolf</h1>
                     <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                        eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
                        sed diam voluptua. At vero eos et accusam et justo duo dolores et
                        ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est.
                     </p>
                  </div>
               </div>

            </div>
            <div class="second row">

               <div class="infoboxWrapper">
                  <img src="pictures/gallery/runterskaliert/Polygon%20TigerRS.png">
                  <div class="infobox"><h1>Polygon Tiger</h1></div>
               </div>
               <div class="infoboxWrapper">
                  <img src="pictures/gallery/runterskaliert/Polygon%20TucanRS.png">
                  <div class="infobox"><h1>Polygon Tucan</h1></div>
               </div>

            </div>
        </div>
        <div class="title pushBack"></div>
    </div>

    <div class="category">
        <div class="title" id="Gemälde">Gemälde</div>
        <div class="pictures">

            <div class="first row">

               <div class="infoboxWrapper">
                  <img src="pictures/gallery/runterskaliert/Neural%20NetworkRS.png">
                  <div class="infobox"><h1>Neural Network</h1></div>
               </div>
               <div class="infoboxWrapper">
                  <img src="pictures/gallery/runterskaliert/The%20NeuronRS.png">
                  <div class="infobox"><h1>The Neuron</h1></div>
               </div>
               <div class="infoboxWrapper">
                  <img src="pictures/gallery/runterskaliert/The%20Hand%20of%20An%20AlienRS.png">
                  <div class="infobox"><h1>The Hand of An Alien</h1></div>
               </div>

            </div>
            <div class="second row">

               <div class="infoboxWrapper">
                   <img src="pictures/gallery/runterskaliert/The%20Laughing%20KaburraRS.png">
                   <div class="infobox"><h1>The Laughing Kaburra</h1></div>
               </div>
               <div class="infoboxWrapper">
                   <img src="pictures/gallery/runterskaliert/Black%20Shadows%20In%20My%20HeadRS.png">
                   <div class="infobox"><h1>Black Shadows In My Head</h1></div>
               </div>
               <div class="infoboxWrapper">
                   <img src="pictures/gallery/runterskaliert/Toucan%20In%20the%20RainforestRS.png">
                   <div class="infobox"><h1>Toucan In The Rainforest</h1></div>
               </div>

            </div>
        </div>
        <div class="title pushBack"></div>
    </div>


    <div class="category">
        <div class="title" id="Digital">Digital</div>
        <div class="pictures">
            <div class="first row">

               <div class="infoboxWrapper">
                  <img src="pictures/gallery/runterskaliert/Death%20In%20A%20BottleRS.png">
                  <div class="infobox"><h1>Death In A Bottle</h1></div>
               </div>

            </div>
            <div class="second row">

               <div class="infoboxWrapper">
                   <img src="pictures/gallery/runterskaliert/Jigoro%20KanoRS.png">
                   <div class="infobox"><h1>Jigoro Kano</h1></div>
               </div>
               <div class="infoboxWrapper">
                   <img src="pictures/gallery/runterskaliert/The%20Color%20Does%20Not%20MatterRS.png">
                   <div class="infobox"><h1>The Color Does Not Matter</h1></div>
               </div>

            </div>
        </div>
        <div class="title pushBack"></div>
    </div>


    <div class="category">
        <div class="title" id="Abstrakt">Abstrakt</div>
        <div class="pictures">
            <div class="first row">

               <div class="infoboxWrapper">
                  <img src="pictures/gallery/runterskaliert/The%20Green%20InvasionRS.png">
                  <div class="infobox"><h1>The Green Invasion</h1></div>
               </div>

            </div>
            <div class="second row">

               <div class="infoboxWrapper">
                  <img src="pictures/gallery/runterskaliert/Cube%20CityRS.png">
                  <div class="infobox"><h1>Cube City</h1></div>
               </div>
               <div class="infoboxWrapper">
                  <img src="pictures/gallery/runterskaliert/The%20Holes%20Behind%20The%20HolesRS.png">
                  <div class="infobox"><h1>The Holes Behind The Holes</h1></div>
               </div>

            </div>
        </div>
        <div class="title pushBack"></div>
    </div>

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

<!-- End of HTML doc
--------------------------------------- -->
<script type="text/javascript" src="dropdown.js"></script>
<script type="text/javascript" src="imageRows.js"></script>
<script type="text/javascript" src="pictureInfo.js"></script>

</body>
</html>
