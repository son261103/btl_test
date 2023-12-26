<?php
    include("../views/header_sv.php");

    if(isset($_GET['act'])){
        switch ($_GET['act']) {
            case 'dashboard':
                # code...
                include "./views/dashboard.php";
                break;
            case 'khachhang':
                # code...
                include "./views/khachhang.php";
                break;
            case 'nhanvien':
                # code...
                include "./views/nhanvien.php";
                break;
            case 'car':
                # code...
                include "./views/car.php";
                break;
            case 'lichhen':
                # code...
                include "./views/lichhen.php";
                break;
            case 'dichvu':
                # code...
                include "./views/dichvu.php";
                break;
            case 'phutung':
                # code...
                include "./views/phutung.php";
                break;
            case 'hoadon':
                # code...
                include "./views/hoadon.php";
                break;
            default:
                # code...
                include "./views/dashboard.php";
                break;
        }
    }else{
        include "../views/dashboard.php";
    }








    //include("../views/foodter_sv.php");
?>