<?php
include './models/AdminModel.php';
class AdminController
{
    public $adminModel;
    public function __construct()
    {
        $this->adminModel = new AdminModel();
    }

    public function check()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $pass = $_POST['pass'];
            $check = $this->adminModel->check($name, $pass);

            if (empty($check)) {
                echo "<script>alert('Sai tài khoản hoặc mật khẩu!')
                window.location.href = '?action=home';
                </script>";
            } else {
                echo "<script>alert('Đăng nhập thành công!');
                window.location.href = '?action=home';
                </script>";
                $_SESSION['user'] = $check['0']['role'];
            }
        }
    }

    public function dangxuat()
    {
        unset($_SESSION['user']);
        echo "<script>alert('Đăng xuất thành công!');
                window.location.href = '?action=home';
                </script>";
    }

    public function dangky() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Đoạn mã kiểm tra xem phương thức request có phải là POST không. 
            // Nếu đúng, nghĩa là form đã được gửi đi và server có thể bắt đầu xử lý dữ liệu.
            $name = $_POST['name'];
            $pass = $_POST['pass'];
            $this->adminModel->dangky($name, $pass);
            echo "<script>alert('Đăng ký thành công!');
                window.location.href = '?action=home';
                </script>";
            $_SESSION['user'] = 1;
            }
            include "views/client/form_dangky.php";
    }

    public function listSP() {
        $listSP = $this->adminModel->listSP();
        include "views/admin/sanpham/sanpham.php";
    }

    public function them_sanpham() {
        //lấy danh sách danh mục 
        $listDM = $this->adminModel->listDM();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $desc_ribe = $_POST['mota'];
            $price = $_POST['price'];
            $img = $_FILES['img'];
            $view = $_POST['view'];
            $id_category = $_POST['id_category'];

            $loadIMG = uploadFile($img);
            // thêm sản phẩm
            $this->adminModel->them_sanpham($name,$desc_ribe,$price,$loadIMG,$view,$id_category);
            echo "<script>alert('Thêm thành công!');
            window.location.href = '?action=sp_admin';
            </script>";
        }
        include "views/admin/sanpham/them_sanpham.php";
    }

    public function sua_sanpham() {
        $listDM = $this->adminModel->listDM();
        // Kiểm Tra Xem Có ID Sản Phẩm Hay Không
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $sanpham = $this->adminModel->get1SP($id);
        }
        // Xử Lý Khi Form khi được gửi đi 
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
             // Đoạn mã kiểm tra xem phương thức request có phải là POST không. 
            // Nếu đúng, nghĩa là form đã được gửi đi và server có thể bắt đầu xử lý dữ liệu.
            $name = $_POST['name'];
            $desc_ribe = $_POST['mota'];
            $price = $_POST['price'];
            $img = $_FILES['img'];
            $view = $_POST['view'];
            $id_category = $_POST['id_category'];
            $loadIMG = $_POST['img_h'];
            if ($img['size'] > 0) {
                $loadIMG = uploadFile($img);
            }
            //câu lệnh cập nhật sản phẩm 
            $this->adminModel->sua_sanpham($id, $name, $desc_ribe, $price, $loadIMG,$view,$id_category);
            echo "<script>alert('Sửa thành công!');
             window.location.href = '?action=sp_admin';
            </script>";
        }
        include "views/admin/sanpham/sua_sanpham.php";
    }

    public function xoa_sanpham() {
        $id = $_GET['id'];
        $this->adminModel->xoa_sanpham($id);
        echo "<script>alert('Xóa thành công!');
             window.location.href = '?action=sp_admin';
            </script>";
    }
    
    public function listDM() {
        $listDM = $this->adminModel->listDM();
        include "views/admin/danhmuc/danhmuc.php";
    }

    public function xoa_danhmuc() {
        $id = $_GET['id'];
        $this->adminModel->xoa_danhmuc($id);
        echo "<script>alert('Xóa thành công!');
             window.location.href = '?action=listDM';
            </script>";
    }

    public function them_danhmuc() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $this->adminModel->them_danhmuc($name);
            echo "<script>alert('Thêm thành công!');
            window.location.href = '?action=listDM';
            </script>";
        }
        include "views/admin/danhmuc/them_danhmuc.php";
    }

    public function sua_danhmuc() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $danhmuc = $this->adminModel->get1DM($id);
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            
            $this->adminModel->sua_danhmuc($id, $name);
            echo "<script>alert('Sửa thành công!');
             window.location.href = '?action=listDM';
            </script>";
        }
        include "views/admin/danhmuc/sua_danhmuc.php";
    }

    public function listTK() {
        $listTK = $this->adminModel->listTK();
        include "views/admin/taikhoan/taikhoan.php";
    }

    public function them_taikhoan() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $pass = $_POST['pass'];
            $role = $_POST['role'];
            $this->adminModel->them_taikhoan($name,$pass,$role);
            echo "<script>alert('Thêm thành công!');
            window.location.href = '?action=listTK';
            </script>";
        }
        include "views/admin/taikhoan/them_taikhoan.php";
    }

    public function xoa_taikhoan() {
        $id = $_GET['id'];
        $this->adminModel->xoa_taikhoan($id);
        echo "<script>alert('Xóa thành công!');
             window.location.href = '?action=listTK';
            </script>";
    }

    public function sua_taikhoan() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $taikhoan = $this->adminModel->get1TK($id);
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $pass = $_POST['pass'];
            $role = $_POST['role'];
            
            $this->adminModel->sua_taikhoan($id, $name, $pass, $role);
            echo "<script>alert('Sửa thành công!');
             window.location.href = '?action=listTK';
            </script>";
        }
        include "views/admin/taikhoan/sua_taikhoan.php";
    }
   public function danhgia(){
    $reviews = $this->adminModel->getAllDanhgia();
    include "views/admin/danhgia/danhgia.php";
   }
 
public function xoa_danhgia() {
    $id = $_GET['id'];
    $this->adminModel->xoa_danhgia($id);
    echo "<script>alert('Xóa đánh giá thành công!');
         window.location.href = '?action=danhgia';
        </script>";
}
// public function sua_danhgia() {
//     if (isset($_GET['id'])) {
//         $id = $_GET['id'];
//         $reviews = $this->adminModel->get1DanhGia($id);
//     }
    
//     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//         $comment = $_POST['comment'];
//         $rating = $_POST['rating'];
//         $id = $_POST['id']; // Đảm bảo id được gửi từ form

//         // Gọi phương thức sửa đánh giá trong model
//         $this->adminModel->sua_danhgia($id, $comment, $rating);
//         echo "<script>alert('Sửa đánh giá thành công!');
//              window.location.href = '?action=listDanhGia';
//             </script>";
//     }
    
//     include "views/admin/danhgia/sua_danhgia.php";
// }

}
