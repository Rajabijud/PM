<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Morteza Rajabi">
    <title>گزارش مانیتور ها</title>
    <link rel="icon" href="img/monitor.png" type="image/png">
    <link rel="stylesheet" type="text/css" href="css/mystyle.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <style>
        body{
        background: rgb(238,174,202);
        background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
        }
    </style>
</head>
<body>
    <h1>خروجی اکسل</h1>

    <?php
        $phpExcelPath = realpath('C:\xampp\htdocs\hardware\PHPExcel-1.8\Classes\PHPExcel.php');
        require_once $phpExcelPath;
        $outputPath = 'output.xlsx';
            if (is_writable($outputPath)) {
            // کد برای ایجاد فایل اکسل
            } else {
            echo 'مسیر ذخیره فایل اکسل قابل نوشتن نیست.';
            }


    ?>
</body>
</html>