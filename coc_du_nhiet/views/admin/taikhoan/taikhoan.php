<?php
    include "views/admin/layout/header.php";
?>

<main class="row">
    <hr>
    <h1>Tài khoản</h1>
    <hr>
    <span class="btn-them"><a class="btn btn-primary" href="?action=them_taikhoan">Thêm</a></span>
    <table border="1" class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên tài khoản</th>
                <th>Mật khẩu</th>
                <th>Loại tài khoản</th>
                <th>Công cụ</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($listTK as $key => $value) :
                ?>
                <tr>
                <td><?= $key+1 ?></td>
                <td><?= $value['name'] ?></td>
                <td><?= $value['pass'] ?></td>
                <td><?= ($value['role'] == 0) ? 'admin' : 'khách hàng' ?></td>
                <td>
                    <a class="btn btn-primary" href="?action=sua_taikhoan&id=<?= $value['id'] ?>">Sửa</a>
                    <a onclick="return confirm('Bạn có muốn xóa không?')" class="btn btn-primary" href="?action=xoa_taikhoan&id=<?= $value['id'] ?>">Xóa</a>
                </td>
            </tr>
                <?php
                endforeach;
            ?>
            
        </tbody>
    </table>
</main>

<?php
    include "views/admin/layout/footer.php";
?>
