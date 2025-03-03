<div class="container py-4 bg-light">
  <!-- row Panel -->
  <div class="row pb-4">
    <h4>
        Quản lý giảm giá
    </h4>
  </div>
  <!-- row search, button  -->
  <div class="row py-3 px-1 mb-2">
    <!-- Form tìm kiếm -->
    <div class="col-md-11 d-flex">
      <form class="d-flex w-100">
          <input type="text" placeholder="Nhập mã, phần trăm giảm giá..." style="max-width: 1080px;" class="form-control me-4" id="">
          <button class="btn btn-success btn-sm " >Tìm kiếm</button>
      </form>
    </div>
    <!-- Button thêm -->
    <div class="col-md-1 d-flex justify-content-end">
      <!-- Button trigger modal -->
      <button style="width:110px" type="button" class="btn btn-success btn-sm open_add_form" data-bs-toggle="modal" data-bs-target="#staticBackdropEditDiscount">
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
                <th scope="col">Mã giảm giá</th>
                <th scope="col">Ngày bắt đầu</th>
                <th scope="col">Ngày kết thúc</th>
                <th scope="col">Phần trăm (%)</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Tùy chỉnh</th>
              </tr>
            </thead>
            <tbody  class="table-group-divider">
                <tr>
                  <!-- Mã  -->
                    <td class="align-middle text-center" scope="row">
                        KM001
                    </td>
                  <!-- Ngày bắt đầu-->
                    <td class="  align-middle text-center" style="max-width: 150px; word-wrap: break-word;">
                        10/1/2024
                    </td>
                  <!-- Ngày kết thúc -->
                    <td class="  align-middle text-center" style="max-width: 150px; word-wrap: break-word;">
                        10/1/2025
                    </td>
                  <!-- Phần trăm -->
                    <td class="  align-middle text-center" style="max-width: 150px; word-wrap: break-word;">
                        20
                    </td>
                  <!-- Trạng thái -->
                    <td class=" align-middle text-center text-success fw-bold">
                        Hoạt động
                    </td>
                  <!-- Tùy chỉnh -->
                    <td class="align-middle text-center">
                        <!-- Button chỉnh sửa -->
                          <!-- Button trigger modal -->
                          <button class="btn" fdprocessedid="r9x0b9" type="button" class="btn btn-success btn-sm open_edit_form" data-bs-toggle="modal" data-bs-target="#staticBackdropEditDiscount">
                            <img src="../assets/admin/img/edit.png" style="width:20px" alt="">
                          </button>
                        <!-- Button xóa-->
                        <button class="btn" fdprocessedid="r9x0b9" type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdropInfo">
                            <img src="../assets/admin/img/trash.png" style="width:20px" alt="">
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
  <div class="modal fade" id="staticBackdropEditDiscount" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabelEditDiscount" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="discountModalLabel">Chỉnh sửa thông tin khuyến mãi</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="" id="discountForm">
          <div class="modal-body">
            <div class="row mb-3">
                <label for="" class=" col-sm-3 col-form-label fw-medium text-start">Phần trăm khuyến mãi</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="" placeholder="Nhập Phần trăm khuyến mãi...">
                </div>
            </div>
            <div class="row mb-3">
                <label for="calendarInput" class="col-sm-3 text-start form-label fw-medium">Ngày bắt đầu</label>
                <div class="col-sm-9">
                    <input type="date" id="calendarInput" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <label for="calendarInput" class="col-sm-3 text-start form-label fw-medium">Ngày kết thúc</label>
                <div class="col-sm-9">
                    <input type="date" id="calendarInput" class="form-control">
                </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success">Xác nhận</button>
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

    <script src="../assets/admin/js/Discount.js"></script>
    
    
</body>
</html>