<div class="container py-4 bg-light">
  <!-- row Panel -->
  <div class="row pb-4">
    <h4>
        Quản lý phiếu nhập
    </h4>
  </div>
  <!-- row filter, button thêm sách -->
  <div class="row py-3 px-1 mb-2">
    <!-- Form tìm kiếm -->
    <div class="col-md-11 d-flex">
        <form class="d-flex w-100">
            <select class="form-select me-2" aria-label="Default select example" style="max-width: 232px;">
                <option selected>Chọn trạng thái</option>
                <option value="1">One</option>
            </select>
            <input type="text" placeholder="Nhập mã phiếu nhập..." style="max-width: 290px;" class="form-control me-4" id="">
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
        <!-- Button thêm phiếu nhập -->
        <div class="col-md-1 d-flex justify-content-end">
          <button class="btn btn-success btn-sm" style="width:110px" data-bs-toggle="modal" href="#staticBackdrop" role="button">Thêm mới</button>
          
        </div>
  </div>
  <!-- row table -->
  <div class="row">
    <div class="col-md-12">
      <div class=" pb-2 px-2 border rounded-3 shadow bg-white table-responsive">
        <table class="table table-hover">
            <thead class="text-center">
              <tr>
                <th scope="col">Mã phiếu nhập</th>
                <th scope="col">Ngày tạo</th>
                <th scope="col">Ngày cập nhật</th>
                <th scope="col">Tổng tiền</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Tùy chỉnh</th>

              </tr>
            </thead>
            <tbody  class="table-group-divider">
                <tr>
                  <!-- Mã nhà cung cấp -->
                    <td class="align-middle text-center" scope="row">
                        DH001
                    </td>
                  
                    <td class=" align-middle text-center" style="max-width: 150px; word-wrap: break-word;">
                        11/2/2024
                    </td>
                 
                    <td class="align-middle text-center">
                        12/2/2024
                    </td> 
                 
                    <td class="align-middle text-center ">
                        100.000đ
                    </td>
                  <!-- Trạng thái -->
                    <td class=" align-middle text-center text-success fw-bold">
                        Chờ xử lý
                    </td>
                  <!-- Tùy chỉnh -->
                    <td class="align-middle text-center">
                      <!-- Button xem thông tin chi tiết -->
                        <button class="btn" fdprocessedid="r9x0b9" type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdropInfoOrder">
                            <img src="../assets/admin/img/info.png" style="width:20px" alt="">
                        </button>
                        
                        <!-- Button chỉnh sửa -->
                          <!-- Button trigger modal -->
                          <button class="btn" fdprocessedid="r9x0b9" type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdropEditOrder">
                            <img src="../assets/admin/img/edit.png" style="width:20px" alt="">
                          </button>
                        <!-- Button in đơn hàng -->
                        <button class="btn" fdprocessedid="r9x0b9" type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdropInfoSupplier">
                            <img src="../assets/admin/img/printer.png" style="width:20px" alt="">
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
      </div>
    </div>
  </div>
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
              <li class="page-item me-2""><a class="page-link rounded-circle" href="#">2</a></li>
              <li class="page-item me-2""><a class="page-link rounded-circle" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link rounded-circle" href="#" aria-label="Next">
                  <span aria-hidden="true"><i class="next fa-solid fa-angle-right"></i></span>
                </a>
              </li>
            </ul>
        </nav>   
    </div>
  </div>

