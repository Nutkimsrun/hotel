<?php 
    $cn = new mysqli('localhost','root','','db_hotel');
    $id = $_POST['edit_id_menu'];
    $name = $_POST['name_menu'];
    $status = $_POST['menu_opt'];
    $sql = "UPDATE menu SET status ='$status',name='$name' WHERE id='$id'";
    $cn->query($sql);
    if ($cn->query($sql)) {
        $mes['message'] = "updated";
    }else {
        $mes['message'] = "fail";
    }
    echo json_encode($mes);
?>