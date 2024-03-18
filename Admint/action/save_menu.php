<?php
    $con = new mysqli('localhost','root','','db_hotel');
    $name = $_POST['name_menu'];
    $status = $_POST['menu_opt'];
    if ($name == null || $name == "") {
        $mes['message'] = "input";
    }else {
        // check duplicate menu
        $sql = "SELECT name FROM menu WHERE name ='$name'";
        $rs = $con->query($sql);
        $num = $rs->num_rows;
        if ($num >0) {
            $mes['message'] = "duplicat";
        }else{
            $sql = "INSERT INTO menu VALUES(null,'$name','$status')";
            $con->query($sql);
            $mes['id'] = $con->insert_id;
            $mes['message'] = "success";
        }
    }
    echo json_encode($mes);
?>