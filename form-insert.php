<?php
include 'db.php';
?>
<!DOCTYPE html>
<html dir="rtl">

<head>
  <meta charset="utf-8">
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
<div class="nav-bar">
        <ul>
            <li><a href="main.html">صفحه اصلی</a></li>
            <li><a href="http://localhost:8080/hardware/form-insert.php">ورود اطلاعات  </a></li>
            
        </ul>
  </div>

  <div class="container mt-5">
    <form action="get_data.php" method="POST">
  <div class="row">
      <div class="col">
            <label for="city_name">نام شهر</label>
            <select name="city_name" id="city_name">
              <option value="zarandihe_dadsara">دادسرای زرندیه</option>
              <option value="zarandihe_dadgah">دادگاه زرندیه</option>
              <option value="save_dadsara">دادسرای ساوه</option>
              <option value="save_dadgah">دادگاه ساوه</option>
              <option value="nobaran">دادگاه نوبران</option>
              <option value="tafresh">دادگاه تفرش</option>
              <option value="ashtian"> دادگاه آشتیان</option>
              <option value="farahan"> دادگاه فراهان </option>
              <option value="komijan"> دادگاه کمیجان</option>
              <option value="milajerd"> دادگاه میلاجرد</option>
              <option value="delijan_dadsara"> دادسرای دلیجان</option>
              <option value="delijan_dadgah"> دادگاه دلیجان</option>
              <option value="mahalat"> دادگاه محلات</option>
              <option value="arak_tajdidnazar"> دادگاه تجدید نظر</option>
              <option value="arak_mahakem"> مجتمع حقوقی و جزایی اراک</option>
              <option value="arak_dadsara"> دادسرای اراک </option>
              <option value="arak_enghelab"> دادگاه انقلاب اراک</option>
              <option value="arak_setad"> مجتمع ستادی اراک</option>
              <option value="arak_tasadofat">مجتمع تصادفات اراک</option>
              <option value="arak_shora"> مجتمع شورای حل اختلف اراک</option>
              <option value="khondab"> دادگاه خنداب</option>
              <option value="khomain">دادگستری خمین</option>
              <option value="shazand-dadsara">دادسرای شازند</option>
              <option value="shazand-dadgah">دادگاه شازند</option>
              <option value="zalian">دادگاه زالیان</option>
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
            <input type="number" id="monitor_id" name="monitor_id" required>
            <label for="monitor_model">مدل مانیتور</label>
            <select name="monitor_model" id="monitor_model">
              <option value="LG19">LG19"</option>
              <option value="LG20">LG20"</option>
              <option value="SAM19">SAM19"</option>
              <option value="SAM20">SAM20"</option>
              <option value="Lenovo19">Lenovo</option>
              <option value="ETC">مدل های دیگر</option>
            </select>
            <label for="printer_id">کد اموال پرینتر</label>
            <input type="number" id="printer_id" name="printer_id" required>
            <label for="printer_model">مدل پرینتر</label>
            <select name="printer_model" id="printer_model">
              <option value="HP2035">HP2035</option>
              <option value="HP2015">HP2015</option>
              <option value="HP402">HP402</option>
              <option value="HP1320">HP1320</option>
              <option value="GB1399">G&B1399</option>

            </select>
            <label for="scaner_id">کد اموال اسکنر</label>
            <input type="number" id="scaner_id" name="scaner_id" required>
            <label for="scaner_model">مدل اسکنر</label>
            <select name="scaner_model" id="scaner_model">
              <option value="codack">codacki1120</option>
              <option value="Avitionfb1000">Avisionfb1000</option>
              <option value="Avision-AD240">Avision-AD240</option>
            </select>
            <input name="formsubmit" type="submit" value="ارسال">
      </div>
    </div>
    </form>
    
  </div>

</body>

</html>