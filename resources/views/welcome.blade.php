<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Main</title>

    <!-- Styles -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&family=Play:wght@400;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Play:wght@400;700&display=swap');

        * {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            font-family: 'Play', sans-serif;
            max-width: 1440px;
            margin: 0 auto;
        }

        .header {
            margin-top: 100px;
            font-size: 24px;
            text-align: center;
        }
    </style>
</head>

<body class="antialiased">
    <div class='header'>
        Это официальная страница будущего агрегатора новостей. Проект ведется в рамках учебного проекта.
    </div>
</body>

</html>