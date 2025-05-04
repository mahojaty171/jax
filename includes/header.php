<?php 
session_start(); # سشن رو فعال می‌کنیم تا بفهمیم کاربر لاگین هست یا نه
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- # لینک بوت‌استرپ برای استایل آماده -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- # فایل استایل خودمون - حواست باشه اسم فایل درست باشه -->
  <link rel="stylesheet" href="style.css">

  <title>Bekharino</title>
</head>
<body>

<!-- # نوار منو بالای سایت -->
<nav class="navbar navbar-expand-xl navbar-dark bg-dark">
  <div class="container">

    <!-- # اسم سایت و لوگو -->
    <a class="navbar-brand fs-2 fw-bold" href="#">
      <span class="text-danger">Bekharino</span>
      <img id="imglogo" src="images/log.png" alt="لوگو">
    </a>

    <!-- # دکمه منو برای حالت موبایل -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDark">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- # آیتم‌های داخل منو -->
    <div class="collapse navbar-collapse" id="navbarDark">
      <ul class="navbar-nav ms-auto mb-2 mb-xl-0 fs-5 text-center">
        <li class="nav-item me-3">
          <a class="nav-link active" href="index.php">Home</a>
        </li>
        <li class="nav-item me-3">
          <a class="nav-link" href="about.php">About</a>
        </li>

        <?php 
        # فقط مدیرها لینک مدیریت رو ببینن
        if(isset($_SESSION["state_login"]) && $_SESSION["state_login"] == true && $_SESSION["user_type"] == "admin") {
        ?>
          <li class="nav-item me-3">
            <a class="nav-link" href="manage.php">Management</a>
          </li>
        <?php } ?>

         <!-- ورود یا خروج بر اساس وضعیت لاگین -->
        <li class="nav-item me-3">
        <?php 
        if(isset($_SESSION["state_login"]) && $_SESSION["state_login"] == true){
        ?>
          <a class="nav-link" href="logout.php">Logout</a>
        <?php
        } else {
        ?>
          <a class="nav-link" href="login.php">Login</a>
        <?php } ?>
        </li>
      </ul>
    </div>
  </div>
</nav>

<main>
