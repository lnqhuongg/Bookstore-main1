<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Store</title>
     <!-- icon flaticon -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- CSS bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- CSS  -->
    <link rel="stylesheet" href="/assets/css/admin.css">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/charts/chart-4/assets/css/chart-4.css">
</head>
<body class="bg-light">
  <header class="border-bottom">
    <!-- Header top -->
    <div class="header-top bg-body-secondary">
    <div class="container">
        <!-- Nội dung bên trên thanh Navbar -->
        <div class="header-top bg-body-secondary">
            <ul>
                <li><a href="/assets/layout/client/login.html">Tên Admin</a></li>
                <li><span>|</span></li>
                <li><a href="/assets/layout/client/regisForm.html">Đăng xuất</a></li>
                <li><span>|</span></li>
            </ul>
        </div>
    </div>
    </div>
<!-- Header top end -->
<!-- Navbar -->
<nav class="navbar bg-body-tertiary">
    <div class="container">
      <!-- Navbar brand -->
      <a class="navbar-brand" href="/assets/layout/client/index.html">
        <img src="/assets/img/logo-new.png" alt="logo">
      </a>
      <!-- navbar off -->
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h3 class="offcanvas-title bg-light" id="offcanvasNavbarLabel">Danh mục quản lý</h3>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active  d-flex align-items-center" aria-current="page" href="/assets/layout/admin/statistical.html">
                <img src="/assets/img/bar-chart.png" alt="">
                <span class="ms-3 fs-5">Thống kê</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active  d-flex align-items-center" aria-current="page" href="/assets/layout/admin/banner.html">
                <img src="/assets/img/bar-chart.png" alt="">
                <span class="ms-3 fs-5">Quản lý banner</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link  d-flex align-items-center" aria-current="page" href="/assets/layout/admin/stationeryManagement.html">
                <img src="/assets/img/stationery.png" alt="">
                <span class="ms-3 fs-5">Quản lý văn phòng phẩm</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center" aria-current="page" href="/assets/layout/admin/typeStationery.html">
                <img src="/assets/img/stationeryType.png" alt="">
                <span class="ms-3 fs-5">Quản lý loại văn phòng phẩm</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center" aria-current="page" href="/assets/layout/admin/productManagement.html">
                <img src="/assets/img/open-book.png" alt="">
                <span class="ms-3 fs-5 ">Quản lý sách</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center" aria-current="page" href="/assets/layout/admin/catalog.html">
                <img src="/assets/img/list.png" alt="">
                <span class="ms-3 fs-5">Quản lý danh mục</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link  d-flex align-items-center" aria-current="page" href="/assets/layout/admin/author.html">
                <img src="/assets/img/writer.png" alt="">
                <span class="ms-3 fs-5">Quản lý tác giả</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link  d-flex align-items-center" aria-current="page" href="/assets/layout/admin/discount.html">
                <img src="/assets/img/discount.png" alt="">
                <span class="ms-3 fs-5">Quản lý mã giảm giá</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link  d-flex align-items-center" aria-current="page" href="/assets/layout/admin/importProduct.html">
                <img src="/assets/img/transport.png" alt="">
                <span class="ms-3 fs-5">Quản lý phiếu nhập</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center" aria-current="page" href="/assets/layout/admin/supplier.html">
                <img src="/assets/img/provide.png" alt="">
                <span class="ms-3 fs-5">Quản lý nhà cung cấp</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link  d-flex align-items-center" aria-current="page" href="/assets/layout/admin/orderManagement.html">
                <img src="/assets/img/order.png" alt="">
                <span class="ms-3 fs-5">Quản lý đơn hàng</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link  d-flex align-items-center" aria-current="page" href="/assets/layout/admin/account.html">
                <img src="/assets/img/account.png" alt="">
                <span class="ms-3 fs-5">Quản lý tài khoản</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link  d-flex align-items-center" aria-current="page" href="/assets/layout/client/index.html">
                <img src="/assets/img/rule.png" alt="">
                <span class="ms-3 fs-5">Quản lý nhóm quyền</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link  d-flex align-items-center" aria-current="page" href="/assets/layout/admin/profileAd.html">
                <img src="/assets/img/rule.png" alt="">
                <span class="ms-3 fs-5">Thông tin cá nhân</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
