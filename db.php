<?php

$con = mysqli_connect('localhost', 'root', 'h1475693h', 'rajabi');
if (!$con) {
    echo mysqli_connect_errno($con) . PHP_EOL;
    echo mysqli_connect_error($con) . PHP_EOL;
} else {
    //echo 'successfully';
}
?>