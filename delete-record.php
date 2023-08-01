<?php
include 'db.php';
if (isset($_POST['data_dlt'])) {
    $delete_id = $_POST['id'];
    $delete_query = "DELETE FROM tb_hardware WHERE id='$delete_id'";
    if ($con->query($delete_query) === TRUE) {
        header("location:search_update.php");
    } else {
        echo 'مشکل: ' . $con->error;
    }
}
?>