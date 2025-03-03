<div class="container py-4 bg-light">
  <!-- row Panel -->
  <div class="row pb-4">
    <h4>
        Quản lý nhóm quyền
    </h4>
  </div>
  <!-- row search, button thêm danh mục -->
  <div class="row py-3 px-1 mb-2">
    <!-- Form tìm kiếm -->
    <div class="col-md-11 d-flex">
      <form class="d-flex w-100">
          <input type="text" placeholder="Nhập tên nhóm quyền..." style="max-width: 1080px;" class="form-control me-4" id="">
          <button class="btn btn-success btn-sm " >Tìm kiếm</button>
      </form>
    </div>
    <!-- Button thêm sách -->
    <div class="col-md-1 d-flex justify-content-end">
      <!-- Button trigger modal -->
      <button style="width:110px" type="button" class="btn btn-success btn-sm open_add_form" data-bs-toggle="modal" data-bs-target="#staticBackdropEditRole">
        Thêm mới
      </button> 
    </div>
  </div>

  <!-- row table -->
  <div class="row">
    <div class="col-md-12">
      <div class=" pb-2 px-2 border rounded-3 shadow bg-white table-responsive">
        <table class="table table-hover">
            <thead class="text-center">
              <tr>
                <th scope="col">Mã nhóm quyền</th>
                <th scope="col">Tên nhóm quyền</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Tùy chỉnh</th>
              </tr>
            </thead>
            <tbody  class="table-group-divider">
                <tr>
                  <!-- Mã danh mục -->
                    <td class="align-middle text-center" scope="row">
                        SP001
                    </td>
                  <!-- Tên danh mục -->
                    <td class="  align-middle text-center" style="max-width: 150px; word-wrap: break-word;">
                        Truyện tranh 
                    </td>
                  <!-- Trạng thái -->
                    <td class=" align-middle text-center text-success fw-bold">
                        Hoạt động
                    </td>
                  <!-- Tùy chỉnh -->
                    <td class="align-middle text-center">
                      <!-- Button chỉnh sửa -->
                      <!-- Button trigger modal -->
                      <button class="btn" fdprocessedid="r9x0b9" type="button" class="btn btn-success btn-sm open_edit_form" data-bs-toggle="modal" data-bs-target="#staticBackdropEditRole">
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
<div class="modal fade" id="staticBackdropEditRole" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabelEditCatalog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="roleModalLabel">Chỉnh sửa nhóm quyền</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="" id="roleForm">
          <div class="modal-body">
            <!-- <div class="row mb-3">
                <label for="" class=" col-sm-3 col-form-label fw-medium text-start">Tên nhóm quyền</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="">
                </div>
            </div> -->
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="tenNQ" id="permissionGroupName" placeholder="Nhập tên nhóm quyền">
                <label for="permissionGroupName" style="color: #1D712C;">Tên nhóm quyền</label>
                <span class="text-message role-name-msg"></span>
            </div>
            <table class="table table-borderless permission-group">
                <thead>
                    <tr>
                        <th class="text-success text-start fs-5">Danh mục chức năng</th>
                        <th>Xem</th>
                        <th>Tạo mới</th>
                        <th>Cập nhật</th>
                        <th>Khóa</th>
                        <th>In</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Quản lý nhóm quyền</td>
                        <td><input type="checkbox" name="NQ_xem" class="form-check-input"></td>
                        <td><input type="checkbox" name="NQ_them" class="form-check-input"></td>
                        <td><input type="checkbox" name="NQ_sua" class="form-check-input"></td>
                        <td><input type="checkbox" name="NQ_xoa" class="form-check-input"></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Quản lý tài khoản</td>
                        <td>-</td>
                        <td><input type="checkbox" name="TK_them" class="form-check-input"></td>
                        <td><input type="checkbox" name="TK_sua" class="form-check-input"></td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Quản lý tác giả</td>
                        <td>-</td>
                        <td><input type="checkbox" name="TG_them" class="form-check-input"></td>
                        <td><input type="checkbox" name="TG_sua" class="form-check-input"></td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Quản lý danh mục sách</td>
                        <td>-</td>
                        <td><input type="checkbox" name="DM_them" class="form-check-input"></td>
                        <td><input type="checkbox" name="DM_sua" class="form-check-input"></td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Quản lý nhà cung cấp</td>
                        <td><input type="checkbox" name="NCC_xem" class="form-check-input"></td>
                        <td><input type="checkbox" name="NCC_them" class="form-check-input"></td>
                        <td><input type="checkbox" name="NCC_sua" class="form-check-input"></td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Quản lý mã giảm giá</td>
                        <td>-</td>
                        <td><input type="checkbox" name="MGG_them" class="form-check-input"></td>
                        <td><input type="checkbox" name="MGG_sua" class="form-check-input"></td>
                        <td><input type="checkbox" name="MGG_xoa" class="form-check-input"></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Quản lý sách</td>
                        <td><input type="checkbox" name="SP_xem" class="form-check-input"></td>
                        <td><input type="checkbox" name="SP_them" class="form-check-input"></td>
                        <td><input type="checkbox" name="SP_sua" class="form-check-input"></td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Quản lý văn phòng phẩm</td>
                        <td><input type="checkbox" name="SP_xem" class="form-check-input"></td>
                        <td><input type="checkbox" name="SP_them" class="form-check-input"></td>
                        <td><input type="checkbox" name="SP_sua" class="form-check-input"></td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Quản lý loại văn phòng phẩm</td>
                        <td><input type="checkbox" name="SP_xem" class="form-check-input"></td>
                        <td><input type="checkbox" name="SP_them" class="form-check-input"></td>
                        <td><input type="checkbox" name="SP_sua" class="form-check-input"></td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Quản lý đơn hàng</td>
                        <td><input type="checkbox" name="DH_xem" class="form-check-input"></td>
                        <td>-</td>
                        <td><input type="checkbox" name="DH_sua" class="form-check-input"></td>
                        <td>-</td>
                        <td><input type="checkbox" name="DH_in" class="form-check-input"></td>
                    </tr>
                    <tr>
                        <td>Quản lý phiếu nhập sách</td>
                        <td><input type="checkbox" name="PN_xem" class="form-check-input"></td>
                        <td><input type="checkbox" name="PN_them" class="form-check-input"></td>
                        <td><input type="checkbox" name="PN_sua" class="form-check-input"></td>
                        <td>-</td>
                        <td><input type="checkbox" name="PN_in" class="form-check-input"></td>
                    </tr>
                    <tr>
                        <td>Thống kê</td>
                        <td><input type="checkbox" name="ST_xem" class="form-check-input"></td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                </tbody>
            </table>
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

    <script src="../assets/admin/js/Role.js"></script>
    
    
</body>
</html>