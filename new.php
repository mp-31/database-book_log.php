<?php
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>読書ログの登録</title>
</head>

<body>
  <h1>読書ログ</h1>
  <h2>読書ログの登録</h2>
  <form action="" method="POST">
    <div>
      <label for="title">書籍名</label>
      <input type="text" name="title" id="title">
    </div>
    <div>
      <label for="author">著者名</label>
      <input type="text" name="author" id="author">
    </div>
    <div>
      <label>読書状況</label>
    <div>
      <div>
        <div>
          <input type="radio" name="states" id="status1" value="未読">
          <label for=states1>未読</label>
        </div>
        <div>
          <input type="radio" name="states" id="states2" value="読んでる">
          <label for="states2">読んでる</label>
        </div>
        <div>
          <input class="form-check-input" type="radio" name="states" id="states3" value="読了">
          <label for="states3">読了</label>
        </div>
      </div>
    </div>
      <div>
        <label for="score">評価(5点満点の整数)</label>
        <input type="number" name="score" id="score">
      </div>
      <div>
        <label for="summary">感想</label>
        <textarea type="text" name="summary" id="summary" rows="10"></textarea>
      </div>
      <button type="submit">登録する</button>
  </form>
</body>

</html>
