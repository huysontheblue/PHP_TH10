<?php
    // kết nối csdl
    $conn = mysqli_connect("localhost","root","","quanlyhoc_db");
    // kiểm tra khi người dùng sumbit form
    if (isset($_POST["btnSave"]))
    {
        // lấy dữ liệu trên form => lưu vào biến
        $msv =  $_POST["txtMaSV"];
        $mk =  $_POST["txtMaKhoa"];
        $lbc = $_POST["txtLopBC"];
        $ht =  $_POST["txtHoTen"];
        $ns = $_POST["txtNgaySinh"];
        $dc = $_POST["txtDiaChi"];
    }
    // truy vấn dữ liệu
    $sql = " INSERT INTO sinh_vien VALUES('$msv','$mk','$lbc','$ht','$ns','$dc')";
    if (mysqli_query($conn,$sql))// nếu thành công chuyển đến trang index.php
    {
        header('location: Index.php');
    }
    else {//lỗi
        $result = "Lỗi thêm mới" . mysqli_error($conn);
    }
    ?>