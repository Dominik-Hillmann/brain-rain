<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
</head>
<body>

<?php
   // Class defintions: a category always contains two rows. The rows can contain one to three pictures.
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
         $this->pics = $pics;
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

   /****** STRUKTUR DER KATEGORIEN ******/
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
               2 => new Picture('Toucan In The Rainforest', 'pictures/gallery/runterskaliert/Toucan%20In%20the%20RainforestRS.png', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.')
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
?>

</body>
</html>
