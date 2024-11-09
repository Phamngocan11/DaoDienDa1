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
<style>
    label {
    display: block;
    font-weight: bold;
    margin-bottom: 8px;
    color: #333;
}

/* Select and textarea styling */
select, textarea {
    width: 100%;
    padding: 8px;
    margin-bottom: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

/* Button styling */
button {
    background-color: green;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

button:hover {
    background-color: brown;
}
</style>
<body>
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
            <div class="product">
                <img src="public/image/<?= $sp['img'] ?>" alt="Sản phẩm">
                <div class="details">
                    <h1><?= $sp['name'] ?></h1>
                    <p class="price">Giá: <?= $sp['price'] ?> VND</p>
                    <p>
                        <span>Danh mục: </span> <span><?= $sp['nameDM'] ?></span>
                    </p>
                    <p>
                        <span>Mô tả: </span> <span><?= $sp['desc_ribe'] ?></span>
                    </p>
                    <p>
                        <span>Lượt xem: </span> <span><?= $sp['view'] ?></span>
                    </p>
                    <a href="#" class="buy-button">Mua Ngay</a>
                </div>
            </div>
            <hr>
            <h3>Đánh giá</h3>
   
            <form method="POST" action="?action=them_danhgia">
    <label for="rating">Đánh giá sản phẩm:</label>
    <select name="rating" id="rating">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>
    <br>
    <label for="comment">Bình luận:</label>
    <textarea name="comment" id="comment" rows="4" cols="50" required></textarea>
    <br>

   
    <button type="submit">Gửi đánh giá</button>
</form>
            <hr>
            <div class="related-products">
                <h2>Sản Phẩm Liên Quan</h2>
                <?php
                foreach ($sp_LQ as $value) :
                ?>
                <a href="?action=chitietsp&id=<?= $value['id']?>" class="product-item">
                    <img src="public/image/<?= $value['img'] ?>" alt="">
                    <p><?= $value['name'] ?></p>
                    <p class="price"><?= $value['price'] ?> VND</p>
                </a>
                <?php
                endforeach;
                ?>
            </div>
            <hr>
        </main>
        <footer class="row" style="margin-top: 30px;">
            <span>Copyright &copy;2024 Ngọc An</span>
        </footer>
    </div>
</body>

</html>