<!-- Modal thêm phiếu nhập -->
<div class="modal fade" id="staticBackdropInfoOrder" aria-hidden="true" aria-labelledby="staticBackdropLabelInfoOrder" tabindex="-1">
    <div class="modal-dialog modal-xl ">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabelInfoOrder">Chỉnh sửa đơn hàng</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="">
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
                    <!-- Row thông tin đơn hàng-->
                    <div class="row pe-3">
                        <div class="card border shadow rounded-3 w-100" style="width: 18rem;">
                            <ul class="list-group list-group-flush">
                              <li class="list-group-item fw-bold py-2">Thông tin đơn hàng</li>
                              <li class="list-group-item">
                                <div class="mt-2 mb-2 d-flex justify-content-between align-items-center small">
                                    <strong>Mã đơn hàng</strong>
                                    <span class="opacity-50 fw-medium">
                                        HD001
                                    </span>
                                </div>
                                <div class="mt-2 mb-2 d-flex justify-content-between align-items-center small">
                                    <strong>Tên khách hàng</strong>
                                    <span class="opacity-50 fw-medium">
                                        Ngô Đức Trọng
                                    </span>
                                </div>
                                <div class="mt-2 mb-2 d-flex justify-content-between align-items-center small">
                                    <strong >Số điện thoại</strong>
                                    <span class="opacity-50 fw-medium">
                                        0356574225
                                    </span>
                                </div>
                                <div class="mt-2 mb-2 small address-css">
                                    <div><strong>Địa chỉ giao hàng</strong></div>
                                    <div class="opacity-50 fw-medium">
                                      Đồng khởi,Diên Khánh, Khánh Hòa
                                    </DIV>
                                </div>
                                
                                <div class="mt-2 mb-2 d-flex justify-content-between align-items-center small">
                                    <strong>Ngày tạo đơn hàng</strong>
                                    <span class="opacity-50 fw-medium">
                                        2025-01-07
                                    </span>
                                </div>
                                <div class="mb-2 d-flex justify-content-between align-items-center small">
                                    <strong>Ngày cập nhật</strong>
                                    <span class="opacity-50 fw-medium">
                                        2025-01-07
                                    </span >
                                </div>
                                
                                <div class="mb-2 d-flex justify-content-between align-items-center small ">
                                    <strong>Phương thức thanh toán</strong>
                                    <span class="opacity-50 fw-medium">
                                        Tiền mặt (COD)
                                    </span>
                                </div>
                                <div class="mb-2 d-flex justify-content-between align-items-center small ">
                                    <strong>Tổng số lượng sản phẩm</strong>
                                    <span class="opacity-50 fw-medium">
                                        6
                                    </span>
                                </div>
                                <div class="mb-2 d-flex justify-content-between align-items-center small">
                                    <strong>Tổng tiền sản phẩm</strong>
                                    <span class="opacity-50 fw-medium">
                                        459.000đ
                                    </span>
                                </div>
                                <div class="mb-2 d-flex justify-content-between align-items-center small">
                                    <strong>Phí giao hàng</strong>
                                    <span class="opacity-50 fw-medium">
                                        41.000đ
                                    </span>
                                </div>
                              </li>
                              <li class="list-group-item py-2">
                                <div class="mt-2 mb-2 d-flex justify-content-between align-items-center small ">
                                    <strong>Trạng thái</strong>
                                    <span class="opacity-50 fw-medium">
                                      Chờ xác nhận
                                    </span>
                                </div>
                              </li>
                              <li class="list-group-item">
                                <div class="mb-2 mt-2 d-flex justify-content-between align-items-center small ">
                                    <strong>Tổng tiền</strong>
                                    <span class="opacity-50 fw-medium">500.000đ</span>
                                </div>
                              </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
          </div>
      </div>
    </div>
  </div>

