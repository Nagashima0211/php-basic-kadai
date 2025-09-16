<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // Step2: クラスを作成

        // Foodクラス
        class Food {
            public $name;
            public $price;

            // コンストラクタ
            public function __construct($name, $price) {
                $this->name = $name;
                $this->price = $price;
            }

            // priceを出力するメソッド
            public function show_price() {
                echo "値段は " . $this->price . " 円です<br>";
            }
        }

        // Animalクラス
        class Animal {
            public $name;
            public $height;
            public $weight;

            // コンストラクタ
            public function __construct($name, $height, $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }

            // heightを出力するメソッド
            public function show_height() {
                echo "高さは " . $this->height . " cmです<br>";
            }
        }

        // Step3: インスタンスを作成
        $apple = new Food("りんご", 150);
        $dog   = new Animal("犬", 60, 20);

        // インスタンスの中身を出力
        print_r($apple);
        echo "<br>";
        print_r($dog);
        echo "<br><br>";

        // Step4: メソッド呼び出し
        $apple->show_price();
        $dog->show_height();
        ?>
    </p>
</body>

</html>
