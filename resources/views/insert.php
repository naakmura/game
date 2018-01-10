PHP

<html>
<meta charset="UTF-8">
<head>
    <title>ログインユーザー追加ページ</title>
</head>
<body>
<?php
require 'password.php';
$link = mysql_connect('ホスト名', 'ユーザー名', 'パスワード');
if (!$link) {
    die('接続失敗です。'.mysql_error());
}

$db_selected = mysql_select_db('データベース名', $link);
if (!$db_selected){
    die('データベース選択失敗です。'.mysql_error());
}

mysql_set_charset('utf8');

$result = mysql_query('SELECT name,password FROM テーブル名');
if (!$result) {
    die('SELECTクエリーが失敗しました。'.mysql_error());
}

$name = $_POST['name'];
$password = $_POST['password'];
$hashpass = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO テーブル名 (name, password) VALUES ('$name','$hashpass')";
$result_flag = mysql_query($sql);

if (!$result_flag) {
    die('INSERTクエリーが失敗しました。すでに同じNAMEが登録されている可能性があります。<br><a href="add.html">戻る</a>');
}

print('<p>' . $name . 'ユーザーを登録しました。</p>');

$close_flag = mysql_close($link);

?>
<a href="add.html">戻る</a>
</body>
</html>
1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28
29
30
31
32
33
34
35
36
37
38
39
40
41
42
43
44
<html>
<meta charset="UTF-8">
<head>
    <title>ログインユーザー追加ページ</title>
</head>
<body>
<?php
require 'password.php';
$link = mysql_connect('ホスト名', 'ユーザー名', 'パスワード');
if (!$link) {
    die('接続失敗です。'.mysql_error());
}

$db_selected = mysql_select_db('データベース名', $link);
if (!$db_selected){
    die('データベース選択失敗です。'.mysql_error());
}

mysql_set_charset('utf8');

$result = mysql_query('SELECT name,password FROM テーブル名');
if (!$result) {
    die('SELECTクエリーが失敗しました。'.mysql_error());
}

$name = $_POST['name'];
$password = $_POST['password'];
$hashpass = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO テーブル名 (name, password) VALUES ('$name','$hashpass')";
$result_flag = mysql_query($sql);

if (!$result_flag) {
    die('INSERTクエリーが失敗しました。すでに同じNAMEが登録されている可能性があります。<br><a href="add.html">戻る</a>');
}

print('<p>' . $name . 'ユーザーを登録しました。</p>');

$close_flag = mysql_close($link);

?>
<a href="add.html">戻る</a>
</body>
</html>