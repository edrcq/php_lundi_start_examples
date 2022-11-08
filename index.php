<?php

$var1 = "Hello world";

$tab1 = [1,2,3,4,5,6,7];
$tab2 = array('a1', 'a2', 'a3');

$var2 = $tab1[0]; // = 1

$tab3 = [
    'a1' => 'Ceci est A1', 'a2' => 'Ceci est A2'
];
$tab3_keys = array_keys($tab3); // ['a1', 'a2']

$score1 = [
    'id' => 1,
    'user' => 2,
    'score' => 3
];
$score2 = [
    'id' => 2,
    'user' => 2,
    'score' => 4
];
$scores = [$score1, $score2];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Titre</h1>
    <p>
    <?php
        echo 'Hello world = ' . $var1 . '<br />';
        echo "Hello world = $var1";
    ?>
    <div>
        <ul>
            <?php
            for($x = 0; $x < count($scores); $x++) { ?>
                <li>ID = <?= $scores[$x]['id'] ?> | User = <?= $scores[$x]['user'] ?>| Score = <?= $scores[$x]['score'] ?> </li>
            <?php } ?>
        </ul>
    </div>

    <div>
        <ul>
            <?php
            for($x = 0; $x < count($tab3_keys); $x++) { ?>
                <li><?= $tab3[$tab3_keys[$x]] ?></li>
            <?php } ?>
        </ul>
    </div>
    <div>
        <ul>
            <?php
                for($x = 0; $x < count($tab1); $x++) {
                    echo '<li>'. $tab1[$x] . '</li>';
                }
            ?>
        </ul>
    </div>
    </p>
</body>
</html>