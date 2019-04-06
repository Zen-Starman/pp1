<?php
//--only when in development
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$numbers = array(7,9,8,9,8,8,6);

function printArr($array){

    foreach ($array as $item)
        {
            echo '<p>$item </p><br>';
        }
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pair Programming 1</title>

</head>
<body>
<header>Pair Programming 1</header>
<div><?php printArr($numbers) ?></div>

</body>
</html>
