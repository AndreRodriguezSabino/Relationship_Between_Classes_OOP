<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>UFC Combat</title>
</head>

<body>
    <?php
    require_once 'Fighter.php';
    require_once 'Fight.php';
    $f = array();
    $f[0] = new Fighter("Andre", "Brazil", 36, 1.80, 70, 6, 2, 1);
    $f[1] = new Fighter("Graci", "Spain", 33, 1.62, 60, 5, 2, 3);
    //$f[0]->status();
    $ufc01 = new Fight();
    $ufc01->fightSchedule($f[0], $f[1]);
    $ufc01->fight();
    $f[0]->status();
    $f[1]->status();
    ?>
</body>

</html>