<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ログイン</title>
</head>
<body>
  <h1>新規登録画面</h1>
<p><a href="login.php">すでに登録済みの方はこちらから</a></p>

<h2>ブックマークアプリ</h2>
<form method='post' action="Login_insertTop.php">
<label>ユーザーName: <input type="text" name='uname'></label><br>
<label>ID-Name: <input type="text" name='uid'></label><br>
<label>PW: <input type="text" name='upass'></label><br>
<input type="submit" value='ログイン'>
</form>

</body>
</html>