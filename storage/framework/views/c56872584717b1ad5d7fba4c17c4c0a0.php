<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="/all_message">Все сообщения</a>
<form action="/message" method="post">
    <?php echo csrf_field(); ?>
    <p>Введите сообщение</p>
    <input type="text" name="message">
    <button>Отправить</button>
</form>
</body>
</html>
<?php /**PATH C:\OSPanel\domains\localhost\test1\resources\views/index.blade.php ENDPATH**/ ?>