<!doctype html>
PHP

<?php
require 'password.php';
// セッション開始
session_start();

// エラーメッセージの初期化
$errorMessage = "";

// ログインボタンが押された場合
if (isset($_POST["login"])) {
    // １．ユーザIDの入力チェック
    if (empty($_POST["userid"])) {
        $errorMessage = "ユーザIDが未入力です。";
    } else if (empty($_POST["password"])) {
        $errorMessage = "パスワードが未入力です。";
    }

    // ２．ユーザIDとパスワードが入力されていたら認証する
    if (!empty($_POST["userid"]) && !empty($_POST["password"])) {
        // mysqlへの接続
        $mysqli = new mysqli('ホスト名', 'ユーザー名', 'パスワード');
        if ($mysqli->connect_errno) {
            print('<p>データベースへの接続に失敗しました。</p>' . $mysqli->connect_error);
            exit();
        }

        // データベースの選択
        $mysqli->select_db('データベース名');

        // 入力値のサニタイズ
        $userid = $mysqli->real_escape_string($_POST["userid"]);

        // クエリの実行
        $query = "SELECT * FROM テーブル名 WHERE name = '" . $userid . "'";
        $result = $mysqli->query($query);
        if (!$result) {
            print('クエリーが失敗しました。' . $mysqli->error);
            $mysqli->close();
            exit();
        }

        while ($row = $result->fetch_assoc()) {
            // パスワード(暗号化済み）の取り出し
            $db_hashed_pwd = $row['password'];
        }

        // データベースの切断
        $mysqli->close();

        // ３．画面から入力されたパスワードとデータベースから取得したパスワードのハッシュを比較します。
        //if ($_POST["password"] == $pw) {
        if (password_verify($_POST["password"], $db_hashed_pwd)) {
            // ４．認証成功なら、セッションIDを新規に発行する
            session_regenerate_id(true);
            $_SESSION["USERID"] = $_POST["userid"];
            header("Location: main.php");
            exit;
        }
        else {
            // 認証失敗
            $errorMessage = "ユーザIDあるいはパスワードに誤りがあります。";
        }
    } else {
        // 未入力なら何もしない
    }
}

?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>サンプルアプリケーション</title>
</head>
<body>
<h1>ログイン機能　サンプルアプリケーション</h1>
<!-- $_SERVER['PHP_SELF']はXSSの危険性があるので、actionは空にしておく -->
<!--<form id="loginForm" name="loginForm" action="<?php print($_SERVER['PHP_SELF']) ?>" method="POST">-->
<form id="loginForm" name="loginForm" action="" method="POST">
    <fieldset>
        <legend>ログインフォーム</legend>
        <div><?php echo $errorMessage ?></div>
        <label for="userid">ユーザID</label><input type="text" id="userid" name="userid" value="<?php echo htmlspecialchars($_POST["userid"], ENT_QUOTES); ?>">
        <br>
        <label for="password">パスワード</label><input type="password" id="password" name="password" value="">
        <br>
        <input type="submit" id="login" name="login" value="ログイン">
    </fieldset>
</form>
<a href="add.html">ユーザー情報登録ページへ</a>
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
45
46
47
48
49
50
51
52
53
54
55
56
57
58
59
60
61
62
63
64
65
66
67
68
69
70
71
72
73
74
75
76
77
78
79
80
81
82
83
84
85
86
87
88
89
90
91
92
<?php
require 'password.php';
// セッション開始
session_start();

// エラーメッセージの初期化
$errorMessage = "";

// ログインボタンが押された場合
if (isset($_POST["login"])) {
    // １．ユーザIDの入力チェック
    if (empty($_POST["userid"])) {
        $errorMessage = "ユーザIDが未入力です。";
    } else if (empty($_POST["password"])) {
        $errorMessage = "パスワードが未入力です。";
    }

    // ２．ユーザIDとパスワードが入力されていたら認証する
    if (!empty($_POST["userid"]) && !empty($_POST["password"])) {
        // mysqlへの接続
        $mysqli = new mysqli('ホスト名', 'ユーザー名', 'パスワード');
        if ($mysqli->connect_errno) {
            print('<p>データベースへの接続に失敗しました。</p>' . $mysqli->connect_error);
            exit();
        }

        // データベースの選択
        $mysqli->select_db('データベース名');

        // 入力値のサニタイズ
        $userid = $mysqli->real_escape_string($_POST["userid"]);

        // クエリの実行
        $query = "SELECT * FROM テーブル名 WHERE name = '" . $userid . "'";
        $result = $mysqli->query($query);
        if (!$result) {
            print('クエリーが失敗しました。' . $mysqli->error);
            $mysqli->close();
            exit();
        }

        while ($row = $result->fetch_assoc()) {
            // パスワード(暗号化済み）の取り出し
            $db_hashed_pwd = $row['password'];
        }

        // データベースの切断
        $mysqli->close();

        // ３．画面から入力されたパスワードとデータベースから取得したパスワードのハッシュを比較します。
        //if ($_POST["password"] == $pw) {
        if (password_verify($_POST["password"], $db_hashed_pwd)) {
            // ４．認証成功なら、セッションIDを新規に発行する
            session_regenerate_id(true);
            $_SESSION["USERID"] = $_POST["userid"];
            header("Location: main.php");
            exit;
        }
        else {
            // 認証失敗
            $errorMessage = "ユーザIDあるいはパスワードに誤りがあります。";
        }
    } else {
        // 未入力なら何もしない
    }
}

?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>サンプルアプリケーション</title>
</head>
<body>
<h1>ログイン機能　サンプルアプリケーション</h1>
<!-- $_SERVER['PHP_SELF']はXSSの危険性があるので、actionは空にしておく -->
<!--<form id="loginForm" name="loginForm" action="<?php print($_SERVER['PHP_SELF']) ?>" method="POST">-->
<form id="loginForm" name="loginForm" action="" method="POST">
    <fieldset>
        <legend>ログインフォーム</legend>
        <div><?php echo $errorMessage ?></div>
        <label for="userid">ユーザID</label><input type="text" id="userid" name="userid" value="<?php echo htmlspecialchars($_POST["userid"], ENT_QUOTES); ?>">
        <br>
        <label for="password">パスワード</label><input type="password" id="password" name="password" value="">
        <br>
        <input type="submit" id="login" name="login" value="ログイン">
    </fieldset>
</form>
<a href="add.html">ユーザー情報登録ページへ</a>
</body>
</html>