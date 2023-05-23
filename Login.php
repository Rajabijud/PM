

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
          background-image: url(img/bglogin.jpg);
          background-size: cover;
          background-position: top;
          background-repeat: no-repeat
          /*
          background: rgb(238,174,202);
    background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);*/
        }
      </style>
</head>
<body>
<?php
include 'db.php';
  ?>

  <header>
    </div>
        <div id="login-titr"class="container banner center">
          <p  class="h1"> تجهیزات سخت افزاری</p>
          <p  class="h2">دادگستری کل استان مرکزی</p>
          <p  class="h3">معاونت فناوری اطلاعات و برنامه ریزی</p>
      </div>
  </header>
  <br>
    <div class="container center">
        <form action="user-login.php" method="POST" class=" user-login">
        <h6 id="form-titr" class="center" >لطفا نام کاربری و رمز عبور خود را وارد نمائید</h6>
            <div>
                <label for="username">نام کاربری</label>
                <input id="username" type="text" name="username">
            </div>
            <div>
                <label for="userpassword">رمز عبور</label>
                <input id="userpassword" type="password" name="userpassword">
            </div>
                <input type="submit" name="usersubmit" id="usersubmit" value="ورود به سامانه">
        </form>
      </div>
</body>

</html>