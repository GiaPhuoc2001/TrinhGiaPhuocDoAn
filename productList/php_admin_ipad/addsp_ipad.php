<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Sản Phẩm iPad</title>



 
</head>

<body>
    <?php
    require("./webDatabase.php");
    if (isset($_POST["submit"])) {
        $hinhanh = $_FILES["hinhanh"]["name"];
        $dungluong = $_POST["dungluong"];
        $ten = $_POST["ten"];
        $gia = $_POST["gia"];
        

        // Tạo thư mục => note, tạo thư mục images ở bên ngoài trước
    $target_dir = "./IPAD_img/";

        // Tạo đường dẫn đến file
    $target_file = $target_dir . $hinhanh;

        // Check đủ các trường thông tin
        if (isset($hinhanh) && isset($dungluong) && isset($ten) && isset($gia)) {
            move_uploaded_file($_FILES["hinhanh"]["tmp_name"], $target_file);
            $sql = "INSERT INTO `db_sanpham_ipad` (`id`, `iPad_URL`, `dungluong`, `tensp`, `gia`) VALUES (NULL, '$hinhanh', '$dungluong', '$ten', '$gia');";
            mysqli_query($conn, $sql);
            header("Location:Admin_ipad.php");
        }
    }
    ?>
    <h1>Thêm sản phẩm </h1>
    <div class="wrapper"></div>
        <form action="" method="POST" enctype="multipart/form-data">
            
            <div>
                <label for="hinhanh">Hình Ảnh</label>
                <input type="file" id="file" name="hinhanh" value="Choose File" required>
            </div>

            <div>
                <label for="dungluong">Dung Lượng</label>
                <input type="text" id="dungluong" name="dungluong" required>
            </div>

            <div>
                <label for="ten">Tên sản phẩm </label>
                <input type="text" id="ten" name="ten" required>
            </div>

            <div>
                <label for="gia">Giá sản phẩm</label>
                <input type="number" id="gia" name="gia" required>
            </div>

            <button type="submit" name="submit">
                Thêm sản phẩm
            </button>
            <a class="return" href="./Admin_ipad.php">Quay về</a>
        </form>
    </div>
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

</html>
