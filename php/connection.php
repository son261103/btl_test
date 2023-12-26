<?php
    $server = "localhost:3306";
    $username = "root";
    $pass = "";
    $dbname = "sql_car";
    
    //khởi tạo kết nối
    $conn = new mysqli($server,$username,$pass,$dbname);

    // kiểm tra kết nối
    if ($conn -> connect_error) {
        # code...
        mysqli_query($conn, "SET NAME 'UTF8' ");
        die ("kết nối thất bại" . $conn ->connect_error);
    }

?>