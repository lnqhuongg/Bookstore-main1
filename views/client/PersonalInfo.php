<section class="personal">
    <div class="container py-4">
        <!-- Row panel -->
        <div class="row">
            <h5>
                Thông tin của tôi
            </h5>
            <div class="breadcrumb-holder">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                  <ol class="breadcrumb d-inline-flex pe-3 py-1 align-items-center">
                    <li class="breadcrumb-item d-flex align-items-center">
                      <a href="/assets/layout/client/index.html" class="text-decoration-none small text-black">Trang chủ</a>
                    </li>
                    <li class="breadcrumb-item d-flex align-items-center active small" aria-current="page">
                      Tài khoản
                    </li>
                  </ol>
                </nav>
            </div>
              
        </div>
        <!-- Row thông tin cá nhân -->
        <form class="row pt-4 mt-1 d-flex">
            
            <!-- col avatar -->
            <div class=" col-md-4 d-flex flex-column justify-content-center">
                <div class="personal-avatar shadow border rounded-3 p-4 bg-white h-100 d-flex flex-column justify-content-center align-items-center">
                    <label for="avatarInput" class="position-relative p-4 avatar-label">
                        <img src="/assets/uploads/avatarRabit.png" id="avatarPreview" class="avatar-preview mb-3 bg-secondary" alt="Avatar Preview">
                        <div class="overlay d-flex justify-content-center align-items-center" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); border-radius: 50%; color: white; font-size: 14px; opacity: 0; transition: opacity 0.3s;">
                            Nhấn để chọn
                        </div>
                    </label>
                
                    <!-- File input (ẩn đi) -->
                    <input type="file" id="avatarInput" class="form-control avatar-upload-btn d-none" accept="image/*">
                </div>
            </div>
            <!-- col thông tin cá nhân -->
            <div class=" col-md-8">
                <div class="personal-info border shadow rounded-3 p-4 bg-white">
                    <div class="row g-3">
                        <div class="col-md-6">
                          <label for="validationServer01" class="form-label fw-medium">Họ và tên</label>
                          <input type="text" class="form-control border secondary"id="validationServer01" value="Mark" required>
                          <div class="valid-feedback">
                            Looks good!
                          </div>
                        </div>
                        <div class="col-md-6">
                          <label for="validationServer02" class="form-label fw-medium">Email</label>
                          <input type="email" class="form-control  border secondary" id="validationServer02" value="Otto" required>
                          <div class="valid-feedback">
                            Looks good!
                          </div>
                        </div>
                        <div class="col-md-6">
                          <label for="validationServer02" class="form-label fw-medium">Số điện thoại</label>
                          <input type="text" class="form-control  border secondary" id="validationServer02" value="Otto" required>
                          <div class="valid-feedback">
                            Looks good!
                          </div>
                        </div>
                        <div class="col-md-6">
                          <label for="validationServer02" class="form-label fw-medium">Mật khẩu</label>
                          <input type="password" class="form-control border secondary" id="validationServer02" value="Otto" required>
                          <div class="valid-feedback">
                            Looks good!
                          </div>
                        </div>
                        <div class="col-md-6">
                          <label for="validationServer02" class="form-label fw-medium">Xác nhận mật khẩu</label>
                          <input type="password" class="form-control  border secondary" id="validationServer02" value="Otto" required>
                          <div class="valid-feedback">
                            Looks good!
                          </div>
                        </div>
                        <div class="col-12">
                          <button class="btn btn-success float-end  small" type="submit">Cập nhật</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- Row Lịch sử mua hàng -->

    </div>
</section>