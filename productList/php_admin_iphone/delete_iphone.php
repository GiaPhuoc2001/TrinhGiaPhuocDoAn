<?php 
    require('./webDatabase.php');
    $sttsp = (int) $_GET['id'];
    $image = "SELECT imgURL  FROM `db_sanpham_iphone` WHERE `db_sanpham_iphone`.`id` = $sttsp";
    $query = mysqli_query($conn, $image);
    $after = mysqli_fetch_assoc($query);
   
    // DELETE file img
    if (file_exists("./IPHONE_img".$after['imgURL'])) {
        unlink("./IPHONE_img".$after['imgURL']);

    }
    $sql = "DELETE FROM `db_sanpham_iphone` WHERE `db_sanpham_iphone`.`id` = $sttsp";
    mysqli_query($conn,$sql);
    header("location:Admin_iphone.php");
?>