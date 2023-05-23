
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="author" content="Morteza Rajabi">
<title>گزارش مدل هرپرینتر/مجتمع قضایی</title>
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
      $printerModel = $_POST['printer_model'];

      $get_data = "SELECT city_name, printer_model, COUNT(*) AS printer_count FROM tb_hardware WHERE city_name = '$city' AND printer_model = '$printerModel' GROUP BY city_name, printer_model ORDER BY city_name ASC";
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
  <div id="city-printermodel" class="container center mt-5">
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
            <label for="printer_model">مدل پرینتر</label>
            <select name="printer_model" id="printer_model">
              <option value="HP2035">HP2035</option>
              <option value="HP2015">HP2015</option>
              <option value="HP12a">HP12a</option>
              <option value="HP1102">HP1102</option>
              <option value="HP1200">HP1200</option>
              <option value="HP1300">HP1300</option>
              <option value="HP1320">HP1320</option>
              <option value="HP402">HP402</option>
              <option value="Samsung3310">Samsung3310</option>
              <option value="Samsung4521">Samsung4521</option>
              <option value="GB1399">G&B1399</option>
              <option value="GB1398">G&B1398</option>
              <option value="GB1400">G&B1400</option>
              <option value="ETC">مدل های دیگر </option>
              <option value="ندارد">ندارد</option>
            </select>
            <input name="formsubmit" type="submit" value="گزارش">
      </form>
    </div>
    <div class="container-md">
    <h6 class="center tittle_header">گزارش  مانیتور بر اساس مجتمع های استان مرکزی</h6> 
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
            <td><?php echo $array_data['printer_model']; ?></td>
            <td><?php echo $array_data['printer_count']; ?></td>
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