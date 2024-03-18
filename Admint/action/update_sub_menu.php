<?php 
    $cn = new mysqli('localhost','root','','db_hotel');
    $id = $_POST['edit_id_sub_menu'];
    $menu_name1 = $_POST['sel_menu'];
    $sub_menu_name = $_POST['sub_name'];
    $status = $_POST['sub_opt'];
    // $sql = "SELECT name,id FROM sub_menu WHERE name ='$sub_menu_name' && id='$id'";
    // $rs = $cn->query($sql);
    // $num = $rs->num_rows;
    // if ($num >0) {
    //     $mes['message'] = "duplicat";
    // }else {
        $sql = "UPDATE sub_menu SET menu_name='$menu_name1',name='$sub_menu_name', status ='$status' WHERE id='$id'";
        $cn->query($sql);
        if ($cn->query($sql)) {
            $mes['message'] = "updated";
        }else {
            $mes['message'] = "fail";
        }
    // }
    echo json_encode($mes);
?>