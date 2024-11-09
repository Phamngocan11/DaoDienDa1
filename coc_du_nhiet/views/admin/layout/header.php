<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="public/css/style.css">
    <title>Ly giữ nhiệt Iced Americano</title>
</head>

<body class="addFont" onload="changeSlide(1)">
    <?php
    // dang nhap dung tai khoan admin => chuyen sang admin (0)
    // dang nhap khach hang (1) => home 
    if (isset($_SESSION['user']) && $_SESSION['user'] == 0) {
        
    } else {
        echo "<script>alert('Bạn không phải là admin!');
        window.location.href ='?action=home';
        </script>";
    }
    ?>
    <div class="container">
        <header class="row">
            <h1>Ly giữ nhiệt Iced Americano</h1>
        </header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <ul class="nav nav-underline">
                <li class="nav-item">
                    <a class="nav-link" href="?action=home">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?action=listDM">Danh mục</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?action=sp_admin">Sản phẩm</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?action=listTK">Tài khoản</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?action=danhgia">Đánh giá</a>
                </li>
               
            </ul>
        </nav>