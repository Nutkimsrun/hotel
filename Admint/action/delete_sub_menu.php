<?php 
    $cn = new mysqli('localhost','root','','db_hotel');
    $id = $_POST['sub_id'];
    $sql = "DELETE FROM sub_menu WHERE id = '$id' ";
    $cn->query($sql);
    if ($cn->query($sql)) {
        $mes['message'] = "delete";
    }else {
        $mes['message'] = "fail";
    }
    echo json_encode($mes);
?>