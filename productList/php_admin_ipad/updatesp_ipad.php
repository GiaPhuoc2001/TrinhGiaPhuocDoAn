<?php
   require('webDatabase.php');
    $stt = $_GET["id"];
    $sql = "SELECT * FROM `db_sanpham_ipad` WHERE `id` = '$stt'";
    $query = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($query);
    $img = $row['iPad_URL'];
   if(isset($_POST['submit'])){
        $img1=$_FILES['hinhanh']['name'];
        $dungluong =  $_POST['dungluong'];
        $ten =  $_POST['ten'];     
        $gia =(int) $_POST['gia'];
        $target_dir = "./php_Admin_ipad/IPAD_img";
           if($img){
               if (file_exists("/PPT-SHOPPING/productList/php_admin_ipad/IPAD_img".$img)) {
                   unlink("/PPT-SHOPPING/productList/php_admin_ipad/IPAD_img".$img);
               } 
               $target_file = $target_dir.$img1 ;
           }else{
               $target_file = $target_dir.$img ;
               $img = $img1;
           }
           if(isset($img) && isset($dungluong) && isset($ten) && isset($gia)){
               move_uploaded_file($_FILES["hinhanh"]["tmp_name"],$target_file);
               $sql = "UPDATE `db_sanpham_ipad` SET `iPad_URL` =  '$img1', `dungluong` =  '$dungluong', 
               `tensp` = '$ten', `gia` = '$gia'
               WHERE `db_sanpham_ipad`.`id` = '$stt';";
               mysqli_query($conn, $sql);
               header("Location:Admin_ipad.php");
           
        }}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập Nhập Sản Phẩm</title>
    <style>
        form{
            width: 600px;
        }
        div{
            display: flex;
            margin-bottom: 20px;
        }
        label{
            width: 100px;
        }
        input,textarea{
            flex: 1;
        }
        button{
            margin-left: 100px;
            padding: 6px 12px;
            color: #2F1C25;
            background-color: transparent;
            border: 3px solid #D7B0DF;
            border-radius:8px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    
    <h1>Cập nhật sản phẩm</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <div>
            <img style="width:200px;height: 200px;" src="./IPad_img/<?= $img?> "alt="">
        </div>
        <div>
            <label for="file">Hình ảnh </label>
            <input type="file"  id="file" name="hinhanh" value="Choose File">
        </div>
        <div>
            <label for="dungluong">Dung Lượng</label>
            <input type="text" id="dungluong" name="dungluong" value="<?= $row["dungluong"]?>">
        </div>
        <div>
            <label for="ten">Tên Mac</label>
            <input type="text" id="ten" name="ten"  value="<?= $row["tensp"]?>">
        </div>
        <div>
            <label for="gia">Giá </label>
            <input type="number" id="gia" name="gia" value= "<?= $row["gia"]?>">
        </div>
        <button type="submit" name="submit">
        Cập nhật sản phẩm
        </button>  
        </button>
            <a class="return" href="./Admin_ipad.php">Quay về</a>
    </form>
    <style>
    form {
        width: 650px;
        margin-left: 55px;
      
    }

    div {
        display: flex;
        margin-bottom: 30px;
    }

    label {
        width: 100px;
        font-size: 16px;
        font-weight: bolder ;
        
    }

    input,textarea {
        flex: 1;
    }

    button {
        margin-left: 150px;
        padding: 6px 12px;
        color: white;
        background-color: black;
        border: 1px solid black;
        border-radius: 8px;
        
    }
.return{
    background-color: black;
    margin-left: 150px;
    padding: 6px 12px;
    color: white;
    border: 1px solid black;
    border-radius: 8px;
   

}
a.return{
    text-decoration: none;
}

h1{
    text-align: center;
}


#wrapper{
    max-width: 90%;
    height: 100%;
    margin: 0 auto;
    background-color: #f2f2f2;
    margin-top: 46px;
    margin-left: 55px;

}

html{
    background-color: rgb(209, 206, 206);
    
}

button:hover{
    cursor: pointer;
    background-color: red;
}

.return:hover{
    cursor: pointer;
    background-color: red;
}


    </style>
</body>
</body>
</html>
