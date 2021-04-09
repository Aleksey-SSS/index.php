<?php require_once "form.php" ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style lang="css">
        .reg-form{
            text-align: center;
            width: 100%;
        }
    </style>

</head>
<body>
<embed src="retro.mp3" width="250" height="100" align="center" hidden="True" autostart="True" loop="True">

<div class="reg-form" style="text-align: center;margin-left: auto;margin-right: auto;width: 20em">
    <form action="./" method="post" style="float:left;">
        <!— <h1> Авторизация</h1>

        <div style="clear:both; text-align:right;">
            <span style="float: left"> Имя: </span>
            <input type ="text" name="name" /> <br>
        </div>

        <div style="clear:both; text-align:right;">
            <span style="float: left"> Фамилия: </span>
            <input type ="text" name="last_name" /> <br>
        </div>

        <div style=   "clear:both;      ; text-align:right; padding:">
            <span style="float: left  "> Email:</span>
            <input type ="text" name="email" /> <br>
        </div>


        <div style="clear:both; text-align:right;">
            <span style="float: left"> Age: </span>
            <input type ="text" name="age" /> <br>
        </div>




        <div style="clear:both; text-align:center;">
            <button type ="submit" style="clear:both; text-align:center;">
                Ввести
            </button>
        </div>

    </form>

</div>
<?php $validate = valid($_POST)?>
<?php if (!empty($validate['error']) and !$validate['error'])
    q($_POST)?>
<?php if (!empty($validate['error']) and $validate['error']): ?>
    <?php foreach ($validate['messages'] as $message): ?>
        <p style="color: red">
            <?= $message ?>
        </p>
    <?php endforeach; ?>
<?php endif;?>
<?php if (!empty($validate['success']) and $validate['success']):?>
    <?php foreach (getUsers() as $user):?>
        <footer>

            <?= $user ['name']?> <?= $user ['last_name']?> <?= $user ['email']?> <?= $user ['age']?>

        </footer>
    <?php endforeach;?>
<?php endif;?>


<style>
    body {
        background: #0000FF url(https://avatars.mds.yandex.net/get-zen_doc/4721351/pub_6023ae8053b5a470dcf23737_6023b248ff10a04637e7c49f/orig); /* фон */
        color: #FFFFFF; /* Цвет текста */
    }

</style>

</body>
</html>

