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

<form action="/pages" method="post">
    Nume:
    <?php //csrf_token(); ?>
    <input type="text" name="name"><br>
    Comentariu:
    <textarea name="text"></textarea><br>
<!--    <input type="hidden" name="_method" value="put">-->
    <input type="submit" value="Add">
</form>

</body>
</html>