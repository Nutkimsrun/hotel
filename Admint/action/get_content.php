<?php
    $con = new mysqli('localhost','root','','db_hotel');
    $sql = "SELECT * FROM up_data ORDER BY id DESC";
    $rs = mysqli_query($con,$sql);
    while ($row = mysqli_fetch_array($rs)) {
        $id = $row['id'];
        $title = $row["title"];
        $des = $row['description'];
        $type = $row['type'];
        $image = $row['image'];
        $price = $row['price'];
        $status = $row['status'];
            echo "
            <div class='col-md-4' id='form_content'>
            <form method='dialog' class='frm_data'>
              <p id='loopID' hidden>$id</p>
              <h5 class='card-title fw-semibold mb-4' id='type_loop'>$type</h5>
              <div class='card'>
                <img style='height: 230px;object-fit: cover;' id='img_loop' class='card-img-top' src='../assets/img_box/$image' alt='$image'>
                <div class='card-body'>
                  <h5 class='card-title' id='title_loop'>$title</h5>
                  <p class='card-text' id='des_loop'>$des</p>
                  <p class='card-text' id='sts_loop'>$status</p>
                  <p class='card-text' id='price_loop'>$price</p>
                  <button type='button' class='btn btn-primary' id='get_edit'><i class='fa-solid fa-file-pen'></i> Edit</button>
                  <button style='float: right;' type='button' class='btn btn-danger' id='get_delete'><i class='fa-solid fa-trash'></i> Delete</button>
                </div>
              </div>
            </form>
          </div>
        ";
    }
?>