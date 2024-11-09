<?php
class AdminModel
{
    public function check($name, $pass) {
        $sql = "SELECT * FROM users WHERE name = '$name' and pass = '$pass'";
        // một cách gọi để thực thi một truy vấn SQL và trả về kết quả
        return pdo_query($sql);
    }
    
    public function dangky($name, $pass) {
        $sql = "INSERT INTO `users`(`name`, `pass`) 
        VALUES ('$name','$pass')";
        return pdo_execute($sql);
    }

    // sanpham

    public function listSP() {
        $sql = "SELECT categories.name AS nameDM, products.* FROM products 
        INNER JOIN categories ON products.id_category = categories.id";
        return pdo_query($sql);
    }
    
    public function them_sanpham($name,$desc_ribe,$price,$img,$view,$id_category) {
        $sql = "INSERT INTO `products`(`name`, `desc_ribe`, `price`, `img`, `view`, `id_category`) 
        VALUES ('$name','$desc_ribe','$price','$img','$view','$id_category')";
        return pdo_execute($sql);
    }
    
    public function listDM() 
    {
        $sql = "SELECT * FROM categories";
        return pdo_query($sql);
    }

    public function get1SP($id) {
        $sql = "SELECT * FROM `products` WHERE id = $id";
        return pdo_query_one($sql);
    }

    public function sua_sanpham($id, $name, $desc_ribe, $price, $img,$view,$id_category) {
        $sql = "UPDATE `products` SET `name`='$name',`desc_ribe`='$desc_ribe',
        `price`='$price',`img`='$img',`view`='$view',`id_category`='$id_category' WHERE id = $id";
        return pdo_execute($sql);
    }

    public function xoa_sanpham($id) {
        $sql = "DELETE FROM `products` WHERE id = $id";
        return pdo_execute($sql);
    }

    // danhmuc

    public function get1DM($id) {
        $sql = "SELECT `id`, `name` FROM `categories` WHERE id = $id";
        return pdo_query_one($sql);
    }

    public function them_danhmuc($name) {
        $sql = "INSERT INTO `categories`(`name`) VALUES ('$name')";
        return pdo_execute($sql);
    }

    public function xoa_danhmuc($id) {
        $sql = "DELETE FROM `categories` WHERE id = $id";
        return pdo_execute($sql);
    }

    public function sua_danhmuc($id, $name) {
        $sql = "UPDATE `categories` SET `name`='$name' WHERE id = $id";
        return pdo_execute($sql);
    }
    
    public function get1TK($id) {
        $sql = "SELECT * FROM `users` WHERE id = $id";
        return pdo_query_one($sql);
    }

    public function listTK() {
        $sql = "SELECT * FROM `users` WHERE 1";
        return pdo_query($sql);
    }
    
    public function them_taikhoan($name,$pass,$role) {
        $sql = "INSERT INTO `users`(`name`, `pass`, `role`) 
        VALUES ('$name','$pass','$role')";
        return pdo_execute($sql);
    }

    public function xoa_taikhoan($id) {
        $sql = "DELETE FROM `users` WHERE id = $id";
        return pdo_execute($sql);
    }

    public function sua_taikhoan($id, $name, $pass, $role) {
        $sql = "UPDATE `users` SET `name`='$name',`pass`='$pass',`role`='$role' 
        WHERE id = $id";
        return pdo_execute($sql);
    }
   
    public function getAllDanhgia(){
        $sql = "SELECT * FROM reviews";
        return pdo_query($sql);

    }
   // Xóa đánh giá
public function xoa_danhgia($id) {
    $sql = "DELETE FROM `reviews` WHERE id = $id";
    return pdo_execute($sql);
}

// public function sua_danhgia($id, $comment, $rating) {
//     // Câu lệnh SQL để cập nhật đánh giá
//     $sql = "UPDATE `reviews` SET `comment` = '$comment', `rating` = '$rating' WHERE id = $id";
    
//     // Thực thi câu lệnh SQL
//     return pdo_execute($sql);
// }
// public function get1DanhGia($id) {
//     $sql = "SELECT * FROM `reviews` WHERE id = $id";
//     return pdo_query_one($sql);
// }

   

}