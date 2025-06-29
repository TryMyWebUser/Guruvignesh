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

    public static function getProducts()
    {
        $conn = Database::getConnect();
        $sql = "SELECT * FROM `products` ORDER BY `created_at` ASC";
        $result = $conn->query($sql);
        return iterator_to_array($result);
    }
    public static function getProductChecker()
    {
        $conn = Database::getConnect();
        $sql = "SELECT * FROM `products` ORDER BY `created_at` ASC";
        $result = $conn->query($sql);
        return iterator_to_array($result);
    }
    public static function getProductWhere()
    {
        $cate = $_GET['data'];
        $conn = Database::getConnect();
        $sql = "SELECT * FROM `products` WHERE `category` = '$cate'";
        $result = $conn->query($sql);
        return $result ? $result->fetch_assoc() : null;
    }
   
    public static function getProduct()
    {
        $getID = $_GET['edit_id'];
        $conn = Database::getConnect();
        $sql = "SELECT * FROM `products` WHERE `id` = '$getID'";
        $result = $conn->query($sql);
        return $result ? $result->fetch_assoc() : null;
    }

    public static function getBlogs()
    {
        $conn = Database::getConnect();
        $sql = "SELECT * FROM `blogs` ORDER BY `created_at` ASC";
        $result = $conn->query($sql);
        return iterator_to_array($result);
    }

    public static function getBlog()
    {
        $getID = $_GET['data'];
        $conn = Database::getConnect();
        $sql = "SELECT * FROM `blogs` WHERE `id` = '$getID'";
        $result = $conn->query($sql);
        return $result ? $result->fetch_assoc() : null;
    }
    public static function getBloger()
    {
        $getID = (int)$_GET['edit_id'];
        $conn = Database::getConnect();
        $sql = "SELECT * FROM `blogs` WHERE `id` = '$getID'";
        $result = $conn->query($sql);
        return $result ? $result->fetch_assoc() : null;
    }

    public static function getEditCate()
    {
        $getID = (int)$_GET['edit_id'];
        $conn = Database::getConnect();
        $sql = "SELECT * FROM `category` WHERE `id` = '$getID'";
        $result = $conn->query($sql);
        return $result ? $result->fetch_assoc() : null;
    }

    public static function getOurs()
    {
        $conn = Database::getConnect();
        $sql = "SELECT * FROM `our` ORDER BY `created_at` ASC";
        $result = $conn->query($sql);
        return iterator_to_array($result);
    }

    public static function getOur()
    {
        $getID = $_GET['data'];
        $conn = Database::getConnect();
        $sql = "SELECT * FROM `our` WHERE `category` = '$getID'";
        $result = $conn->query($sql);
        return $result ? $result->fetch_assoc() : null;
    }
    public static function getEditOur()
    {
        $getID = (int)$_GET['edit_id'];
        $conn = Database::getConnect();
        $sql = "SELECT * FROM `our` WHERE `id` = '$getID'";
        $result = $conn->query($sql);
        return $result ? $result->fetch_assoc() : null;
    }
}

?>