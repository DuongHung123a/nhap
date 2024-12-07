<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang tin tức</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar {
            background-color: orange;
        }
        .navbar-brand, .nav-link {
            color: white !important;
        }
        .main-content img {
            width: 100%;
            height: auto;
        }
        .advertisement {
            margin-top: 20px;
        }
        .video-section img {
            width: 100%;
            height: auto;
        }
        .footer {
            background-color: #f8f9fa;
            padding: 20px;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<!-- Header -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="#">KHANHHOA247.COM</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#">Trang chủ</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Giải trí</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Sức khỏe</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Thời nay</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Video</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Main Content -->
<div class="container mt-4">
    <div class="row">
        <!-- Left Column -->
        <div class="col-lg-8">
            <div class="main-content">
                <?php 
                // Lấy bài viết đầu tiên làm tin chính
                $mainNews = $news[0];
                ?>
                <img src="<?= $mainNews['image'] ?>" alt="Main News Image">
                <h2 class="mt-3"><?= $mainNews['title'] ?></h2>
                <p><?= substr($mainNews['content'], 0, 200) ?>...</p>
            </div>
            <div class="row mt-4">
                <?php
                // Hiển thị các bài viết phụ (bắt đầu từ bài thứ 2)
                for ($i = 1; $i < count($news); $i++):
                    $subNews = $news[$i];
                ?>
                <div class="col-md-6 mb-4">
                    <img src="<?= $subNews['image'] ?>" alt="Sub News Image">
                    <h5 class="mt-2"><?= $subNews['title'] ?></h5>
                </div>
                <?php endfor; ?>
            </div>
        </div>

        <!-- Right Column -->
        <div class="col-lg-4">
            <div class="advertisement">
                <img src="https://via.placeholder.com/300x250" alt="Advertisement">
            </div>
            <div class="advertisement">
                <img src="https://via.placeholder.com/300x250" alt="Advertisement">
            </div>
        </div>
    </div>

    <!-- Video Section -->
    <div class="video-section mt-5">
        <h3 class="mb-4">Video</h3>
        <div class="row">
            <?php
            // Hiển thị các bài viết dưới dạng video
            foreach ($news as $videoNews):
            ?>
            <div class="col-md-4">
                <img src="<?= $videoNews['image'] ?>" alt="Video Thumbnail">
                <p class="mt-2"><?= $videoNews['title'] ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!-- Footer -->
<div class="footer">
    <p>© 2024 - KHANHHOA247.COM</p>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
