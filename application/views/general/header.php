<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/css/font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="../../../public/css/style.css">
    <link rel="stylesheet" href="../../../public/css/fonts.css">
    <title><?php echo $title; ?></title>
</head>
<body>
    <header>
        <div class="container">
            <div class="logo-container">
            <i class="fa fa-ban" aria-hidden="true"></i>
                <div class="logo-text">
                    <h1>EVaTeks</h1>
                    <span>Интернет-магазин<br>домашнего текстиля</span>
                </div>
            </div>
            <p>режим работы</p>
            <div class="header-phone">
                <p>Телефон</p>
                <span>8 (800) - 360 36 36</span>
            </div>
            <?php if (!isset($_SESSION["admin"])){ ?>
            <div class="header-auth">
                <a href="/account/login">Войти</a>
                /
                <a href="/account/register">Регистрацияи</a>
            </div>
            <?php } else { ?>

                <div class="header-auth">
                    <h4>Добро пожаловать <?php echo $_SESSION["admin"]["name"] ?></h4>
                </div>

            <?php } ?>
            <i class="fa fa-shopping-cart cart" aria-hidden="true"></i>
        </div>
    </header>
    <section class="menu">
        <div class="container">
            <ul>
                <li><a href="">О нас</a></li>
                <li><a href="">Доставка и оплата</a></li>
                <li><a href="">Контакты</a></li>
                <li><a href="">Вопросы и ответы</a></li>
                <li><a href="">Обмен и возврат</a></li>
            </ul>
        </div>
    </section>