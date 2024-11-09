<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Ly giữ nhiệt Iced Americano</title>
</head>

<body class="addFont" onload="changeSlide(1)">
    <div class="container">
        <header class="row">
            <h1>Ly giữ nhiệt Iced Americano</h1>
        </header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <ul class="nav nav-underline ">
                <li class="nav-item">
                  <a class="nav-link" href="?action=home">Trang chủ</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Giới thiệu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Liên hệ</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Góp ý</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Hỏi đáp</a>
                  </li>
              </ul>
        </nav>
        <main class="row">
            <div class="page-content page-container" id="page-content">
                <div class="padding">
                    <div class="row container d-flex justify-content-center">
                        <div class="col-md-6 col-lg-4">
                            <form class="card" method="post">
                                <h5 class="fw-400">Đăng ký tài khoản</h5>

                                <div class="card-body">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="name" placeholder="Tên tài khoản" required>
                                    </div>

                                    <div class="form-group">
                                        <input class="form-control" type="password" name="pass" placeholder="Mật khẩu" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="">Bạn đã có tài khoản?</label>
                                        <a href="?action=home">Đăng nhập</a>
                                    </div>

                                    <button class="btn btn-block btn-bold btn-primary">Đăng ký</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class="row">
            <span>Copyright &copy;2024 Ngọc An</span>
        </footer>
    </div>

    <!-- slideshow -->
    <script>



    </script>
</body>

</html>