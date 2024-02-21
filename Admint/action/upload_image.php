<?php
    $file = $_FILES['photo_logo'];
    $ext = pathinfo($file['name'],PATHINFO_EXTENSION); // jpg
    $img_name = rand(100000,999999).'-'.time().'.'.$ext;
    $tmp_name = $file['tmp_name'];
    move_uploaded_file($tmp_name,'../assets/img_box/'.$img_name);
    $mes['name'] = $img_name;
    echo json_encode($mes);


    // test
    // $ImageName = $_FILES['photo_logo']['name'];
    // $fileElementName = 'file';
    // $path = '../assets/img_box/'; 
    // $location = $path . $_FILES['photo_logo']['name']; 
    // move_uploaded_file($_FILES['photo_logo']['tmp_name'], $location); 
    // $mes['name'] = $ImageName;
    // echo json_encode($mes);
?>