
<!DOCTYPE html>
<html dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta name="author" content="Morteza Rajabi">
  <link rel="icon" href="img/Log.png" type="image/png">
  <link rel="stylesheet" type="text/css" href="css/mystyle.css" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <style>
    body{
      background: rgb(238,174,202);
background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
    }
   .col{
    display: flex;
    flex-direction: column;
   }
   
    .col input {
    width: 50%;
    padding: 5px;
    border-radius: 5px;
    }
    .col select{
    width: 50%;
    padding: 5px;
    border-radius: 5px;
    } 
    input[type="submit"]{
      margin-top:10px;
    }
  </style>
</head>
<body>
<?php
include 'db.php';
?>
<div class="nav-bar">
        <ul>
            <li><a href="main.php">صفحه اصلی</a></li>
            <li><a href="http://localhost:8080/hardware/form-insert.php">ورود اطلاعات  </a></li>
            <li><a href="report.php">گزارش گیری </a></li>
            <li><a href="http://localhost:8080/hardware/logout.php"> خروج </a></li>
            
        </ul>
  </div>

  <div class="container mt-5">
    <form action="get_data.php" method="POST">
  <div class="row">
      <div class="col">
            <label for="city_name">نام شهر</label>
            <select name="city_name" id="city_name">
              <option value="دادسرای زرندیه">دادسرای زرندیه</option>
              <option value="دادگاه زرندیه">دادگاه زرندیه</option>
              <option value="دادسرای ساوه">دادسرای ساوه</option>
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
              <option value="دادسرای اراک"> دادسرای اراک </option>
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
            <label for="branch">نام شعبه</label>
            <input type="text" id="branch_name" name="branch_name" placeholder="اول دادیاری" required>
            <label for="user_name">نام کاربر</label>
            <input type="text" id="user_name" name="user_name" placeholder="مرتضی رجبی" required>
            <label for="user_id">کدپرسنلی کاربر</label>
            <input type="number" id="user_id" name="user_id" placeholder="15796970" required >
            <label for="user_job">سمت کاربر</label>
            <select name="user_job" id="user_job">
              <option value="ghazi">قاضی</option>
              <option value="ghazi">مدیر دفتر</option>
              <option value="ghazi">کارمند</option>
            </select>
            <label for="system_id">کد اموال کیس</label>
            <input type="number" id="system_id" name="system_id"  required>
            <label for="system_model">مدل کیس</label>
            <input type="text" id="system_model" name="system_model" required>
      </div>
      <div class="col">
            <label for="monitor_id">کد اموال مانیتور</label>
            <input type="number" id="monitor_id" name="monitor_id" >
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
              <option value="HP19">HP19"</option>
              <option value="Benq22">Benq22"</option>

              <option value="ETC">مدل های دیگر</option>
              <option value="null"> ندارد </option>
            </select>
            <label for="printer_id">کد اموال پرینتر</label>
            <input type="number" id="printer_id" name="printer_id" >
            <label for="printer_model">مدل پرینتر</label>
            <select name="printer_model" id="printer_model">
              <option value="HP2035">HP2035</option>
              <option value="HP2015">HP2015</option>
              <option value="HP12a">HP12a</option>
              <option value="HP1102">HP1102</option>
              <option value="HP1200">HP1200</option>
              <option value="HP1300">HP1300</option>
              <option value="Samsung3310">Samsung3310</option>
              <option value="Samsung4521">Samsung4521</option>
              <option value="HP402">HP402</option>
              <option value="HP1320">HP1320</option>
              <option value="GB1399">G&B1399</option>
              <option value="GB1398">G&B1398</option>
              <option value="GB1400">G&B1400</option>
              <option value="ETC">مدل های دیگر </option>
              <option value="ندارد">ندارد</option>


            </select>
            <label for="scaner_id">کد اموال اسکنر</label>
            <input type="number" id="scaner_id" name="scaner_id" >
            <label for="scaner_model">مدل اسکنر</label>
            <select name="scaner_model" id="scaner_model">
              <option value="codack">codacki1120</option>
              <option value="Avitionfb1000">Avisionfb1000</option>
              <option value="Avision-fb1200">Avision-fb1200</option>
              <option value="Avision-AD240">Avision-AD240</option>
              <option value="Avision-AD125">Avision-AD125</option>
              <option value="ETC">مدل های دیگر</option>
              <option value="ندارد">ندارد</option>
            </select>
            <input name="formsubmit" type="submit" value="ارسال">
      </div>
    </div>
    </form>
    
  </div>

</body>

</html>