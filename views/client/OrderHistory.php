<section class="order-history">
    <div class="container py-4">
        <!-- Row breadcum -->
        <div class="row">
            <h5>
                Lịch sử đơn hàng
            </h5>
            <div class="breadcrumb-holder">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                  <ol class="breadcrumb d-inline-flex pe-3 py-1 align-items-center">
                    <li class="breadcrumb-item d-flex align-items-center">
                      <a href="/assets/layout/client/index.html" class="text-decoration-none small text-black">Trang chủ</a>
                    </li>
                    <li class="breadcrumb-item d-flex align-items-center active small" aria-current="page">
                      Đơn hàng
                    </li>
                  </ol>
                </nav>
            </div>
        </div>
        <!-- Row thanh tìm kiếm -->
        <div class="row">
            <div class="col-md-12 d-flex">
                <form class="d-flex w-100">
                    <select class="form-select me-2" aria-label="Default select example" style="max-width: 200px;">
                        <option selected>Chọn trạng thái</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <input type="text" placeholder="Nhập mã hóa đơn..." style="max-width: 440px;" class="form-control me-4" id="">
                    <!-- div tìm kiếm theo khoảng giá -->
                    <div class="d-flex justify-content-center text-align-items-center me-4">
                      <label for="calendarInput" class="me-2 d-flex justify-content-center align-items-center">
                        Ngày:
                      </label>
                      <input type="date" id="calendarInput" style="max-width: 140px;" class="form-control me-2">
                      <span class="fs-3 me-2">-</span>
                      <input type="date" id="calendarInput" style="max-width: 140px;" class="form-control me-2">
                    </div>
                    <div class="me-2 d-flex justify-content-center text-align-items-center">
                      <span class="me-2 d-flex justify-content-center align-items-center">Tiền:</span>
                      <button class="btn me-2 d-flex justify-content-center align-items-center">
                        <i class="fa-solid fa-arrow-up-wide-short fs-5 "></i>
                      </button>
                      <button class="btn me-2 d-flex justify-content-center align-items-center">
                        <i class="fa-solid fa-arrow-down-wide-short fs-5 "></i>
                      </button>
                    </div>
                    <button class="btn btn-success btn-sm " >Tìm kiếm</button>
                </form>
            </div>
        </div>
        <!-- Row bảng lịch sử mua hàng -->
        <div class="row pt-2 mt-1">
            <div class="col-md-12">
                <div class="cart-product pb-2 px-2 border rounded-3 shadow bg-white table-responsive">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col" class="text-secondary">Mã đơn</th>
                            <th scope="col" class="text-secondary">Ngày mua</th>
                            <th scope="col" class="text-secondary">Thời gian</th>
                            <th scope="col" class="text-secondary">Tổng tiền</th>
                            <th scope="col" class="text-secondary">Trạng thái</th>
                            <th scope="col" class="text-secondary">Xem chi tiết</th>
                          </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-middle" scope="row">
                                    <span class="fw-medium">HD001</span>
                                </td>
                                <td class="pe-4 align-middle ">
                                    12/10/2024
                                </td>
                                <td class="align-middle opacity-75">
                                    10:22:35
                                </td>                                             
                                <td class="align-middle">
                                    <span class="price fw-medium">299.000đ</span>
                                </td>
                                <td class="align-middle">
                                    <span class="text-danger">Chờ xác nhận</span>
                                </td>
                                <td class="align-middle">
                                    <!-- Button trigger modal - xem chi tiết đơn hàng -->
                                    <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        <i  class="fa-solid fa-circle-info fs-5 text-black"></i>
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl" >
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Chi tiết đơn hàng</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <!-- col bảng sản phẩm trong đơn hàng -->
                                                        <div class="col-md-8">
                                                            <div class="cart-product pb-2 px-2 border rounded-3 shadow bg-white table-responsive">
                                                                <table class="table">
                                                                    <thead>
                                                                      <tr>
                                                                        <th scope="col" colspan="2" class="text-dark">Sản phẩm</th>
                                                                        <th scope="col" class="text-dark">Đơn giá</th>
                                                                        <th scope="col" class="text-dark">Số lượng</th>
                                                                        <th scope="col" class="text-dark">Thành tiền</th>
                                                                        
                                                                      </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="book-image" scope="row">
                                                                                <img src="/assets/uploads/spdemo.jpg" style="width:120px" alt="">
                                                                            </td>
                                                                            <td class="pe-4 book-name ps-0 align-middle fw-medium" style="max-width: 150px; word-wrap: break-word;">
                                                                                Pháp Y Tống Từ  
                                                                            </td>
                                                                            <td class="align-middle opacity-75">
                                                                                100.000đ
                                                                            </td>                                             
                                                                            <td class="quantity align-middle opacity-75" ">
                                                                                6
                                                                            </td>
                                                                            <td class="book-price align-middle">
                                                                                <span class="price-text">
                                                                                    <span class="price fw-medium">299.000đ</span>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="book-image" scope="row">
                                                                                <img src="/assets/uploads/spdemo.jpg" style="width:120px" alt="">
                                                                            </td>
                                                                            <td class="pe-4 book-name ps-0 align-middle fw-medium" style="max-width: 150px; word-wrap: break-word;">
                                                                                Pháp Y Tống Từ  
                                                                            </td>
                                                                            <td class="align-middle opacity-75">
                                                                                100.000đ
                                                                            </td>                                             
                                                                            <td class="quantity align-middle opacity-75" ">
                                                                                6
                                                                            </td>
                                                                            <td class="book-price align-middle">
                                                                                <span class="price-text">
                                                                                    <span class="price fw-medium">299.000đ</span>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="book-image" scope="row">
                                                                                <img src="/assets/uploads/spdemo.jpg" style="width:120px" alt="">
                                                                            </td>
                                                                            <td class="pe-4 book-name ps-0 align-middle fw-medium" style="max-width: 150px; word-wrap: break-word;">
                                                                                Pháp Y Tống Từ  
                                                                            </td>
                                                                            <td class="align-middle opacity-75">
                                                                                100.000đ
                                                                            </td>                                             
                                                                            <td class="quantity align-middle opacity-75" ">
                                                                                6
                                                                            </td>
                                                                            <td class="book-price align-middle">
                                                                                <span class="price-text">
                                                                                    <span class="price fw-medium">299.000đ</span>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="book-image" scope="row">
                                                                                <img src="/assets/uploads/spdemo.jpg" style="width:120px" alt="">
                                                                            </td>
                                                                            <td class="pe-4 book-name ps-0 align-middle fw-medium" style="max-width: 150px; word-wrap: break-word;">
                                                                                Pháp Y Tống Từ  
                                                                            </td>
                                                                            <td class="align-middle opacity-75">
                                                                                100.000đ
                                                                            </td>                                             
                                                                            <td class="quantity align-middle opacity-75" ">
                                                                                6
                                                                            </td>
                                                                            <td class="book-price align-middle">
                                                                                <span class="price-text">
                                                                                    <span class="price fw-medium">299.000đ</span>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        
                                                                       
                                                                    </tbody>
                                                                </table>
                                                                
                                                            </div>
                                                        </div>
                                                        <!-- col thông tin thanh toán -->
                                                        <div class="col-md-4 ">
                                                            <!-- Row địa chỉ giao hàng -->
                                                            <div class="row pe-3">
                                                                <div class="card border shadow rounded-3 w-auto" style="width: 18rem;">
                                                                    <ul class="list-group list-group-flush">
                                                                      <li class="list-group-item fw-bold py-2">Thông tin nhận hàng</li>
                                                                      <li class="list-group-item">
                                                                        <div class="mt-2 mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <span>Ngô Đức Trọng</span>
                                                                        </div>
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <span>0326584557</span>
                                                                        </div>
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <span>256 Đồng Khởi, Xã Vĩnh Trường, Huyện An Phú, An Giang</span>
                                                                        </div>
                                                                      </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- Row thông tin đơn hàng-->
                                                            <div class="row mt-2 pe-3">
                                                                <div class="card border shadow rounded-3 w-100" style="width: 18rem;">
                                                                    <ul class="list-group list-group-flush">
                                                                      <li class="list-group-item fw-bold py-2">Thông tin đơn hàng</li>
                                                                      <li class="list-group-item fw-bold py-2">
                                                                        <div class="mt-2 mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Trạng thái</strong>
                                                                            <span class="text-danger fw-bold">
                                                                                Chờ xác nhận
                                                                            </span>
                                                                        </div>
                                                                      </li>
                                                                      <li class="list-group-item">
                                                                        <div class="mt-2 mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Mã đơn hàng</strong>
                                                                            <span>
                                                                                HD001
                                                                            </span>
                                                                        </div>
                                                                        <div class="mt-2 mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Ngày tạo đơn hàng</strong>
                                                                            <span>
                                                                                2025-01-07
                                                                            </span>
                                                                        </div>
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Ngày cập nhật</strong>
                                                                            <span>
                                                                                2025-01-07
                                                                            </span>
                                                                        </div>
                                                                        
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Phương thức thanh toán</strong>
                                                                            <span>
                                                                                Tiền mặt (COD)
                                                                            </span>
                                                                        </div>
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Tổng số lượng sản phẩm</strong>
                                                                            <span>
                                                                                6
                                                                            </span>
                                                                        </div>
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Tổng tiền sản phẩm</strong>
                                                                            <span>
                                                                                459.000đ
                                                                            </span>
                                                                        </div>
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Phí giao hàng</strong>
                                                                            <span>
                                                                                41.000đ
                                                                            </span>
                                                                        </div>
                                                                      </li>
                                                                      <li class="list-group-item">
                                                                        <div class="mb-2 mt-2 d-flex justify-content-between align-items-center small fw-medium">
                                                                            <strong>Thành tiền</strong>
                                                                            <span style="color:rgb(60, 199, 60)" class="fs-5">500.000đ</span>
                                                                        </div>
                                                                      </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer me-1">
                                                    <button type="button me-5" class="btn btn-success">Hủy đơn hàng</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                    
                                
                            </tr>
                            <tr>
                                <td class="align-middle" scope="row">
                                    <span class="fw-medium">HD001</span>
                                </td>
                                <td class="pe-4 align-middle ">
                                    12/10/2024
                                </td>
                                <td class="align-middle opacity-75">
                                    10:22:35
                                </td>                                             
                                <td class="align-middle">
                                    <span class="price fw-medium">299.000đ</span>
                                </td>
                                <td class="align-middle">
                                    <span class="text-danger">Chờ xác nhận</span>
                                </td>
                                <td class="align-middle">
                                    <!-- Button trigger modal - xem chi tiết đơn hàng -->
                                    <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        <i  class="fa-solid fa-circle-info fs-5 text-black"></i>
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl" >
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Chi tiết đơn hàng</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <!-- col bảng sản phẩm trong đơn hàng -->
                                                        <div class="col-md-8">
                                                            <div class="cart-product pb-2 px-2 border rounded-3 shadow bg-white table-responsive">
                                                                <table class="table">
                                                                    <thead>
                                                                      <tr>
                                                                        <th scope="col" colspan="2" class="text-dark">Sản phẩm</th>
                                                                        <th scope="col" class="text-dark">Đơn giá</th>
                                                                        <th scope="col" class="text-dark">Số lượng</th>
                                                                        <th scope="col" class="text-dark">Thành tiền</th>
                                                                        
                                                                      </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="book-image" scope="row">
                                                                                <img src="/assets/uploads/spdemo.jpg" style="width:120px" alt="">
                                                                            </td>
                                                                            <td class="pe-4 book-name ps-0 align-middle fw-medium" style="max-width: 150px; word-wrap: break-word;">
                                                                                Pháp Y Tống Từ  
                                                                            </td>
                                                                            <td class="align-middle opacity-75">
                                                                                100.000đ
                                                                            </td>                                             
                                                                            <td class="quantity align-middle opacity-75" ">
                                                                                6
                                                                            </td>
                                                                            <td class="book-price align-middle">
                                                                                <span class="price-text">
                                                                                    <span class="price fw-medium">299.000đ</span>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="book-image" scope="row">
                                                                                <img src="/assets/uploads/spdemo.jpg" style="width:120px" alt="">
                                                                            </td>
                                                                            <td class="pe-4 book-name ps-0 align-middle fw-medium" style="max-width: 150px; word-wrap: break-word;">
                                                                                Pháp Y Tống Từ  
                                                                            </td>
                                                                            <td class="align-middle opacity-75">
                                                                                100.000đ
                                                                            </td>                                             
                                                                            <td class="quantity align-middle opacity-75" ">
                                                                                6
                                                                            </td>
                                                                            <td class="book-price align-middle">
                                                                                <span class="price-text">
                                                                                    <span class="price fw-medium">299.000đ</span>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="book-image" scope="row">
                                                                                <img src="/assets/uploads/spdemo.jpg" style="width:120px" alt="">
                                                                            </td>
                                                                            <td class="pe-4 book-name ps-0 align-middle fw-medium" style="max-width: 150px; word-wrap: break-word;">
                                                                                Pháp Y Tống Từ  
                                                                            </td>
                                                                            <td class="align-middle opacity-75">
                                                                                100.000đ
                                                                            </td>                                             
                                                                            <td class="quantity align-middle opacity-75" ">
                                                                                6
                                                                            </td>
                                                                            <td class="book-price align-middle">
                                                                                <span class="price-text">
                                                                                    <span class="price fw-medium">299.000đ</span>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="book-image" scope="row">
                                                                                <img src="/assets/uploads/spdemo.jpg" style="width:120px" alt="">
                                                                            </td>
                                                                            <td class="pe-4 book-name ps-0 align-middle fw-medium" style="max-width: 150px; word-wrap: break-word;">
                                                                                Pháp Y Tống Từ  
                                                                            </td>
                                                                            <td class="align-middle opacity-75">
                                                                                100.000đ
                                                                            </td>                                             
                                                                            <td class="quantity align-middle opacity-75" ">
                                                                                6
                                                                            </td>
                                                                            <td class="book-price align-middle">
                                                                                <span class="price-text">
                                                                                    <span class="price fw-medium">299.000đ</span>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        
                                                                       
                                                                    </tbody>
                                                                </table>
                                                                
                                                            </div>
                                                        </div>
                                                        <!-- col thông tin thanh toán -->
                                                        <div class="col-md-4 ">
                                                            <!-- Row địa chỉ giao hàng -->
                                                            <div class="row pe-3">
                                                                <div class="card border shadow rounded-3 w-auto" style="width: 18rem;">
                                                                    <ul class="list-group list-group-flush">
                                                                      <li class="list-group-item fw-bold py-2">Thông tin nhận hàng</li>
                                                                      <li class="list-group-item">
                                                                        <div class="mt-2 mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <span>Ngô Đức Trọng</span>
                                                                        </div>
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <span>0326584557</span>
                                                                        </div>
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <span>256 Đồng Khởi, Xã Vĩnh Trường, Huyện An Phú, An Giang</span>
                                                                        </div>
                                                                      </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- Row thông tin đơn hàng-->
                                                            <div class="row mt-2 pe-3">
                                                                <div class="card border shadow rounded-3 w-100" style="width: 18rem;">
                                                                    <ul class="list-group list-group-flush">
                                                                      <li class="list-group-item fw-bold py-2">Thông tin đơn hàng</li>
                                                                      <li class="list-group-item fw-bold py-2">
                                                                        <div class="mt-2 mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Trạng thái</strong>
                                                                            <span class="text-danger fw-bold">
                                                                                Chờ xác nhận
                                                                            </span>
                                                                        </div>
                                                                      </li>
                                                                      <li class="list-group-item">
                                                                        <div class="mt-2 mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Mã đơn hàng</strong>
                                                                            <span>
                                                                                HD001
                                                                            </span>
                                                                        </div>
                                                                        <div class="mt-2 mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Ngày tạo đơn hàng</strong>
                                                                            <span>
                                                                                2025-01-07
                                                                            </span>
                                                                        </div>
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Ngày cập nhật</strong>
                                                                            <span>
                                                                                2025-01-07
                                                                            </span>
                                                                        </div>
                                                                        
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Phương thức thanh toán</strong>
                                                                            <span>
                                                                                Tiền mặt (COD)
                                                                            </span>
                                                                        </div>
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Tổng số lượng sản phẩm</strong>
                                                                            <span>
                                                                                6
                                                                            </span>
                                                                        </div>
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Tổng tiền sản phẩm</strong>
                                                                            <span>
                                                                                459.000đ
                                                                            </span>
                                                                        </div>
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Phí giao hàng</strong>
                                                                            <span>
                                                                                41.000đ
                                                                            </span>
                                                                        </div>
                                                                      </li>
                                                                      <li class="list-group-item">
                                                                        <div class="mb-2 mt-2 d-flex justify-content-between align-items-center small fw-medium">
                                                                            <strong>Thành tiền</strong>
                                                                            <span style="color:rgb(60, 199, 60)" class="fs-5">500.000đ</span>
                                                                        </div>
                                                                      </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer me-1">
                                                    <button type="button me-5" class="btn btn-success">Hủy đơn hàng</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                    
                                
                            </tr>
                            <tr>
                                <td class="align-middle" scope="row">
                                    <span class="fw-medium">HD001</span>
                                </td>
                                <td class="pe-4 align-middle ">
                                    12/10/2024
                                </td>
                                <td class="align-middle opacity-75">
                                    10:22:35
                                </td>                                             
                                <td class="align-middle">
                                    <span class="price fw-medium">299.000đ</span>
                                </td>
                                <td class="align-middle">
                                    <span class="text-danger">Chờ xác nhận</span>
                                </td>
                                <td class="align-middle">
                                    <!-- Button trigger modal - xem chi tiết đơn hàng -->
                                    <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        <i  class="fa-solid fa-circle-info fs-5 text-black"></i>
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl" >
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Chi tiết đơn hàng</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <!-- col bảng sản phẩm trong đơn hàng -->
                                                        <div class="col-md-8">
                                                            <div class="cart-product pb-2 px-2 border rounded-3 shadow bg-white table-responsive">
                                                                <table class="table">
                                                                    <thead>
                                                                      <tr>
                                                                        <th scope="col" colspan="2" class="text-dark">Sản phẩm</th>
                                                                        <th scope="col" class="text-dark">Đơn giá</th>
                                                                        <th scope="col" class="text-dark">Số lượng</th>
                                                                        <th scope="col" class="text-dark">Thành tiền</th>
                                                                        
                                                                      </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="book-image" scope="row">
                                                                                <img src="/assets/uploads/spdemo.jpg" style="width:120px" alt="">
                                                                            </td>
                                                                            <td class="pe-4 book-name ps-0 align-middle fw-medium" style="max-width: 150px; word-wrap: break-word;">
                                                                                Pháp Y Tống Từ  
                                                                            </td>
                                                                            <td class="align-middle opacity-75">
                                                                                100.000đ
                                                                            </td>                                             
                                                                            <td class="quantity align-middle opacity-75" ">
                                                                                6
                                                                            </td>
                                                                            <td class="book-price align-middle">
                                                                                <span class="price-text">
                                                                                    <span class="price fw-medium">299.000đ</span>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="book-image" scope="row">
                                                                                <img src="/assets/uploads/spdemo.jpg" style="width:120px" alt="">
                                                                            </td>
                                                                            <td class="pe-4 book-name ps-0 align-middle fw-medium" style="max-width: 150px; word-wrap: break-word;">
                                                                                Pháp Y Tống Từ  
                                                                            </td>
                                                                            <td class="align-middle opacity-75">
                                                                                100.000đ
                                                                            </td>                                             
                                                                            <td class="quantity align-middle opacity-75" ">
                                                                                6
                                                                            </td>
                                                                            <td class="book-price align-middle">
                                                                                <span class="price-text">
                                                                                    <span class="price fw-medium">299.000đ</span>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="book-image" scope="row">
                                                                                <img src="/assets/uploads/spdemo.jpg" style="width:120px" alt="">
                                                                            </td>
                                                                            <td class="pe-4 book-name ps-0 align-middle fw-medium" style="max-width: 150px; word-wrap: break-word;">
                                                                                Pháp Y Tống Từ  
                                                                            </td>
                                                                            <td class="align-middle opacity-75">
                                                                                100.000đ
                                                                            </td>                                             
                                                                            <td class="quantity align-middle opacity-75" ">
                                                                                6
                                                                            </td>
                                                                            <td class="book-price align-middle">
                                                                                <span class="price-text">
                                                                                    <span class="price fw-medium">299.000đ</span>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="book-image" scope="row">
                                                                                <img src="/assets/uploads/spdemo.jpg" style="width:120px" alt="">
                                                                            </td>
                                                                            <td class="pe-4 book-name ps-0 align-middle fw-medium" style="max-width: 150px; word-wrap: break-word;">
                                                                                Pháp Y Tống Từ  
                                                                            </td>
                                                                            <td class="align-middle opacity-75">
                                                                                100.000đ
                                                                            </td>                                             
                                                                            <td class="quantity align-middle opacity-75" ">
                                                                                6
                                                                            </td>
                                                                            <td class="book-price align-middle">
                                                                                <span class="price-text">
                                                                                    <span class="price fw-medium">299.000đ</span>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        
                                                                       
                                                                    </tbody>
                                                                </table>
                                                                
                                                            </div>
                                                        </div>
                                                        <!-- col thông tin thanh toán -->
                                                        <div class="col-md-4 ">
                                                            <!-- Row địa chỉ giao hàng -->
                                                            <div class="row pe-3">
                                                                <div class="card border shadow rounded-3 w-auto" style="width: 18rem;">
                                                                    <ul class="list-group list-group-flush">
                                                                      <li class="list-group-item fw-bold py-2">Thông tin nhận hàng</li>
                                                                      <li class="list-group-item">
                                                                        <div class="mt-2 mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <span>Ngô Đức Trọng</span>
                                                                        </div>
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <span>0326584557</span>
                                                                        </div>
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <span>256 Đồng Khởi, Xã Vĩnh Trường, Huyện An Phú, An Giang</span>
                                                                        </div>
                                                                      </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- Row thông tin đơn hàng-->
                                                            <div class="row mt-2 pe-3">
                                                                <div class="card border shadow rounded-3 w-100" style="width: 18rem;">
                                                                    <ul class="list-group list-group-flush">
                                                                      <li class="list-group-item fw-bold py-2">Thông tin đơn hàng</li>
                                                                      <li class="list-group-item fw-bold py-2">
                                                                        <div class="mt-2 mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Trạng thái</strong>
                                                                            <span class="text-danger fw-bold">
                                                                                Chờ xác nhận
                                                                            </span>
                                                                        </div>
                                                                      </li>
                                                                      <li class="list-group-item">
                                                                        <div class="mt-2 mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Mã đơn hàng</strong>
                                                                            <span>
                                                                                HD001
                                                                            </span>
                                                                        </div>
                                                                        <div class="mt-2 mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Ngày tạo đơn hàng</strong>
                                                                            <span>
                                                                                2025-01-07
                                                                            </span>
                                                                        </div>
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Ngày cập nhật</strong>
                                                                            <span>
                                                                                2025-01-07
                                                                            </span>
                                                                        </div>
                                                                        
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Phương thức thanh toán</strong>
                                                                            <span>
                                                                                Tiền mặt (COD)
                                                                            </span>
                                                                        </div>
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Tổng số lượng sản phẩm</strong>
                                                                            <span>
                                                                                6
                                                                            </span>
                                                                        </div>
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Tổng tiền sản phẩm</strong>
                                                                            <span>
                                                                                459.000đ
                                                                            </span>
                                                                        </div>
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Phí giao hàng</strong>
                                                                            <span>
                                                                                41.000đ
                                                                            </span>
                                                                        </div>
                                                                      </li>
                                                                      <li class="list-group-item">
                                                                        <div class="mb-2 mt-2 d-flex justify-content-between align-items-center small fw-medium">
                                                                            <strong>Thành tiền</strong>
                                                                            <span style="color:rgb(60, 199, 60)" class="fs-5">500.000đ</span>
                                                                        </div>
                                                                      </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer me-1">
                                                    <button type="button me-5" class="btn btn-success">Hủy đơn hàng</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                    
                                
                            </tr>
                            <tr>
                                <td class="align-middle" scope="row">
                                    <span class="fw-medium">HD001</span>
                                </td>
                                <td class="pe-4 align-middle ">
                                    12/10/2024
                                </td>
                                <td class="align-middle opacity-75">
                                    10:22:35
                                </td>                                             
                                <td class="align-middle">
                                    <span class="price fw-medium">299.000đ</span>
                                </td>
                                <td class="align-middle">
                                    <span class="text-danger">Chờ xác nhận</span>
                                </td>
                                <td class="align-middle">
                                    <!-- Button trigger modal - xem chi tiết đơn hàng -->
                                    <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        <i  class="fa-solid fa-circle-info fs-5 text-black"></i>
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl" >
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Chi tiết đơn hàng</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <!-- col bảng sản phẩm trong đơn hàng -->
                                                        <div class="col-md-8">
                                                            <div class="cart-product pb-2 px-2 border rounded-3 shadow bg-white table-responsive">
                                                                <table class="table">
                                                                    <thead>
                                                                      <tr>
                                                                        <th scope="col" colspan="2" class="text-dark">Sản phẩm</th>
                                                                        <th scope="col" class="text-dark">Đơn giá</th>
                                                                        <th scope="col" class="text-dark">Số lượng</th>
                                                                        <th scope="col" class="text-dark">Thành tiền</th>
                                                                        
                                                                      </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="book-image" scope="row">
                                                                                <img src="/assets/uploads/spdemo.jpg" style="width:120px" alt="">
                                                                            </td>
                                                                            <td class="pe-4 book-name ps-0 align-middle fw-medium" style="max-width: 150px; word-wrap: break-word;">
                                                                                Pháp Y Tống Từ  
                                                                            </td>
                                                                            <td class="align-middle opacity-75">
                                                                                100.000đ
                                                                            </td>                                             
                                                                            <td class="quantity align-middle opacity-75" ">
                                                                                6
                                                                            </td>
                                                                            <td class="book-price align-middle">
                                                                                <span class="price-text">
                                                                                    <span class="price fw-medium">299.000đ</span>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="book-image" scope="row">
                                                                                <img src="/assets/uploads/spdemo.jpg" style="width:120px" alt="">
                                                                            </td>
                                                                            <td class="pe-4 book-name ps-0 align-middle fw-medium" style="max-width: 150px; word-wrap: break-word;">
                                                                                Pháp Y Tống Từ  
                                                                            </td>
                                                                            <td class="align-middle opacity-75">
                                                                                100.000đ
                                                                            </td>                                             
                                                                            <td class="quantity align-middle opacity-75" ">
                                                                                6
                                                                            </td>
                                                                            <td class="book-price align-middle">
                                                                                <span class="price-text">
                                                                                    <span class="price fw-medium">299.000đ</span>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="book-image" scope="row">
                                                                                <img src="/assets/uploads/spdemo.jpg" style="width:120px" alt="">
                                                                            </td>
                                                                            <td class="pe-4 book-name ps-0 align-middle fw-medium" style="max-width: 150px; word-wrap: break-word;">
                                                                                Pháp Y Tống Từ  
                                                                            </td>
                                                                            <td class="align-middle opacity-75">
                                                                                100.000đ
                                                                            </td>                                             
                                                                            <td class="quantity align-middle opacity-75" ">
                     <!-- Button xem thông tin chi tiết -->
                        <button class="btn" fdprocessedid="r9x0b9" type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdropInfoSupplier">
                            <img src="/assets/img/info.png" style="width:20px" alt="">
                        </button                                                           6
                                                                            </td>
                                                                            <td class="book-price align-middle">
                                                                                <span class="price-text">
                                                                                    <span class="price fw-medium">299.000đ</span>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="book-image" scope="row">
                                                                                <img src="/assets/uploads/spdemo.jpg" style="width:120px" alt="">
                                                                            </td>
                                                                            <td class="pe-4 book-name ps-0 align-middle fw-medium" style="max-width: 150px; word-wrap: break-word;">
                                                                                Pháp Y Tống Từ  
                                                                            </td>
                                                                            <td class="align-middle opacity-75">
                                                                                100.000đ
                                                                            </td>                                             
                                                                            <td class="quantity align-middle opacity-75" ">
                                                                                6
                                                                            </td>
                                                                            <td class="book-price align-middle">
                                                                                <span class="price-text">
                                                                                    <span class="price fw-medium">299.000đ</span>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        
                                                                       
                                                                    </tbody>
                                                                </table>
                                                                
                                                            </div>
                                                        </div>
                                                        <!-- col thông tin thanh toán -->
                                                        <div class="col-md-4 ">
                                                            <!-- Row địa chỉ giao hàng -->
                                                            <div class="row pe-3">
                                                                <div class="card border shadow rounded-3 w-auto" style="width: 18rem;">
                                                                    <ul class="list-group list-group-flush">
                                                                      <li class="list-group-item fw-bold py-2">Thông tin nhận hàng</li>
                                                                      <li class="list-group-item">
                                                                        <div class="mt-2 mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <span>Ngô Đức Trọng</span>
                                                                        </div>
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <span>0326584557</span>
                                                                        </div>
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <span>256 Đồng Khởi, Xã Vĩnh Trường, Huyện An Phú, An Giang</span>
                                                                        </div>
                                                                      </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- Row thông tin đơn hàng-->
                                                            <div class="row mt-2 pe-3">
                                                                <div class="card border shadow rounded-3 w-100" style="width: 18rem;">
                                                                    <ul class="list-group list-group-flush">
                                                                      <li class="list-group-item fw-bold py-2">Thông tin đơn hàng</li>
                                                                      <li class="list-group-item fw-bold py-2">
                                                                        <div class="mt-2 mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Trạng thái</strong>
                                                                            <span class="text-danger fw-bold">
                                                                                Chờ xác nhận
                                                                            </span>
                                                                        </div>
                                                                      </li>
                                                                      <li class="list-group-item">
                                                                        <div class="mt-2 mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Mã đơn hàng</strong>
                                                                            <span>
                                                                                HD001
                                                                            </span>
                                                                        </div>
                                                                        <div class="mt-2 mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Ngày tạo đơn hàng</strong>
                                                                            <span>
                                                                                2025-01-07
                                                                            </span>
                                                                        </div>
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Ngày cập nhật</strong>
                                                                            <span>
                                                                                2025-01-07
                                                                            </span>
                                                                        </div>
                                                                        
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Phương thức thanh toán</strong>
                                                                            <span>
                                                                                Tiền mặt (COD)
                                                                            </span>
                                                                        </div>
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Tổng số lượng sản phẩm</strong>
                                                                            <span>
                                                                                6
                                                                            </span>
                                                                        </div>
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Tổng tiền sản phẩm</strong>
                                                                            <span>
                                                                                459.000đ
                                                                            </span>
                                                                        </div>
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Phí giao hàng</strong>
                                                                            <span>
                                                                                41.000đ
                                                                            </span>
                                                                        </div>
                                                                      </li>
                                                                      <li class="list-group-item">
                                                                        <div class="mb-2 mt-2 d-flex justify-content-between align-items-center small fw-medium">
                                                                            <strong>Thành tiền</strong>
                                                                            <span style="color:rgb(60, 199, 60)" class="fs-5">500.000đ</span>
                                                                        </div>
                                                                      </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer me-1">
                                                    <button type="button me-5" class="btn btn-success">Hủy đơn hàng</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                    
                                
                            </tr>
                            <tr>
                                <td class="align-middle" scope="row">
                                    <span class="fw-medium">HD001</span>
                                </td>
                                <td class="pe-4 align-middle ">
                                    12/10/2024
                                </td>
                                <td class="align-middle opacity-75">
                                    10:22:35
                                </td>                                             
                                <td class="align-middle">
                                    <span class="price fw-medium">299.000đ</span>
                                </td>
                                <td class="align-middle">
                                    <span class="text-danger">Chờ xác nhận</span>
                                </td>
                                <td class="align-middle">
                                    <!-- Button trigger modal - xem chi tiết đơn hàng -->
                                    <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        <i  class="fa-solid fa-circle-info fs-5 text-black"></i>
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl" >
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Chi tiết đơn hàng</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <!-- col bảng sản phẩm trong đơn hàng -->
                                                        <div class="col-md-8">
                                                            <div class="cart-product pb-2 px-2 border rounded-3 shadow bg-white table-responsive">
                                                                <table class="table">
                                                                    <thead>
                                                                      <tr>
                                                                        <th scope="col" colspan="2" class="text-dark">Sản phẩm</th>
                                                                        <th scope="col" class="text-dark">Đơn giá</th>
                                                                        <th scope="col" class="text-dark">Số lượng</th>
                                                                        <th scope="col" class="text-dark">Thành tiền</th>
                                                                        
                                                                      </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="book-image" scope="row">
                                                                                <img src="/assets/uploads/spdemo.jpg" style="width:120px" alt="">
                                                                            </td>
                                                                            <td class="pe-4 book-name ps-0 align-middle fw-medium" style="max-width: 150px; word-wrap: break-word;">
                                                                                Pháp Y Tống Từ  
                                                                            </td>
                                                                            <td class="align-middle opacity-75">
                                                                                100.000đ
                                                                            </td>                                             
                                                                            <td class="quantity align-middle opacity-75" ">
                                                                                6
                                                                            </td>
                                                                            <td class="book-price align-middle">
                                                                                <span class="price-text">
                                                                                    <span class="price fw-medium">299.000đ</span>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="book-image" scope="row">
                                                                                <img src="/assets/uploads/spdemo.jpg" style="width:120px" alt="">
                                                                            </td>
                                                                            <td class="pe-4 book-name ps-0 align-middle fw-medium" style="max-width: 150px; word-wrap: break-word;">
                                                                                Pháp Y Tống Từ  
                                                                            </td>
                                                                            <td class="align-middle opacity-75">
                                                                                100.000đ
                                                                            </td>                                             
                                                                            <td class="quantity align-middle opacity-75" ">
                                                                                6
                                                                            </td>
                                                                            <td class="book-price align-middle">
                                                                                <span class="price-text">
                                                                                    <span class="price fw-medium">299.000đ</span>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="book-image" scope="row">
                                                                                <img src="/assets/uploads/spdemo.jpg" style="width:120px" alt="">
                                                                            </td>
                                                                            <td class="pe-4 book-name ps-0 align-middle fw-medium" style="max-width: 150px; word-wrap: break-word;">
                                                                                Pháp Y Tống Từ  
                                                                            </td>
                                                                            <td class="align-middle opacity-75">
                                                                                100.000đ
                                                                            </td>                                             
                                                                            <td class="quantity align-middle opacity-75" ">
                                                                                6
                                                                            </td>
                                                                            <td class="book-price align-middle">
                                                                                <span class="price-text">
                                                                                    <span class="price fw-medium">299.000đ</span>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="book-image" scope="row">
                                                                                <img src="/assets/uploads/spdemo.jpg" style="width:120px" alt="">
                                                                            </td>
                                                                            <td class="pe-4 book-name ps-0 align-middle fw-medium" style="max-width: 150px; word-wrap: break-word;">
                                                                                Pháp Y Tống Từ  
                                                                            </td>
                                                                            <td class="align-middle opacity-75">
                                                                                100.000đ
                                                                            </td>                                             
                                                                            <td class="quantity align-middle opacity-75" ">
                                                                                6
                                                                            </td>
                                                                            <td class="book-price align-middle">
                                                                                <span class="price-text">
                                                                                    <span class="price fw-medium">299.000đ</span>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        
                                                                       
                                                                    </tbody>
                                                                </table>
                                                                
                                                            </div>
                                                        </div>
                                                        <!-- col thông tin thanh toán -->
                                                        <div class="col-md-4 ">
                                                            <!-- Row địa chỉ giao hàng -->
                                                            <div class="row pe-3">
                                                                <div class="card border shadow rounded-3 w-auto" style="width: 18rem;">
                                                                    <ul class="list-group list-group-flush">
                                                                      <li class="list-group-item fw-bold py-2">Thông tin nhận hàng</li>
                                                                      <li class="list-group-item">
                                                                        <div class="mt-2 mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <span>Ngô Đức Trọng</span>
                                                                        </div>
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <span>0326584557</span>
                                                                        </div>
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <span>256 Đồng Khởi, Xã Vĩnh Trường, Huyện An Phú, An Giang</span>
                                                                        </div>
                                                                      </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- Row thông tin đơn hàng-->
                                                            <div class="row mt-2 pe-3">
                                                                <div class="card border shadow rounded-3 w-100" style="width: 18rem;">
                                                                    <ul class="list-group list-group-flush">
                                                                      <li class="list-group-item fw-bold py-2">Thông tin đơn hàng</li>
                                                                      <li class="list-group-item fw-bold py-2">
                                                                        <div class="mt-2 mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Trạng thái</strong>
                                                                            <span class="text-danger fw-bold">
                                                                                Chờ xác nhận
                                                                            </span>
                                                                        </div>
                                                                      </li>
                                                                      <li class="list-group-item">
                                                                        <div class="mt-2 mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Mã đơn hàng</strong>
                                                                            <span>
                                                                                HD001
                                                                            </span>
                                                                        </div>
                                                                        <div class="mt-2 mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Ngày tạo đơn hàng</strong>
                                                                            <span>
                                                                                2025-01-07
                                                                            </span>
                                                                        </div>
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Ngày cập nhật</strong>
                                                                            <span>
                                                                                2025-01-07
                                                                            </span>
                                                                        </div>
                                                                        
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Phương thức thanh toán</strong>
                                                                            <span>
                                                                                Tiền mặt (COD)
                                                                            </span>
                                                                        </div>
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Tổng số lượng sản phẩm</strong>
                                                                            <span>
                                                                                6
                                                                            </span>
                                                                        </div>
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Tổng tiền sản phẩm</strong>
                                                                            <span>
                                                                                459.000đ
                                                                            </span>
                                                                        </div>
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Phí giao hàng</strong>
                                                                            <span>
                                                                                41.000đ
                                                                            </span>
                                                                        </div>
                                                                      </li>
                                                                      <li class="list-group-item">
                                                                        <div class="mb-2 mt-2 d-flex justify-content-between align-items-center small fw-medium">
                                                                            <strong>Thành tiền</strong>
                                                                            <span style="color:rgb(60, 199, 60)" class="fs-5">500.000đ</span>
                                                                        </div>
                                                                      </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer me-1">
                                                    <button type="button me-5" class="btn btn-success">Hủy đơn hàng</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                    
                                
                            </tr>
                            <tr>
                                <td class="align-middle" scope="row">
                                    <span class="fw-medium">HD001</span>
                                </td>
                                <td class="pe-4 align-middle ">
                                    12/10/2024
                                </td>
                                <td class="align-middle opacity-75">
                                    10:22:35
                                </td>                                             
                                <td class="align-middle">
                                    <span class="price fw-medium">299.000đ</span>
                                </td>
                                <td class="align-middle">
                                    <span class="text-danger">Chờ xác nhận</span>
                                </td>
                                <td class="align-middle">
                                    <!-- Button trigger modal - xem chi tiết đơn hàng -->
                                    <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        <i  class="fa-solid fa-circle-info fs-5 text-black"></i>
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl" >
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Chi tiết đơn hàng</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <!-- col bảng sản phẩm trong đơn hàng -->
                                                        <div class="col-md-8">
                                                            <div class="cart-product pb-2 px-2 border rounded-3 shadow bg-white table-responsive">
                                                                <table class="table">
                                                                    <thead>
                                                                      <tr>
                                                                        <th scope="col" colspan="2" class="text-dark">Sản phẩm</th>
                                                                        <th scope="col" class="text-dark">Đơn giá</th>
                                                                        <th scope="col" class="text-dark">Số lượng</th>
                                                                        <th scope="col" class="text-dark">Thành tiền</th>
                                                                        
                                                                      </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="book-image" scope="row">
                                                                                <img src="/assets/uploads/spdemo.jpg" style="width:120px" alt="">
                                                                            </td>
                                                                            <td class="pe-4 book-name ps-0 align-middle fw-medium" style="max-width: 150px; word-wrap: break-word;">
                                                                                Pháp Y Tống Từ  
                                                                            </td>
                                                                            <td class="align-middle opacity-75">
                                                                                100.000đ
                                                                            </td>                                             
                                                                            <td class="quantity align-middle opacity-75" ">
                                                                                6
                                                                            </td>
                                                                            <td class="book-price align-middle">
                                                                                <span class="price-text">
                                                                                    <span class="price fw-medium">299.000đ</span>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="book-image" scope="row">
                                                                                <img src="/assets/uploads/spdemo.jpg" style="width:120px" alt="">
                                                                            </td>
                                                                            <td class="pe-4 book-name ps-0 align-middle fw-medium" style="max-width: 150px; word-wrap: break-word;">
                                                                                Pháp Y Tống Từ  
                                                                            </td>
                                                                            <td class="align-middle opacity-75">
                                                                                100.000đ
                                                                            </td>                                             
                                                                            <td class="quantity align-middle opacity-75" ">
                                                                                6
                                                                            </td>
                                                                            <td class="book-price align-middle">
                                                                                <span class="price-text">
                                                                                    <span class="price fw-medium">299.000đ</span>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="book-image" scope="row">
                                                                                <img src="/assets/uploads/spdemo.jpg" style="width:120px" alt="">
                                                                            </td>
                                                                            <td class="pe-4 book-name ps-0 align-middle fw-medium" style="max-width: 150px; word-wrap: break-word;">
                                                                                Pháp Y Tống Từ  
                                                                            </td>
                                                                            <td class="align-middle opacity-75">
                                                                                100.000đ
                                                                            </td>                                             
                                                                            <td class="quantity align-middle opacity-75" ">
                                                                                6
                                                                            </td>
                                                                            <td class="book-price align-middle">
                                                                                <span class="price-text">
                                                                                    <span class="price fw-medium">299.000đ</span>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="book-image" scope="row">
                                                                                <img src="/assets/uploads/spdemo.jpg" style="width:120px" alt="">
                                                                            </td>
                                                                            <td class="pe-4 book-name ps-0 align-middle fw-medium" style="max-width: 150px; word-wrap: break-word;">
                                                                                Pháp Y Tống Từ  
                                                                            </td>
                                                                            <td class="align-middle opacity-75">
                                                                                100.000đ
                                                                            </td>                                             
                                                                            <td class="quantity align-middle opacity-75" ">
                                                                                6
                                                                            </td>
                                                                            <td class="book-price align-middle">
                                                                                <span class="price-text">
                                                                                    <span class="price fw-medium">299.000đ</span>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        
                                                                       
                                                                    </tbody>
                                                                </table>
                                                                
                                                            </div>
                                                        </div>
                                                        <!-- col thông tin thanh toán -->
                                                        <div class="col-md-4 ">
                                                            <!-- Row địa chỉ giao hàng -->
                                                            <div class="row pe-3">
                                                                <div class="card border shadow rounded-3 w-auto" style="width: 18rem;">
                                                                    <ul class="list-group list-group-flush">
                                                                      <li class="list-group-item fw-bold py-2">Thông tin nhận hàng</li>
                                                                      <li class="list-group-item">
                                                                        <div class="mt-2 mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <span>Ngô Đức Trọng</span>
                                                                        </div>
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <span>0326584557</span>
                                                                        </div>
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <span>256 Đồng Khởi, Xã Vĩnh Trường, Huyện An Phú, An Giang</span>
                                                                        </div>
                                                                      </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- Row thông tin đơn hàng-->
                                                            <div class="row mt-2 pe-3">
                                                                <div class="card border shadow rounded-3 w-100" style="width: 18rem;">
                                                                    <ul class="list-group list-group-flush">
                                                                      <li class="list-group-item fw-bold py-2">Thông tin đơn hàng</li>
                                                                      <li class="list-group-item fw-bold py-2">
                                                                        <div class="mt-2 mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Trạng thái</strong>
                                                                            <span class="text-danger fw-bold">
                                                                                Chờ xác nhận
                                                                            </span>
                                                                        </div>
                                                                      </li>
                                                                      <li class="list-group-item">
                                                                        <div class="mt-2 mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Mã đơn hàng</strong>
                                                                            <span>
                                                                                HD001
                                                                            </span>
                                                                        </div>
                                                                        <div class="mt-2 mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Ngày tạo đơn hàng</strong>
                                                                            <span>
                                                                                2025-01-07
                                                                            </span>
                                                                        </div>
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Ngày cập nhật</strong>
                                                                            <span>
                                                                                2025-01-07
                                                                            </span>
                                                                        </div>
                                                                        
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Phương thức thanh toán</strong>
                                                                            <span>
                                                                                Tiền mặt (COD)
                                                                            </span>
                                                                        </div>
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Tổng số lượng sản phẩm</strong>
                                                                            <span>
                                                                                6
                                                                            </span>
                                                                        </div>
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Tổng tiền sản phẩm</strong>
                                                                            <span>
                                                                                459.000đ
                                                                            </span>
                                                                        </div>
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Phí giao hàng</strong>
                                                                            <span>
                                                                                41.000đ
                                                                            </span>
                                                                        </div>
                                                                      </li>
                                                                      <li class="list-group-item">
                                                                        <div class="mb-2 mt-2 d-flex justify-content-between align-items-center small fw-medium">
                                                                            <strong>Thành tiền</strong>
                                                                            <span style="color:rgb(60, 199, 60)" class="fs-5">500.000đ</span>
                                                                        </div>
                                                                      </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer me-1">
                                                    <button type="button me-5" class="btn btn-success">Hủy đơn hàng</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                    
                                
                            </tr>
                            <tr>
                                <td class="align-middle" scope="row">
                                    <span class="fw-medium">HD001</span>
                                </td>
                                <td class="pe-4 align-middle ">
                                    12/10/2024
                                </td>
                                <td class="align-middle opacity-75">
                                    10:22:35
                                </td>                                             
                                <td class="align-middle">
                                    <span class="price fw-medium">299.000đ</span>
                                </td>
                                <td class="align-middle">
                                    <span class="text-danger">Chờ xác nhận</span>
                                </td>
                                <td class="align-middle">
                                    <!-- Button trigger modal - xem chi tiết đơn hàng -->
                                    <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        <i  class="fa-solid fa-circle-info fs-5 text-black"></i>
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl" >
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Chi tiết đơn hàng</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <!-- col bảng sản phẩm trong đơn hàng -->
                                                        <div class="col-md-8">
                                                            <div class="cart-product pb-2 px-2 border rounded-3 shadow bg-white table-responsive">
                                                                <table class="table">
                                                                    <thead>
                                                                      <tr>
                                                                        <th scope="col" colspan="2" class="text-dark">Sản phẩm</th>
                                                                        <th scope="col" class="text-dark">Đơn giá</th>
                                                                        <th scope="col" class="text-dark">Số lượng</th>
                                                                        <th scope="col" class="text-dark">Thành tiền</th>
                                                                        
                                                                      </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="book-image" scope="row">
                                                                                <img src="/assets/uploads/spdemo.jpg" style="width:120px" alt="">
                                                                            </td>
                                                                            <td class="pe-4 book-name ps-0 align-middle fw-medium" style="max-width: 150px; word-wrap: break-word;">
                                                                                Pháp Y Tống Từ  
                                                                            </td>
                                                                            <td class="align-middle opacity-75">
                                                                                100.000đ
                                                                            </td>                                             
                                                                            <td class="quantity align-middle opacity-75" ">
                                                                                6
                                                                            </td>
                                                                            <td class="book-price align-middle">
                                                                                <span class="price-text">
                                                                                    <span class="price fw-medium">299.000đ</span>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="book-image" scope="row">
                                                                                <img src="/assets/uploads/spdemo.jpg" style="width:120px" alt="">
                                                                            </td>
                                                                            <td class="pe-4 book-name ps-0 align-middle fw-medium" style="max-width: 150px; word-wrap: break-word;">
                                                                                Pháp Y Tống Từ  
                                                                            </td>
                                                                            <td class="align-middle opacity-75">
                                                                                100.000đ
                                                                            </td>                                             
                                                                            <td class="quantity align-middle opacity-75" ">
                                                                                6
                                                                            </td>
                                                                            <td class="book-price align-middle">
                                                                                <span class="price-text">
                                                                                    <span class="price fw-medium">299.000đ</span>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="book-image" scope="row">
                                                                                <img src="/assets/uploads/spdemo.jpg" style="width:120px" alt="">
                                                                            </td>
                                                                            <td class="pe-4 book-name ps-0 align-middle fw-medium" style="max-width: 150px; word-wrap: break-word;">
                                                                                Pháp Y Tống Từ  
                                                                            </td>
                                                                            <td class="align-middle opacity-75">
                                                                                100.000đ
                                                                            </td>                                             
                                                                            <td class="quantity align-middle opacity-75" ">
                                                                                6
                                                                            </td>
                                                                            <td class="book-price align-middle">
                                                                                <span class="price-text">
                                                                                    <span class="price fw-medium">299.000đ</span>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="book-image" scope="row">
                                                                                <img src="/assets/uploads/spdemo.jpg" style="width:120px" alt="">
                                                                            </td>
                                                                            <td class="pe-4 book-name ps-0 align-middle fw-medium" style="max-width: 150px; word-wrap: break-word;">
                                                                                Pháp Y Tống Từ  
                                                                            </td>
                                                                            <td class="align-middle opacity-75">
                                                                                100.000đ
                                                                            </td>                                             
                                                                            <td class="quantity align-middle opacity-75" ">
                                                                                6
                                                                            </td>
                                                                            <td class="book-price align-middle">
                                                                                <span class="price-text">
                                                                                    <span class="price fw-medium">299.000đ</span>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        
                                                                       
                                                                    </tbody>
                                                                </table>
                                                                
                                                            </div>
                                                        </div>
                                                        <!-- col thông tin thanh toán -->
                                                        <div class="col-md-4 ">
                                                            <!-- Row địa chỉ giao hàng -->
                                                            <div class="row pe-3">
                                                                <div class="card border shadow rounded-3 w-auto" style="width: 18rem;">
                                                                    <ul class="list-group list-group-flush">
                                                                      <li class="list-group-item fw-bold py-2">Thông tin nhận hàng</li>
                                                                      <li class="list-group-item">
                                                                        <div class="mt-2 mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <span>Ngô Đức Trọng</span>
                                                                        </div>
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <span>0326584557</span>
                                                                        </div>
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <span>256 Đồng Khởi, Xã Vĩnh Trường, Huyện An Phú, An Giang</span>
                                                                        </div>
                                                                      </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- Row thông tin đơn hàng-->
                                                            <div class="row mt-2 pe-3">
                                                                <div class="card border shadow rounded-3 w-100" style="width: 18rem;">
                                                                    <ul class="list-group list-group-flush">
                                                                      <li class="list-group-item fw-bold py-2">Thông tin đơn hàng</li>
                                                                      <li class="list-group-item fw-bold py-2">
                                                                        <div class="mt-2 mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Trạng thái</strong>
                                                                            <span class="text-danger fw-bold">
                                                                                Chờ xác nhận
                                                                            </span>
                                                                        </div>
                                                                      </li>
                                                                      <li class="list-group-item">
                                                                        <div class="mt-2 mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Mã đơn hàng</strong>
                                                                            <span>
                                                                                HD001
                                                                            </span>
                                                                        </div>
                                                                        <div class="mt-2 mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Ngày tạo đơn hàng</strong>
                                                                            <span>
                                                                                2025-01-07
                                                                            </span>
                                                                        </div>
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Ngày cập nhật</strong>
                                                                            <span>
                                                                                2025-01-07
                                                                            </span>
                                                                        </div>
                                                                        
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Phương thức thanh toán</strong>
                                                                            <span>
                                                                                Tiền mặt (COD)
                                                                            </span>
                                                                        </div>
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Tổng số lượng sản phẩm</strong>
                                                                            <span>
                                                                                6
                                                                            </span>
                                                                        </div>
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Tổng tiền sản phẩm</strong>
                                                                            <span>
                                                                                459.000đ
                                                                            </span>
                                                                        </div>
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Phí giao hàng</strong>
                                                                            <span>
                                                                                41.000đ
                                                                            </span>
                                                                        </div>
                                                                      </li>
                                                                      <li class="list-group-item">
                                                                        <div class="mb-2 mt-2 d-flex justify-content-between align-items-center small fw-medium">
                                                                            <strong>Thành tiền</strong>
                                                                            <span style="color:rgb(60, 199, 60)" class="fs-5">500.000đ</span>
                                                                        </div>
                                                                      </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer me-1">
                                                    <button type="button me-5" class="btn btn-success">Hủy đơn hàng</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                    
                                
                            </tr>
                            <tr>
                                <td class="align-middle" scope="row">
                                    <span class="fw-medium">HD001</span>
                                </td>
                                <td class="pe-4 align-middle ">
                                    12/10/2024
                                </td>
                                <td class="align-middle opacity-75">
                                    10:22:35
                                </td>                                             
                                <td class="align-middle">
                                    <span class="price fw-medium">299.000đ</span>
                                </td>
                                <td class="align-middle">
                                    <span class="text-danger">Chờ xác nhận</span>
                                </td>
                                <td class="align-middle">
                                    <!-- Button trigger modal - xem chi tiết đơn hàng -->
                                    <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        <i  class="fa-solid fa-circle-info fs-5 text-black"></i>
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl" >
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Chi tiết đơn hàng</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <!-- col bảng sản phẩm trong đơn hàng -->
                                                        <div class="col-md-8">
                                                            <div class="cart-product pb-2 px-2 border rounded-3 shadow bg-white table-responsive">
                                                                <table class="table">
                                                                    <thead>
                                                                      <tr>
                                                                        <th scope="col" colspan="2" class="text-dark">Sản phẩm</th>
                                                                        <th scope="col" class="text-dark">Đơn giá</th>
                                                                        <th scope="col" class="text-dark">Số lượng</th>
                                                                        <th scope="col" class="text-dark">Thành tiền</th>
                                                                        
                                                                      </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="book-image" scope="row">
                                                                                <img src="/assets/uploads/spdemo.jpg" style="width:120px" alt="">
                                                                            </td>
                                                                            <td class="pe-4 book-name ps-0 align-middle fw-medium" style="max-width: 150px; word-wrap: break-word;">
                                                                                Pháp Y Tống Từ  
                                                                            </td>
                                                                            <td class="align-middle opacity-75">
                                                                                100.000đ
                                                                            </td>                                             
                                                                            <td class="quantity align-middle opacity-75" ">
                                                                                6
                                                                            </td>
                                                                            <td class="book-price align-middle">
                                                                                <span class="price-text">
                                                                                    <span class="price fw-medium">299.000đ</span>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="book-image" scope="row">
                                                                                <img src="/assets/uploads/spdemo.jpg" style="width:120px" alt="">
                                                                            </td>
                                                                            <td class="pe-4 book-name ps-0 align-middle fw-medium" style="max-width: 150px; word-wrap: break-word;">
                                                                                Pháp Y Tống Từ  
                                                                            </td>
                                                                            <td class="align-middle opacity-75">
                                                                                100.000đ
                                                                            </td>                                             
                                                                            <td class="quantity align-middle opacity-75" ">
                                                                                6
                                                                            </td>
                                                                            <td class="book-price align-middle">
                                                                                <span class="price-text">
                                                                                    <span class="price fw-medium">299.000đ</span>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="book-image" scope="row">
                                                                                <img src="/assets/uploads/spdemo.jpg" style="width:120px" alt="">
                                                                            </td>
                                                                            <td class="pe-4 book-name ps-0 align-middle fw-medium" style="max-width: 150px; word-wrap: break-word;">
                                                                                Pháp Y Tống Từ  
                                                                            </td>
                                                                            <td class="align-middle opacity-75">
                                                                                100.000đ
                                                                            </td>                                             
                                                                            <td class="quantity align-middle opacity-75" ">
                                                                                6
                                                                            </td>
                                                                            <td class="book-price align-middle">
                                                                                <span class="price-text">
                                                                                    <span class="price fw-medium">299.000đ</span>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="book-image" scope="row">
                                                                                <img src="/assets/uploads/spdemo.jpg" style="width:120px" alt="">
                                                                            </td>
                                                                            <td class="pe-4 book-name ps-0 align-middle fw-medium" style="max-width: 150px; word-wrap: break-word;">
                                                                                Pháp Y Tống Từ  
                                                                            </td>
                                                                            <td class="align-middle opacity-75">
                                                                                100.000đ
                                                                            </td>                                             
                                                                            <td class="quantity align-middle opacity-75" ">
                                                                                6
                                                                            </td>
                                                                            <td class="book-price align-middle">
                                                                                <span class="price-text">
                                                                                    <span class="price fw-medium">299.000đ</span>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        
                                                                       
                                                                    </tbody>
                                                                </table>
                                                                
                                                            </div>
                                                        </div>
                                                        <!-- col thông tin thanh toán -->
                                                        <div class="col-md-4 ">
                                                            <!-- Row địa chỉ giao hàng -->
                                                            <div class="row pe-3">
                                                                <div class="card border shadow rounded-3 w-auto" style="width: 18rem;">
                                                                    <ul class="list-group list-group-flush">
                                                                      <li class="list-group-item fw-bold py-2">Thông tin nhận hàng</li>
                                                                      <li class="list-group-item">
                                                                        <div class="mt-2 mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <span>Ngô Đức Trọng</span>
                                                                        </div>
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <span>0326584557</span>
                                                                        </div>
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <span>256 Đồng Khởi, Xã Vĩnh Trường, Huyện An Phú, An Giang</span>
                                                                        </div>
                                                                      </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- Row thông tin đơn hàng-->
                                                            <div class="row mt-2 pe-3">
                                                                <div class="card border shadow rounded-3 w-100" style="width: 18rem;">
                                                                    <ul class="list-group list-group-flush">
                                                                      <li class="list-group-item fw-bold py-2">Thông tin đơn hàng</li>
                                                                      <li class="list-group-item fw-bold py-2">
                                                                        <div class="mt-2 mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Trạng thái</strong>
                                                                            <span class="text-danger fw-bold">
                                                                                Chờ xác nhận
                                                                            </span>
                                                                        </div>
                                                                      </li>
                                                                      <li class="list-group-item">
                                                                        <div class="mt-2 mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Mã đơn hàng</strong>
                                                                            <span>
                                                                                HD001
                                                                            </span>
                                                                        </div>
                                                                        <div class="mt-2 mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Ngày tạo đơn hàng</strong>
                                                                            <span>
                                                                                2025-01-07
                                                                            </span>
                                                                        </div>
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Ngày cập nhật</strong>
                                                                            <span>
                                                                                2025-01-07
                                                                            </span>
                                                                        </div>
                                                                        
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Phương thức thanh toán</strong>
                                                                            <span>
                                                                                Tiền mặt (COD)
                                                                            </span>
                                                                        </div>
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Tổng số lượng sản phẩm</strong>
                                                                            <span>
                                                                                6
                                                                            </span>
                                                                        </div>
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Tổng tiền sản phẩm</strong>
                                                                            <span>
                                                                                459.000đ
                                                                            </span>
                                                                        </div>
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Phí giao hàng</strong>
                                                                            <span>
                                                                                41.000đ
                                                                            </span>
                                                                        </div>
                                                                      </li>
                                                                      <li class="list-group-item">
                                                                        <div class="mb-2 mt-2 d-flex justify-content-between align-items-center small fw-medium">
                                                                            <strong>Thành tiền</strong>
                                                                            <span style="color:rgb(60, 199, 60)" class="fs-5">500.000đ</span>
                                                                        </div>
                                                                      </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer me-1">
                                                    <button type="button me-5" class="btn btn-success">Hủy đơn hàng</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                    
                                
                            </tr>
                            <tr>
                                <td class="align-middle" scope="row">
                                    <span class="fw-medium">HD001</span>
                                </td>
                                <td class="pe-4 align-middle ">
                                    12/10/2024
                                </td>
                                <td class="align-middle opacity-75">
                                    10:22:35
                                </td>                                             
                                <td class="align-middle">
                                    <span class="price fw-medium">299.000đ</span>
                                </td>
                                <td class="align-middle">
                                    <span class="text-danger">Chờ xác nhận</span>
                                </td>
                                <td class="align-middle">
                                    <!-- Button trigger modal - xem chi tiết đơn hàng -->
                                    <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        <i  class="fa-solid fa-circle-info fs-5 text-black"></i>
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl" >
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Chi tiết đơn hàng</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <!-- col bảng sản phẩm trong đơn hàng -->
                                                        <div class="col-md-8">
                                                            <div class="cart-product pb-2 px-2 border rounded-3 shadow bg-white table-responsive">
                                                                <table class="table">
                                                                    <thead>
                                                                      <tr>
                                                                        <th scope="col" colspan="2" class="text-dark">Sản phẩm</th>
                                                                        <th scope="col" class="text-dark">Đơn giá</th>
                                                                        <th scope="col" class="text-dark">Số lượng</th>
                                                                        <th scope="col" class="text-dark">Thành tiền</th>
                                                                        
                                                                      </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="book-image" scope="row">
                                                                                <img src="/assets/uploads/spdemo.jpg" style="width:120px" alt="">
                                                                            </td>
                                                                            <td class="pe-4 book-name ps-0 align-middle fw-medium" style="max-width: 150px; word-wrap: break-word;">
                                                                                Pháp Y Tống Từ  
                                                                            </td>
                                                                            <td class="align-middle opacity-75">
                                                                                100.000đ
                                                                            </td>                                             
                                                                            <td class="quantity align-middle opacity-75" ">
                                                                                6
                                                                            </td>
                                                                            <td class="book-price align-middle">
                                                                                <span class="price-text">
                                                                                    <span class="price fw-medium">299.000đ</span>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="book-image" scope="row">
                                                                                <img src="/assets/uploads/spdemo.jpg" style="width:120px" alt="">
                                                                            </td>
                                                                            <td class="pe-4 book-name ps-0 align-middle fw-medium" style="max-width: 150px; word-wrap: break-word;">
                                                                                Pháp Y Tống Từ  
                                                                            </td>
                                                                            <td class="align-middle opacity-75">
                                                                                100.000đ
                                                                            </td>                                             
                                                                            <td class="quantity align-middle opacity-75" ">
                                                                                6
                                                                            </td>
                                                                            <td class="book-price align-middle">
                                                                                <span class="price-text">
                                                                                    <span class="price fw-medium">299.000đ</span>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="book-image" scope="row">
                                                                                <img src="/assets/uploads/spdemo.jpg" style="width:120px" alt="">
                                                                            </td>
                                                                            <td class="pe-4 book-name ps-0 align-middle fw-medium" style="max-width: 150px; word-wrap: break-word;">
                                                                                Pháp Y Tống Từ  
                                                                            </td>
                                                                            <td class="align-middle opacity-75">
                                                                                100.000đ
                                                                            </td>                                             
                                                                            <td class="quantity align-middle opacity-75" ">
                                                                                6
                                                                            </td>
                                                                            <td class="book-price align-middle">
                                                                                <span class="price-text">
                                                                                    <span class="price fw-medium">299.000đ</span>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="book-image" scope="row">
                                                                                <img src="/assets/uploads/spdemo.jpg" style="width:120px" alt="">
                                                                            </td>
                                                                            <td class="pe-4 book-name ps-0 align-middle fw-medium" style="max-width: 150px; word-wrap: break-word;">
                                                                                Pháp Y Tống Từ  
                                                                            </td>
                                                                            <td class="align-middle opacity-75">
                                                                                100.000đ
                                                                            </td>                                             
                                                                            <td class="quantity align-middle opacity-75" ">
                                                                                6
                                                                            </td>
                                                                            <td class="book-price align-middle">
                                                                                <span class="price-text">
                                                                                    <span class="price fw-medium">299.000đ</span>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        
                                                                       
                                                                    </tbody>
                                                                </table>
                                                                
                                                            </div>
                                                        </div>
                                                        <!-- col thông tin thanh toán -->
                                                        <div class="col-md-4 ">
                                                            <!-- Row địa chỉ giao hàng -->
                                                            <div class="row pe-3">
                                                                <div class="card border shadow rounded-3 w-auto" style="width: 18rem;">
                                                                    <ul class="list-group list-group-flush">
                                                                      <li class="list-group-item fw-bold py-2">Thông tin nhận hàng</li>
                                                                      <li class="list-group-item">
                                                                        <div class="mt-2 mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <span>Ngô Đức Trọng</span>
                                                                        </div>
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <span>0326584557</span>
                                                                        </div>
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <span>256 Đồng Khởi, Xã Vĩnh Trường, Huyện An Phú, An Giang</span>
                                                                        </div>
                                                                      </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- Row thông tin đơn hàng-->
                                                            <div class="row mt-2 pe-3">
                                                                <div class="card border shadow rounded-3 w-100" style="width: 18rem;">
                                                                    <ul class="list-group list-group-flush">
                                                                      <li class="list-group-item fw-bold py-2">Thông tin đơn hàng</li>
                                                                      <li class="list-group-item fw-bold py-2">
                                                                        <div class="mt-2 mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Trạng thái</strong>
                                                                            <span class="text-danger fw-bold">
                                                                                Chờ xác nhận
                                                                            </span>
                                                                        </div>
                                                                      </li>
                                                                      <li class="list-group-item">
                                                                        <div class="mt-2 mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Mã đơn hàng</strong>
                                                                            <span>
                                                                                HD001
                                                                            </span>
                                                                        </div>
                                                                        <div class="mt-2 mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Ngày tạo đơn hàng</strong>
                                                                            <span>
                                                                                2025-01-07
                                                                            </span>
                                                                        </div>
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Ngày cập nhật</strong>
                                                                            <span>
                                                                                2025-01-07
                                                                            </span>
                                                                        </div>
                                                                        
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Phương thức thanh toán</strong>
                                                                            <span>
                                                                                Tiền mặt (COD)
                                                                            </span>
                                                                        </div>
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Tổng số lượng sản phẩm</strong>
                                                                            <span>
                                                                                6
                                                                            </span>
                                                                        </div>
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Tổng tiền sản phẩm</strong>
                                                                            <span>
                                                                                459.000đ
                                                                            </span>
                                                                        </div>
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Phí giao hàng</strong>
                                                                            <span>
                                                                                41.000đ
                                                                            </span>
                                                                        </div>
                                                                      </li>
                                                                      <li class="list-group-item">
                                                                        <div class="mb-2 mt-2 d-flex justify-content-between align-items-center small fw-medium">
                                                                            <strong>Thành tiền</strong>
                                                                            <span style="color:rgb(60, 199, 60)" class="fs-5">500.000đ</span>
                                                                        </div>
                                                                      </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer me-1">
                                                    <button type="button me-5" class="btn btn-success">Hủy đơn hàng</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                    
                                
                            </tr>
                            <tr>
                                <td class="align-middle" scope="row">
                                    <span class="fw-medium">HD001</span>
                                </td>
                                <td class="pe-4 align-middle ">
                                    12/10/2024
                                </td>
                                <td class="align-middle opacity-75">
                                    10:22:35
                                </td>                                             
                                <td class="align-middle">
                                    <span class="price fw-medium">299.000đ</span>
                                </td>
                                <td class="align-middle">
                                    <span class="text-danger">Chờ xác nhận</span>
                                </td>
                                <td class="align-middle">
                                    <!-- Button trigger modal - xem chi tiết đơn hàng -->
                                    <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        <i  class="fa-solid fa-circle-info fs-5 text-black"></i>
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl" >
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Chi tiết đơn hàng</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <!-- col bảng sản phẩm trong đơn hàng -->
                                                        <div class="col-md-8">
                                                            <div class="cart-product pb-2 px-2 border rounded-3 shadow bg-white table-responsive">
                                                                <table class="table">
                                                                    <thead>
                                                                      <tr>
                                                                        <th scope="col" colspan="2" class="text-dark">Sản phẩm</th>
                                                                        <th scope="col" class="text-dark">Đơn giá</th>
                                                                        <th scope="col" class="text-dark">Số lượng</th>
                                                                        <th scope="col" class="text-dark">Thành tiền</th>
                                                                        
                                                                      </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="book-image" scope="row">
                                                                                <img src="/assets/uploads/spdemo.jpg" style="width:120px" alt="">
                                                                            </td>
                                                                            <td class="pe-4 book-name ps-0 align-middle fw-medium" style="max-width: 150px; word-wrap: break-word;">
                                                                                Pháp Y Tống Từ  
                                                                            </td>
                                                                            <td class="align-middle opacity-75">
                                                                                100.000đ
                                                                            </td>                                             
                                                                            <td class="quantity align-middle opacity-75" ">
                                                                                6
                                                                            </td>
                                                                            <td class="book-price align-middle">
                                                                                <span class="price-text">
                                                                                    <span class="price fw-medium">299.000đ</span>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="book-image" scope="row">
                                                                                <img src="/assets/uploads/spdemo.jpg" style="width:120px" alt="">
                                                                            </td>
                                                                            <td class="pe-4 book-name ps-0 align-middle fw-medium" style="max-width: 150px; word-wrap: break-word;">
                                                                                Pháp Y Tống Từ  
                                                                            </td>
                                                                            <td class="align-middle opacity-75">
                                                                                100.000đ
                                                                            </td>                                             
                                                                            <td class="quantity align-middle opacity-75" ">
                                                                                6
                                                                            </td>
                                                                            <td class="book-price align-middle">
                                                                                <span class="price-text">
                                                                                    <span class="price fw-medium">299.000đ</span>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="book-image" scope="row">
                                                                                <img src="/assets/uploads/spdemo.jpg" style="width:120px" alt="">
                                                                            </td>
                                                                            <td class="pe-4 book-name ps-0 align-middle fw-medium" style="max-width: 150px; word-wrap: break-word;">
                                                                                Pháp Y Tống Từ  
                                                                            </td>
                                                                            <td class="align-middle opacity-75">
                                                                                100.000đ
                                                                            </td>                                             
                                                                            <td class="quantity align-middle opacity-75" ">
                                                                                6
                                                                            </td>
                                                                            <td class="book-price align-middle">
                                                                                <span class="price-text">
                                                                                    <span class="price fw-medium">299.000đ</span>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="book-image" scope="row">
                                                                                <img src="/assets/uploads/spdemo.jpg" style="width:120px" alt="">
                                                                            </td>
                                                                            <td class="pe-4 book-name ps-0 align-middle fw-medium" style="max-width: 150px; word-wrap: break-word;">
                                                                                Pháp Y Tống Từ  
                                                                            </td>
                                                                            <td class="align-middle opacity-75">
                                                                                100.000đ
                                                                            </td>                                             
                                                                            <td class="quantity align-middle opacity-75" ">
                                                                                6
                                                                            </td>
                                                                            <td class="book-price align-middle">
                                                                                <span class="price-text">
                                                                                    <span class="price fw-medium">299.000đ</span>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        
                                                                       
                                                                    </tbody>
                                                                </table>
                                                                
                                                            </div>
                                                        </div>
                                                        <!-- col thông tin thanh toán -->
                                                        <div class="col-md-4 ">
                                                            <!-- Row địa chỉ giao hàng -->
                                                            <div class="row pe-3">
                                                                <div class="card border shadow rounded-3 w-auto" style="width: 18rem;">
                                                                    <ul class="list-group list-group-flush">
                                                                      <li class="list-group-item fw-bold py-2">Thông tin nhận hàng</li>
                                                                      <li class="list-group-item">
                                                                        <div class="mt-2 mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <span>Ngô Đức Trọng</span>
                                                                        </div>
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <span>0326584557</span>
                                                                        </div>
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <span>256 Đồng Khởi, Xã Vĩnh Trường, Huyện An Phú, An Giang</span>
                                                                        </div>
                                                                      </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- Row thông tin đơn hàng-->
                                                            <div class="row mt-2 pe-3">
                                                                <div class="card border shadow rounded-3 w-100" style="width: 18rem;">
                                                                    <ul class="list-group list-group-flush">
                                                                      <li class="list-group-item fw-bold py-2">Thông tin đơn hàng</li>
                                                                      <li class="list-group-item fw-bold py-2">
                                                                        <div class="mt-2 mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Trạng thái</strong>
                                                                            <span class="text-danger fw-bold">
                                                                                Chờ xác nhận
                                                                            </span>
                                                                        </div>
                                                                      </li>
                                                                      <li class="list-group-item">
                                                                        <div class="mt-2 mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Mã đơn hàng</strong>
                                                                            <span>
                                                                                HD001
                                                                            </span>
                                                                        </div>
                                                                        <div class="mt-2 mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Ngày tạo đơn hàng</strong>
                                                                            <span>
                                                                                2025-01-07
                                                                            </span>
                                                                        </div>
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Ngày cập nhật</strong>
                                                                            <span>
                                                                                2025-01-07
                                                                            </span>
                                                                        </div>
                                                                        
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Phương thức thanh toán</strong>
                                                                            <span>
                                                                                Tiền mặt (COD)
                                                                            </span>
                                                                        </div>
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Tổng số lượng sản phẩm</strong>
                                                                            <span>
                                                                                6
                                                                            </span>
                                                                        </div>
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Tổng tiền sản phẩm</strong>
                                                                            <span>
                                                                                459.000đ
                                                                            </span>
                                                                        </div>
                                                                        <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                                                            <strong>Phí giao hàng</strong>
                                                                            <span>
                                                                                41.000đ
                                                                            </span>
                                                                        </div>
                                                                      </li>
                                                                      <li class="list-group-item">
                                                                        <div class="mb-2 mt-2 d-flex justify-content-between align-items-center small fw-medium">
                                                                            <strong>Thành tiền</strong>
                                                                            <span style="color:rgb(60, 199, 60)" class="fs-5">500.000đ</span>
                                                                        </div>
                                                                      </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer me-1">
                                                    <button type="button me-5" class="btn btn-success">Hủy đơn hàng</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                    
                                
                            </tr>
                            
                            
                           
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>

</section>