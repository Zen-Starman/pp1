<?php

require 'functions.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pair Programming 1</title>

</head>
<body>
<header>Pair Programming 1</header>
<div>   <?php
            printArr($numbers);
            largest($numbers);
            average($numbers);
            removeDups($numbers);
            distribution($numbers);
        ?>
    </div>

</body>
</html>
