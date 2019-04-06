<?php
//--only when in development
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$numbers = array(7,9,8,9,8,8,6);

function printArr($array){
//    $newLine = explode("\n", trim($array));
    foreach ($array as $item)
    {
        echo '<p> ' . $item . '</p><br>';
    }
}

function largest($array){


}

function average($array){
    $avg = 0;
    $count = 0;
    foreach ($array as $num)
    {
        $avg += $num;
        $count++;
    }
    $avg /= $count;

    echo '<p> Average: ' . $avg . '</p>';
}

function removeDups($array){

}

function distribution($arrayA){

    $dupArray = array();
    sort($arrayA);

    foreach ($arrayA as $num)
    {
        if (isset($dupArray[$num]))
        {
            $dupArray[$num] += 1;
        }
        else
        {
            $dupArray[$num] = 1;
        }
    }

    print_r(distribution($dupArray));
    
}
