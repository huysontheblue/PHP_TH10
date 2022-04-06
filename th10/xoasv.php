<?php
    // kết nối cơ sở dữ liệu
    $conn = mysqli_connect("localhost","root","","quanlyhoc_db");
    $ht = $_GET["HoTen"];
    // câu sql để xóa
    $sql = "DELETE FROM sinh_vien where HoTen = '$ht'";
    if (mysqli_query($conn,$sql)) // thành công chuyển qua Index.php
    {
        header('location:  Index.php');
    }
    else {
        $result = "Xóa không thành công" . mysqli_error($conn);
    }
    // ngắt kết nối 
    mysqli_close($conn);
    //<script>alert('Bạn có muốn xóa không?');</script>
?>