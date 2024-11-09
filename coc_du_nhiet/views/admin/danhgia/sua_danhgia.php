<?php
include "views/admin/layout/header.php";
?>

<main class="row">
    <hr>
    <h1>Sửa đánh giá</h1>
    <hr>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $review['id'] ?>">

        <div class="form-group">
            <label for="review_text">Nội dung đánh giá:</label>
            <textarea class="form-control" name="review_text" rows="4"><?= $review['review_text'] ?></textarea>
        </div>
        
        <div class="form-group">
            <label for="rating">Điểm đánh giá:</label>
            <input class="form-control" type="number" name="rating" value="<?= $review['rating'] ?>" min="1" max="5">
        </div>
        
        <hr>
        <button style="margin-bottom: 15px; width: 100px; height: 40px; border-radius: 5px; border: none;" class="btn-primary" type="submit">
            Lưu
        </button>
    </form>
</main>

<?php
include "views/admin/layout/footer.php";
?>
