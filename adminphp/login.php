<?php 
  /**
   * AppzStory Admin PHP
   *
   * @link https://appzstory.dev
   * @author Yothin Sapsamran (Jame AppzStory Studio)
   */
  session_start(); // ประกาศ การใช้งาน session
  session_destroy(); // ลบตัวแปร session ทั้งหมด
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
  <title>Login Page | AppzStory Studio (Admin PHP)</title>
  <link rel="shortcut icon" type="image/x-icon" href="assets/images/uploads/icon.ico">
  <!-- stylesheet -->
  <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" >
  <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css" >
  <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css" >
  <link rel="stylesheet" href="assets/css/demo.css" >
  <link rel="stylesheet" href="assets/vendor/css/pages/page-auth.css" >
</head>
<body>
  <div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner">
        <div class="card">
          <div class="card-body">
            <div class="app-brand justify-content-center">
              <a href="index.html" class="app-brand-link gap-2">
                <span class="app-brand-text demo text-body fw-bolder">AppzStory</span>
              </a>
            </div>
            <h4 class="mb-2">Welcome to AppzStory! 👋</h4>
            <p class="mb-4">โปรดลงชื่อเข้าใช้งาน</p>
            <!-- Form Login -->
            <form id="formAuthentication" class="mb-3" action="server/auth/login.php" method="POST">
              <div class="mb-3">
                <label for="email" class="form-label">Username</label>
                <input
                  type="text"
                  class="form-control"
                  id="email"
                  name="username"
                  placeholder="Enter your username"
                  autofocus
                >
              </div>
              <div class="mb-3 form-password-toggle">
                <div class="d-flex justify-content-between">
                  <label class="form-label" for="password">Password</label>
                </div>
                <div class="input-group input-group-merge">
                  <input
                    type="password"
                    id="password"
                    class="form-control"
                    name="password"
                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                  >
                  <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                </div>
              </div>
              <div class="mb-3">
                <button class="btn btn-primary d-grid w-100" type="submit" name="authen">Sign in</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- script -->
  <script src="assets/vendor/libs/jquery/jquery.js"></script>
  <script src="assets/vendor/libs/popper/popper.js"></script>
  <script src="assets/vendor/js/bootstrap.js"></script>
</body>
</html>
