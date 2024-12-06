<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chi tiết tin tức</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1><?= $news['title'] ?></h1>
    <img src="<?= $news['image'] ?>" class="img-fluid mb-4" alt="Ảnh bài viết">
    <p><?= $news['content'] ?></p>
    <a href="index.php" class="btn btn-secondary mt-4">Quay lại danh sách</a>
</div>
</body>
</html>
