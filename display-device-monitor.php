<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Morteza Rajabi">
    <title>گزارش مانیتور ها</title>
    <link rel="icon" href="img/monitor.png" type="image/png">
    <link rel="stylesheet" type="text/css" href="css/mystyle.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    <style>
        body {
            background: rgb(238, 174, 202);
            background: radial-gradient(circle, rgba(238, 174, 202, 1) 0%, rgba(148, 187, 233, 1) 100%);
        }
    </style>
</head>
<body>
<?php
session_start();
include 'db.php';
$get_data = "SELECT city_name, branch_name, monitor_model FROM tb_hardware";
$get_data_query = $con->query($get_data);
?>
<header>
    <div class="nav-bar">
        <ul>
            <li><a href="main.php">صفحه اصلی</a></li>
            <li><a href="http://localhost:8080/hardware/form-insert.php">ورود اطلاعات </a></li>
            <li><a href="http://localhost:8080/hardware/report.php#">گزارش گیری </a></li>
            <li><a href="http://localhost:8080/hardware/logout.php"> خروج </a></li>

        </ul>
    </div>
</header>
<main>
    <div class="container">
        <h6 class="center">گزارش وضعیت مانیتور های استان مرکزی</h6>
        <button  id="btnExport" onclick="fnExcelReport('report_table');" class="btn btn-success">دانلود فایل اکسل</button>

        <table class="table table-primary table-striped" id="report_table">
            <thead>
            <tr>
                <th>ردیف</th>
                <th>نام شهر</th>
                <th>نام شعبه</th>
                <th>مدل مانیتور</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $rowNumber = 1; // تعریف متغیر ردیف
            while ($array_data = $get_data_query->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php
                        echo $rowNumber++; ?></td> <!-- نمایش ردیف -->
                    <td><?php
                        echo $array_data['city_name']; ?></td>
                    <td><?php
                        echo $array_data['branch_name']; ?></td>
                    <td><?php
                        echo $array_data['monitor_model']; ?></td>
                </tr>
                <?php
            } ?>
            </tbody>
        </table>
    </div>
</main>
<iframe id="txtArea1" style="display:none"></iframe>
<script>
    function fnExcelReport(tableId) {
        var tab_text = "<table border='2px'><tr bgcolor='#87AFC6'>";
        var textRange;
        var j = 0;
        tab = document.getElementById(tableId); // id of table

        for (j = 0; j < tab.rows.length; j++) {
            tab_text = tab_text + tab.rows[j].innerHTML + "</tr>";
            //tab_text=tab_text+"</tr>";
        }

        tab_text = tab_text + "</table>";
        tab_text = tab_text.replace(/<A[^>]*>|<\/A>/g, "");//remove if u want links in your table
        tab_text = tab_text.replace(/<img[^>]*>/gi, ""); // remove if u want images in your table
        tab_text = tab_text.replace(/<input[^>]*>|<\/input>/gi, ""); // reomves input params

        var ua = window.navigator.userAgent;
        var msie = ua.indexOf("MSIE ");

        if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))      // If Internet Explorer
        {
            txtArea1.document.open("txt/html", "replace");
            txtArea1.document.write(tab_text);
            txtArea1.document.close();
            txtArea1.focus();
            sa = txtArea1.document.execCommand("SaveAs", true, "Say Thanks to Sumit.xls");
        } else                 //other browser not tested on IE 11
            sa = window.open('data:application/vnd.ms-excel,' + encodeURIComponent(tab_text));

        return (sa);
    }

</script>
</body>
</html>