<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa sinh viên</title>
</head>
<body>
    <?php
        // kết nối csdl
        $conn = mysqli_connect("localhost","root","","quanlyhoc_db");
        $ht = $_GET["HoTen"];
        $sql = "SELECT * FROM sinh_vien WHERE HoTen = '$ht'";
        $result = mysqli_query($conn,$sql);
        // in danh sách dữ liệu
        while($row = mysqli_fetch_assoc($result))
        {
            $msv = $row["MaSV"];
            $mk = $row["MaKhoa"];
            $lbc = $row["LopBC"];
            $ht = $row["HoTen"];
            $ns = $row["NgaySinh"];
            $dc = $row["DiaChi"];
        }
    ?>
    <form action="sua.php" method = "POST">
        <table style="margin-left: 600px">
            <tr>
                <td colspan = "2">
                    <h1>Sửa sinh viên</h1>
                </td>
            </tr>
            <tr>
                <td>Mã Sinh Viên:</td>
                <td><input type="text" name="txtMaSV" readonly = "readonly" id="" value = "<?php echo $msv ?>"></td>
            </tr>
            <tr>
                <td>Mã Khoa:</td>
                <td><input type="text" name="txtMaKhoa" id="" value = "<?php echo $mk ?>"></td>
            </tr>
            <tr>
                <td>Lớp BC:</td>
                <td><input type="text" name="txtLopBC" id="" value = "<?php echo $lbc ?>"></td>
            </tr>
            <tr>
                <td>Họ Tên:</td>
                <td><input type="text" name="txtHoTen" id="" value = "<?php echo $ht ?>"></td>
            </tr>
            <tr>
                <td>Ngày Sinh:</td>
                <td><input type="text" name="txtNgaySinh" id="" value = "<?php echo $ns ?>"></td>
            </tr>
            <tr>
                <td>Địa Chỉ:</td>
                <td><input type="text" name="txtDiaChi" id=""value = "<?php echo $dc ?>"></td>
            </tr>
            <tr>
                <td colspan = "2" align="center">
                    <input type="submit" value="Save" name="btnSave">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>