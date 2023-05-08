<?php
$con = mysqli_connect('localhost', 'root', '', 'hardware');
    if(!$con){
        echo mysqli_connect_errno($con).PHP_EOL;
        echo mysqli_connect_error($con).PHP_EOL;
    }else{
        echo 'successfully';
    }
?>