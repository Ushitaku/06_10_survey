<?php
$program = $_POST["program"]; // データ受け取り
$write_data = "{$program}\n"; // スペース区切りで最後に改行
$file = fopen('data/program.csv', 'a'); // ファイルを開く 引数はa
flock($file, LOCK_EX); // ファイルをロック
fwrite($file, $write_data); // データに書き込み，
flock($file, LOCK_UN); // ロック解除
fclose($file); // ファイルを閉じる
if ($program == "2355") {
    header("Location:survey_txt_read.php"); // 入力画面に移動
} else {
    header("Location:survey_txt_read_false.php"); // 入力画面に移動
}
