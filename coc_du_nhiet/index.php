<?php
session_start();
include "./includes/connect_db.php";
include "./includes/help.php";
include "./controllers/ProductController.php";
include "./controllers/AdminController.php";

$action =  isset($_GET['action']) ? $_GET['action'] : 'home';
$productController = new ProductController();
$adminController = new AdminController();

switch ($action) {
    case 'home':
        $productController->home();
        break;
    case 'gioithieu':
        include 'views/client/gioithieu.php'; // Tệp giới thiệu
        break;
    case 'lienhe':
        include 'views/client/lienhe.php'; // Tệp giới thiệu
        break;
    case 'gopi':
        include 'views/client/gopi.php'; // Tệp giới thiệu
        break;
    case 'hoidap':
        include 'views/client/hoidap.php'; // Tệp giới thiệu
        break;
    case 'danhmucsp':
        $productController->getSP_DM();
        break;
    case 'chitietsp':
        $productController->getONE();
        break;
    case 'sp_admin':
        $adminController->listSP();
        break;
    case 'login':
        $adminController->check();
        break;
    case 'dangxuat':
        $adminController->dangxuat();
        break;
    case 'dangky':
        $adminController->dangky();
        break;
    case 'them_sanpham':
        $adminController->them_sanpham();
        break;
    case 'sua_sanpham':
        $adminController->sua_sanpham();
        break;
    case 'xoa_sanpham':
        $adminController->xoa_sanpham();
        break;
    case 'listDM':
        $adminController->listDM();
        break;
    case 'xoa_danhmuc':
        $adminController->xoa_danhmuc();
        break;
    case 'them_danhmuc':
        $adminController->them_danhmuc();
        break;
    case 'sua_danhmuc':
        $adminController->sua_danhmuc();
        break;
    case 'listTK':
        $adminController->listTK();
        break;
    case 'them_taikhoan':
        $adminController->them_taikhoan();
        break;
    case 'xoa_taikhoan':
        $adminController->xoa_taikhoan();
        break;
    case 'sua_taikhoan':
        $adminController->sua_taikhoan();
        break;
    case 'them_danhgia':
        $productController->them_danhgia();
            break;
    case 'danhgia':
        $adminController->danhgia();
            break;   
    case 'xoa_danhgia':
         $adminController->xoa_danhgia();
            break;
    // case 'sua_danhgia':
    //      $adminController->sua_danhgia();
    //         break; 
    default:
        echo "case not match";
}
