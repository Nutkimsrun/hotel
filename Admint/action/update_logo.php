<?php 
    $cn = new mysqli('localhost','root','','hotel');
    $id = $_POST['edit_id'];
    $image = $_POST['txt_photo'];
    $status = $_POST['logo_opt'];
    $sql = "UPDATE logo SET status ='$status',image='$image' WHERE id='$id'";
    $cn->query($sql);
    if ($cn->query($sql)) {
        $mes['message'] = "updated";
        // $post_data = $_POST;
        // $data = array_merge($mes,$post_data);
    }else {
        $mes['message'] = "fail";
        // $data = array_merge($mes,$post_data);
    }
    echo json_encode($mes);
?>