@vite(['resources/css/main.css'])
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<header>
        <div class="header-menu">
            <div class="header-center">
                <a href="" class="header-part">Главная</a>
                <a href="" class="header-part">Контакты</a>
                <a href="" class="header-part">Продукция</a>
                <a href="" class="header-part">Сертификаты</a>
            </div>
            <div class="header-right">
                <p><img class="phone-icon" src="{{asset('storage/phone-svgrepo-com.svg')}}" alt="phoneIcon">+ 7(912)-907-81-65</p>
            </div>
        </div>
    </header>
 @yield('header')

