<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên Hệ - Cốc Giữ Nhiệt Iced Americano</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="public/css/style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            padding-top: 20px;
        }
        .contact-section h2 {
            margin-bottom: 15px;
        }
        .contact-info, .contact-form {
            margin-bottom: 30px;
        }
        .contact-info p {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<div class="container">
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
    <header class="text-center mb-4">
        <h1>Liên Hệ Với Chúng Tôi</h1>
    </header>

    <section class="contact-section">
        <h2>Thông Tin Liên Hệ</h2>
        <div class="contact-info">
            <p><strong>Địa chỉ:</strong> 123 Đường ABC, Quận XYZ, Thành phố Hà Nội</p>
            <p><strong>Email:</strong> phamngocan2k5@gmail.com</p>
            <p><strong>Điện thoại:</strong> (+84) 033 666 3715</p>
            <p><strong>Giờ làm việc:</strong> Thứ Hai - Thứ Sáu: 8:00 - 18:00, Thứ Bảy: 8:00 - 12:00</p>
        </div>

        <h2>Gửi Tin Nhắn Cho Chúng Tôi</h2>
        <div class="contact-form">
            <form action="contact_submit.php" method="post">
                <div class="mb-3">
                    <label for="name" class="form-label">Họ và tên</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Số điện thoại</label>
                    <input type="text" class="form-control" id="phone" name="phone" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Lời nhắn</label>
                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Gửi</button>
            </form>
        </div>
    </section>

    <footer class="row">
            <span>Copyright &copy;2024 Ngọc An</span>
        </footer>
</div>

</body>
</html>
