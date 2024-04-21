<?php 
    $cn = new mysqli('localhost','root','','db_hotel');
    $id = $_POST['ids'];
    $sql = "DELETE FROM up_data WHERE id = '$id' ";
    $cn->query($sql);
    if ($cn->query($sql)) {
        $mes['message'] = "delete";
    }else {
        $mes['message'] = "fail";
    }
    echo json_encode($mes);
?>