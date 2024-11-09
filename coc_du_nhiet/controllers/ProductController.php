<?php
include './models/ProductModel.php';
include "./models/CategoryModel.php";
class ProductController
{
    public $productModel;
    public $categoryModel;
    public function __construct()
    {
        $this->productModel = new ProductModel();
        $this->categoryModel = new CategoryModel();
    }
   

    public function home()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $products = $this->productModel->loc($_POST['search']);
        }else{
            $products = $this->productModel->getAll();
        }
        $top10 = $this->productModel->top10();
        $category = $this->categoryModel->getAll();
        include "views/client/index.php";
    }

    public function getSP_DM()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $sp_dm = $this->productModel->getSP_DM($id);
            include "views/client/showsp.php";
        }
    }
    public function getONE()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $sp = $this->productModel->getONE($id);
            $sp_LQ = $this->productModel->sp_LQ($sp['id_category']);
            include "views/client/chitietsp.php";
        }
    }
    
 
    public function them_danhgia() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $rating = $_POST['rating'];
            $comment = $_POST['comment'];
            
            // Add your condition to check for admin here, if needed.
            $this->productModel->addReview($rating, $comment);
            
            echo "<script>alert('Thêm thành công!');</script>";
            echo "<script>window.location.href = '?action=home';</script>"; // Redirect to the home page or a relevant page.
        }
        
        include "views/client/chitietsp.php";
    }
    
    
    
}
