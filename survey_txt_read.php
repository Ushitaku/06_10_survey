<?php
$str = ''; // 出力用の空の文字列
$file = fopen('data/program.csv', 'r'); // ファイルを開く（読み取り専用）
flock($file, LOCK_EX); // ファイルをロック
if ($file) {
  while ($line = fgets($file)) { // fgets()で1行ずつ取得→$lineに格納
    $str .= "<tr><td>{$line}</td></tr>"; // 取得したデータを$strに入れる
  }
}
flock($file, LOCK_UN); // ロック解除
fclose($file); // ファイル閉じる
// （$strに全部の情報が入る！）

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>結果発表</title>
</head>

<body>
  <h1>アンケート結果発表</h1>
  <a href="survey_txt_input.php" class="btn btn--yellow btn--cubic">入力画面に戻る</a>
  <fieldset>
    <legend>アンケート集計</legend>
    <table>
      <thead>
        <tr>
          <th>円グラフ</th>
          <td><?= $str ?></td>
          <canvas></canvas>
        </tr>
      </thead>
      <tbody>

      </tbody>
    </table>
  </fieldset>
</body>

</html>