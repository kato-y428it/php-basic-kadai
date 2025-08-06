<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編課題</title>
</head>

<body>
  <p>
    <?php
    // クラス「Food」を作成する
    class Food {
      // プロパティを定義する
      private $name;
      private $price;

      // priceプロパティの値を出力するメソッド
      public function show_price() {
        echo $this->price . '<br>'; 
      }

      // プロパティに値を代入するコントスラクタを定義
      public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
      }
    }

    // クラス「Animal」を作成する
    class Animal {
      // プロパティを定義する
      private $name;
      private $height;
      private $weight;

      // heightプロパティの値を出力するメソッド
      public function show_height() {
        echo $this->height . '<br>';
      }

      // プロパティに値を代入するコントスラクタを定義
      public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }
    }

    // 任意の引数を渡してインスタンス化する
    $food = new Food('potato', 250);

    // インスタンス$foodの各プロパティを出力する
    print_r($food);
    echo '<br>';

    // 任意の引数を渡してインスタンス化する
    $animal = new Animal('dog', 60, 5000);
 
    // インスタンス$animalの各プロパティを出力する
    print_r($animal);
    echo '<br>';
    
    // メソッドにアクセスし、メソッドを実行する
    $food->show_price();
    $animal->show_height();
    ?>

  </p>
  </body>

</html>
    