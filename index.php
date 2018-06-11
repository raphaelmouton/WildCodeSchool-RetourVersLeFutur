<?php
require 'test.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
          integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1 class="text-center">Le voyage de Doc !</h1>
    <hr>
    <?php

    $start = new DateTime('1985-12-31');
    $end = new DateTime('2018-12-18');
    $travel = new TimeTravel($start, $end);

    echo $travel->getTravelInfo($start, $end) . '<br>';

    $whereIsDoc = new DateInterval('PT1000000000S');
    echo $travel->findDate($whereIsDoc) . '<br>';

    $step = new DateInterval('P1M1D');
    $steps = $travel->backToFutureStepByStep($step);
    ?>
    <br>
    <table class="table table-striped">
        <tbody>
        <?php foreach ($steps as $step) { ?>
            <tr>
                <td>Il faut s'arreter la: <strong><?php echo $step; ?></strong></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

</div>
</html>
