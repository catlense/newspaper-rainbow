<?php include 'articles.php'; ?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Газета радуга</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@600;400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/style/common.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.5.0/css/all.min.css" />
</head>

<body>
    <header>
        <div class="logo">
            <img src="/images/logo.png" alt="">
        </div>
    </header>

    <p class="head">
        Газета МБОУ «Гимназия №1 города Белово им. Г.Х. Тасирова» для учителей, учеников и их родителей
    </p>

    <div class="list">
        <?php

        foreach ($articles as $article) {
            echo '
            <div class="news" style="background-image: url(' . $article['background'] . ');" onclick="window.open(`' . $article['link'] . '`);">
                <div class="bottom">
                    <div class="name">
                        <p class="title">' . $article['title'] . '</p>
                        <p class="description">' . $article['description'] . '</p>
                    </div>
                    <button><i class="fas fa-book-open"></i></button>
                </div>
            </div>
            ';
        }

        ?>
        <!-- <div class="news" style="background-image: url(https://sun9-39.userapi.com/impg/-pNgMv4RX-BEJlefeaO-oQ9Gil7PZI8zzi3egA/Zn9xX3jBTE4.jpg?size=892x893&quality=96&sign=4fd63a34ef3406d7d93febf58d5039dc&type=album);">
            <div class="bottom">
                <div class="name">
                    <p class="title">Выпуск 1</p>
                    <p class="description">Небольшое описание к статье</p>
                </div>
                <button><i class="fas fa-book-open"></i></button>
            </div>
        </div>
        <div class="news"></div>
        <div class="news"></div>
        <div class="news"></div> -->
    </div>
    <p class="footer">
        По всем вопросам обращаться к <a href="//vk.com/id255548389">Анастасии Раздобариной</a>
    </p>
</body>

</html>