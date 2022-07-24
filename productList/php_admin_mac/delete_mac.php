<?php 
    require('./webDatabase.php');
    $stt = (int) $_GET['id'];
    $image = "SELECT mac_URL  FROM `db_sanpham_mac` WHERE `db_sanpham_mac`.`id` = $stt";
    $query = mysqli_query($conn, $image);
    $after = mysqli_fetch_assoc($query);
   
    // DELETE file img
    if (file_exists("./MAC_img".$after['mac_URL'])) {
        unlink("./MAC_img".$after['mac_URL']);

    }
    $sql = "DELETE FROM `db_sanpham_mac` WHERE `db_sanpham_mac`.`id` = $stt";
    mysqli_query($conn,$sql);
    header("location:Admin_mac.php");
?>