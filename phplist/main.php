<!DOCTYPE html>
<html lang="en">
<head>
	 <meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <meta http-equiv="X-UA-Compatible" content="ie=edge">
	 <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="fonts.css">
     <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <? include 'logo.php' ?>
            <? include 'menu.php' ?>
        </div>
        <div class="about_me">
            <h1><? echo $p ?></h1>
        </div>
        <div class="data">
            <div class="myImg">
                <? echo '<img src="/img/elefante-php.jpg">' ?>
            </div>
            <div class="fullName">
                <p>Меня зовут
                    <? echo $name, ' ', $surname . '<br>';
                       echo 'город', ' ', $city; ?>
                </p>
                <p>Мене
                    <? echo $age; ?> лет
                </p>
                <p>PHP - это скриптовый язык программирования, который применим для широкого круга задач.</p>
                <p>По скорости выполнения кода он является одним из самых быстрых среди интерпретируемых языков программирования.</p>
            </div>
        </div>
        <div class="knowledge">
            <div></div>
            <? include 'knowledge.php'; ?>
            <? echo $a, ' ', $b, ' ', $c; ?><br>
            <? 
            $a = 10; 
            $b = 20;
            $c = $a + $b;
            echo $c;
            ?><br>
            <? 
            echo $d; ?>
        </div>
        <div class="article">
            <p class="text">PHP имеет большую библиотеку встроенных функций для самых разных задач, особенно для работы с базами данных, сетевыми соединениями и файлами, благодаря чему PHP является самым популярным языком программирования при разработке сайтов и других веб-приложений.</p>
        </div>
        <? include 'footer.php' ?>
    </div>
</body>
