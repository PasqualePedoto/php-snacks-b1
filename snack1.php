<?php

$basket_match = [
    [
        "home_squad" => "Toronto",
        "away_squad" => "Los Angeles",
        "away_points" => "78",
        "home_points" => "67",
    ],
    [
        "home_squad" => "Napoli",
        "away_squad" => "Juventus",
        "away_points" => "98",
        "home_points" => "12",
    ],
    [
        "home_squad" => "Benevento",
        "away_squad" => "Spezia",
        "away_points" => "88",
        "home_points" => "12",
    ],
    [
        "home_squad" => "Milano",
        "away_squad" => "Genova",
        "away_points" => "78",
        "home_points" => "67",
    ],
    [
        "home_squad" => "Toronto",
        "away_squad" => "Los Angeles",
        "away_points" => "78",
        "home_points" => "67",
    ],
    [
        "home_squad" => "Toronto",
        "away_squad" => "Los Angeles",
        "away_points" => "78",
        "home_points" => "67",
    ],
];

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    </body>
        <title>Document</title>
    </head>

    <body>
        <h2>Incontri di Basket disputati: </h2>
        <ul>
            <?php for($i = 0;$i < count($basket_match); $i++) { ?>
            <li>
                <span class="me-3"> <?php echo $basket_match[$i]["home_squad"] ?></span>
                <span>-</span>
                <span class="me-3"> <?php echo $basket_match[$i]["away_squad"] ?></span>
                <span>|</span>
                <span class="me-3"> <?php echo $basket_match[$i]["home_points"] ?></span>
                <span>-</span>
                <span class="me-3"> <?php echo $basket_match[$i]["away_points"] ?></span>
            </li>
            <?php } ?>
        </ul>
    </body>

</html>