<?php
    include "connection.php";
    $name = $_POST['up_name'];
    $pass = $_POST['up_pass'];
    if ($name == "" || $pass == "") {
        $mes['message'] = "input name";
    }else {
        $sql = "SELECT name FROM login WHERE name ='$name'";
        $rs = $con->query($sql);
        $num = $rs->num_rows;
        if ($num >0) {
            $mes['message'] = "Duplicat Name!";
        }else {
            $sql = "INSERT INTO login VALUES(null,'$name','$pass')";
            $con->query($sql);  
            $mes['id'] = $con->insert_id;
            $mes['message'] = "success";
        }
    }
    echo json_encode($mes);
?>