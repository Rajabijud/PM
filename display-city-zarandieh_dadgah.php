<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Morteza Rajabi">
    <title> گزارش دادگستری زرندیه </title>
    <link rel="icon" href="img/Log.png" type="image/png">
    <link rel="stylesheet" type="text/css" href="css/mystyle.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    <style>
        body {
            background: rgb(238, 174, 202);
            background: radial-gradient(circle, rgba(238, 174, 202, 1) 0%, rgba(148, 187, 233, 1) 100%);
        }
    </style>
</head>

<body>
<?php
session_start();
include 'db.php';

$get_data = "SELECT * FROM tb_hardware WHERE city_name = 'دادگستری زرندیه'";
$get_data_query = $con->query($get_data);
?>
<header>
    <div class="nav-bar">
        <ul>
            <li><a href="main.php">صفحه اصلی</a></li>
            <li><a href="http://localhost:8080/hardware/form-insert.php">ورود اطلاعات </a></li>
            <li><a href="http://localhost:8080/hardware/report.php#">گزارش گیری </a></li>
            <li><a href="http://localhost:8080/hardware/logout.php"> خروج </a></li>

        </ul>
    </div>
</header>

<main>
    <table class="table table-primary table-striped">
        <thead>
        <tr>
            <th>ردیف</th>
            <th>نام شهر</th>
            <th>نام شعبه</th>
            <th>نام کاربر</th>
            <th>کد پرسنلی کاربر</th>
            <th>سمت کاربر</th>
            <th> کد اموال کیس</th>
            <th> مدل کیس</th>
            <th> کد اموال مانیتور</th>
            <th>مدل مانیتور</th>
            <th> کد اموال پرینتر</th>
            <th>مدل پرینتر</th>
            <th> کد اموال اسکنر</th>
            <th>مدل اسکنر</th>

        </tr>
        </thead>
        <tbody>
        <?php
        while ($array_data = $get_data_query->fetch_assoc()) { ?>
            <tr>
                <td><?php
                    echo $array_data['id'] ?></td>
                <td><?php
                    echo $array_data['city_name'] ?></td>
                <td><?php
                    echo $array_data['branch_name'] ?></td>
                <td><?php
                    echo $array_data['user_name'] ?></td>
                <td><?php
                    echo $array_data['user_id'] ?></td>
                <td><?php
                    echo $array_data['user_job'] ?></td>
                <td><?php
                    echo $array_data['system_id'] ?></td>
                <td><?php
                    echo $array_data['system_model'] ?></td>
                <td><?php
                    echo $array_data['monitor_id'] ?></td>
                <td><?php
                    echo $array_data['monitor_model'] ?></td>
                <td><?php
                    echo $array_data['printer_id'] ?></td>
                <td><?php
                    echo $array_data['printer_model'] ?></td>
                <td><?php
                    echo $array_data['scaner_id'] ?></td>
                <td><?php
                    echo $array_data['scaner_model'] ?></td>
            </tr>
        <?php
        } ?>
        </tbody>
</main>
<?php
@include 'inc/footer.php';
?>
</body>
</html>