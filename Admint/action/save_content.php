<?php
    $con = new mysqli('localhost','root','','db_hotel');
    $title = $_POST['title'];
    $des = $_POST['description'];
    $type = $_POST['type'];
    $img = $_POST['txt_photo'];
    $price = $_POST['price'];
    $status = $_POST['con_opt'];
    if ($title == null || $title == "" && $img == null || $img == "") {
        $mes['message'] = "input";
    }else {
        // check duplicate menu
        $sql = "SELECT title FROM up_data WHERE title ='$title'";
        $rs = $con->query($sql);
        $num = $rs->num_rows;
        if ($num >0) {
            $mes['message'] = "duplicat";
        }else{
            $sql = "INSERT INTO up_data VALUES(null,'$title','$des','$type','$img','$price','$status')";
            $con->query($sql);
            $mes['id'] = $con->insert_id;
            $mes['message'] = "success";
        }
    }
    echo json_encode($mes);
?>