
<?php
include 'db.php'; // اتصال به دیتابیس

$adminUsername = 'admin';
$adminPassword = 'admin123';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["usersubmit"])) {
  // دریافت اطلاعات ورود کاربر
  $username = $_POST["username"];
  $password = $_POST["userpassword"];

  // بررسی صحت نام کاربری و رمز عبور
  if ($username == $adminUsername && $password == $adminPassword) {
    // ورود موفقیت‌آمیز
    session_start();
    $_SESSION["username"] = $username;
    header("Location: main.php"); // هدایت به صفحه داشبورد
    exit();
  } else {
    // ورود ناموفق
    echo "نام کاربری یا رمز عبور اشتباه است";
  }
}

// ...
?>
