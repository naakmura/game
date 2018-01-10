<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>トップページ</title>
</head>
<link rel="stylesheet"href="style.css">
<body background="http://wallpaper.sc/iphone6plus/wp-content/uploads/2016/09/436.png">


<div class="menu">
    <ul>
        <li><a href="#"></a></li>
    </ul>
</div>
</divclass>
<Div Align="center">
    <font color="#00FFFF	" size="7">ゲーム通販ショップ </font><br />

    <?php foreach($items as $item): ?>
    <font color="#282828">

        <div class="padding"><br>

            <<table width="100" height="144"  bgcolor="#FFE4E1" border="2" >

                    <th>  <img src="<?= $item->url ?>" alt="width="130" height="125"></th>


        <table width="220" border="1" cellpadding="1" cellspacing="0" bordercolorlight="#66FF66" bordercolordark="#FFFFFF" bgcolor="#CBFFCB">
            <tr><td><?= $item->name ?> </font><table width="100%" height="44" border="1" cellpadding="2" cellspacing="0" bordercolorlight="#66FF66" bordercolordark="#FFFFFF" bgcolor="#CBFFCB">
                        <tr><td bgcolor="#F2FFF2" align="center"><?= $item->price ?> 円<a href="/detail/<?= $item->id ?>">  詳細  </td></tr></table></td></tr></table>





</div >

    <?php endforeach; ?>
    </Div>


</div>
</form>
</body>
</html>