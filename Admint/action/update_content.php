<?php
    $con = new mysqli('localhost', 'root', '', 'db_hotel');
    $id = $_POST['edit_id'];
    $title = $_POST['title'];
    $des = $_POST['description'];
    $type = $_POST['type'];
    $img = $_POST['txt_photo'];
    $price = $_POST['price'];
    $status = $_POST['con_opt'];
    $sql = "UPDATE up_data SET title ='$title', description = '$des',type ='$type',image ='$img',price ='$price', status ='$status' WHERE id='$id'";
    $con->query($sql);
    if ($con->query($sql)) {
        $mes['message'] = "updated";
    } else {
        $mes['message'] = "fail";
    }
echo json_encode($mes);
