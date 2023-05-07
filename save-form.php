<?php
// اطلاعات اتصال به دیتابیس
$host = 'localhost:8080';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'hardware';

// اتصال به دیتابیس
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

// بررسی اتصال
if ($conn->connect_error) {
    die('خطا در اتصال به دیتابیس: ' . $conn->connect_error);
}

// دریافت اطلاعات ارسالی از فرم
$city_name = $_POST['city_name'];
$branch_name = $_POST['branch_name'];
$user_name = $_POST['user_name'];
$user_id = $_POST['user_id'];
$user_job = $_POST['user_job'];
$system_id = $_POST['system_id'];
$system_model = $_POST['system_model'];
$monitor_id = $_POST['monitor_id'];
$monitor_model = $_POST['monitor_model'];
$printer_id = $_POST['printer_id'];
$printer_model = $_POST['printer_model'];
$scaner_id = $_POST['scaner_id'];
$scaner_model = $_POST['scaner_model'];

// سایر فیلدهای فرم را مطابق با نام‌های آنها در دیتابیس اضافه کنید

// درج اطلاعات در دیتابیس
$sql = "INSERT INTO hardware (city_name, branch_name, user_name, user_id, user_job, system_id, system_model, monitor_id, monitor_model, printer_id, printer_model, scaner_id, scaner_model) VALUES ('$city_name', '$branch_name','$user_name','$user_id','$user_job','$system_id','$system_model','$monitor_id','$monitor_model','$printer_id','$printer_model','$scaner_id','$scaner_model')";
// استفاده از Prepared Statements برای جلوگیری از تزریق SQL
$stmt = $conn->prepare($sql);
if (!$stmt) {
    die('خطا در اجرای پرس و جو: ' . $conn->error);
}
$stmt->execute();
$stmt->close();

// قطع اتصال به دیتابیس
$conn->close();

// پاسخ به درخواست AJAX
$response = array('message' => 'اطلاعات با موفقیت ذخیره شد.');
echo json_encode($response);
?>