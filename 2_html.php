<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h4>Lista</h4>
    <ul>
        <li>
            Poznań
            <ol type="A"> <!-- lista numerowana -->
                <li>Polna</li>
                <li>Gnieźnieńska</li>
            </ol>
        </li>
        <li>Gniezno</li>
        <li>Jarocin</li>
    </ul>

    <?php
    $city = "Poznań"; // w html nie mogę użyć zmiennej 
    echo <<<LIST
        <br>HEREDOC</br>
        <ul>
        <li>
            $city 
            <ol> <!-- lista numerowana -->
                <li>Polna</li>
                <li>Gnieźnieńska</li>
            </ol>
        </li>
        <li>Gniezno</li>
        <li>Jarocin</li>
    </ul>
    LIST;
    ?>
</body>

</html>