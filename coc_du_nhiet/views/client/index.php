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
                    <a class="nav-link" href="?action=gioithieu">Giới thiệu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?action=lienhe">Liên hệ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?action=gopi">Góp ý</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?action=hoidap">Hỏi đáp</a>
                </li>
            </ul>
            <form class="d-flex" role="search" method="post">
                <input name="search" value="<?= $_POST['search'] ?? "" ?>" class="form-control me-3" type="search" placeholder="Search" aria-label="Search" required>
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </nav>
        <main class="row">
            <article class="col-md-9">
                <div class="slider">
                    <img class="slide" width="100%" src="./public/image/banncoc1.png" alt="">
                    <img class="slide" width="100%" src="./public/image/banncoc2.png" alt="">
                    <img class="slide" width="100%" src="./public/image/bancoc3.png" alt="">
                    <img class="slide" width="100%" src="./public/image/bancoc4.png" alt="">
                    <img class="slide" width="100%" src="./public/image/bancoc5.png" alt="">
                   
                </div>
                <div class="prds">
                    <?php
                    foreach ($products as $product) : ?>
                        <a href="?action=chitietsp&id=<?= $product['id'] ?>" class="prd">
                            <img width="100%" src="public/image/<?= $product['img'] ?>" alt="">
                            <div class="name"><?= $product['name'] ?></div>
                            
                            <div class="price"><?= $product['price'] ?></div>
                            <div class="views">
                                <i class="fa-solid fa-eye"></i>
                                <span><?= $product['view'] ?></span>
                            </div>
                            <button>Đặt hàng</button>
                        </a>
                    <?php
                    endforeach;
                    ?>
                </div>
            </article>
            <aside class="col-md-3">
                <?php
                if (isset($_POST['show_DK']) && $_POST['show_DK'] == 'true') {
                    $showFormDK = true;
                }

                if (isset($_SESSION['user'])) {
                ?>
                <div class="col">
                        <h3>Tài Khoản</h3>
                        <ul style="list-style-type: circle; margin-left: 30px;">
                            <li> <a href="#">Xin Chào</a></li>
                            <li> <a href="?action=sp_admin">Đăng nhập Admin</a></li>
                            <li> <a href="?action=dangxuat">Đăng xuất</a></li>
                        </ul>
                    </div>
                <?php
                } else { ?>
                    
                    <div class="col">
                        <h3>Đăng nhập</h3>
                        <form action="?action=login" method="post">
                            <label for="name">Tên đăng nhập</label>
                            <input type="text" id="name" name="name" required>
                            <label for="pass">Mật khẩu</label>
                            <input type="password" id="pass" name="pass" required>
                            <div class="remember-me">
                                <input id="remember" type="checkbox">
                                <label for="remember">Ghi nhớ tài khoản?</label>
                            </div>
                            <button type="submit">Đăng nhập</button>
                        </form>
                        <ul>
                            <li>- <a href="?action=dangky">Đăng ký tài khoản</a></li>
                        </ul>
                    </div>
                <?php

                }
                ?>

                <div class="col">
                    <h3>Danh Mục</h3>
                    <ul style="list-style-type: circle; margin-left: 30px;">
                        <?php
                        foreach ($category as $value) :
                        ?>
                            <li><a href="?action=danhmucsp&id=<?= $value['id'] ?>"><?= $value['name'] ?></a></li>
                        <?php
                        endforeach;
                        ?>
                    </ul>
                </div>
                <div class="col">
                    <h3>Top 10 Sản Phẩm Yêu Thích</h3>
                    <?php
                    foreach ($top10 as $value) :
                    ?>
                        <a class="fav" href="?action=chitietsp&id=<?= $value['id'] ?>">
                            <img src="public/image/<?= $value['img'] ?>" alt="">
                            <span><?= $value['name'] ?></span>
                        </a>
                    <?php
                    endforeach;
                    ?>
                </div>
            </aside>
        </main>
        <footer class="row">
            <span>Copyright &copy;2024 Ngọc An</span>
        </footer>
    </div>

    <!-- slideshow -->
    <script>
        let slideIndex = 0;
        const slides = document.getElementsByClassName("slide");

        function showSlide(index) {
            if (index < 0) {
                slideIndex = slides.length - 1;
            } else if (index >= slides.length) {
                slideIndex = 0;
            }

            for (let i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }

            slides[slideIndex].style.display = "block";
        }

        function changeSlide(n) {
            showSlide(slideIndex += n);
        }

        // Automatically advance slides every 3 seconds (optional)
        setInterval(function() {
            changeSlide(1);
        }, 3000);

        // Show the first slide initially
        showSlide(slideIndex);
    </script>
</body>

</html>