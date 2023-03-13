<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h4>Początek strony</h4>
    <?php
    //require, require_once, include, include once
    echo "Include";
    include "./skrypty/list.php";
    echo "Include once";
    @include_once "./skrypty/list.php"; //sprawdza czy wczes niej nie był dołączony i jesli tak to nie wyświetli, @ wyłącza warningi
    
    echo "Required";
    require "./skrypty/list.php";
    echo "Required once";
    require_once "./skrypty/list.php";
    ?>
    <h4>Koniec strony</h4>
</body>

</html>