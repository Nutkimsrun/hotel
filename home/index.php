<!DOCTYPE html>
<html lang="en">

<head> 
    <?php 
        $cn = mysqli_connect('localhost', 'root', '', 'db_hotel');
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="index.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <?php

          $sql = "SELECT image,status FROM logo WHERE status='show' ORDER BY id DESC LIMIT 1";
          $rs = mysqli_query($cn, $sql);
          $row = $rs->fetch_object();
          echo "
            <link rel='shortcut icon' href='../Admint/assets/img_box/$row->image' type='../Admint/assets/img_box/$row->image'>
          ";
    ?>
    <title>Hotel</title>
</head>
<body>
    <nav class="container" id="navbar">
        <div style="height: 100%;">
            <?php
            $sql = "SELECT image,status FROM logo WHERE status='show' ORDER BY id DESC LIMIT 1";
            $rs = mysqli_query($cn, $sql);
            $row = $rs->fetch_object();
            ?>
            <img id="image" src="../Admint/assets/img_box/<?php echo $row->image ?>">
        </div>
        <!-- <ul>
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">About Us</a>
            </li>
            <li id="drop">
                <a href="#" data-bs-toggle="dropdown" aria-expanded="false">Room 
                    <i class="fa-solid fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu">
                    <li>
                      <a class="dropdown-item" href="#">
                          Room Grid Style
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                          Room List Style
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                          Room Details Style
                      </a>
                    </li>     
                  </ul>
            </li>
            <li id="drop">
                <a href="#" data-bs-toggle="dropdown" aria-expanded="false">Page
                    <i class="fa-solid fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu">
                    <li>
                      <a class="dropdown-item" href="#">
                          Service
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        Restaurant
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                          Gallery
                      </a>
                    </li>     
                    <li>
                        <a class="dropdown-item" href="#">
                            Offer
                        </a>
                      </li>  
                    <li>
                        <a class="dropdown-item" href="#">
                            Menu
                        </a>
                    </li>  
                  </ul>
            </li>
            <li id="drop">
                <a href="#" data-bs-toggle="dropdown" aria-expanded="false">Blog
                    <i class="fa-solid fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu">
                    <li>
                      <a class="dropdown-item" href="#">
                        Blog
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                          Blog Details
                      </a>
                    </li>
                  </ul>
            </li>
            <li>
                <a href="#">
                    Contact
                </a>
            </li>
        </ul> -->
        <!-- // test  -->
        <?php 
        $sql1 = "SELECT * FROM menu WHERE status ='show'";
        $result1 = $cn->query($sql1);
        echo "<ul>";
            foreach ($result1 as $menu)
            {
            echo "<li id='drop'>";
            echo "<a href='#' data-bs-toggle='dropdown' aria-expanded='false'>
                    <i class='fa-solid fa-angle-down'></i>
                    $menu[name]
                </a>";
                echo "<ul class='dropdown-menu'>";
                    $menu_title = $menu["name"];
                    // sub menu
                    $sql2 = 'SELECT
                    sub_menu.name
                    FROM
                    sub_menu
                    INNER JOIN menu ON sub_menu.menu_name = menu.name
                    WHERE 
                    sub_menu.menu_name = "'.$menu_title.'"';
                    $result2 = $cn->query($sql2);
                    foreach ($result2 as $submenu)
                    {
                        if ($result2) {
                            echo "<li>";
                            echo "<a class='dropdown-item' href='http://localhost/hotel_project/hotel/Admint/html/ui-forms.php' target='_blank'>$submenu[name]</a>";
                            echo "</li>";
                        }
                    }
                    echo "</ul>";
                echo "</li>";
            }
            echo "</ul>"; 
            ?>
        <!-- <ul>
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">About Us</a>
            </li>
            <li id="drop">
                <a href="#" data-bs-toggle="dropdown" aria-expanded="false">Room
                    <i class="fa-solid fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item" href="#">
                            Room Grid Style
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">
                            Room List Style
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">
                            Room Details Style
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    Contact
                </a>
            </li>
        </ul> -->
        <div>
            <ul>
                <li>
                    <!-- <select name="" id="select">
                        <option value="1"><a href="http://localhost/hotel_project/hotel/Admint/html/ui-forms.php">login</a></option>
                        <option value="2">Khmer</option>
                        <option value="3">Cambodia</option>
                    </select> -->
                    <a href="../Admint/html/authentication-login.php">login <i class="fa-solid fa-arrow-right-to-bracket"></i></a>
                </li> 
            </ul>
        </div>
    </nav>
    <!-- <div class="head">
        <img src="img/hotel.png" alt="" id="top">
        <div id="color"></div>
        <div id="top-1">
            <div>
                <h3>
                    Luxury Hotel <br>
                    With River View
                </h3>
            </div>
            <div id="date">
                <input type="date">
                <input type="date">
                <select name="" id="">
                    <option value="1">Adults</option>
                    <option value="2">1</option>
                    <option value="3">2</option>
                    <option value="4">3</option>
                </select>
                <select name="" id="">
                    <option value="1">Childrens</option>
                    <option value="2">1</option>
                    <option value="3">2</option>
                    <option value="4">3</option>
                </select>
                <div id="ch">
                    check Availability
                </div>
            </div>
        </div>
    </div> -->
    <div class="head">
        <?php
            $sql = "SELECT * FROM up_data WHERE type='header' && status='show' ORDER BY id DESC LIMIT 1";
            $rs = mysqli_query($cn, $sql);
            $num = $rs->num_rows;
            if ($num >0) {
                $row = $rs->fetch_object();
            }
        ?>
        <img src="../Admint/assets/img_box/<?php echo $row->image ?>" id="top">
        <div id="color"></div>
        <div id="top-1">
            <div data-aos="fade-right">
                <h3>
                   <?php echo $row->description; ?>
                </h3>
            </div>
            <div id="date">
                <input type="date">
                <input type="date">
                <select name="" id="">
                    <option value="1">Adults</option>
                    <option value="2">1</option>
                    <option value="3">2</option>
                    <option value="4">3</option>
                </select>
                <select name="" id="">
                    <option value="1">Childrens</option>
                    <option value="2">1</option>
                    <option value="3">2</option>
                    <option value="4">3</option>
                </select>
                <div id="ch">
                    check Availability
                </div>
            </div>
        </div>
    </div>
    <section id="wel">
        <!-- <div id="wel-1" class="wel-1">
            <img src="img/image-13.jpg" alt="">
        </div>
        <div id="wel-1">
            <div>
                <img id="bed" src="img/image-2.png" alt="">
            </div>
            <div>
                <h3 id="des">
                    Welcome To Our <br>
                    <span style="color: #d4a373;">
                        King Hotel
                    </span>
                </h3>
            </div>
            <div>
                <p class="pa">
                    We Have Over 40 Payment Ways for Locking the Lowest Room Rates. No Credit Card Needed! Read Reviews
                    from Verified Guests.

                    Abundantly tree made. Days saw thing whales may,
                    creeping after abundantly waters, fourth.
                </p>
            </div>
            <div>
                <div id="rate">
                    <h1>4.6</h1>
                    <div id="rate-1">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <div>
                        <img src="img/image-14.png" alt="" width="100%">
                    </div>
                </div>
            </div>
        </div> -->
        <?php
            $con = new mysqli('localhost','root','','db_hotel');
            $sql = "SELECT * FROM up_data WHERE type='welcome' ORDER BY id DESC LIMIT 1";
            $rs = mysqli_query($con, $sql);
            $num = $rs->num_rows;
            if ($num >0) {
                $row = $rs->fetch_object();
            }
        ?>
        <div id="wel-1" class="wel-1" data-aos="fade-up-right">
            <img src="../Admint/assets/img_box/<?php echo $row->image; ?>">
        </div>
        <div id="wel-1" data-aos="fade-up-left">
            <div>
                <img id="bed" src="img/image-2.png">
            </div>
            <div>
                <h3 id="des">
                    <?php echo $row->title; ?>
                </h3>
            </div>
            <div>
                <p class="pa">
                    <?php echo $row->description; ?>
                </p>
            </div>
            <div>
                <div id="rate">
                    <h1>4.6</h1>
                    <div id="rate-1">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <div>
                        <img src="img/image-14.png" alt="" width="100%">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="featur">
        <div>
            <img src="img/image-13.png" alt="">
            <h3 id="ft">
                Core Features
            </h3>
        </div>
        <div id="ft-1">
            <!-- <div id="ft-2">
                <div id="ft-3">
                    <img src="img/wifi.png" alt="" id="ft_img">
                </div>
                <div id="ft-4">
                    <p>
                        High
                        Speed Wifi
                    </p>
                </div>
            </div>
            <div id="ft-2">
                <div id="ft-3">
                    <img src="img/cls.png" alt="" id="ft_img">
                </div>
                <div id="ft-4">
                    <p>
                        Loundry Service
                    </p>
                </div>
            </div>
            <div id="ft-2">
                <div id="ft-3">
                    <img src="img/spa.png" alt="" id="ft_img">
                </div>
                <div id="ft-4">
                    <p>
                        Spa & Salon
                    </p>
                </div>
            </div>
            <div id="ft-2">
                <div id="ft-3">
                    <img src="img/game.png" alt="" id="ft_img">
                </div>
                <div id="ft-4">
                    <p>
                        Pool Party Anytime
                    </p>
                </div>
            </div>
            <div id="ft-2">
                <div id="ft-3">
                    <img src="img/barbell.png" alt="" id="ft_img">
                </div>
                <div id="ft-4">
                    <p>
                        Dinks & Bar
                    </p>
                </div>
            </div>
            <div id="ft-2">
                <div id="ft-3">
                    <img src="img/tea.png" alt="" id="ft_img">
                </div>
                <div id="ft-4">
                    <p>
                        Restaurant Foods
                    </p>
                </div>
            </div>
            <div id="ft-2">
                <div id="ft-3">
                    <img src="img/comu.png" alt="" id="ft_img">
                </div>
                <div id="ft-4">
                    <p>
                        Conference Room
                    </p>
                </div>
            </div>
            <div id="ft-2">
                <div id="ft-3">
                    <img src="img/pln.png" alt="" id="ft_img">
                </div>
                <div id="ft-4">
                    <p>
                        Transport Facilities
                    </p>
                </div>
            </div> -->
            <?php 
                $sql = "SELECT id,title,image,type,status FROM up_data WHERE type='features' && status='show' ORDER BY id DESC";
                $rs = mysqli_query($cn,$sql);
                $num = $rs->num_rows;
                if ($num >0) {
                    $row = $cn->query($sql);
                    foreach ($row as $key) {
                        $photo = $key["image"];
                        $title = $key["title"];
                        echo"
                                <div id='ft-2' data-aos='flip-left'>
                                <div id='ft-3'>
                                    <img src='../Admint/assets/img_box/$photo' id='ft_img'>
                                </div>
                                <div id='ft-4'>
                                    <p>
                                        $title
                                    </p>
                                </div>
                            </div>
                        ";
                    }
                }
            ?>
        </div>
    </section>
    <section id="our_room">
        <div class="text-center">
            <img src="img/image-13.png" alt="">
            <h3 id="ft">
                Our Rooms
            </h3>
            <p id="our_p">
                A business consulting company that can produce anything. Drive more
                through digital . We are optimists who love to work together
            </p>
        </div>
        <div id="our_roombox">
            <!-- <div class="our_roombox1" id="roomBox1">
                <img src="img/image-22.jpg" alt="">
                <div id="on_our">
                    <div id="on_new">
                        New
                    </div>
                </div>
                <div class="down_our">
                    <p>
                        $100/Night
                    </p>
                    <h1>
                        Grand Suite Room
                    </h1>
                </div>
            </div>
            <div class="our_roombox1" id="roomBox2">
                <img src="img/image-23.jpg" alt="">
                <div id="on_our">
                    <div id="on_new">
                        New
                    </div>
                </div>
                <div class="down_our">
                    <p>
                        $100/Night
                    </p>
                    <h1>
                        Grand Delux Room
                    </h1>
                </div>
            </div>
            <div class="our_roombox1" id="roomBox3">
                <img src="img/image-24.jpg" alt="">
                <div id="on_our">
                    <div id="on_new">
                        New
                    </div>
                </div>
                <div class="down_our">
                    <p>
                        $120/Night
                    </p>
                    <h1>
                        Single Delux Room
                    </h1>
                </div>
            </div>
            <div class="our_roombox1" id="roomBox4">
                <img src="img/image-25.jpg" alt="">
                <div id="on_our">
                    <div id="on_new">
                        New
                    </div>
                </div>
                <div class="down_our">
                    <p>
                        $160/Night
                    </p>
                    <h1>
                        Double Luxury Room
                    </h1>
                </div>
            </div>
            <div class="our_roombox1" id="roomBox5">
                <img src="img/image-26.jpg" alt="">
                <div id="on_our">
                    <div id="on_new">
                        New
                    </div>
                </div>
                <div class="down_our">
                    <p>
                        $140/Night
                    </p>
                    <h1>
                        Family Queen Room
                    </h1>
                </div>
            </div> -->
            <?php 
                $sql = "SELECT * FROM up_data WHERE type='room' && status='show' ORDER BY id DESC";
                $rs = mysqli_query($cn,$sql);
                $num = $rs->num_rows;
                if ($num >0) {
                    $row = $cn->query($sql);
                    foreach ($row as $key) {
                        $image = $key["image"];
                        $des = $key["description"];
                        $price = $key["price"];
                        $title = $key["title"];
                        echo "
                            <div class='our_roombox1' data-aos='zoom-in'>
                            <img src='../Admint/assets/img_box/$image'>
                            <div id='on_our'>
                                <div id='on_new'>
                                    New
                                </div>
                            </div>
                            <div class='down_our'>
                                <p>
                                    $price $ / $des
                                </p>
                                <h1>
                                    $title
                                </h1>
                            </div>
                            </div>
                        ";
                    }
                }
            ?>

        </div>
    </section>
    <section id="salon">
        <div class="salon_1">
            <!-- <div class="salon_2">
                <p>
                    Parlour & Salon
                </p>
                <h3>
                    Spa & Massage
                </h3>
                <p id="salon_p">
                    Check out Hotels Downtown Seattle. Save Time, and Find it Here. Web, Images & Video. Information 24/7.
                </p>
                <p id="opn">
                    <i style="margin-right: 10px;" class="fa-regular fa-clock"></i>
                    Open Daily: 7:00am - 03:00am
                </p>
                <p id="opn" style="margin-bottom: 1rem;">
                    <i style="margin-right: 10px;" class="fa-solid fa-calendar-days"></i>
                    Sunday: Off day
                </p>
                <div id="pmen">
                    <a href="#">
                        Get Appointment
                    </a>
                </div>

            </div>
            <div class="salon_3">
                <img src="img/salon.jpg" alt="">
            </div>
            <div class="salon_3">
                <img src="img/chair.jpg" alt="">
            </div>
            <div class="salon_2">
                <p>
                    Eat & Drinks
                </p>
                <h3>
                    Restaurant & Bar
                </h3>
                <p id="salon_p">
                    Check out Hotels Downtown Seattle. Save Time, and Find it Here. Web, Images & Video. Information 24/7.
                </p>
                <p id="opn">
                    <i style="margin-right: 10px;" class="fa-regular fa-clock"></i>
                    Open Daily: 7:00am - 03:00am
                </p>
                <p id="opn" style="margin-bottom: 1rem;">
                    <i style="margin-right: 10px;" class="fa-solid fa-calendar-days"></i>
                    Sunday: Off day
                </p>
                <div id="pmen">
                    <a href="#">
                        Get Appointment
                    </a>
                </div>
            </div> -->
            <?php 
                $sql = "SELECT * FROM up_data WHERE type='massage' && status='show' ORDER BY id DESC LIMIT 1";
                $rs = mysqli_query($cn,$sql);
                $num = $rs->num_rows;
                if ($num >0) {
                    $rs = $cn->query($sql);
                    $row = $rs->fetch_array();
                    echo "
                    <div class='salon_2' data-aos='zoom-out-down'>
                    <p>
                        Parlour & Salon
                    </p>
                    <h3>
                        $row[1]
                    </h3>
                    <p id='salon_p'>
                        $row[description]
                    </p>
                    <p id='opn'>
                        <i style='margin-right: 10px;' class='fa-regular fa-clock'></i>
                        Open Daily: 7:00am - 03:00am
                    </p>
                    <p id='opn' style='margin-bottom: 1rem;'>
                        <i style='margin-right: 10px;' class='fa-solid fa-calendar-days'></i>
                        Sunday: Off day
                    </p>
                    <div id='pmen'>
                        <a href='#'>
                            Get Appointment
                        </a>
                    </div>
    
                </div>
                <div class='salon_3' data-aos='fade-up' data-aos-duration='3000'>
                    <img src='../Admint/assets/img_box/$row[image]'>
                </div>
                    ";  
                }
            ?>
            <?php 
                $sql = "SELECT * FROM up_data WHERE type='food' && status='show' ORDER BY id DESC LIMIT 1";
                $rs = mysqli_query($cn,$sql);
                $num = $rs->num_rows;
                if ($num >0) {
                    $rs = $cn->query($sql);
                    $row = $rs->fetch_array();
                    echo "
                    <div class='salon_3' data-aos='fade-down'
                    data-aos-easing='linear'
                    data-aos-duration='1500'>
                        <img src='../Admint/assets/img_box/$row[image]'>
                    </div>
                    <div class='salon_2' data-aos='flip-left'
                    data-aos-easing='ease-out-cubic'
                    data-aos-duration='2000'>
                        <p>
                            Eat & Drinks
                        </p>
                        <h3>
                            $row[title]
                        </h3>
                        <p id='salon_p'>
                            $row[description]
                        </p>
                        <p id='opn'>
                            <i style='margin-right: 10px;' class='fa-regular fa-clock'></i>
                            Open Daily: 7:00am - 03:00am
                        </p>
                        <p id='opn' style='margin-bottom: 1rem;'>
                            <i style='margin-right: 10px;' class='fa-solid fa-calendar-days'></i>
                            Sunday: Off day
                        </p>
                        <div id='pmen'>
                            <a href='#'>
                                Get Appointment
                            </a>
                        </div>
                    </div>
                    ";  
                }
            ?>
        </div>
    </section>
    <section id="supp_row">
        <div id="supp_row1">
            <div id="s_row1">
                <img src="img/image-11.png" alt="">
            </div>
            <div id="s_row2">
                <h1>
                    Contact us now! 906 700 2420
                </h1>
                <p>
                    Get Support anytime thats mean 24/7 our stuff is ready for you.
                </p>
            </div>
            <div id="s_row3">
                <div id="pmen">
                    <a href="#">
                        Get Appointment
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- <section id="use_fed">
        <div class="text-center">
            <img src="img/image-13.png" alt="">
            <h3 id="ft">
                User Feedback
            </h3>
            <p id="our_p">
                A business consulting company that can produce anything. Drive more
                through digital . We are optimists who love to work together
            </p>
        </div>
        <div id="use_fed1">
            <div id="fed_1">
               
            </div>
            <div id="fed_2">
                <div id="fed_2ch">
                    <div class="fed_2ch">
                        <img src="img/image-17.jpg" alt="">
                    </div>
                    <div class="fed_3ch">
                        2
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <section id="sp_page_builder">
        <div id="builder">
            <div id="builder_1">
                <p>
                    Luxury Room
                </p>
                <h1>
                    120
                </h1>
            </div>
            <div id="builder_1">
                <p>
                    Small Restaurant
                </p>
                <h1>
                    60
                </h1>
            </div>
            <div id="builder_1">
                <p>
                    Increase Facilities
                </p>
                <h1>
                    150
                </h1>
            </div>
            <div id="builder_1">
                <p>
                    Different Cities
                </p>
                <h1>
                    97
                </h1>
            </div>
        </div>
    </section>
    <section id="get_an">
        <div id="get_an1">
            <img src="img/image-13.png" alt="">
            <h3 id="ft">
                Get Answers
            </h3>
            <p id="our_p" style="width: 100%;">
                A business consulting company that can produce anything. Drive more
                through digital . We are optimists who love to work together
            </p>
            <!-- <div id="colap" style="margin-top: 40px;" data-bs-toggle="collapse" href="#div1">
                <span>
                    How do I become an author?
                </span>
                <div class="collapse" id="div1">
                    <p id="our_p" style="width: 100%;">
                        Content marketing is more than a buzzword. It's an important part of your hotel's marketing strategy. Simply put, it's the creation and distribution of valuable assets, such as videos, blog posts, and e-newsletters, as marketing tools.
                    </p>
                </div>
            </div>
            <div id="colap" data-bs-toggle="collapse" href="#div2">
                <span>
                    The Story of Behind Our Resort
                </span>
                <div class="collapse" id="div2">
                    <p id="our_p" style="width: 100%;">
                        Content marketing is more than a buzzword. It's an important part of your hotel's marketing strategy. Simply put, it's the creation and distribution of valuable assets, such as videos, blog posts, and e-newsletters, as marketing tools.
                    </p>
                </div>
            </div>
            <div id="colap" data-bs-toggle="collapse" href="#div3">
                <span>
                    Change Restaurant into Hotel
                </span>
                <div class="collapse" id="div3">
                    <p id="our_p" style="width: 100%;">
                        Content marketing is more than a buzzword. It's an important part of your hotel's marketing strategy. Simply put, it's the creation and distribution of valuable assets, such as videos, blog posts, and e-newsletters, as marketing tools.
                    </p>
                </div>
            </div> -->
            <?php 
                $sql = "SELECT * FROM up_data WHERE type='answer' && status='show' ORDER BY id DESC";
                $rs = mysqli_query($cn,$sql);
                $num = $rs->num_rows;
                if ($num >0) {
                    $row = $cn->query($sql);
                    // $row = $rs->fetch_array();
                    foreach ($row as $key) {
                        $title = $key["title"];
                        $des = $key["description"];
                        $id = $key["id"];
                             echo "
                            <div id='colap' data-bs-toggle='collapse' href='#id$id'>
                            <span>
                                $title
                            </span>
                            <div class='collapse' id='id$id'>
                                <p id='our_p' style='width: 100%;'>
                                    $des
                                </p>
                            </div>
                        </div>
                            ";
                    }
               
                }   
            ?>

        </div>
        <div id="get_an2">
            <img src="img/image-19.jpg" alt="">
        </div>
    </section>
    <section id="plan">
        <div id="plan_1" class="order">
            <div class="order_1" data-aos-delay='500' data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="2000">
                <p>
                    Advanced
                </p>
                <h1>
                    <span id="sm_order">$</span>49<span id="sm_order">.99</span>
                </h1>
                <ul id="order_2" style="margin-top: 20px;">
                    <li>
                        <i class="fa-solid fa-check"></i>
                        <p>
                            Food take-way option
                        </p>
                    </li>
                </ul>
                <ul id="order_2">
                    <li>
                        <i class="fa-solid fa-check"></i>
                        <p>
                            Easy To Access Door
                        </p>
                    </li>
                </ul>
                <ul id="order_2">
                    <li>
                        <i class="fa-solid fa-check"></i>
                        <p>
                            Unlimited Drinks
                        </p>
                    </li>
                </ul>
                <ul id="order_2">
                    <li>
                        <i class="fa-solid fa-check"></i>
                        <p>
                            Gym & Other Equipment
                        </p>
                    </li>
                </ul>
                <ul id="order_2">
                    <li>
                        <i class="fa-solid fa-check"></i>
                        <p>
                            Support 24/7 Online
                        </p>
                    </li>
                </ul>
                <div id="pmen" class="make" style="background-color: black;">
                    <a href="#">
                        Make Your Order
                    </a>
                </div>
            </div>
            <div class="order_1" data-aos-delay='500' data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="2000">
                <p>
                    Basic
                </p>
                <h1>
                    <span id="sm_order">$</span>29<span id="sm_order">.99</span>
                </h1>
                <ul id="order_2" style="margin-top: 20px;">
                    <li>
                        <i class="fa-solid fa-check"></i>
                        <p>
                            Food take-way option
                        </p>
                    </li>
                </ul>
                <ul id="order_2">
                    <li>
                        <i class="fa-solid fa-check"></i>
                        <p>
                            Easy To Access Door
                        </p>
                    </li>
                </ul>
                <ul id="order_2">
                    <li>
                        <i class="fa-solid fa-check"></i>
                        <p>
                            Unlimited Drinks
                        </p>
                    </li>
                </ul>
                <ul id="order_2">
                    <li>
                        <i class="fa-solid fa-check"></i>
                        <p>
                            Gym & Other Equipment
                        </p>
                    </li>
                </ul>
                <ul id="order_2">
                    <li>
                        <i class="fa-solid fa-check"></i>
                        <p>
                            Support 24/7 Online
                        </p>
                    </li>
                </ul>
                <div id="pmen" class="make" style="background-color: black;">
                    <a href="#">
                        Make Your Order
                    </a>
                </div>
            </div>
        </div>
        <div id="plan_1" class="plan_2">
            <div id="plan_2" style="text-align: center;line-height: 70px;">
                <div>
                    <img src="img/image-13.png" alt="">
                </div>
                <h3 id="ft" style="color: white;">
                    Hotel Plans
                </h3>
                <p id="our_p" style="width: 100%;color: aliceblue;">
                    A business consulting company that can produce anything. Drive more
                    through digital . We are optimists who love to work together
                </p>
            </div>
            <div id="plan_2" class="pl_2">
                <div style="text-align: center;">
                    <h3 id="ft" style="color: white;font-size: 24px;">
                        Flexible Price
                    </h3>
                    <p id="our_p" style="width: 100%;color: aliceblue;">
                        Hotel content marketing focuses on creating relevant content to attract potential guests.
                    </p>
                </div>
                <div style="text-align: center;">
                    <h3 id="ft" style="color: white;font-size: 24px;">
                        Our Resort
                    </h3>
                    <p id="our_p" style="width: 100%;color: aliceblue;">
                        Hotel content marketing focuses on creating relevant content to attract potential guests.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="new_fet">
        <div style="text-align: center;">
            <img src="img/image-13.png" alt="">
            <h3 id="ft">
                News Feeds
            </h3>
            <p id="our_p">
                A business consulting company that can produce anything. Drive more
                through digital . We are optimists who love to work together
            </p>
        </div>
        <div id="new_fet1">
            <!-- <div id="new_fet2">
                <div id="fet_img">
                    <img src="img/news-1.jpg" alt="">
                    <div id="fet_til">
                        <p>Hotel</p>
                    </div>
                </div>
                <div id="fet_txt">
                    <h3>
                        Lorem ipsum dolor sit amet, consecte cing elit, sed do eiusmod tempor.
                    </h3>
                </div>
            </div>
            <div id="new_fet2">
                <div id="fet_img">
                    <img src="img/news-2.jpg" alt="">
                    <div id="fet_til">
                        <p>Hotel</p>
                    </div>
                </div>
                <div id="fet_txt">
                    <h3>
                        Adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.
                    </h3>
                </div>
            </div>
            <div id="new_fet2">
                <div id="fet_img">
                    <img src="img/news-3.jpg" alt="">
                    <div id="fet_til">
                        <p>Hotel</p>
                    </div>
                </div>
                <div id="fet_txt">
                    <h3>
                        Magna aliqua. Ut enim ad minim venia m, quis nostrud exercitation ullamco
                    </h3>
                </div>
            </div>
            <div id="new_fet2">
                <div id="fet_img">
                    <img src="img/news-details.jpg" alt="">
                    <div id="fet_til">
                        <p>Hotel</p>
                    </div>
                </div>
                <div id="fet_txt">
                    <h3>
                        Excepteur sint occaecat cupida tat non proident, sunt in.
                    </h3>
                </div>
            </div> -->
            <?php 
                $sql = "SELECT * FROM up_data WHERE type='newfeeds' && status='show' ORDER BY id DESC";
                $rs = mysqli_query($cn,$sql);
                $num = $rs->num_rows;
                if ($num >0) {
                    $row = $cn->query($sql);
                    foreach ($row as $key) {
                        $title = $key["title"];
                        $des = $key["description"];
                        $img = $key["image"];
                        echo "
                            <div id='new_fet2' data-aos='flip-left' data-aos-delay='500'>
                                <div id='fet_img'>
                                    <img src='../Admint/assets/img_box/$img'>
                                    <div id='fet_til'>
                                        <p>$title</p>
                                    </div>
                                </div>
                                <div id='fet_txt'>
                                    <h3>
                                        $des
                                    </h3>
                                </div>
                            </div> 
                        ";
                    }
                }
            ?>
        </div>
    </section>
</body>
<script>
    AOS.init();
    var lasscrollTop = 0;
    navbar = document.querySelector('#navbar');
    window.addEventListener('scroll', function() {
        var scrollTop = window.pageXOffset || document.documentElement.scrollTop;
        if (scrollTop > lasscrollTop) {
            navbar.style.top = "-80px";
        } else if (scrollTop == 0) {
            navbar.style.background = "none";
        } else {
            navbar.style.top = "0";
            navbar.style.background = "black";
        }
        lasscrollTop = scrollTop;
    });
</script>

</html>