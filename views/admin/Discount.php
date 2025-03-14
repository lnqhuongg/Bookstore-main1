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
          <input type="text" id="searchInput" placeholder="Nhập mã, phần trăm giảm giá..." style="max-width: 1080px;" class="form-control me-4" id="">
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
                <th scope="col">Phần trăm (%)</th>
                <th scope="col">Ngày bắt đầu</th>
                <th scope="col">Ngày kết thúc</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Tùy chỉnh</th>
              </tr>
            </thead>
            <tbody class="table-group-divider">
                    <?php
                      $discounts = $result['paging']; 
                        if($discounts == null) {
                          echo '<tr><td colspan="6">Không có dữ liệu</td> </tr>';
                          echo '</tbody></table></div></div>';
                      } else {
                      echo '<input type="hidden" name="curr_page" class="curr_page" value="'.$paging->curr_page.'">';
                      // số bản ghi sẽ được lấy từ start đến số bản ghi được phép hiển thị trên trang 
                      for($i=$paging->start; $i<$paging->start+$paging->num_per_page && $i<$paging->total_records; $i++){
                          $discount = $discounts[$i];
                    ?>
                <tr>
                  <!-- Mã tác giả -->
                    <td class="align-middle text-center discount_id" scope="row">
                      <?=$discount->getIdMGG()?>
                    </td>
                  <!-- Tên tác gỉa -->
                    <td class="  align-middle text-center discount_percent" style="max-width: 150px; word-wrap: break-word;">
                      <?=$discount->getPhantram()?>
                    </td>
                  <!-- Email -->
                    <td class="  align-middle text-center discount_begin" style="max-width: 150px; word-wrap: break-word;">
                      <?=$discount->getNgaybatdau()?>
                    </td>
                  <!-- Email -->
                    <td class="  align-middle text-center discount_end" style="max-width: 150px; word-wrap: break-word;">
                      <?=$discount->getNgayketthuc()?>
                    </td>
                  <!-- Trạng thái -->
                    <td class="align-middle text-center text-success fw-bold">
                        <?php
                            if($discount->getTrangthai())
                                echo '<span class="align-middle text-center text-success fw-bold">Đang hoạt động</span>';
                            else
                                echo '<span class="align-middle text-center text-danger fw-bold">Bị khóa</span>';
                        ?>
                    </td>
                  <!-- Tùy chỉnh -->
                    <td class="align-middle text-center">
                        <!-- Button chỉnh sửa -->
                        <!-- Button trigger modal -->
                        <button fdprocessedid="r9x0b9" type="button" class="btn btn-sm open_edit_form" data-bs-toggle="modal" data-bs-target="#staticBackdropEditDiscount">
                          <img src="../assets/admin/img/edit.png" style="width:20px" alt="">
                        </button>
                    </td>
                </tr>
                <?php
                    }
                ?>
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
              <?php
                echo $pagingButton;
              ?>
            </ul>
        </nav>   
    </div>
  </div>
  <?php
      }
  ?>

  <!-- Modal -->
  <div class="modal fade" id="staticBackdropEditDiscount" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabelEditDiscount" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="discountModalLabel">Chỉnh sửa thông tin khuyến mãi</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="" id="discountForm">
          <input type="hidden" name="discount_id" id="discount_id" value="">
          <div class="modal-body">
            <div class="row mb-3">
                <label for="" class=" col-sm-3 col-form-label fw-medium text-start">Phần trăm khuyến mãi</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="discount_percent" name="discount_percent" placeholder="Nhập Phần trăm khuyến mãi...">
                  <span class="text-message text-danger discount-percent-msg"></span>
                </div>
            </div>
            <div class="row mb-3">
                <label for="discount_calendarInput_start" class="col-sm-3 text-start form-label fw-medium">Ngày bắt đầu</label>
                <div class="col-sm-9">
                    <input type="date" id="discount_calendarInput_start" name="discount_begin" class="form-control">
                    <span class="text-message text-danger discount-start-msg"></span>
                </div>
            </div>
            <div class="row mb-3">
                <label for="disocunt_calendarInput_end" class="col-sm-3 text-start form-label fw-medium">Ngày kết thúc</label>
                <div class="col-sm-9">
                    <input type="date" id="discount_calendarInput_end" name="discount_end" class="form-control">
                    <span class="text-message text-danger discount-end-msg"></span>
                </div>
            </div>
            <div class="edit">
              <div class="row mb-3 d-flex justify-content-center align-items-center">
                  <label for="" class="col-sm-3 col-form-label fw-medium text-start">Trạng thái</label>
                  <div class="d-flex align-items-center col-sm-9">
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="status" name="status" onchange="document.getElementById('status-label').textContent = this.checked ? 'Đang hoạt động' : 'Bị khóa';">
                      <label class="form-check-label" for="status" id="status-label">Đang hoạt động</label>
                    </div>
                  </div>
              </div>
            </div>
          <div class="modal-footer">
            <input type="hidden" name="" id="submit_btn">
            <button type="submit" class="btn btn-success" name="action">Xác nhận</button>
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