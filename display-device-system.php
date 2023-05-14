
<!DOCTYPE html>
<html>
<head>
<title>گزارش سیستم ها</title>
  <link rel="icon" href="img/system.png" type="image/png">
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

    $get_data = "SELECT city_name, branch_name, system_model FROM tb_hardware";
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
     <h6 class="center">گزارش وضعیت سیستم کیس های استان مرکزی</h6> 
        <table class="table table-primary table-striped" id="report_table">
              <thead>
                <tr>
                <th>نام شهر </th>
                <th>نام شعبه </th>
                <th>مدل سیستم</th>
                </tr>
              </thead>
              <tbody>
        <?php while ($array_data = $get_data_query->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $array_data['city_name'] ?></td>
                <td><?php echo $array_data['branch_name'] ?></td>
                <td><?php echo $array_data['system_model'] ?></td>
            </tr>
                <?php } ?>
            </tbody>
        </div>
    </main>
  </body>
  </html>