<section class="Login py-4 border-bottom">
    <div class="container">
        <!-- Row breadcumb -->
        <div class="row">
            <div class="breadcrumb-holder">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                  <ol class="breadcrumb border d-inline-flex px-3 py-1 rounded-pill align-items-center">
                    <li class="breadcrumb-item d-flex align-items-center"><a href="/assets/layout/client/index.html" class="text-decoration-none small text-black">Trang chủ</a></li>
                    <li class="breadcrumb-item active small" aria-current="page">Đăng nhập</li>
                  </ol>
                </nav>
            </div>
        </div>

        <!-- Row Login form -->
        <div class="row d-flex align-items-center justify-content-center ">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header text-bg-warning fw-bold text-center">
                      ĐĂNG NHẬP
                    </div>
                    <div class="card-body">
                        <form class="row g-3 py-3">
                            <div class="col-md-12">
                              <label for="validationDefault01" class="form-label">Email*</label>
                              <input placeholder="Nhập email..." type="emailemail" class="form-control" id="validationDefault01" value="" required>
                            </div>
                            <div class="col-md-12">
                              <label for="validationDefault02" class="form-label">Mật khẩu*</label>
                              <input placeholder="Nhập mật khẩu..." type="password" class="form-control" id="validationDefault02" value="" required>
                            </div>
                            <div class="col-12 text-end mt-1">
                                <button class="btn btn-link p-0 text-decoration-none text-primary fst-italic" type="button">
                                    <a href="/assets/layout/client/rePassword1.html" class="text-decoration-none text-secondary small">Quên mật khẩu?</a>
                                </button>
                            </div>
                            <div class="col-12 d-grid">
                              <button class="btn btn-success" type="submit">Đăng nhập</button>
                            </div>
                            
                            <div class="col-12 d-grid">
                              <button class="btn" type="submit"><a href="/assets/layout/client/regisForm.html" class="text-decoration-none text-secondary">Đăng ký</a></button>
                            </div>
                            
                        </form>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</section>