<section class="cart">
    <div class="container py-4">
        <!-- Row panel -->
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
                    <li class="breadcrumb-item d-flex align-items-center active small" aria-current="page">
                      Giỏ hàng
                    </li>
                  </ol>
                </nav>
            </div> 
        </div>
        <!-- Row giỏ hàng và thông tin đơn hàng -->
        <div class="row pt-4 mt-1">
            <!-- col giỏ hàng -->
            <div class="col-md-9">
                <div class="cart-product pb-2 px-2 border rounded-3 shadow bg-white table-responsive">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col" colspan="2" class="text-secondary">Sản phẩm</th>
                            <th scope="col" class="text-secondary">Đơn giá</th>
                            <th scope="col" class="text-secondary">Số lượng</th>
                            <th scope="col" class="text-secondary">Thành tiền</th>
                            <th scope="col" class="text-secondary"></th>
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
                                    <div id="product_A_form" class="input-quantity">
                                        <div class="input-group" style="max-width: 150px;">
                                            <button class="btn border btn-sm" type="button" id="button-decrease">
                                                <i class="fa-solid fa-minus fa-xs"></i>
                                            </button>
                                            <input type="text" class="form-control text-center border" value="1" min="1" max="99" id="quantity-input">
                                            <button class="btn border btn-sm" type="button" id="button-increase">
                                                <i class="fa-solid fa-plus fa-xs"></i>
                                            </button>
                                        </div>     
                                    </div>
                                </td>
                                <td class="book-price align-middle">
                                    <span class="price-text">
                                        <span class="price fw-medium">299.000đ</span>
                                    </span>
                                </td>
                                <td class="delete-book align-middle">
                                    <button class="btn" fdprocessedid="r9x0b9">
                                        <img src="/assets/img/trash.png" style="width:20px" alt="">
                                    </button>
                                </td>
                            </tr>

                           
                        </tbody>
                    </table>
                    
                </div>
                <div class="row mt-2">
                    <div class="col-md-12">
                        <a href="/assets/layout/client/product.html" class="text-decoration-none cart-back d-inline-flex align-items-center float-end text-success me-2">
                            <i class="fa-solid fa-angle-left me-2"></i>
                            <p class="mb-1">Trở lại mua hàng</p> 
                        </a>
                    </div>
                </div>
            </div>
            <!-- col thông tin đơn hàng -->
            <div class="col-md-3">
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
                <!-- nút thanh toán -->
                <a href="/assets/layout/client/orderAddress.html" class="btn btn-success mt-4 w-100 btn-small">
                    <span class="fw-medium small">Thanh toán</span>
                </a>
            </div>
        </div>

    </div>

</section>