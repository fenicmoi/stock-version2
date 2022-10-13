<?php 
/**
 * AppzStory Admin PHP
 *
 * @link https://appzstory.dev
 * @author Yothin Sapsamran (Jame AppzStory Studio)
 */
require_once('../../server/authen.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" >
    <title> Dashboard | AppzStory Studio (Admin PHP)</title>
    <link rel="icon" type="image/x-icon" href="../../assets/img/favicon/favicon.ico" >
    <link rel="stylesheet" href="../../assets/vendor/fonts/boxicons.css" >
    <link rel="stylesheet" href="../../assets/vendor/css/core.css" class="template-customizer-core-css" >
    <link rel="stylesheet" href="../../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" >
    <link rel="stylesheet" href="../../assets/css/demo.css" >
    <!-- Helpers -->
    <script src="../../assets/vendor/js/helpers.js"></script>
    <script src="../../assets/js/config.js"></script>
</head>
<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <?php require_once('../includes/_sidebar.php') ?>
            <div class="layout-page">
                <?php require_once('../includes/_navbar.php') ?>
                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <div class="col-12 mb-4">
                                <div class="card">
                                    <div class="d-flex align-items-end row">
                                    <div class="col-sm-7">
                                        <div class="card-body">
                                        <h5 class="card-title text-primary">ยินดีต้อนรับ! 🎉</h5>
                                        <p class="mb-4">
                                            ระบบหลังบ้านของเรา สามารถจัดการข้อมูลต่างๆ เพิ่ม ลบ แก้ไข เรียกดูข้อมูล ปรับเปลี่ยนสถานะ ดูรายงาน ได้ที่นี่เลย
                                        </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 text-center text-sm-left">
                                        <div class="card-body pb-0 px-0 px-md-4">
                                        <img
                                            src="../../assets/images/uploads/man-with-laptop-light.png"
                                            height="140"
                                            alt="View Badge User"
                                            data-app-dark-img="uploads/man-with-laptop-dark.png"
                                            data-app-light-img="uploads/man-with-laptop-light.png"
                                        >
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-6 mb-4">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <div class="card-title d-flex align-items-start justify-content-between">
                                            <div class="avatar flex-shrink-0">
                                                <img src="../../assets/images/uploads/chart-success.png" alt="chart success" class="rounded">
                                            </div>
                                            <div class="dropdown">
                                                <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                                    <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="fw-semibold d-block mb-1">Profit</span>
                                        <h3 class="card-title mb-2">$12,628</h3>
                                        <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 mb-4">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <div class="card-title d-flex align-items-start justify-content-between">
                                            <div class="avatar flex-shrink-0">
                                                <img src="../../assets/images/uploads/wallet-info.png" alt="Credit Card" class="rounded">
                                            </div>
                                            <div class="dropdown">
                                                <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                                    <a class="dropdown-item" href="javascript:void(0);">View More</a>

                                                </div>
                                            </div>
                                        </div>
                                        <span>Sales</span>
                                        <h3 class="card-title text-nowrap mb-1">$4,679</h3>
                                        <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 mb-4">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <div class="card-title d-flex align-items-start justify-content-between">
                                            <div class="avatar flex-shrink-0">
                                                <img src="../../assets/images/uploads/paypal.png" alt="Credit Card" class="rounded">
                                            </div>
                                            <div class="dropdown">
                                                <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                                                    <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="d-block mb-1">Payments</span>
                                        <h3 class="card-title text-nowrap mb-2">$2,456</h3>
                                        <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i> -14.82%</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 mb-4">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <div class="card-title d-flex align-items-start justify-content-between">
                                            <div class="avatar flex-shrink-0">
                                                <img src="../../assets/images/uploads/cc-primary.png" alt="Credit Card" class="rounded">
                                            </div>
                                            <div class="dropdown">
                                                <button class="btn p-0" type="button" id="cardOpt1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="cardOpt1">
                                                    <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="fw-semibold d-block mb-1">Transactions</span>
                                        <h3 class="card-title mb-2">$14,857</h3>
                                        <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.14%</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php require_once('../includes/_footer.php') ?>
                    <div class="content-backdrop fade"></div>
                </div>
            </div>
        </div>
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>

    <script src="../../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../../assets/vendor/libs/popper/popper.js"></script>
    <script src="../../assets/vendor/js/bootstrap.js"></script>
    <script src="../../assets/vendor/js/menu.js"></script>
    <script src="../../assets/js/main.js"></script>
</body>
</html>

