<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Sinh Viên</title>
</head>
<body>
    <h1 style="text-align:center">Thêm Sinh Viên</h1>
    <form action="them.php" method="POST">
    <table style="margin-left: 600px">
        <tr>
            <td>Mã Sinh Viên:</td>
            <td><input type="text" name="txtMaSV" id="txtMaSV"> </td>
        </tr>
        <tr>
            <td>Mã Khoa:</td>
            <td><input type="text" name="txtMaKhoa" id="txtMaKhoa"> </td>
        </tr>
        <tr>
            <td>Lớp BC:</td>
            <td><input type="text" name="txtLopBC" id="txtLopBC"> </td>
        </tr>
        <tr>
            <td>Họ Tên:</td>
            <td><input type="text" name="txtHoTen" id="txtHoTen"> </td>
        </tr>
        <tr>
            <td>Ngày Sinh:</td>
            <td><input type="text" name="txtNgaySinh" id="txtNgaySinh"></td>
        </tr>
        <tr>
            <td>Địa Chỉ:</td>
            <td><input type="text" name="txtDiaChi" id="txtDiaChi"></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="Save" id="btn" name="btnSave">
            </td>
        </tr>
    </table>
    </form>
</body>
</html>