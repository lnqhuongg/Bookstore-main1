<section class="Login py-4 border-bottom">
    <div class="container">
        <!-- Row breadcumb -->
        <div class="row">
            <div class="breadcrumb-holder">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                  <ol class="breadcrumb border d-inline-flex px-3 py-1 rounded-pill align-items-center">
                    <li class="breadcrumb-item"><a href="/assets/layout/client/index.html" class="text-decoration-none small text-black">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="/assets/layout/client/login.html" class="text-decoration-none small text-black">Đăng nhập</a></li>
                    <li class="breadcrumb-item active small" aria-current="page">Quên mật khẩu</li>
                  </ol>
                </nav>
            </div>
        </div>

        <!-- Row Login form -->
        <div class="row d-flex align-items-center justify-content-center ">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header text-bg-warning fw-bold text-center text-white">
                      QUÊN MẬT KHẨU
                    </div>
                    <div class="card-body">
                        <p class="text-center">
                          Vui lòng nhập mã xác nhận đã được gửi qua email của bạn.
                        </p>
                        <form class="row g-3 pb-3">
                            <div class="col-md-12">
                              <input placeholder="Nhập mã xác nhận..." type="email" class="form-control" id="validationDefault01" value="" required>
                            </div>
                            <div class="col-12 d-grid">
                              <a href="/assets/layout/client/rePassword3.html" class="btn btn-success" type="submit">Xác nhận</a>
                            </div>
                            
                          </form>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</section>