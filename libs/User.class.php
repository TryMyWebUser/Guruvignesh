<?php

class User
{
    public static function login($username, $password)
    {
        Session::start();
        $conn = Database::getConnect();
        
        $sql = "SELECT `id`, `password` FROM `auth` WHERE `username` = '$username' OR `email` = '$username'";
        $res = $conn->query($sql);
        if ($res->num_rows === 1)
        {
            $row = $res->fetch_assoc();
            if ($password === $row['password'])
            {
                Session::regenerate();
                Session::set('login_user', $username);
                header("Location: welcome.php");
                exit;
            }
        }

        return "Invalid Username and Password";
    }

    public static function setCategory($cate, $sub)
    {
        $conn = Database::getConnect();
        $uniqid = uniqid();

        $sql = "INSERT INTO `category` (`category`, `sub_category`, `uniqid`, `created_at`) 
                VALUES (?, ?, ?, NOW())";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $cate, $sub, $uniqid);

        if ($stmt->execute()) {
            header("Location: viewCate.php");
            exit;
        } else {
            return "Error occurred while saving data: " . $stmt->error;
        }
    }
    public static function updateCategory($getID, $cate, $sub)
    {
        $conn = Database::getConnect();

        $sql = "UPDATE `category` SET `category` = ?, `sub_category` = ?, `created_at` = NOW() WHERE `id` = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssi", $cate, $sub, $getID);

        if ($stmt->execute()) {
            header("Location: viewCate.php");
            exit;
        } else {
            return "Error occurred while saving data: " . $stmt->error;
        }
    }

    public static function setProducts($dec, $price, $img, $cate)
    {
        $conn = Database::getConnect();
        $targetDir = "../uploads/solutions/";

        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true);
        }

        $allowImageTypes = ['jpg', 'png', 'jpeg', 'gif', 'webp'];

        $fileName = basename($img["name"]);
        $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        $filePath = $targetDir . uniqid() . '.' . $fileType;

        if (!in_array($fileType, $allowImageTypes)) {
            return "Error: Invalid image type.";
        }

        if (!move_uploaded_file($img["tmp_name"], $filePath)) {
            return "Error uploading image.";
        }

        $sql = "INSERT INTO `products`(`img`, `dec`, `price`, `category`, `created_at`)
                VALUES (?, ?, ?, ?, NOW())";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $filePath, $dec, $price, $cate);

        if ($stmt->execute()) {
            header("Location: viewPro.php");
            exit;
        } else {
            return "Error occurred while saving data: " . $stmt->error;
        }
    }
    public static function updateProducts($dec, $price, $img, $cate, $getID)
    {
        $conn = Database::getConnect();
        $targetDir = "../uploads/solutions/";

        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true);
        }

        $qry = $conn->query("SELECT * FROM `products` WHERE `id` = '$getID'")->fetch_array();

        $allowImageTypes = ['jpg', 'png', 'jpeg', 'gif', 'webp'];

        if (!empty($img["name"])) {
            $fileName = basename($img["name"]);
            $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
            $filePath = $targetDir . uniqid() . '.' . $fileType;

            if (!in_array($fileType, $allowImageTypes)) {
                return "Error: Invalid file type.";
            }

            if ($img["size"] > 5 * 1024 * 1024) {
                return "Error: File size exceeds 5MB.";
            }

            if (!move_uploaded_file($img["tmp_name"], $filePath)) {
                return "Error uploading file.";
            }

            if (!empty($qry['img']) && file_exists($qry['img'])) {
                unlink($qry['img']);
            }

            $sql = "UPDATE `products` SET `img` = ?, `dec` = ?, `price` = ?, `category` = ?, `created_at` = NOW() WHERE `id` = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssssi", $filePath, $dec, $price, $cate, $getID);
        } else {
            $sql = "UPDATE `products` SET `dec` = ?, `category` = ?, `price` = ?, `created_at` = NOW() WHERE `id` = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sssi", $dec, $cate, $price, $getID);
        }

        if ($stmt->execute()) {
            header("Location: viewPro.php");
            exit;
        } else {
            return "Error occurred while saving data: " . $stmt->error;
        }
    }

    public static function setBlogs($img, $title, $owner, $dt, $cate, $intro, $content)
    {
        $conn = Database::getConnect();
        $targetDir = "../uploads/blogs/";

        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true);
        }

        $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
        $fileType = strtolower(pathinfo($img["name"], PATHINFO_EXTENSION));
        $filePath = $targetDir . uniqid() . '.' . $fileType;

        if (!in_array($fileType, $allowedTypes)) {
            return "Error: Invalid image type.";
        }

        if (!move_uploaded_file($img["tmp_name"], $filePath)) {
            return "Error uploading blog image.";
        }

        $sql = "INSERT INTO `blogs` (`img`, `title`, `owner`, `date`, `category`, `dec`, `content`, `created_at`)
                VALUES (?, ?, ?, ?, ?, ?, ?, NOW())";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssss", $filePath, $title, $owner, $dt, $cate, $intro, $content);

        if ($stmt->execute()) {
            header("Location: viewBlogs.php");
            exit;
        } else {
            return "Error occurred while saving data: " . $stmt->error;
        }
    }

    public static function setOur($whom, $deliver, $solution, $get, $cate)
    {
        $conn = Database::getConnect();
        $uniqid = uniqid();

        $sql = "INSERT INTO `our` (`whom`, `deliver`, `solution`, `get`, `category`, `created_at`) 
                VALUES (?, ?, ?, ?, ?, NOW())";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssss", $whom, $deliver, $solution, $get, $cate);

        if ($stmt->execute()) {
            header("Location: viewPro.php");
            exit;
        } else {
            return "Error occurred while saving data: " . $stmt->error;
        }
    }
    public static function updateOur($whom, $deliver, $solution, $get, $cate, $getID)
    {
        $conn = Database::getConnect();

        $sql = "UPDATE `our` SET `whom` = ?, `deliver` = ?, `solution` = ?, `get` = ?, `category` = ?, `created_at` = NOW() WHERE `id` = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssi", $whom, $deliver, $solution, $get, $cate, $getID);

        if ($stmt->execute()) {
            header("Location: viewPro.php");
            exit;
        } else {
            return "Error occurred while saving data: " . $stmt->error;
        }
    }
}

?>