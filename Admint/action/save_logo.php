<?php
    $con = new mysqli('localhost','root','','hotel');
    $image = $_POST['txt_photo'];
    $status = $_POST['logo_opt'];
    if ($image == null || $image == "") {
        $mes['message'] = "input file";
    }else {
        $sql = "INSERT INTO logo VALUES(null,'$image','$status')";
        $con->query($sql);
        $mes['message'] = "success";
    }
    echo json_encode($mes);
?>