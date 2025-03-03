
<!-- --------------------------------------------------------------------------------------------- -->
<div class="container py-4 bg-light">
  <!-- row Panel -->
  <div class="row pb-4">
    <h4>
        Quản lý tài khoản
    </h4>
  </div>
  <!-- row filter, button thêm sách -->
  <div class="row py-3 px-1 mb-2">
    <!-- Form tìm kiếm -->
    <div class="col-md-11 d-flex">
      <form class="d-flex w-100">
          <select class="form-select me-2" aria-label="Default select example" style="max-width: 200px;">
              <option selected>Tất cả nhóm quyền</option>
              <option value=""></option>
          </select>
          <select class="form-select me-2" aria-label="Default select example" style="max-width: 200px;">
              <option selected>Tất cả trạng thái</option>
              <option value=""></option>
          </select>
          <input type="text" placeholder="Nhập mã, tên người dùng..." style="max-width: 660px;" class="form-control me-4" id="">

          <button class="btn btn-success btn-sm " >Tìm kiếm</button>
      </form>
    </div>
    <!-- Button thêm sách -->
    <div class="col-md-1 d-flex justify-content-end">
      <button class="btn btn-success btn-sm open_add_form" style="width:110px" data-bs-toggle="modal" data-bs-target="#staticBackdropEditAccount" href="#staticBackdrop" type="button" role="button">Thêm mới</button>
    </div>
  </div>
  <!-- row table -->
  <div class="row">
    <div class="col-md-12">
      <div class=" pb-2 px-2 border rounded-3 shadow bg-white table-responsive">
        <table class="table table-hover">
            <thead class="text-center">
              <tr>
                <th scope="col">Mã tài khoản</th>
                <th scope="col">Tên tài khoản</th>
                <th scope="col">Email</th>
                <th scope="col">Số điện thoại</th>
                <th scope="col">Quyền</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Tùy chỉnh</th>
              </tr>
            </thead>
            <tbody  class="table-group-divider">
                <tr>
                  <!-- Mã tài khoản -->
                    <td class="align-middle text-center" scope="row">
                        1
                    </td>
                  <!-- Tên tài khoản -->
                    <td class=" text-center align-middle" scope="row">
                        Lê Ngọc Quỳnh Hương
                    </td>
                  <!-- Email -->
                    <td class=" align-middle text-center" style="max-width: 150px; word-wrap: break-word;">
                        lnqhuong04@gmail.com 
                    </td>
                  <!--sdt-->
                    <td class="align-middle text-center">
                        0704421398  
                    </td> 
                  <!-- Quyền -->
                    <td class="align-middle text-center ">
                        bố đời
                    </td>
                  <!-- Trạng thái -->
                    <td class=" align-middle text-center text-success fw-bold">
                        Hoạt động
                    </td>
                    <!-- <td class=" align-middle text-center text-danger fw-bold">
                        Không hoạt động
                    </td> -->
                  <!-- Tùy chỉnh -->
                    <td class="align-middle text-center">
                        <!-- Button chỉnh sửa -->
                          <!-- Button trigger modal -->
                          <button class="btn open_edit_form" fdprocessedid="r9x0b9" type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdropEditAccount">
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
              <li class="page-item me-2"><a class="page-link rounded-circle active" href="#">1</a></li>
              <li class="page-item me-2"><a class="page-link rounded-circle" href="#">2</a></li>
              <li class="page-item me-2"><a class="page-link rounded-circle" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link rounded-circle" href="#" aria-label="Next">
                  <span aria-hidden="true"><i class="next fa-solid fa-angle-right"></i></span>
                </a>
              </li>
              <!--  -->
            </ul>
        </nav>   
    </div>
  </div>

<!-- Modal Account -->
<div class="modal fade" id="staticBackdropEditAccount" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabelEditAccount" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="accountModalLabel">Chỉnh sửa thông tin tài khoản</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="" id="accountForm">
          <div class="modal-body">
            <div class="row mb-3">
                <label for="" class=" col-sm-3 col-form-label fw-medium text-start">Họ và tên</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="" placeholder="Nhập Họ và tên...">
                </div>
            </div>
            <div class="row mb-3">
                <label for="calendarInput" class="col-sm-3 text-start form-label fw-medium">Email</label>
                <div class="col-sm-9">
                  <input type="email" class="form-control" id="" placeholder="Nhập Email...">
                </div>
            </div>
            <div class="row mb-3">
                <label for="calendarInput" class="col-sm-3 text-start form-label fw-medium">Mật khẩu</label>
                <div class="col-sm-9">
                  <input type="password" class="form-control disabled" id="" style="background-color:white; color: black" placeholder="Nhập Mật khẩu...">
                </div>
            </div>
            <div class="row mb-3">
                <label for="calendarInput" class="col-sm-3 text-start form-label fw-medium">Số điện thoại</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="" placeholder="Nhập Số điện thoại...">
                </div>
            </div>
            <div class="row mb-3">
                <label for="calendarInput" class="col-sm-3 text-start form-label fw-medium">Quyền</label>
                <div class="col-sm-9">
                  <select class="form-select align-items-end" aria-label="Default select example" style="width: 255px">
                      <option selected>Chọn quyền</option>
                      <option value="">One</option>
                  </select>
            </div>
            <div class="edit">
              <div class="row mb-3 d-flex justify-content-center align-items-center">
                <label for="" class="col-sm-3 col-form-label fw-medium text-start">Trạng thái</label>
                <div class="d-flex align-items-center col-sm-9">
                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="toggleSwitch" checked>
                    <label class="form-check-label" for="toggleSwitch">Hoạt động</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success" name="" value="" id="submit_btn">Xác nhận</button>
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

    <script src="../assets/admin/js/Account.js"></script>
    
    
</body>
</html>