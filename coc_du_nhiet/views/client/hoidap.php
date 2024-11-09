<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hỏi Đáp - Cốc Giữ Nhiệt Iced Americano</title>
    <link rel="stylesheet" href="public/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            padding-top: 20px;
        }
        .faq-section h2 {
            margin-bottom: 20px;
        }
        .faq-item {
            margin-bottom: 15px;
        }
        .faq-item h4 {
            cursor: pointer;
        }
        .faq-item p {
            display: none;
            margin-top: 5px;
        }
    </style>
    <script>
        function toggleAnswer(element) {
            var answer = element.nextElementSibling;
            if (answer.style.display === "block") {
                answer.style.display = "none";
            } else {
                answer.style.display = "block";
            }
        }
    </script>
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
        <h1>Hỏi Đáp - Cốc Giữ Nhiệt Iced Americano</h1>
    </header>

    <section class="faq-section">
        <h2>Câu Hỏi Thường Gặp</h2>

        <div class="faq-item">
            <h4 onclick="toggleAnswer(this)">1. Cốc giữ nhiệt có thể giữ nhiệt được bao lâu?</h4>
            <p>Cốc giữ nhiệt của chúng tôi có thể giữ nóng trong 12 giờ và giữ lạnh trong 24 giờ.</p>
        </div>

        <div class="faq-item">
            <h4 onclick="toggleAnswer(this)">2. Chất liệu cốc giữ nhiệt là gì?</h4>
            <p>Cốc giữ nhiệt của chúng tôi được làm từ thép không gỉ cao cấp, đảm bảo an toàn và bền bỉ.</p>
        </div>

        <div class="faq-item">
            <h4 onclick="toggleAnswer(this)">3. Làm thế nào để vệ sinh cốc giữ nhiệt?</h4>
            <p>Bạn nên rửa cốc bằng tay với nước ấm và xà phòng nhẹ. Tránh sử dụng máy rửa chén để đảm bảo độ bền của cốc.</p>
        </div>

        <div class="faq-item">
            <h4 onclick="toggleAnswer(this)">4. Tôi có thể mua cốc giữ nhiệt ở đâu?</h4>
            <p>Bạn có thể đặt hàng trực tiếp trên trang web của chúng tôi hoặc mua tại các cửa hàng đại lý trên toàn quốc.</p>
        </div>

        <div class="faq-item">
            <h4 onclick="toggleAnswer(this)">5. Chính sách bảo hành của sản phẩm như thế nào?</h4>
            <p>Chúng tôi cung cấp bảo hành 12 tháng cho tất cả các sản phẩm cốc giữ nhiệt của chúng tôi.</p>
        </div>
    </section>

    <footer class="row">
            <span>Copyright &copy;2024 Ngọc An</span>
        </footer>
</div>

</body>
</html>
