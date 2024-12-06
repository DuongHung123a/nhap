<?php
include ("models/News.php");
class AdminController {
    public static function index() {
        $news = News::getAll();
        include "views/admin/news/index.php";
    }
    public static function add() {
        $news = News::getAll();
        include "views/admin/news/add.php";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $id=$_POST['id'];
            $title = $_POST['title'];
            $category_id = $_POST['category_id'];
            $content = $_POST['content'];
            $image_path = 'images/' . $_FILES['image']['name'];

        // Upload file ảnh
        move_uploaded_file($_FILES['image']['tmp_name'], $image_path);

        
        $result = News::AddNews($id, $title,$content,$category_id ,$image_path);

        if ($result) {
            header("Location: index.php?controller=admin&action=index&success=1");
            exit();
        }
        }
    }

    public static function edit() {
        $news = News::getById($_GET["id"]);
        include "views/admin/news/edit.php";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $title = $_POST['title'];
            $category_id = $_POST['category_id'];
            $content = $_POST['content'];
            $image_path = 'images/' . $_FILES['image']['name'];

        // Upload file ảnh
        move_uploaded_file($_FILES['image']['tmp_name'], $image_path);

        
        $result = News::updateNews($_GET["id"], $title,$content,$category_id ,$image_path);

        if ($result) {
            header("Location: index.php?controller=admin&action=index&success=1");
            exit();
        }
        }
    }

    public static function delete() {
        $news = News::deleteNews($_GET["id"]);
            header("Location: index.php?controller=admin&action=index&success=1");
            exit();
    }
}
?>
