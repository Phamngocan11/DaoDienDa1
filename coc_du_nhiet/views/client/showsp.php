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
        </nav>
        <main class="row">
            <article class="col-md-9">
                <div class="showsp">
                    <h1><?= $sp_dm['0']['nameDM'] ?></h1>
                </div>
                <div class="prds">
                    <?php
                    foreach ($sp_dm as $value) :
                    ?>
                    <div class="prd">
                        <img width="100%" src="public/image/<?= $value['img'] ?>" alt="">
                        <div class="name"><?= $value['name'] ?></div>
                        <div class="describe"><?= $value['desc_ribe'] ?></div>
                        <div class="price"><?= $value['price'] ?></div>
                        <div class="views">
                            <i class="fa-solid fa-eye"></i>
                            <span><?= $value['view'] ?></span>
                        </div>
                        <button>Đặt hàng</button>
                    </div>
                    <?php
                    endforeach;
                    ?>
                </div>
            </article>
            <aside class="col-md-3">
                <!-- <div class="col">
                    <h3>Đăng nhập</h3>
                    <form action="" method="post">
                        <label for="name">Tên đăng nhập</label>
                        <input type="text" id="name" required>
                        <label for="pass">Mật khẩu</label>
                        <input type="password" id="pass" required>
                        <div class="remember-me">
                            <input id="remember" type="checkbox">
                            <label for="remember">Ghi nhớ tài khoản?</label>
                        </div>
                        <button type="submit">Đăng nhập</button>
                    </form>
                    <ul>
                        <li>- <a href="?action=dangky">Đăng ký tài khoản</a></li>
                    </ul>
                </div> -->
                
                <div class="col">
                    <h3>Top 10 sản phẩm yêu thích</h3>
                    <div class="fav">
                        <img src="public/image/coc16.png" alt="">
                        <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi, ab.</span>
                    </div>
                    <div class="fav">
                        <img src="public/image/coc12.png" alt="">
                        <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi, ab.</span>
                    </div>
                    <div class="fav">
                        <img src="public/image/coc10.png" alt="">
                        <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi, ab.</span>
                    </div>
                    <div class="fav">
                        <img src="public/image/coc8.png" alt="">
                        <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi, ab.</span>
                    </div>
                    <div class="fav">
                        <img src="public/image/coc5.png" alt="">
                        <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi, ab.</span>
                    </div>
                    <div class="fav">
                        <img src="public/image/coc2.png" alt="">
                        <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi, ab.</span>
                    </div>
                    <div class="fav">
                        <img src="public/image/coc1.png" alt="">
                        <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi, ab.</span>
                    </div>
                </div>
            </aside>
        </main>
        <footer class="row">
            <span>Copyright &copy;2024 Ngọc An</span>
        </footer>
    </div>
</body>

</html>