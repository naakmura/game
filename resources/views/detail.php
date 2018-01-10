<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body background="http://wallpaper.sc/iphone6plus/wp-content/uploads/2016/09/436.png">
<Div Align="center">
    <font color="white">


        <br><br><br><br><br>
        <img src="<?= $item->url ?>" alt="width="200" height="265">
      <br> <br><?= $item->name ?><br>
        <?= $item->price ?> 円

        <form action="/cart/<?= $item->id ?>" method="POST">
            <?= csrf_field() ?><br>
       <input type="submit" value="カートに追加する">
            <input type="button" onclick="location.href='http://192.168.10.10/'"value="戻る">







</div>
</form>
</body>
</html>