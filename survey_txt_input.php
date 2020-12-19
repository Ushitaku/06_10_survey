<?php
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <!-- フォントの設定 -->
  <script>
    (function(d) {
      var config = {
          kitId: 'cvg5cxw',
          scriptTimeout: 3000,
          async: true
        },
        h = d.documentElement,
        t = setTimeout(function() {
          h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
        }, config.scriptTimeout),
        tk = d.createElement("script"),
        f = false,
        s = d.getElementsByTagName("script")[0],
        a;
      h.className += " wf-loading";
      tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
      tk.async = true;
      tk.onload = tk.onreadystatechange = function() {
        a = this.readyState;
        if (f || a && a != "complete" && a != "loaded") return;
        f = true;
        clearTimeout(t);
        try {
          Typekit.load(config)
        } catch (e) {}
      };
      s.parentNode.insertBefore(tk, s)
    })(document);
  </script>
  <!-- フォントの設定ここまで -->

  <title>大晦日何観る？アンケート</title>
</head>

<body>
  <h1>大晦日は、TV何観る？</h1>
  <form action="survey_txt_create.php" method="POST">
    <!-- <a href="survey_txt_read.php" class="btn btn--yellow btn--cubic">アンケート結果を見る</a> -->

    <fieldset>
      <legend>TV番組一覧</legend>
      <div class="form-space">

        <div class="flame">
          <div class="form-text"><input id="a" type="radio" name="program" value="バナナマン"></div>
          <label for="a">
            <img class="image" src="img/banana.png" class="img-fluid" alt="Responsive image">
            <p>バナナマンのせっかくグルメ</p>
          </label>
        </div>

        <div class="flame">
          <div class="form-text"><input id="b" type="radio" name="program" value="ガキ使"></div>
          <label for="b">
            <img class="image" src="img/gakituka.png" class="img-fluid" alt="Responsive image">
            <p>ガキの使いやあらへんで</p>
          </label>
        </div>

        <div class="flame">
          <div class="form-text"><input id="c" type="radio" name="program" value="おもしろ荘"></div>
          <label for="c">
            <img class="image" src="img/omoshiro.png" class="img-fluid" alt="Responsive image">
            <p>おもしろ荘</p>
          </label>
        </div>

        <div class="flame">
          <div class="form-text"><input id="d" type="radio" name="program" value="RAIZIN"></div>
          <label for="d">
            <img class="image" src="img/raizin.png" class="img-fluid" alt="Responsive image">
            <p>RAIZIN</p>
          </label>
        </div>

        <div class="flame">
          <div class="form-text"><input id="e" type="radio" name="program" value="ジャニーズ"></div>
          <label for="e">
            <img class="image" src="img/jn.png" class="img-fluid" alt="Responsive image">
            <p>ジャニーズカウントダウン</p>
          </label>
        </div>

        <div class="flame">
          <div class="form-text"><input id="f" type="radio" name="program" value="CDTV"></div>
          <label for="f">
            <img class="image" src="img/cd.png" class="img-fluid" alt="Responsive image">
            <p>カウントダウンTV</p>
          </label>
        </div>

        <div class="flame">
          <div class="form-text"><input id="g" type="radio" name="program" value="紅白"></div>
          <label for="g">
            <img class="image" src="img/kouhaku.png" class="img-fluid" alt="Responsive image">
            <p>紅白歌合戦</p>
          </label>
        </div>

        <div class="flame">
          <div class="form-text"><input id="h" type="radio" name="program" value="2355"></div>
          <label for="h">
            <img class="image" src="img/tanakuji.png" class="img-fluid" alt="Responsive image">
            <p>Eテレ2355</p>
          </label>
        </div>

        <div class="flame">
          <div class="form-text"><input id="i" type="radio" name="program" value="ゆくくる"></div>
          <label for="i">
            <img class="image" src="img/yukutosi.png" class="img-fluid" alt="Responsive image">
            <p>ゆく年くる年</p>
          </label>
        </div>

        <div>
          <button id="vote" class="btn btn--yellow btn--cubic">投票する！</button>
        </div>
    </fieldset>
  </form>
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
</body>

</html>