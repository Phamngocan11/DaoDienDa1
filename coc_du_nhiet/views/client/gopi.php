<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Góp Ý - Cốc Giữ Nhiệt Iced Americano</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="public/css/style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            padding-top: 20px;
        }
        .feedback-section h2 {
            margin-bottom: 15px;
        }
        .feedback-info, .feedback-form {
            margin-bottom: 30px;
        }
        .feedback-info p {
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
        <h1>Góp Ý Cho Chúng Tôi</h1>
    </header>
  
    <section class="feedback-section">
        <h2>Tại Sao Góp Ý Của Bạn Quan Trọng?</h2>
        <div class="feedback-info">
            <p>Chúng tôi luôn lắng nghe và trân trọng mọi ý kiến đóng góp từ phía khách hàng. Góp ý của bạn sẽ giúp chúng tôi cải thiện và mang đến cho bạn những sản phẩm và dịch vụ tốt hơn.</p>
            <p>Nếu bạn có bất kỳ ý tưởng nào về cách chúng tôi có thể cải thiện, đừng ngần ngại gửi cho chúng tôi những phản hồi của bạn.</p>
        </div>

        <h2>Gửi Góp Ý</h2>
        <div class="feedback-form">
            <form action="feedback_submit.php" method="post">
                <div class="mb-3">
                    <label for="name" class="form-label">Họ và tên</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="subject" class="form-label">Chủ đề góp ý</label>
                    <input type="text" class="form-control" id="subject" name="subject" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Nội dung góp ý</label>
                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Gửi Góp Ý</button>
            </form>
        </div>
    </section>

    <footer class="row">
            <span>Copyright &copy;2024 Ngọc An</span>
        </footer>
</div>

</body>
</html>
