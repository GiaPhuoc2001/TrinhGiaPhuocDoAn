<?php 
    require('./webDatabase.php');
    $stt = (int) $_GET['id'];
    $image = "SELECT iPad_URL  FROM `db_sanpham_ipad` WHERE `db_sanpham_ipad`.`id` = $stt";
    $query = mysqli_query($conn, $image);
    $after = mysqli_fetch_assoc($query);
   
    // DELETE file img
    if (file_exists("./IPAD_img".$after['iPad_URL'])) {
        unlink("./IPAd_img".$after['iPad_URL']);

    }
    $sql = "DELETE FROM `db_sanpham_ipad` WHERE `db_sanpham_ipad`.`id` = $stt";
    mysqli_query($conn,$sql);
    header("location:Admin_ipad.php");
?>