<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // Step3 独自のソート関数を作成
        function sort_2way($array, $order) {
            // orderがTRUEなら昇順、FALSEなら降順
            if ($order === true) {
                sort($array);   // 昇順ソート
                echo "昇順ソート<br>";
            } else {
                rsort($array);  // 降順ソート
                echo "降順ソート<br>";
            }

            // foreachで1行ずつ出力
            foreach ($array as $value) {
                echo $value . "<br>";
            }
            echo "<br>"; // 見やすいように改行
        }

        // Step4 ソート対象の配列
        $nums = [15, 4, 18, 23, 10];

        // Step5 関数を呼び出し（昇順・降順）
        sort_2way($nums, true);   // 昇順
        sort_2way($nums, false);  // 降順
        ?>
    </p>
</body>

</html>