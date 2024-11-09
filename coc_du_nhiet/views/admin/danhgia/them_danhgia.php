<?php
include "views/admin/layout/header.php";
?>

<main class="row">
    <hr>
    <h1>Thêm đánh giá</h1>
    <hr>
    <form action="" method="post">
        <div class="form-group">
            <label for="name">Khách hàng :</label>
            <input type="text" class="form-control" id="name">
        </div>
        <div class="form-group">
            <label>Đánh giá :</label>
            <input type="text" class="form-control">
        </div>
    </form>
    <hr>
    <span style="margin-bottom: 15px;"><a class="btn btn-primary" href="">Thêm</a></span>
</main>

<?php
include "views/admin/layout/footer.php";
?>