<?php

require_once __DIR__ . '/../vendor/autoload.php';

$date = new \DateTime;
$date->setDate(1984, 9, 8);
$today = new \DateTime;

$age = new App\Age($date, $today);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Age</title>
</head>
<body>
<h1>My age is: <?=$age->calculate(); ?>
</body>
</html>