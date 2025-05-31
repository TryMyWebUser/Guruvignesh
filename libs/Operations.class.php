<?php

class Operations
{
    public static function getCategory()
    {
        $conn = Database::getConnect();
        $sql = "SELECT * FROM `category` ORDER BY `created_at` ASC";
        $result = $conn->query($sql);
        return iterator_to_array($result);
    }
    public static function getCategoryChecker($conn)
    {
        $sql = "SELECT * FROM `category` ORDER BY `created_at` ASC";
        $result = $conn->query($sql);
        return iterator_to_array($result);
    }

    public static function getProducts()
    {
        $conn = Database::getConnect();
        $sql = "SELECT * FROM `products` ORDER BY `created_at` ASC";
        $result = $conn->query($sql);
        return iterator_to_array($result);
    }
    public static function getProductChecker($conn)
    {
        $sql = "SELECT * FROM `products` ORDER BY `created_at` ASC";
        $result = $conn->query($sql);
        return iterator_to_array($result);
    }
    public static function getProductWhere($conn)
    {
        $cate = $_GET['data'];
        $sql = "SELECT * FROM `products` WHERE `product-cate` = '$cate'";
        $result = $conn->query($sql);
        return iterator_to_array($result);
    }
    public static function getGallery($conn)
    {
        $sql = "SELECT * FROM `clients` ORDER BY `created_at` ASC";
        $result = $conn->query($sql);
        return iterator_to_array($result);
    }
   
    public static function getProduct($conn)
    {
        $getID = $_GET['edit_id'];
        $sql = "SELECT * FROM `products` WHERE `id` = '$getID'";
        $result = $conn->query($sql);
        return $result ? $result->fetch_assoc() : null;
    }
}

?>