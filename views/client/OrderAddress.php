<section class="order-address">
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
                    <li class="breadcrumb-item d-flex align-items-center small active" aria-current="page">
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
                      <div class="progress-bar bg-success" style="width: 0%;"></div>
                    </div>
        
                    <!-- Nút đầu -->
                    <div class="step-circle active" style="left: 0%;"></div>
                    <div class="step-label active text-black" style="left: 1%;">Thông tin giao hàng</div>
              
                    <!-- Nút giữa -->
                    <div class="step-circle " style="left: 50%;"></div>
                    <div class="step-label active" style="left: 51%;">Thông tin thanh toán</div>
              
                    <!-- Nút cuối -->
                    <div class="step-circle" style="left: 98%;"></div>
                    <div class="step-label" style="left: 99%;">Thanh toán</div>
                </div>
            </div>
        </div>
        <!-- row info address -->
        <div class="row" style="margin-top: 70px">
            <div class="col-md-12">
                <div class="info-address p-4 border bg-white shadow rounded-3">
                    <form class="">
                        <div class="mb-3">
                          <label for="" class="form-label">Tỉnh/Thành phố</label>
                          <select class="form-select" aria-label="Default select example">
                            <option selected>Chọn tỉnh/thành phố</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Quận/Huyện</label>
                          <select class="form-select" aria-label="Default select example">
                            <option selected>Chọn quận/huyện</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Phường/Xã</label>
                          <select class="form-select" aria-label="Default select example">
                            <option selected>Chọn phường/xã</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Số nhà</label>
                          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nhập địa chỉ cụ thể...">
                        </div>
                        
                        <a href="/assets/layout/client/orderPaymentMethod.html" type="submit" class="btn btn-success" style="margin-left: 1155px" >Xác nhận</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
        

</section>