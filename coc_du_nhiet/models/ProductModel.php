<?php
// include './includes/connect_db.php';
class ProductModel
{
    // public $conn;
    // public function __construct()
    // {
    //     $this->conn = connectDB();
    // }

    public function getAll()
    {
        $sql = "SELECT * FROM products";
        // $stmt = $this->conn->query($sql);
        // return $stmt->fetchAll(PDO::FETCH_ASSOC);
        return pdo_query($sql);
    }

    public function top10()
    {
        $sql = "SELECT * FROM products ORDER BY products.view DESC LIMIT 10";
        return pdo_query($sql);
    }

    public function getSP_DM($id)
    {
        $sql = "SELECT categories.name AS nameDM, products.* FROM products 
        INNER JOIN categories ON products.id_category = categories.id 
        WHERE categories.id = $id";
        return pdo_query($sql);
    }

    public function getONE($id)
    {
        $sql = "SELECT categories.name AS nameDM, products.* FROM products 
        INNER JOIN categories ON products.id_category = categories.id
        WHERE products.id = $id";
        return pdo_query_one($sql);
    }

    public function sp_LQ($id)
    {
        $sql = "SELECT * FROM products WHERE products.id_category = $id";
        return pdo_query($sql);
    }

    public function loc($kw)
    {
        $sql = "SELECT * FROM products 
        WHERE LOWER(name) LIKE LOWER('%$kw%')";
        return pdo_query($sql);
    }
    public function addReview( $rating, $comment)
    {
        $sql = "INSERT INTO reviews ( rating, comment) VALUES ( '$rating', '$comment')";
        return pdo_execute($sql);
    }
    

}
