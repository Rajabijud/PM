

<!DOCTYPE html>
<html dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Morteza Rajabi">
  <title>ورود به سامانه   </title>
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
include 'db.php';
  ?>

  <header>
    </div>
    <div class="container banner center">
    <img src="img/baner.jpg" alt="banner" height="100px" style="margin-top: 10px;">
  </div>
  </header>
  <br>
  <h6 class="center">لطفا نام کاربری و رمز عبور خود را وارد نمائید</h6>
    <div class="container center">
        <form action="user-login.php" method="POST" class="user-login">
            <div>
                <label for="username">نام کاربری</label>
                <input id="username" type="text" name="username">
            </div>
            <div>
                <label for="userpassword">رمز عبور</label>
                <input id="userpassword" type="password" name="userpassword">
            </div>
            <div>
                <input type="checkbox" id="checkbox_login">
                <label id="chekbox" for="chekbox">مرابه خاطر بسپار</label>
            </div>
                <input type="submit" name="usersubmit" id="usersubmit" value="ورود به سامانه">
        </form>
      </div>
    </div>

  
  <!---->
</body>

</html>