<?php
require_once 'controllers/NewsController.php';

$controller = new NewsController();
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

switch ($action) {
    case 'index':
        $controller->index();
        break;
    case 'detail':
        $id = isset($_GET['id']) ? $_GET['id'] : 0;
        $controller->detail($id);
        break;
    default:
        $controller->index();
        break;
}
?>
