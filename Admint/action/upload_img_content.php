<?php
    $file = $_FILES['photo_logo'];
    $ext = pathinfo($file['name'],PATHINFO_EXTENSION); // jpg
    $img_name = rand(100000,999999).'-'.time().'.'.$ext;
    $tmp_name = $file['tmp_name'];
    move_uploaded_file($tmp_name,'../assets/img_box/'.$img_name);
    $mes['name'] = $img_name;
    echo json_encode($mes);
?>