<!DOCTYPE html>
<html>
<head>
    <title>Quản lý Khách hàng</title>
</head>
<body>
    <h1>Quản lý Khách hàng</h1>

    <!-- Form thêm khách hàng -->
    <h2>Thêm Khách hàng</h2>
    <form action="../php/themcus.php" method="POST">
        Họ tên: <input type="text" name="hoTen"><br>
        Email: <input type="text" name="email"><br>
        Số điện thoại: <input type="text" name="soDienThoai"><br>
        <input type="submit" value="Thêm">
    </form>

    <!-- Form sửa khách hàng -->
    <h2>Sửa Khách hàng</h2>
    <form action="../php/suacus.php" method="POST">
        ID Khách hàng cần sửa: <input type="text" name="idCanSua"><br>
        Họ tên mới: <input type="text" name="hoTenMoi"><br>
        Email mới: <input type="text" name="emailMoi"><br>
        Số điện thoại mới: <input type="text" name="soDienThoaiMoi"><br>
        <input type="submit" value="Sửa">
    </form>

    <!-- Form xóa khách hàng -->
    <h2>Xóa Khách hàng</h2>
    <form action="../php/xoacus.php" method="POST">
        ID Khách hàng cần xóa: <input type="text" name="idCanXoa"><br>
        <input type="submit" value="Xóa">
    </form>

    <!-- Danh sách Khách hàng -->
    <h2>Danh sách Khách hàng</h2>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Họ Tên</th>
                <th>Email</th>
                <th>Số Điện Thoại</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include("../php/display_customers.php"); // Hiển thị danh sách khách hàng
            ?>
        </tbody>
    </table>
</body>
</html>
