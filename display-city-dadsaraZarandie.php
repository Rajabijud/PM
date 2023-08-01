
<?php
session_start();

if (!isset($_SESSION["username"])) {
  // کاربر لاگین نکرده است، بنابراین هدایت به صفحه لاگین کنید
  header("Location: login.php");
  exit();
}
?>
<!DOCTYPE html>
<html dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta name="author" content="Morteza Rajabi">
  <title> گزارش تجهیزات دادسرای زرندیه </title>
  <link rel="icon" href="img/Log.png" type="image/png">
  <link rel="stylesheet" type="text/css" href="css/mystyle.css" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
</head>
<body>
     
      <header>
          <div class="nav-bar">
            <ul>
                <li><a href="main.php">صفحه اصلی</a></li>
                <li><a href="http://localhost:8080/hardware/form-insert.php">ورود اطلاعات  </a></li>
                <li><a href="search_update.php">جستجو و ویرایش</a></li>
                <li><a href="http://localhost:8080/hardware/report.php">گزارش گیری </a></li>
                <li><a href="http://localhost:8080/hardware/logout.php"> خروج </a></li>
            </ul>
      </div>
      </header>
      <main>
            <div class="container-fluid">
              <div class="center mb-2 tittle_header">
                <h6 >داشبورد اطلاعات کلی تجهیزات رایانه ای</h6>
                <h5 class="mr-15"> دادسرای زرندیه </h5>
            </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                        <div class="col-6">
                            <!--pc start-->
                                                            <div class="col-12">
                                    <div class="center mb-3 tittle_header">
                                        <h6>گزارش مدل های مختلف   سیستم های رایانه</h6>
                                    </div>
                                    <?php
                                    include 'db.php';

                                    $get_data = "SELECT moth_model, ram_model, hard_model, COUNT(*) as total_count
                                                FROM tb_hardware
                                                WHERE city_name = 'دادسرای زرندیه '
                                                GROUP BY moth_model, ram_model, hard_model
                                                ORDER BY total_count DESC";
                                    $get_data_query = $con->query($get_data);

                                    $results = [];
                                    $total_count = 0;
                                    while ($array_data = $get_data_query->fetch_assoc()) {
                                        $results[] = $array_data;
                                        $total_count += $array_data['total_count'];
                                    }
                                    ?>

                                    <div class="container">
                                        <table class="table table-primary table-striped" id="report_table">
                                            <thead>
                                                <tr>
                                                    <th>ردیف</th>
                                                    <th>مدل مادربرد</th>
                                                    <th>مدل رم</th>
                                                    <th>مدل هارد</th>
                                                    <th>تعداد</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $rowNumber = 1;
                                                foreach ($results as $array_data) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo $rowNumber++; ?></td>
                                                        <td><?php echo $array_data['moth_model']; ?></td>
                                                        <td><?php echo $array_data['ram_model']; ?></td>
                                                        <td><?php echo $array_data['hard_model']; ?></td>
                                                        <td><?php echo $array_data['total_count']; ?></td>
                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                                <tr>
                                                    <td colspan="4" style="text-align: center;"><strong>جمع کل</strong></td>
                                                    <td><strong><?php echo $total_count; ?></strong></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                           <!--pc end-->
                        </div>
                        <div class="col-6">
                            <!--monitor start--->
                            <div class="col-12">
                                        <div class="center mb-3 tittle_header">
                                            <h6>گزارش مدل های مختلف مانیتورها</h6>
                                        </div>
                                        <?php
                                        include 'db.php';

                                        $get_data = "SELECT monitor_model, COUNT(*) as total_count
                                                    FROM tb_hardware
                                                    WHERE city_name = 'دادسرای زرندیه'
                                                    GROUP BY monitor_model
                                                    ORDER BY total_count DESC";
                                        $get_data_query = $con->query($get_data);

                                        $results = [];
                                        $total_count = 0;
                                        while ($array_data = $get_data_query->fetch_assoc()) {
                                            $results[] = $array_data;
                                            $total_count += $array_data['total_count'];
                                        }
                                        ?>

                                        <div class="container">
                                            <table class="table table-primary table-striped" id="report_table">
                                                <thead>
                                                    <tr>
                                                        <th>ردیف</th>
                                                        <th>مدل مانیتور</th>
                                                        <th>تعداد</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $rowNumber = 1;
                                                    foreach ($results as $array_data) {
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $rowNumber++; ?></td>
                                                            <td><?php echo $array_data['monitor_model']; ?></td>
                                                            <td><?php echo $array_data['total_count']; ?></td>
                                                        </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                    <tr>
                                                        <td colspan="2" style="text-align: center;"><strong>جمع کل</strong></td>
                                                        <td><strong><?php echo $total_count; ?></strong></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                 </div>
                            <!--monotor end--->
                              
                        </div>

                </div>
            </div>
            <hr />
            <div class="container-fluid">
                <div class="row">
                        <div class="col-6">
                            <!--printer start-->
                            <div class="col-12">
                                    <div class="center mb-3 tittle_header">
                                        <h6>گزارش مدل‌های مختلف پرینترها</h6>
                                    </div>
                                    <?php
                                    include 'db.php';

                                    $get_data = "SELECT printer_model, COUNT(*) as total_count
                                                FROM tb_hardware
                                                WHERE city_name = 'دادسرای زرندیه' AND printer_model != 'ندارد'
                                                GROUP BY printer_model
                                                ORDER BY total_count DESC";
                                    $get_data_query = $con->query($get_data);

                                    $results = [];
                                    $total_count = 0;
                                    while ($array_data = $get_data_query->fetch_assoc()) {
                                        $results[] = $array_data;
                                        $total_count += $array_data['total_count'];
                                    }
                                    ?>

                                    <div class="container">
                                        <table class="table table-primary table-striped" id="report_table">
                                            <thead>
                                                <tr>
                                                    <th>ردیف</th>
                                                    <th>مدل پرینتر</th>
                                                    <th>تعداد</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $rowNumber = 1;
                                                foreach ($results as $array_data) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo $rowNumber++; ?></td>
                                                        <td><?php echo $array_data['printer_model']; ?></td>
                                                        <td><?php echo $array_data['total_count']; ?></td>
                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                                <tr>
                                                    <td colspan="2" style="text-align: center;"><strong>جمع کل</strong></td>
                                                    <td><strong><?php echo $total_count; ?></strong></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            <!--printer end-->
                                
                        </div>
                        <div class="col-6">   
                            <!--scanner start--> 
                            <div class="col-12">
    <div class="center mb-3 tittle_header">
        <h6>گزارش مدل‌های مختلف اسکنرها</h6>
    </div>
    <?php
    include 'db.php';

    $get_data = "SELECT scaner_model, COUNT(*) as total_count
                 FROM tb_hardware
                 WHERE city_name = 'دادسرای زرندیه' AND scaner_model != 'ندارد'
                 GROUP BY scaner_model
                 ORDER BY total_count DESC";
    $get_data_query = $con->query($get_data);

    $results = [];
    $total_count = 0;
    while ($array_data = $get_data_query->fetch_assoc()) {
        $results[] = $array_data;
        $total_count += $array_data['total_count'];
    }
    ?>

    <div class="container">
        <table class="table table-primary table-striped" id="report_table">
            <thead>
                <tr>
                    <th>ردیف</th>
                    <th>مدل اسکنر</th>
                    <th>تعداد</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $rowNumber = 1;
                foreach ($results as $array_data) {
                    if ($array_data['scaner_model'] != "ندارد") {
                ?>
                        <tr>
                            <td><?php echo $rowNumber++; ?></td>
                            <td><?php echo $array_data['scaner_model']; ?></td>
                            <td><?php echo $array_data['total_count']; ?></td>
                        </tr>
                <?php
                    }
                }
                ?>
                <tr>
                    <td colspan="2" style="text-align: center;"><strong>جمع کل</strong></td>
                    <td><strong><?php echo $total_count; ?></strong></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
                            <!--scanner end-->          
                        </div>
                </div>
            </div>
                <button class="print-button" onclick="window.print()">
                    <i class="fa fa-print"></i> چاپ
                </button>
            </div>
      </main>
           
      <script>
                    function printPage() {
                    window.print();
                    }
     </script>                                                              
</body>
</html>