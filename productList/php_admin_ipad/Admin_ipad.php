
<?php
    require("./webDatabase.php");
    $sql = "SELECT * FROM `db_sanpham_ipad`";
    $query = mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/PPT-SHOPPING/font/themify-icons-font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="/PPT-Shopping/productList/css/Admin.css">
    <title>ADMIN iPad</title>
    <script>
    function xoasanpham(){
        var conf = confirm(`bạn có chắc chắn xóa sản phẩm hay không ?`);
        return conf;
    }
</script>
<style>
    



/* sidle */
#danhsach {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}



#danhsach .ct:hover {background-color: #ddd;}



button{
    background-color: #2F54EB;
    margin-top: 60px;
    padding: 10px;
    text-decoration: none;
   
} 
button>a{
    color: white;
   
}
a{
    text-decoration: none;
    color: black;
}



 </style>

</head>
<body>

<div id="header">
        <!-- beign nav -->
        <ul id="nav">
            <li><a href="/PPT-SHOPPING/productList/php/index.php">PTT
                <i class="apple-logo ti-apple"></i>
            </a></li>
            <li><a class="menubar" href="/PPT-SHOPPING/productList/php_admin_iphone/Admin_iphone.php">iPhone</a></li>
            <li><a class="menubar" href="/PPT-SHOPPING/productList/php_admin_ipad/Admin_ipad.php">iPad</a></li>
            <li><a class="menubar" href="/PPT-SHOPPING/productList/php_admin_mac/Admin_mac.php">Mac</a></li>
            <li><a class="menubar" href="">Apple Watch</a></li>
            <li><a class="menubar" href="">Phụ Kiện</a></li>
            <li><a class="menubar" href="">Âm Thanh</a></li>
            <li><a class="menubar" href="">Thành Viên</a></li>
            <li><a class="menubar" href="">Góp ý</a></li>
            <li><a class="menubar" href="">Mua Bán</a></li>
            <li><a class="menubar" href="">Tin tức</a></li>
            <li><a class="menubar"  href="#">
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
    </div>    
       

<div id="danhsach">
    <div class="bt">
        <button>
            <a href="./addsp_ipad.php">Thêm iPad</a>
        </button>
    </div>
    <div class="headline">
            <h3 class="title-h3">IPAD</h3>
        </div>
    <div id="wrapper">
    <?php 
            while($row = mysqli_fetch_array($query)){
                ?>
    <div id="danhsach">
    
    
    <ul class="products">
            <!-- sp1 -->
            <li>
            
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="" alt=""><img style="" src='./IPAD_img/<?= $row['iPad_URL'] ?>' alt=""></a>
                        <a href="" class="buy-now">Mua Ngay</a>
                    </div>  
                        <div class="product-info">
                            <a href="" class="product-cat"><?= $row['dungluong'] ?></a>
                            <a href="" class="product-name"><?= $row['tensp'] ?></a>
                            <div class="product-price"><?= $row['gia']?></div>
                            <div class="product-price "><a href="updatesp_ipad.php?id=<?= $row['id']?>"> Cập Nhập </a>
                <a class="product-price" onclick="return xoasanpham()" href="delete_ipad.php?id=<?= $row['id']?>"><i class="ti-trash"></i></a></div>
            </li>
    </ul>

</div>    
<?php }?>  
              
</body>
</html>

