<?php 
    $cn = new mysqli('localhost','root','','db_hotel');
    $id = $_POST['ids'];
    $sql = "DELETE FROM logo WHERE id = '$id' ";
    $cn->query($sql);
    if ($cn->query($sql)) {
        $mes['message'] = "delete";
    }else {
        $mes['message'] = "fail";
    }
    echo json_encode($mes);
?>