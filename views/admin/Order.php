<div class="container py-4 bg-light">
  <!-- row Panel -->
  <div class="row pb-4">
    <h4>
        Quản lý đơn hàng
    </h4>
  </div>
  <!-- row filter, button thêm sách -->
  <div class="row py-3 px-1 mb-2">
    <!-- Form tìm kiếm -->
    <div class="col-md-12 d-flex">
        <form class="d-flex w-100">
            <select class="form-select me-2" aria-label="Default select example" style="max-width: 232px;">
                <option selected>Chọn trạng thái</option>
                <option value="">One</option>
            </select>
            <input type="text" placeholder="Nhập mã đơn hàng..." style="max-width: 400px;" class="form-control me-4" id="">
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
  <!-- row table -->
  <div class="row">
    <div class="col-md-12">
      <div class=" pb-2 px-2 border rounded-3 shadow bg-white table-responsive">
        <table class="table table-hover">
            <thead class="text-center">
              <tr>
                <th scope="col">Mã đơn hàng</th>
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
                        <!-- Modal -->
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
                        <!-- Button chỉnh sửa -->
                          <!-- Button trigger modal -->
                          <button class="btn" fdprocessedid="r9x0b9" type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdropEditOrder">
                            <img src="../assets/admin/img/edit.png" style="width:20px" alt="">
                          </button>
                          <!-- Modal -->
                          <div class="modal fade" id="staticBackdropEditOrder" aria-hidden="true" aria-labelledby="staticBackdropLabelEditOrder" tabindex="-1">
                            <div class="modal-dialog modal-xl ">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h1 class="modal-title fs-5" id="staticBackdropLabelEditOrder">Chỉnh sửa đơn hàng</h1>
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
                                                            <div class="opacity-50 fw-medium">0356574225</DIV>
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
                                                            
                                                            <select class="form-select me-2 opacity-50 fw-medium" aria-label="Default select example" style="max-width: 190px;">
                                                              <option selected>Chọn trạng thái</option>
                                                              <option value="1">One</option>
                                                              <option value="2">Two</option>
                                                              <option value="3">Three</option>
                                                            </select>
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
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-success">Xác nhận</button>
                                  </div>
                                
                              </div>
                            </div>
                          </div>
                        <!-- Button in đơn hàng -->
                        <button class="btn" fdprocessedid="r9x0b9" type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdropInfoSupplier">
                            <img src="/assets/img/printer.png" style="width:20px" alt="">
                        </button
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


  
</div>