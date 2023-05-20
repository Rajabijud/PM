
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="author" content="Morteza Rajabi">
<title>گزارش سیستم ها</title>
  <link rel="icon" href="img/system.png" type="image/png">
  <link rel="stylesheet" type="text/css" href="css/mystyle.css" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <style>
    body{
      background: rgb(238,174,202);
      background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
    }
  </style>
  <body>
</head>

  <?php
session_start();
include 'db.php';

    $get_data = "SELECT city_name, branch_name, system_model FROM tb_hardware";
    $get_data_query = $con->query($get_data);
?>
  <header>
      <div class="nav-bar">
        <ul>
            <li><a href="main.php">صفحه اصلی</a></li>
            <li><a href="http://localhost:8080/hardware/form-insert.php">ورود اطلاعات  </a></li>
            <li><a href="http://localhost:8080/hardware/report.php#">گزارش گیری </a></li>
            <li><a href="http://localhost:8080/hardware/logout.php"> خروج </a></li>
            
        </ul>
  </div>
  </header>
    <main>
          <div class="container"> 
          <h6 class="center">گزارش وضعیت سیستم کیس های استان مرکزی</h6> 
          <table class="table table-primary table-striped" id="report_table">
              <thead>
                  <tr>
                      <th>ردیف</th>
                      <th>نام شهر</th>
                      <th>نام شعبه</th>
                      <th>مدل سیستم</th>
                  </tr>
              </thead>
              <tbody>
                  <?php
                      $rowNumber = 1; // تعریف متغیر ردیف
                      while ($array_data = $get_data_query->fetch_assoc()) {
                  ?>
                  <tr>
                      <td><?php echo $rowNumber++; ?></td> <!-- نمایش ردیف -->
                      <td><?php echo $array_data['city_name']; ?></td>
                      <td><?php echo $array_data['branch_name']; ?></td>
                      <td><?php echo $array_data['system_model']; ?></td>
                  </tr>
                  <?php } ?>
              </tbody>
          </table>
      </div>
    </main>
  </body>
  </html>