<!-- Thêm sách mới Modal -->
<div class="modal fade" id="staticBackdrop" aria-hidden="true" aria-labelledby="staticBackdropLabel" tabindex="-1">
    <div class="modal-dialog modal-xl modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Thêm phiếu nhập </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="">
          <div class="modal-body">
            <!-- Row phiếu nhập -->
            <div class="row">
              <div class="col-md-12">
                <div class="row mb-3">
                  <div class="col-md-6 d-flex justify-content-between">
                    <label for="" class="col-form-label fw-medium">Tên nhà cung cấp</label>
                    <div class="col-sm-8">
                        <select class="form-select col-sm-8" aria-label="Default select example" >
                          <option selected>Chọn nhà cung cấp</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                    </div>
                  </div>
                  <div class="col-md-6 d-flex justify-content-between">
                    <label for="" class="col-form-label fw-medium">Chiết khấu(%)</label>
                    <input type="text" class="form-control" id="" placeholder="Nhập chiết khấu..." style="width: 400px">
                  </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6 d-flex justify-content-between">
                        <label for="" class="col-form-label fw-medium">Số dòng cần thêm</label>
                        <input type="text" class="form-control" id="" placeholder="Nhập số dòng..." style="width: 330px">
                        <button class="btn btn-success btn-sm">Thêm </button>
                    </div>
                </div>
                <div class="row">
                    <!-- col bảng sản phẩm trong đơn hàng -->
                    <div class="col-md-8">
                        <div class="cart-product pb-2 px-2 border rounded-3 shadow bg-white table-responsive">
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col" class="text-dark">STT</th>
                                    <th scope="col" class="text-dark">Sản phẩm</th>
                                    <th scope="col" class="text-dark">Số lượng</th>
                                    <th scope="col" class="text-dark">Đơn giá</th>
                                    <th scope="col" class="text-dark">Giá nhập</th>
                                    <th scope="col" class="text-dark">Thành tiền</th>
                                    <th scope="col" class="text-dark">Thao tác</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class=" book-name align-middle fw-medium" style="max-width: 150px; word-wrap: break-word;">
                                            1
                                        </td>
                                        <td class=" book-name align-middle fw-medium" style="max-width: 150px; word-wrap: break-word;">
                                            <select class="form-select " aria-label="Default select example" >
                                                <option selected>Chọn sản phẩm</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                              </select> 
                                        </td>
                                        <td class="align-middle opacity-75">
                                            <input type="number" class="form-control" style="width: 75px;">
                                        </td>                                             
                                        <td class="quantity align-middle opacity-75" >
                                            <span class="price-text">
                                                <span class="price fw-medium">299.000đ</span>
                                            </span>
                                        </td>
                                        <td class="book-price align-middle">
                                            <span class="price-text">
                                                <span class="price fw-medium">299.000đ</span>
                                            </span>
                                        </td>
                                        <td class="total-price align-middle">
                                            <span class="price-text">
                                                <span class="price fw-medium">299.000đ</span>
                                            </span>
                                        </td>
                                        <td class="total-price align-middle">
                                            <button class="delete-icon btn">
                                                <i class="fa-solid fa-delete-left"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                    <!-- col thông tin thanh toán -->
                    <div class="col-md-4 ">
                        <!-- Row thông tin đơn hàng-->
                        <div class="row pe-3">
                            <div class="card border shadow rounded-3 w-100" style="width: 18rem;">
                                <ul class="list-group list-group-flush">
                                  <li class="list-group-item fw-bold py-2">Thông tin phiếu nhập</li>
                                  <li class="list-group-item">
                                    <div class="mt-2 mb-2 d-flex justify-content-between align-items-center small">
                                        <strong>Nhà cung cấp</strong>
                                        <span class="opacity-50 fw-medium">
                                            Ngô Đức Trọng
                                        </span>
                                    </div>
                                    <div class="mt-2 mb-2 d-flex justify-content-between align-items-center small">
                                        <strong >Nhân viên</strong>
                                        <span class="opacity-50 fw-medium">
                                            Ngô Đức Trọng
                                        </span>
                                    </div>                          
                                    <div class="mt-2 mb-2 d-flex justify-content-between align-items-center small">
                                        <strong>Ngày tạo phiếu</strong>
                                        <span class="opacity-50 fw-medium">
                                            2025-01-07
                                        </span>
                                    </div>
                                    <div class="mb-2 d-flex justify-content-between align-items-center small">
                                        <strong>Ngày cập nhật</strong>
                                        <span class="opacity-50 fw-medium">
                                            2025-01-07
                                        </span >
                                    </div>
                                    
                                    <div class="mb-2 d-flex justify-content-between align-items-center small ">
                                        <strong>Chiết khấu</strong>
                                        <span class="opacity-50 fw-medium">
                                            99
                                        </span>
                                    </div>
                                    <div class="mb-2 d-flex justify-content-between align-items-center small ">
                                        <strong>Tổng số lượng sản phẩm</strong>
                                        <span class="opacity-50 fw-medium">
                                            6
                                        </span>
                                    </div>
                                  </li>
                                  <li class="list-group-item py-2">
                                    <div class="mt-2 mb-2 d-flex justify-content-between align-items-center small ">
                                        <strong>Trạng thái</strong>
                                        <span class="opacity-50 fw-medium">
                                          Chờ xác nhận
                                        </span>
                                    </div>
                                  </li>
                                  <li class="list-group-item">
                                    <div class="mb-2 mt-2 d-flex justify-content-between align-items-center small ">
                                        <strong>Tổng tiền</strong>
                                        <span class="opacity-50 fw-medium" style="font-size: 18px; color: #e55d5d; ">500.000đ</span>
                                    </div>
                                  </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <!-- Row thêm sản phẩm vào phiếu nhập -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success">Xác nhận</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  
  
</div>