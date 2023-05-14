
<!DOCTYPE html>
<html dir="rtl">

<head>
  <meta charset="utf-8">
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
<?php
?>
  <header>
      <div class="nav-bar">
        <ul>
            <li><a href="main.html">صفحه اصلی</a></li>
            <li><a href="http://localhost:8080/hardware/form-insert.php">ورود اطلاعات  </a></li>
            <li><a href="http://localhost:8080/hardware/report.php">گزارش گیری </a></li>
            
        </ul>
  </div>
  </header>
  <br>
  <main>
    <div class="container" >
        <div class="row">
          <div class="col-md-4">
                <ul class="list-unstyled" id="report-type">
                    <li><a href="display.php"><h6>گزارش کلی تجهیزات استان</h6></a></li>
                    <li><a href="display-device-system.php"><h6>گزارش  وضعیت کیس های استان </h6></a></li>
                    <li><a href="display-device-monitor.php"><h6>گزارش  وضعیت مانیتور های استان </h6></a></li>
                    <li><a href="display-device-printer.php"><h6>گزارش  وضعیت پرینتر های استان </h6></a></li>

                </ul>
            </div>
         <div class="col-md-8">
          <img src="img/re.jpg" alt="report" id="report-image">
         </div>

        </div>
    </div>
 </main>