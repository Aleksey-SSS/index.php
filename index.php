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
<div class="reg-form">
    <form action="./" method="post">
        <h1>Authorization</h1>

        <span> Login:</span>
        <input type ="text" name="login"/> <br>
        <span> Password: </span>
        <input type ="text" name="password"/> <br>
        <span> Name: </span>
        <input type ="text" name="name"/> <br>
        <span> Surname: </span>
        <input type ="text" name="surname"/> <br>

        <button type ="submit">
            Submit
        </button>
    </form>
    <?php $validate = valid($_POST) ?>

    <?php if (!empty($validate['error']) && $validate['error']):?>
        <?php foreach ($validate['messages'] as $message): ?>
            <p style ="color: red">
                <?=$message?>
            </p>
        <?php endforeach;?>
    <?php endif;?>



    <?php if (!empty($validate['success']) && $validate['success']):?>

        <?php foreach ($validate['messages'] as $message): ?>
            <p style ="color: green">
                <?=$message?>
            </p>
        <?php endforeach;?>
    <?php endif; ?>
</div>


</body>
</html>