</nav>
  <!-- Navbar end -->
</header>
<!-- --------------------------------------------------------------------------------------------- -->
<div class="container py-4 bg-light">
    <!-- row Panel -->
    <div class="row pb-4">
      <h4>
          Mục đã xóa gần đây
      </h4>
    </div>
    <section class="seperate">
      <select class="form-select me-2" aria-label="Default select example" style="max-width: 200px;">
        <option selected>Tất cả gì gì đó</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
    </section>
    <section class="banner">
        <div class="row py-3 px-1 mb-2">
            <!-- Form tìm kiếm -->
            <div class="col-md-11 d-flex">
              <form class="d-flex w-100">
                  <input type="text" placeholder="Nhập mã, tên sách..." style="max-width: 360px;" class="form-control me-4" id="">
                  <button class="btn btn-success btn-sm " >Tìm kiếm</button>
              </form>
            </div>
          </div>
          <!-- row table -->
          <div class="row">
            <div class="col-md-12">
              <div class=" pb-2 px-2 border rounded-3 shadow bg-white table-responsive">
                <table class="table table-hover">
                    <thead class="text-center">
                      <tr>
                        <th scope="col">Mã </th>
                        <th scope="col">Hình ảnh</th>
                        <th scope="col">Mô tả</th>
                        <th scope="col">Tùy chỉnh</th>
        
                      </tr>
                    </thead>
                    <tbody  class="table-group-divider">
                        <tr>
                          <!-- Mã  -->
                            <td class="align-middle text-center" scope="row">
                                SP001
                            </td>
                          <!-- Hình ảnh -->
                            <td class="book-image text-center" scope="row">
                                <img src="/assets/img/slider2.webp" style="width:350px" alt="">
                            </td>
                          <!-- Mô tả -->
                            <td class="book-name  align-middle text-center" style="max-width: 150px; word-wrap: break-word;">
                                Quảng cáo gì gì đó lor 
                            </td>
                          <!-- Tùy chỉnh -->
                            <td class="align-middle text-center">
                              <!-- Button xem thông tin chi tiết -->
                                <button class="btn" fdprocessedid="r9x0b9" type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdropInfo">
                                    <img src="/assets/img/trash.png" style="width:20px" alt="">
                                </button>
                                <button class="btn" fdprocessedid="r9x0b9" type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdropInfo">
                                    <img src="/assets/img/restore.png" style="width:20px" alt="">
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
              </div>
            </div>
          </div>
    </section>
    <section class="book">
        <div class="row py-3 px-1 mb-2">
            <!-- Form tìm kiếm -->
            <div class="col-md-11 d-flex">
              <form class="d-flex w-100">
                  <input type="text" placeholder="Nhập mã, tên sách..." style="max-width: 360px;" class="form-control me-4" id="">
                  <button class="btn btn-success btn-sm " >Tìm kiếm</button>
              </form>
            </div>
          </div>
          <!-- row table -->
          <div class="row">
            <div class="col-md-12">
              <div class=" pb-2 px-2 border rounded-3 shadow bg-white table-responsive">
                <table class="table table-hover">
                    <thead class="text-center">
                      <tr>
                        <th scope="col">Mã </th>
                        <th scope="col">Hình ảnh</th>
                        <th scope="col">Mô tả</th>
                        <th scope="col">Tùy chỉnh</th>
        
                      </tr>
                    </thead>
                    <tbody  class="table-group-divider">
                        <tr>
                          <!-- Mã  -->
                            <td class="align-middle text-center" scope="row">
                                SP001
                            </td>
                          <!-- Hình ảnh -->
                            <td class="book-image text-center" scope="row">
                                <img src="/assets/img/slider2.webp" style="width:350px" alt="">
                            </td>
                          <!-- Mô tả -->
                            <td class="book-name  align-middle text-center" style="max-width: 150px; word-wrap: break-word;">
                                Quảng cáo gì gì đó lor 
                            </td>
                          <!-- Tùy chỉnh -->
                            <td class="align-middle text-center">
                              <!-- Button xem thông tin chi tiết -->
                                <button class="btn" fdprocessedid="r9x0b9" type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdropInfo">
                                    <img src="/assets/img/trash.png" style="width:20px" alt="">
                                </button>
                                <button class="btn" fdprocessedid="r9x0b9" type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdropInfo">
                                    <img src="/assets/img/restore.png" style="width:20px" alt="">
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
              </div>
            </div>
          </div>
    </section>
    <section class="stationery">
        <div class="row py-3 px-1 mb-2">
            <!-- Form tìm kiếm -->
            <div class="col-md-11 d-flex">
              <form class="d-flex w-100">
                  <input type="text" placeholder="Nhập mã, tên sách..." style="max-width: 360px;" class="form-control me-4" id="">
                  <button class="btn btn-success btn-sm " >Tìm kiếm</button>
              </form>
            </div>
          </div>
          <!-- row table -->
          <div class="row">
            <div class="col-md-12">
              <div class=" pb-2 px-2 border rounded-3 shadow bg-white table-responsive">
                <table class="table table-hover">
                    <thead class="text-center">
                      <tr>
                        <th scope="col">Mã </th>
                        <th scope="col">Hình ảnh</th>
                        <th scope="col">Mô tả</th>
                        <th scope="col">Tùy chỉnh</th>
        
                      </tr>
                    </thead>
                    <tbody  class="table-group-divider">
                        <tr>
                          <!-- Mã  -->
                            <td class="align-middle text-center" scope="row">
                                SP001
                            </td>
                          <!-- Hình ảnh -->
                            <td class="book-image text-center" scope="row">
                                <img src="/assets/img/slider2.webp" style="width:350px" alt="">
                            </td>
                          <!-- Mô tả -->
                            <td class="book-name  align-middle text-center" style="max-width: 150px; word-wrap: break-word;">
                                Quảng cáo gì gì đó lor 
                            </td>
                          <!-- Tùy chỉnh -->
                            <td class="align-middle text-center">
                              <!-- Button xem thông tin chi tiết -->
                                <button class="btn" fdprocessedid="r9x0b9" type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdropInfo">
                                    <img src="/assets/img/trash.png" style="width:20px" alt="">
                                </button>
                                <button class="btn" fdprocessedid="r9x0b9" type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdropInfo">
                                    <img src="/assets/img/restore.png" style="width:20px" alt="">
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
              </div>
            </div>
          </div>
    </section>
    <!-- row filter, button thêm sách -->
    
    <!-- Row phân trang -->
    <div class="row mt-4">
      <div class="col-md-12 d-flex justify-content-center">
          <nav aria-label="Page navigation example">
              <ul class="pagination">
                <li class="page-item me-2">
                  <a class="page-link rounded-circle" href="#" aria-label="Previous">
                    <span aria-hidden="true"><i class="pre fa-solid fa-angle-left"></i></span>
                  </a>
                </li>
                <li class="page-item me-2 "><a class="page-link rounded-circle" href="#">1</a></li>
                <li class="page-item me-2"><a class="page-link rounded-circle" href="#">2</a></li>
                <li class="page-item me-2"><a class="page-link rounded-circle" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link rounded-circle" href="#" aria-label="Next">
                    <span aria-hidden="true"><i class="next fa-solid fa-angle-right"></i></span>
                  </a>
                </li>
              </ul>
          </nav>   
      </div>
    </div>

    
  </div>

<!-- ------------------------------------------------------------------------------------------------- -->
    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="/assets/js/admin/uploadImg.js"></script>
    <script src="/assets/js/admin/chartRevenue.js"></script>
    <script src="/assets/js/admin/chartTop.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://unpkg.com/bs-brain@2.0.4/components/charts/chart-4/assets/controller/chart-4.js"></script>


    
    
</body>
</html>