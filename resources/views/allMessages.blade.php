<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    TABLE {
        border-collapse: collapse; /* Убираем двойные линии между ячейками */
        width: 300px; /* Ширина таблицы */
    }
    TH, TD {
        border: 1px solid black; /* Параметры рамки */
        text-align: center; /* Выравнивание по центру */
        padding: 4px; /* Поля вокруг текста */
    }
    TH {
        height: 40px; /* Высота ячеек */
        vertical-align: center; /* Выравнивание по нижнему краю */
        padding: 10px; /* Убираем поля вокруг текста */
    }
</style>
<body>
<a href="/home">написать сообщение</a>
<table>
    <thead>
    <tr>
    <th>id</th>
    <th>Сообщение</th>
    <th>Время создания</th>
        <th>кнопка</th>
    </tr>
    </thead>
    @foreach($messages as $message)
        <x-message :message="$message"/>
    @endforeach
</table>
</body>
</html>
