<?php
// اتصال به دیتابیس
$con = mysqli_connect('localhost', 'root', '', 'hardware');

// بررسی اتصال
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
