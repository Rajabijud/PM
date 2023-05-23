
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="author" content="Morteza Rajabi">
<title>گزارش مدل مانیتور/مجمع قضایی</title>
  <link rel="icon" href="img/system.png" type="image/png">
  <link rel="stylesheet" type="text/css" href="css/mystyle.css" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <style>
    body{
      background: rgb(238,174,202);
      background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
    }
  </style>
  <?php
    include 'db.php';

    if (isset($_POST['formsubmit'])) {
      $city = $_POST['city_name'];
      $printerModel = $_POST['monitor_model'];

      $get_data = "SELECT city_name, monitor_model, COUNT(*) AS monitor_count FROM tb_hardware WHERE city_name = '$city' AND monitor_model = '$printerModel' GROUP BY city_name, monitor_model ORDER BY city_name ASC";
      $get_data_query = $con->query($get_data);
    }
  ?>
</head>
<body>
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
  <div id="city-monitor-model" class="container center mt-5">
      <form  action="#" method="POST">
        <label for="city-name">نام مجتمع</label>
        <label for="city_name">نام مجتمع قضایی</label>
            <select name="city_name" id="city_name">
              <option value="دادسرای زرندیه">دادسرای زرندیه</option>
              <option value="دادگاه زرندیه">دادگاه زرندیه</option>
              <option value="دادسرای ساوه">دادسرای ساوه</option>
              <option value="دادسرای اراک"> دادسرای اراک </option>
              <option value="دادگاه ساوه">دادگاه ساوه</option>
              <option value="دادگستری نوبران">دادگاه نوبران</option>
              <option value="دادگستری تفرش">دادگاه تفرش</option>
              <option value="دادگستری آشتیان"> دادگاه آشتیان</option>
              <option value="دادگستری فراهان"> دادگاه فراهان </option>
              <option value="دادگستری فراهان"> دادگاه کمیجان</option>
              <option value="دادگستری میلاجرد"> دادگاه میلاجرد</option>
              <option value="دادسرای دلیجان"> دادسرای دلیجان</option>
              <option value="دادگستری دلیجان"> دادگاه دلیجان</option>
              <option value="دادگستری محلات"> دادگاه محلات</option>
              <option value="مجتمع تجدید نظر"> دادگاه تجدید نظر</option>
              <option value="مجتمع حقوقی و جزایی اراک"> مجتمع حقوقی و جزایی اراک</option>
              <option value="دادگاه انقلاب اراک"> دادگاه انقلاب اراک</option>
              <option value="مجتمع ستاد اراک"> مجتمع ستادی اراک</option>
              <option value="مجتمع تصادفات اراک">مجتمع تصادفات اراک</option>
              <option value="مجتمع شورای حل اختلاف اراک"> مجتمع شورای حل اختلف اراک</option>
              <option value="دادگستری خنداب"> دادگاه خنداب</option>
              <option value="دادگستری خمین">دادگستری خمین</option>
              <option value="دادسرای شازند">دادسرای شازند</option>
              <option value="دادگستری شازند">دادگاه شازند</option>
              <option value="دادگستری زالیان">دادگاه زالیان</option>
            </select>
            <label for="monitor_model">مدل مانیتور</label>
            <select name="monitor_model" id="monitor_model">
            <option value="LG15">LG15"</option>
            <option value="LG17">LG17"</option>
              <option value="LG19">LG19"</option>
              <option value="LG20">LG20"</option>
              <option value="SAM19">SAM19"</option>
              <option value="SAM20">SAM20"</option>
              <option value="Lenovo19">Lenovo19"</option>
              <option value="Asus24">Asus24"</option>
              <option value="MSI24">MSI24"</option>
              <option value="MSI22">MSI22"</option>
              <option value="HP19">HP19"</option>
              <option value="Benq22">Benq22"</option>
              <option value="ETC">مدل های دیگر</option>
              <option value="null"> ندارد </option>
            </select>
            <input name="formsubmit" type="submit" value="گزارش">
      </form>
    </div>
    <div class="container-md">
    <h6 class="center tittle_header">گزارش مدل مانیتور بر اساس مجتمع قضایی استان مرکزی</h6> 
    <?php if (isset($get_data_query) && $get_data_query->num_rows > 0) { ?>
      <table class="table table-primary table-striped" id="report_table">
        <thead>
          <tr>
            <th>ردیف</th>
            <th>نام شهر</th>
            <th>مدل پرینتر</th>
            <th>تعداد پرینتر</th>
          </tr>
        </thead>
        <tbody>
        <?php
        $rowNumber = 1; // تعریف متغیر ردیف
        while ($array_data = $get_data_query->fetch_assoc()) {
          ?>
          <tr>
            <td><?php echo $rowNumber++; ?></td>
            <td><?php echo $array_data['city_name']; ?></td>
            <td><?php echo $array_data['monitor_model']; ?></td>
            <td><?php echo $array_data['monitor_count']; ?></td>
          </tr>
        <?php } ?>
        </tbody>
      </table>
    <?php } else { ?>
      <p>هیچ اطلاعاتی برای نمایش وجود ندارد.</p>
    <?php } ?>
  </div>
  </main>
</body>
</html>