<?php
     if(isset($_POST['btn-search'])){
          $fullname = $_POST['fullname'];
          $phone = $_POST['thongtin'];
          $email = $_POST['gmail'];
     }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin vé</title>
    <link rel="icon" href="./img/icon.svg" type="image/x-icon">
    <link rel="icon" href="./img/icon.svg">
    <link rel="stylesheet" href="search_result.css">
    <link rel="stylesheet" href="./responsive.css">
    <link rel="stylesheet" href="./icon/css/all.min.css">
</head>

<body>
    <div class="header">
        <a href="./Concert_B.php" class="icon">
            <img class="icon_page" src="./img/logo_page.png" alt="">
        </a>
        <div class="menu-items">
            <a href="Concert_B.php" class="items">
                <span id="item">Trang Chủ</span>
            </a>
            <a href="./Layout_concert.php" class="items">
                <span id="item">Sự Kiện</span>
            </a>
            <a href="About_us.php" class="items">
                <span id="item">Về Chúng Tôi </span>
            </a>
            <a href="Search_ticket.php" class="items ">
                <span id="item">Kiểm tra vé </span>
            </a>
        </div>
        <div class="icon_left">
            <a style="color: #ffffff;" href="Search_ticket.php"><i class="fa-solid fa-magnifying-glass"></i></a>
            <a id="icon_chart" class="fa-solid fa-bag-shopping" style="color: #ffffff;"></a>
            <a id="icon_open_sidebar" class=" icon_open_sidebar fa-solid fa-bars "></a>
        </div>
        <div class="sidebar">
            <i id="icon_close_sidebar" class="icon_close_sidebar fa-solid fa-xmark"></i>
            <main class="sidebar_items">
                <ul class="option">
                    <li class="option"><a href="Concert_B.php">Trang Chủ</a></li>
                    <li class="option"><a href="Layout_concert.php">Sự Kiện</a></li>
                    <li class="option"><a href="About_us.php">Về Chúng Tôi</a></li>
                    <li class="option"><a href="PurchaseConfirm.php">Giỏ Hàng</a></li>
                    <li class="option"><a href="Login_admin.php">Quản lí</a></li>
                </ul>
            </main>
            <footer class="sidebar_footer">
                <footer class="sb_ft_sp">
                    <img class="icon_footer" src=".//img/logo_concert.png" alt="">
                    <ul class="footer_nav">
                        <li class="footer_link"><a href="https://www.facebook.com/profile.php?id=100022231063225"
                                class="navfooter">Contact</a></li>
                        <li class="footer_link"><a href="https://www.facebook.com/duyle215"
                                class="navfooter">Facebook</a>
                        </li>
                        <li class="footer_link"><a href="https://www.instagram.com/oaboad_29/"
                                class="navfooter">Instagram</a></li>
                    </ul>
                </footer>
            </footer>
        </div>
        <div id="navsidebar" class="navsidebar">
            <i id="icon_close_navbar" class="icon_close_sidebar fa-solid fa-xmark"></i>
            <div class="nav_type">
                <h2 class="shopping_bag">Giỏ Hàng Của Bạn</h2>
            </div>
            <footer class="footer_nav">
                <button onclick="window.location.href='PurchaseConfirm.php'" class="check_nav">
                    Check
                </button>
            </footer>
        </div>
    </div>

    <div>

    <div class="page_blank" >
        <p>hello world<p>
    </div>


    <div class="footer">
        <div class="footer-container">
            <div class="company_name">
                <a class="company-logo" href="./Concert_B.php">
                    <img id="logo" src="./img/logo_page.png" alt="">
                </a>
            </div>
        </div>
    </div>
</body>
<script src="search_result.js"></script>
<script src="Event_shop.js"></script>

</html>