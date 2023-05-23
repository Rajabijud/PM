
<!DOCTYPE html>
<html dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta name="author" content="Morteza Rajabi">
  <title> صفحه اصلی</title>
  <link rel="icon" href="img/Log.png" type="image/png">
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
  <header>
      <div class="nav-bar">
        <ul>
            <li><a href="main.php">صفحه اصلی</a></li>
            <li><a href="http://localhost:8080/hardware/form-insert.php">ورود اطلاعات  </a></li>
            <li><a href="http://localhost:8080/hardware/report.php">گزارش گیری </a></li>
            <li><a href="http://localhost:8080/hardware/logout.php"> خروج </a></li>
        </ul>
  </div>
  </header>
  <br>
  <main>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-2">
          <ul class="list-unstyled city_list">
            <li><a href="display-city-zarandieh_dadsara.php"> دادسرای زرندیه</a></li>
            <li><a href="display-city-zarandieh_dadgah.php">دادگستری زرندیه</a></li>
            <li><a href="#">دادسرای ساوه</a></li>
            <li><a href="#">دادگاه ساوه</a></li>
            <li><a href="#">شهرستان نوبران</a></li>
            <li><a href="#">شهرستان تفرش</a></li>
            <li><a href="#">شهرستان آشتیان</a></li>
            <li><a href="display-city-farahan.php">شهرستان فراهان</a></li>
            <li><a href="#">شهرستان کمیجان</a></li>
            <li><a href="#">شهرستان میلاجرد</a></li>
            <li><a href="#">دادسرای دلیجان</a></li>
            <li><a href="#">دادگاه دلیجان</a></li>
            <li><a href="#">شهرستان محلات</a></li>
            <li><a href="#">مجتمع دادگاه های تجدید نظر اراک</a></li>
            <li><a href="display-city-mojtamehoghoghi.php">مجتمع دادگاه های عمومی و جزایی اراک</a></li>
            <li><a href="display-city-dadsara.php">مجتمع دادسرای اراک</a></li>
            <li><a href="#">مجتمع دادگاه های انقلاب اراک</a></li>
            <li><a href="#">مجتمع تصادفات اراک</a></li>
            <li><a href="#">مجتمع شورای حل اختلاف اراک</a></li>
            <li><a href="#">شهرستان خنداب</a></li>
            <li><a href="#">شهرستان خمین</a></li>
            <li><a href="#">دادسرای شازند</a></li>
            <li><a href="#">دادگاه شازند</a></li>
            <li><a href="#">شهرستان زالیان</a></li>
          </ul>
        </div>
        <div class="col-md-10">
          <h6 class="center tittle_header">آمار کلی از تجهیزات سخت افزاری استان مرکزی</h6>
          <?php
include 'db.php';

// Query to get the counts
$queryCounts = "SELECT COUNT(User_id) AS user_count, 
                       COUNT(CASE WHEN system_id != 0 THEN 1 END) AS system_count,
                       COUNT(CASE WHEN monitor_id != 0 THEN 1 END) AS monitor_count,
                       COUNT(CASE WHEN printer_id != 0 THEN 1 END) AS printer_count,
                       COUNT(CASE WHEN scaner_id != 0 THEN 1 END) AS scaner_count
                FROM tb_hardware";
$resultCounts = $con->query($queryCounts);
$rowCounts = $resultCounts->fetch_assoc();

// Assign the counts to variables
$userCount = $rowCounts['user_count'];
$systemCount = $rowCounts['system_count'];
$monitorCount = $rowCounts['monitor_count'];
$printerCount = $rowCounts['printer_count'];
$scanerCount = $rowCounts['scaner_count'];
?>

<table class="table table-primary table-striped">
    <thead>
        <tr>
            <th>تعداد کاربر</th>
            <th>تعداد سیستم کیس</th>
            <th>تعداد مانیتور</th>
            <th>تعداد پرینتر</th>
            <th>تعداد اسکنر</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $userCount; ?></td>
            <td><?php echo $systemCount; ?></td>
            <td><?php echo $monitorCount; ?></td>
            <td><?php echo $printerCount; ?></td>
            <td><?php echo $scanerCount; ?></td>
        </tr>
    </tbody>
</table>

        </div>
      </div>
    </div>
  </main>
  
  <!---->
</body>

</html>