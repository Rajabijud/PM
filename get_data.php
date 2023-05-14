
<?php
session_start();
include 'db.php';

if(isset($_POST['formsubmit'])) {
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

    $insert = "INSERT INTO tb_hardware(city_name, branch_name, user_name, user_id, user_job, system_id, system_model, monitor_id, monitor_model, printer_id, printer_model, scaner_id, scaner_model) VALUES ('$city_name', '$branch_name', '$user_name', '$user_id', '$user_job', '$system_id', '$system_model', '$monitor_id', '$monitor_model', '$printer_id', '$printer_model', '$scaner_id', '$scaner_model')";

    if($con->query($insert) === TRUE) {
        $_SESSION['success_msg'] = 'Record inserted successfully.';
    } else {
        $_SESSION['error_msg'] = 'Error inserting record: ' . $con->error;
    }

    header('Location: form-insert.php');
    exit();
}
?>

