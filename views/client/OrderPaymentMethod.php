<section class="order-payment">
    <div class="container py-4">
        <!-- row breacumb -->
        <div class="row">
            <h5>
                Giỏ hàng
            </h5>
            <div class="breadcrumb-holder">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                  <ol class="breadcrumb d-inline-flex pe-3 py-1 align-items-center">
                    <li class="breadcrumb-item d-flex align-items-center">
                      <a href="/assets/layout/client/index.html" class="text-decoration-none small text-black">Trang chủ</a>
                    </li>
                    <li class="breadcrumb-item d-flex align-items-center small text-black" aria-current="page">
                      Giỏ hàng
                    </li>
                    <li class="breadcrumb-item d-flex align-items-center small active " aria-current="page">
                      Thanh toán
                    </li>
                  </ol>
                </nav>
            </div>
        </div>
        <!-- row progress -->
        <div class="row">
            <div class="col-md-12">
                <div class="progress-container">
                    <!-- Thanh tiến trình -->
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="height: 4px;">
                      <div class="progress-bar bg-success" style="width: 50%;"></div>
                    </div>
        
                    <!-- Nút đầu -->
                    <div class="step-circle active" style="left: 0%;"></div>
                    <div class="step-label active text-black" style="left: 1%;">Thông tin giao hàng</div>
              
                    <!-- Nút giữa -->
                    <div class="step-circle active " style="left: 50%;"></div>
                    <div class="step-label active text-black" style="left: 51%;">Thông tin thanh toán</div>
              
                    <!-- Nút cuối -->
                    <div class="step-circle" style="left: 98%;"></div>
                    <div class="step-label" style="left: 99%;">Thanh toán</div>
                </div>
            </div>
        </div>
        <!-- Row thông tin đơn hàng - phương thức thanh toán -->
        <div class="row pt-4" style="margin-top:70px">
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
                <!-- Row thông tin đơn hàng -->
                <div class="row pe-3 mb-4">
                    <div class="col-md-12">
                        <!-- card thông tin thanh toán giỏ hàng -->
                        <div class="card border shadow rounded-3 w-100" style="width: 18rem;">
                            <ul class="list-group list-group-flush">
                              <li class="list-group-item fw-bold py-2">Thông tin đơn hàng</li>
                              <li class="list-group-item">
                                <div class="mt-2 mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                    <strong>Số sản phẩm</strong>
                                    <span>
                                        10
                                    </span>
                                </div>
                                <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                    <strong>Tạm tính</strong>
                                    <span>
                                        500.000đ
                                    </span>
                                </div>
                                <div class="mb-2 d-flex justify-content-between align-items-center opacity-50 small fw-medium">
                                    <strong>Phí giao hàng</strong>
                                    <span>
                                        0đ
                                    </span>
                                </div>
                              </li>
                              <li class="list-group-item">
                                <div class="mb-2 mt-2 d-flex justify-content-between align-items-center small fw-medium">
                                    <strong>Tổng cộng</strong>
                                    <span style="color:rgb(60, 199, 60)" class="fs-5">500.000đ</span>
                                </div>
                              </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Row phương thức thanh toán-->
                <div class="row mt-2 pe-3">
                    <div class="col-md-12">
                        <!-- card phương thức thanh toán -->
                        <div class="card border shadow rounded-3 w-100" style="width: 18rem;">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item fw-bold py-2">Phương thức vận chuyển</li>
                                <li class="list-group-item my-2">
                                    <form action="">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Chuyển khoản qua VNPAY
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Thanh toán bằng tiền mặt
                                            </label>
                                        </div>
                                        <!-- Nút thanh toán-->
                                        <a href="/assets/layout/client/orderAnnounce.html" type="submit" class="btn btn-success mt-2 w-100 btn-small">
                                            <span class="fw-medium small">Thanh toán</span>
                                        </a>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
        

</section>