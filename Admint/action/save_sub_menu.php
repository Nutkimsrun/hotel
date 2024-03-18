<?php
    $con = new mysqli('localhost','root','','db_hotel');
    $name = $_POST['sub_name'];
    $menu_name = $_POST['sel_menu'];
    $status = $_POST['sub_opt'];
    if ($name == null || $name == "") {
        $mes['message'] = "input";
    }else {
        // check duplicate menu
        $sql = "SELECT name FROM sub_menu WHERE name ='$name'";
        $rs = $con->query($sql);
        $num = $rs->num_rows;
        if ($num >0) {
            $mes['message'] = "duplicat";
        }else{
            $sql = "INSERT INTO sub_menu VALUES(null,'$menu_name','$name','$status')";
            $con->query($sql);
            $mes['id'] = $con->insert_id;
            $mes['message'] = "success";
        }
    }
    echo json_encode($mes);
?>