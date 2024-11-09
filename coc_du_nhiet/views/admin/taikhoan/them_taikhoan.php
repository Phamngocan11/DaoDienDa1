<?php
include "views/admin/layout/header.php";
?>

<main class="row">
    <hr>
    <h1>Thêm khách hàng</h1>
    <hr>
    <form action="" method="post">
        <div class="form-group">
            <label for="name">Loại tài khoản :</label>
            <select name="role" id="">
                <option value="" hidden>----------</option>
                <option value="0">Admin</option>
                <option value="1">Khách hàng</option>
            </select>
        </div>
        <div class="form-group">
            <label for="name">Tên :</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label>Mật khẩu :</label>
            <input type="text" class="form-control" name="pass" required>
        </div>
        <hr>
        <button style="margin-bottom: 15px; width: 100px; height: 40px; border-radius: 5px; border: none;" class="btn-primary" type="submit">Thêm</button>
    </form>
</main>

<?php
include "views/admin/layout/footer.php";
?>