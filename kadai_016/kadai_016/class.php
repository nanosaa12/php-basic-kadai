<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p>
    <?php
    class Food {
      private $name;
      private $price;

      public function show_price($price) {
        $this->price = $price;
      }

      public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
      }
    }

    $food = new Food('potato', 250);

    print_r($food);
    echo '<br>';
    $food->show_price(250);

    class Animal {
      private $name;
      private $height;
      private $weight;

      
      public function show_height($height) {
        $this->height = $height;
      }

      public function __construct($name, $height, $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }
    }

    $animal = new Animal('dog', 60, 5000);
    print_r($animal);
    echo '<br>';
    $animal->show_height(60);
    ?>
  </p>
</body>
</html>