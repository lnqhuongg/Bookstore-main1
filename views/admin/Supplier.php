<div class="container py-4 bg-light">
  <!-- row Panel -->
  <div class="row pb-4">
    <h4>
        Quản lý nhà cung cấp
    </h4>
  </div>
  <!-- row filter -->
  <div class="row py-3 px-1 mb-2">
    <!-- Form tìm kiếm -->
    <div class="col-md-11 d-flex">
      <form class="d-flex w-100">
          <select class="form-select me-2" aria-label="Default select example" style="max-width: 200px;">
              <option selected>Tất cả nhà cung cấp</option>
              <option value="1">One</option>
          </select>
          <input type="text" placeholder="Nhập mã, tên nhà cung cấp..." style="max-width: 626px;" class="form-control me-4" id="">

          <div class="me-2 d-flex justify-content-center text-align-items-center">
            <span class="me-2 d-flex justify-content-center align-items-center">Sắp xếp theo tên:</span>
            <button class="btn me-2 d-flex justify-content-center align-items-center">
                <i class="fa-solid fa-arrow-down-a-z fs-5"></i>
            </button>
            <button class="btn me-2 d-flex justify-content-center align-items-center">
              <i class="fa-solid fa-arrow-up-z-a fs-5"></i>
            </button>
          </div>
          <button class="btn btn-success btn-sm " >Tìm kiếm</button>
      </form>
    </div>
    <!-- Button thêm sách -->
    <div class="col-md-1 d-flex justify-content-end">
      <button class="btn btn-success btn-sm open_add_form" style="width:110px" data-bs-toggle="modal" data-bs-target="#staticBackdropEditSupplier" role="button">Thêm mới</button>
      
    </div>
  </div>
  <!-- row table -->
  <div class="row">
    <div class="col-md-12">
      <div class=" pb-2 px-2 border rounded-3 shadow bg-white table-responsive">
        <table class="table table-hover">
            <thead class="text-center">
              <tr>
                <th scope="col">Mã nhà cung cấp</th>
                <th scope="col">Tên nhà cung cấp</th>
                <th scope="col">Email</th>
                <th scope="col">Số điện thoại</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Tùy chỉnh</th>

              </tr>
            </thead>
            <tbody  class="table-group-divider">
                <tr>
                  <!-- Mã nhà cung cấp -->
                    <td class="align-middle text-center" scope="row">
                        SP001
                    </td>
                  <!-- Tên ncc -->
                    <td class="book-name  align-middle text-center" style="max-width: 150px; word-wrap: break-word;">
                        Phương Nam  
                    </td>
                  <!-- Email -->
                    <td class="align-middle text-center">
                        phuongnam11@gmail.com
                    </td> 
                  <!-- Số điện thoại -->
                    <td class="align-middle text-center ">
                        0356987554
                    </td>
                  <!-- Trạng thái -->
                    <td class=" align-middle text-center text-success fw-bold">
                        Hoạt động
                    </td>
                  <!-- Tùy chỉnh -->
                    <td class="align-middle text-center">
                      <!-- Button xem thông tin chi tiết -->
                        <button class="btn" fdprocessedid="r9x0b9" type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdropInfoSupplier">
                            <img src="../assets/admin/img/info.png" style="width:20px" alt="">
                        </button>
                        <!-- Button chỉnh sửa -->
                          <!-- Button trigger modal -->
                          <button class="btn" fdprocessedid="r9x0b9" type="button" class="btn btn-success btn-sm open_edit_form" data-bs-toggle="modal" data-bs-target="#staticBackdropEditSupplier">
                            <img src="../assets/admin/img/edit.png" style="width:20px" alt="">
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

    <!-- Modal -->
  <div class="modal fade" id="staticBackdropEditSupplier" aria-hidden="true" aria-labelledby="staticBackdropLabelSupplier" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="supplierModalLabel">Chỉnh sửa nhà cung cấp </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="" id="supplierForm">
          <div class="modal-body">
            <div class="row">
              <!-- col thông tin sách -->
              <div class="col-md-12 px-3">
                  <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label fw-medium text-start">Tên NCC</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="" placeholder="Nhập tên nhà cung cấp...">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label fw-medium text-start">Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="" placeholder="Nhập email...">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label fw-medium text-start">Số điện thoại</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="" placeholder="Nhập số điện thoại...">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label fw-medium text-start">Địa chỉ</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="" placeholder="Nhập số nhà, tên đường...">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label fw-medium text-start">Phân loại</label>
                    <div class="col-sm-10">
                      <select name="supplier_city" id="supplier-city" class="form-select">
                        <option value="-1">Chọn loại Nhà cung cấp</option>
                      </select>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-md-4 d-flex flex-column align-items-start">
                        <label for="supplier-city" class="form-label fw-medium ">Tỉnh/thành</label>
                        <select name="supplier_city" id="supplier-city" class="form-select">
                            <option value="-1">Chọn tỉnh/thành</option>
                        </select>
                    </div>
                    <div class="col-md-4 d-flex flex-column align-items-start">
                        <label for="supplier-district" class="form-label fw-medium ">Quận/huyện</label>
                        <select name="supplier_district" id="supplier-district" class="form-select">
                            <option value="-1">Chọn quận/huyện</option>
                        </select>
                    </div>
                    <div class="col-md-4 d-flex flex-column align-items-start">
                        <label for="supplier-ward" class="form-label fw-medium ">Phường/xã</label>
                        <select name="supplier_ward" id="supplier-ward" class="form-select">
                            <option value="-1">Chọn phường/xã</option>
                        </select>
                    </div>
                  </div>
                  <div class="edit">
                    <div class="row mb-3 d-flex justify-content-center align-items-center">
                      <label for="" class="col-sm-2 col-form-label fw-medium text-start">Trạng thái</label>
                      <div class="d-flex align-items-center col-sm-10">
                        <div class="form-check form-switch">
                          <input class="form-check-input" type="checkbox" id="toggleSwitch" checked>
                          <label class="form-check-label" for="toggleSwitch">Hoạt động</label>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success" id="submit_btn">Xác nhận</button>
          </div>
        </form>
      </div>
    </div>
  </div> 
</div>

<!-- ------------------------------------------------------------------------------------------------- -->
    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- js -->
    <!-- <script src="/assets/js/admin/uploadImg.js"></script> -->

    <script src="../assets/admin/js/Supplier.js"></script>
    
    
</body>
</html>