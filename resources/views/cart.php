<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>カート</title>
</head>
<body background="http://wallpaper.sc/iphone6plus/wp-content/uploads/2016/09/436.png">
<Div Align="center">
<font color="white">
<p> カートの中身 </p>
<form action="/cart_delete" method="POST">
    <?= csrf_field() ?>
    <input type="submit" value="カートから全て消去する"><br><br>
</form>

<?php foreach($items as $item): ?>
<font color="white">
    <div>
        <img src="<?= $item->url ?>" alt="width="200" height="165">
        <br> <?= $item->name ?><br>
        <?= $item->price ?> 円
    </div>
<form action="/cart_delete" method="POST">
    <?= csrf_field() ?>



            <input type="submit" value="カートから消去する"><br><br><br><br><br><br><br>

    <input type="button" onclick="location.href='/buy'"value="購入画面へ">


<?php endforeach; ?></form>


</body>
</html>