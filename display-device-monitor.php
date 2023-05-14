
<!DOCTYPE html>
<html>
<head>
<title>گزارش مانیتور ها</title>
  <link rel="icon" href="img/monitor.png" type="image/png">
  <link rel="stylesheet" type="text/css" href="css/mystyle.css" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
</head>
<style>
    body{
      background: rgb(238,174,202);
      background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
    }
  </style>
  <body>
  <?php
session_start();
include 'db.php';

    $get_data = "SELECT city_name, branch_name, monitor_model FROM tb_hardware";
    $get_data_query = $con->query($get_data);
?>
  <header>
      <div class="nav-bar">
        <ul>
            <li><a href="main.html">صفحه اصلی</a></li>
            <li><a href="http://localhost:8080/hardware/form-insert.php">ورود اطلاعات  </a></li>
            <li><a href="http://localhost:8080/hardware/report.php#">گزارش گیری </a></li>
            
        </ul>
  </div>
  </header>
    <main>
     <div class="container"> 
     <h6 class="center">گزارش وضعیت مانیتور های استان مرکزی</h6> 
        <table class="table table-primary table-striped" id="report_table">
              <thead>
                <tr>
                <th>نام شهر </th>
                <th>نام شعبه </th>
                <th>مدل مانیتور</th>
                </tr>
              </thead>
              <tbody>
        <?php while ($array_data = $get_data_query->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $array_data['city_name'] ?></td>
                <td><?php echo $array_data['branch_name'] ?></td>
                <td><?php echo $array_data['monitor_model'] ?></td>
            </tr>
                <?php } ?>
            </tbody>
        </div>
    </main>
  </body>
  </html>