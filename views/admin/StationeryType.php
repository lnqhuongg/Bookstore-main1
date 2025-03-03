<div class="container py-4 bg-light">
  <!-- row Panel -->
  <div class="row pb-4">
    <h4>
        Quản lý loại văn phòng phẩm
    </h4>
  </div>
  <!-- row search, button thêm danh mục -->
  <div class="row py-3 px-1 mb-2">
    <!-- Form tìm kiếm -->
    <div class="col-md-11 d-flex">
      <form class="d-flex w-100">
          <input type="text" placeholder="Nhập mã, loại văn phòng phẩm..." style="max-width: 1080px;" class="form-control me-4" id="">
          <button class="btn btn-success btn-sm " >Tìm kiếm</button>
      </form>
    </div>
    <!-- Button thêm sách -->
    <div class="col-md-1 d-flex justify-content-end">
      <!-- Button trigger modal -->
      <button style="width:110px" type="button" class="btn btn-success btn-sm open_add_form" data-bs-toggle="modal" data-bs-target="#staticBackdropEditTypeStationery">
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
                <th scope="col">Mã danh mục</th>
                <th scope="col">Tên danh mục</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Tùy chỉnh</th>
              </tr>
            </thead>
            <tbody  class="table-group-divider">
                <tr>
                  <!-- Mã danh mục -->
                    <td class="align-middle text-center" scope="row">
                        LVPP001
                    </td>
                  <!-- Tên danh mục -->
                    <td class="  align-middle text-center" style="max-width: 150px; word-wrap: break-word;">
                        Bút bi
                    </td>
                  <!-- Trạng thái -->
                    <td class=" align-middle text-center text-success fw-bold">
                        Hoạt động
                    </td>
                  <!-- Tùy chỉnh -->
                    <td class="align-middle text-center">
                        <!-- Button chỉnh sửa -->
                          <!-- Button trigger modal -->
                          <button class="btn" fdprocessedid="r9x0b9" type="button" class="btn btn-success btn-sm open_edit_form" data-bs-toggle="modal" data-bs-target="#staticBackdropEditTypeStationery">
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

  <!-- Modal -->
  <div class="modal fade" id="staticBackdropEditTypeStationery" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabelEditTypeStationery" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="stationeryTypeModalLabel">Chỉnh sửa thông tin loại văn phòng phẩm</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="" id="stationeryTypeForm">
          <div class="modal-body">
            <div class="row mb-3">
                <label for="" class=" col-sm-3 col-form-label fw-medium text-start">Loại văn phòng phẩm</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="" placeholder="Nhập tên Loại văn phòng phẩm...">
                </div>
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
    <script src="/assets/js/admin/productManagement.js"></script>

    <script src="../assets/admin/js/StationeryType.js"></script>
    
</body>
</html>