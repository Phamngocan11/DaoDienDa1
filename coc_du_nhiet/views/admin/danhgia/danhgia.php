<?php
include "views/admin/layout/header.php";
?>

<main class="row">
    <hr>
    <h1>Đánh giá</h1>
    <hr>

    <table border="1" class="table table-striped table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Số sao</th>
            <th>Nhận xét</th>
            <th>Thao tác</th>
        </tr>
    </thead>
    <tbody>
   <?php foreach($reviews as $review){?>
    <tr>
        <th><?php echo $review['id']?> </th>
        <th><?php echo $review['rating']?>  <img src="public/image/sao.png" alt="" width="20px" height="20px"></th>
        <th><?php echo $review['comment']?> </th>
        <th> <a onclick="return confirm('Bạn có muốn xóa không?')" class="btn btn-primary" href="?action=xoa_danhgia&id=<?php echo $review['id']; ?>">Xóa</a></th> 
    </tr>
    <?php }?>   
</tbody>


</table>
</main>

<?php
include "views/admin/layout/footer.php";
?>
