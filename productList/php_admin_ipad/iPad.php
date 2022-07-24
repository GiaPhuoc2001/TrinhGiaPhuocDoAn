<?php
    require("./webDatabase.php");
    $sql = "SELECT * FROM `db_sanpham_ipad`";
    $query = mysqli_query($conn,$sql);

?>


<!DOCTYPE html>
<html  lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PTT Shop - Đại Lý Ủy Quyền Apple</title>
    <link rel="stylesheet" href="http://ppt-shopping/productList/">
    <link rel="stylesheet" href="/PPT-SHOPPING/font/themify-icons-font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="/PPT-SHOPPING/productList/css/iPad.css">
</head>


<body>
    <!-- -------- MENUBAR ---------  -->
    
    <div id="main">
        <nav>
        <div id="header">
            <!-- beign nav -->
            <ul id="nav">
            <li><a href="/PPT-SHOPPING/productList/php/index.php">PTT
                    <i class="apple-logo ti-apple"></i>
                </a></li>
                <li><a class="menubar" href="/PPT-SHOPPING/productList/php_admin_iphone/iPhone.php">iPhone</a></li>
                <li><a class="menubar" href="/PPT-SHOPPING/productList/php_admin_ipad/iPad.php">iPad</a></li>
                <li><a class="menubar" href="/PPT-SHOPPING/productList/php_admin_mac/mac.php">Mac</a></li>
                <li><a class="menubar" href="">Apple Watch</a></li>
                <li><a class="menubar" href="">Phụ Kiện</a></li>
                <li><a class="menubar" href="">Âm Thanh</a></li>
                <li><a class="menubar" href="">Thành Viên</a></li>
                <li><a class="menubar" href="">Góp ý</a></li>
                <li><a class="menubar" href="">Mua Bán</a></li>
                <li><a class="menubar" href="">Tin tức</a></li>
                <li><a class="menubar" href="#">
                    Dịch Vụ
                    <i class="nav-arrow-down ti-angle-down"></i>
                </a>
                <ul class="subnav">
                    <li><a class="menubar" href="">Sửa Chữa</a></li>
                    <li><a class="menubar" href="">Khuyến Mãi</a></li>
                    <li><a class="menubar" href="">Trả Góp</a></li>
                    <li><a class="menubar" href="">Bảo Hành</a></li>
                </ul>
                </li>
            </ul>
            <!-- end nav -->


            <!-- begin : Search button -->

            <div class="cart-btn">
                <i class="shopping ti-shopping-cart"></i>
            </div>

            <div class="search-btn">
                <i class="search-icon ti-search"></i> 
            </div>
        </div>    
           
    </div>
</div>
</nav>


    <!-- ---------------- -->
    <div id="wrapper">
        <div class="headline">
            <h3 class="title-h3">IPAD</h3>
        </div>
        <ul class="products">
           
            <?php 
            while($row = mysqli_fetch_array($query)){
                ?>
            <!-- sp1 -->
            <li>
            
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="./IPAD_img/<?= $row['iPad_URL'] ?>" alt=""></a>
                        <a href="" class="buy-now">Mua Ngay</a>
                    </div>  
                        <div class="product-info">
                            <a href="" class="product-cat"><?= $row['dungluong']?></a>
                            <a href="" class="product-name"><?= $row['tensp']?></a>
                            <div class="product-price"><?= $row['gia']?></div>
                        </div>
                    </div>
             </li>
             <?php }?> 

        </ul>
    </div>
        </ul>

            
    </div>
    <footer>
    
        <!-- box1 -->
        <div class="box1">
            <div class="box1_1">
                <div class="logo-footer">
                <i  class="apple-logo ti-apple" > PTTShop</i>
                </div>
            <br>
                <p>Năm 2022, PTTShop trở thành đại lý ủy quyền của Apple. 
                Chúng tôi phát triển chuỗi cửa hàng tiêu chuẩn và Apple 
                Mono Store nhằm mang đến trải nghiệm tốt nhất về sản phẩm và 
                dịch vụ của Apple cho người dùng Việt Nam.</p>
            </div>
    
            
        </div>
    <!-- box2 -->
        <div class="box2">
            <h3>Sản Phẩm</h3>
            <ul class="full-list">
                <li><a href="">iPhone</a></li>
                <li><a href="">iPad</a></li>
                <li><a href="">Mac</a></li>
                <li><a href="">Apple Watch</a></li>
                <li><a href="">Âm Thanh</a></li>
                <li><a href="">Phụ Kiện</a></li>
                <li><a href="">Dịch Vụ</a></li>
            </ul>
        </div>
    <!-- box3 -->
        <div class="box3">
            <div>
                <h3>Thông Tin</h3>
                <ul class="full-list">
                    <li><a href="">Giới thiệu</a></li>
                    <li><a href="">Khuyến mãi</a></li>
                    <li><a href="">Bảo hành Sủa Chữa</a></li>
                    <li><a href="">Tuyển dụng</a></li>
                    <li><a href="">Tin Tức</a></li>
                    <li><a href="">Gửi góp ý khiếu nại</a></li>
                    <li><a href="">Phương thức thành toán</a></li>
                </ul>
        </div>
            <div>
                <ul class="box3_1">
                    <li class="icon-btn"><a href="https://www.facebook.com/NguyenCaoThien2505/"><i class="ti-facebook"></a></i></li>
                    <li class="icon-btn"><a href="https://www.youtube.com/channel/UCb8p3w4b3zVGH0Fju3C9KZQ"><i class="ti-youtube"></a></i></li>
                    <li class="icon-btn"><a href="https://accounts.google.com/signin/v2/identifier?continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&service=mail&sacu=1&rip=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin"><i class="ti-email"></a></i></li>
                    <li class="icon-btn"><a href="https://www.instagram.com/nct._.1005/?fbclid=IwAR04hN633pDDixTOsML_XQDHKv6mWtACTCKE80lYlmDX0kKgpWQVfDkO-Ps"><i class="ti-instagram"></a></i></li>
                </ul>
        </div>
        </div>
        <!-- box4 -->
        <div class="box4">
            <h3>Chính sách</h3>
            <ul class="full-list">
                <li><a href="">Trả góp</a></li>
                <li><a href="">Giao Hàng</a></li>
<li><a href="">Hủy giao dịch</a></li>
                <li><a href="">Đổi trả</a></li>
                <li><a href="">Bảo hành</a></li>
                <li><a href="">Bảo mật thông tin</a></li>
        </div>
        <!-- box5 -->
        <div class="box5">
            <h3>Địa chỉ</h3>
            
                <ul class="full-list">
                <li><a href="">Tìm cửa hàng trên Map</a></li>
                <li><a href="">Hệ thống cửa hàng</a></li>
                <li><a href="">Mua hàng : 0353960430</a></li>
                <li><a href="">Khiếu nại : 1900000003</a></li>
                <li><a href="">Doanh nghiệp đối tác : 0915621341</a></li>
                </ul>
        </div>
        
    </footer>
</body>
</html>