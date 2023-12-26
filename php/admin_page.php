<?php
session_start();

if (isset($_COOKIE['admin'])) {
    $username = $_COOKIE['admin'];
} else {
    // Nếu không có cookie, chuyển hướng đến trang đăng nhập hoặc trang khác
    header("Location: ../views/login.html");
    exit();
}

if (isset($_POST['logout'])) {
    // Xóa cookie
    setcookie('admin', '', time() - 3600, '/');

    // Xóa session
    session_unset();
    session_destroy();

    // Chuyển hướng đến trang đăng nhập hoặc trang khác
    header("Location: ../views/login.html");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Trang Admin</title>
</head>
<body>
    <h1>Xin chào, <?php echo $username; ?>!</h1>
    <form method="post">
        <input type="submit" name="logout" value="Đăng xuất">
    </form>
</body>
</html>
