<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Store</title>
    <!-- icon flaticon -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" 
        rel="stylesheet">
    <!-- AJAX -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" 
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" 
        crossorigin="anonymous"></script>
    <!-- CSS bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
        crossorigin="anonymous">
    <!-- CSS  -->
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body class="bg-light">
  <header>
    <!-- Header top -->
    <div class="header-top bg-body-secondary">
    <div class="container">
        <!-- Nội dung bên trên thanh Navbar -->
        <div class="header-top bg-body-secondary">
            <ul>
                <li><a href="/assets/layout/client/login.html">Đăng nhập</a></li>
                <li><span>|</span></li>
                <li><a href="/assets/layout/client/regisForm.html">Đăng ký</a></li>
                <li><span>|</span></li>
            </ul>
        </div>
    </div>
    </div>
    <!-- Header top end -->
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary small">
        <div class="container">
          <!-- Navbar brand -->
          <a class="navbar-brand" href="/assets/layout/client/index.html">
            <img src="/assets/img/logo-new.png" alt="logo">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse ms-5" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 fw-normal ">
              <li class="nav-item me-3">
                <a class="nav-link active" aria-current="page" href="/assets/layout/client/index.html">TRANG CHỦ</a>
              </li>
              <li class="nav-item me-3">
                <a class="nav-link " aria-current="page" href="/assets/layout/client/product.html">SÁCH</a>
              </li>
              <li class="nav-item me-3">
                <a class="nav-link " aria-current="page" href="/assets/layout/client/stationery.html">VĂN PHÒNG PHẨM</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
                <!-- Tìm kiếm -->
              <input class="nav-search input-search form-control me-0 " type="search" placeholder="Tìm kiếm sản phẩm..." aria-label="Search">
              <button class="btn-search icon-search btn btn-success d-flex align-items-center me-3" type="submit">
                <svg width="16px" height="16px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
              </button>
              <!-- logo cart -->
              <a href="/assets/layout/client/cart.html" class="cart-icon btn btn-success d-flex align-items-center rounded-5 me-3" >
                <svg height="16px" width="16px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                  <path fill="#ffffff" d="M0 24C0 10.7 10.7 0 24 0L69.5 0c22 0 41.5 12.8 50.6 32l411 0c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3l-288.5 0 5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5L488 336c13.3 0 24 10.7 24 24s-10.7 24-24 24l-288.3 0c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5L24 48C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/>
                </svg>
              </a>
              <!-- logo user -->
              <div class="nav-item dropdown d-flex align-items-center rounded-5">
                <div style="width: 41.6px; height: 37.6px; border-radius: 50%;" class="user-icon btn btn-success d-flex align-items-center rounded-5" data-bs-toggle="dropdown" aria-expanded="false" type="submit">
                  <svg width="16px" height="16px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512l388.6 0c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304l-91.4 0z"/></svg>
                </div>
                <ul class="dropdown-menu" style="margin-left: -120px; margin-top: 10px">
                  <li><a class="dropdown-item" href="/assets/layout/client/personalInfo.html" style="--bs-dropdown-link-active-bg: #f2ebea; --bs-dropdown-link-active-color: black;">Thông tin cá nhân</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="/assets/layout/client/orderHistory.html" style="--bs-dropdown-link-active-bg: #f2ebea; --bs-dropdown-link-active-color: black;">Đơn hàng</a></li>
                </ul>                    
              </div>
              
            </form>
        </div>
    </nav>
    <!-- Navbar end -->
</header>