<?php
// 連想配列を作成
$vegetable = [
    "名前" => "玉ねぎ",
    "値段" => 200,
    "産地" => "北海道"
];
?>
<?php
// foreachでキーと値を取り出して出力
foreach ($vegetable as $key => $value) {
    echo $key . " : " . $value . "<br>";
}
?>
