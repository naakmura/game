<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>購入</title>
</head>
<Div Align="center">
<body background="http://wallpaper.sc/iphone6plus/wp-content/uploads/2016/09/436.png">
<font color="white">
<form action="/buy" method="POST">
    <?=csrf_field()?>
    <br><br><br><br><br><br><br>

    名前　　
    <input type="text" name="name" value="<?=old('name') ?>">
    <?php if($errors->first('name')):?>
        <br>名前を入力してください。
    <?php endif;?>

    <br><br>

    Ｅメール

    <input type="text" name="email" value="<?=old('email') ?>">
    <?php if($errors->first('email')):?>

        <br>Emailを入力してください。
    <?php endif;?>
    <br><br>

    電話番号


    <input type="text" name="tel" value="<?=old('tel') ?>">       <br><br>

    住所　　
    <input type="text" name="address" value="<?=old('address') ?>">  <br>

    <?= csrf_field() ?>
    　　　　　　　　　　　　　　　<br>
    <br>
    　<input type="submit" value="完了">

    <input type="button" onclick="location.href='http://192.168.10.10/'"value="トップ画面へ戻る">

</form>
</body>
</html>