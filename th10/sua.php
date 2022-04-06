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
    $sql = "UPDATE sinh_vien SET MaSV = '$msv', MaKhoa = '$mk', LopBC = '$lbc', NgaySinh = '$ns', DiaChi ='$dc' WHERE HoTen = '$ht'";
    if (mysqli_query($conn,$sql)) // nếu thành công chuyển tới index.php
    {
        header('location: Index.php');
    }
    else { // lỗi
        $result = "Cập nhật chưa thành công" . mysqli_error($conn);
    }
?>                        