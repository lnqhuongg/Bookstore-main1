<div class="container py-4 bg-light">
  <!-- row Panel -->
  <div class="row pb-4">
    <h4>
        Quản lý danh mục
    </h4>
  </div>
  <!-- row search, button thêm danh mục -->
  <div class="row py-3 px-1 mb-2">
    <!-- Form tìm kiếm -->
    <div class="col-md-11 d-flex">
      <form class="d-flex w-100">
          <input type="text" placeholder="Nhập mã, tên danh mục..." style="max-width: 1080px;" class="form-control me-4" id="">
          <button class="btn btn-success btn-sm " >Tìm kiếm</button>
      </form>
    </div>
    <!-- Button thêm danh mục -->
    <div class="col-md-1 d-flex justify-content-end">
      <!-- Button trigger modal -->
      <button style="width:110px" type="button" class="btn btn-success btn-sm open_add_form" data-bs-toggle="modal" data-bs-target="#staticBackdropEditCatalog">
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
              <?php
                $catalogs = $result['paging']; 
                if($catalogs == null) {
                  echo '<tr><td colspan="6">Không có dữ liệu</td> </tr>';
                  echo '</tbody></table></div></div>';
                } else {
                  echo '<input type="hidden" name="curr_page" class="curr_page" value="'.$paging->curr_page.'">';
                  // số bản ghi sẽ được lấy từ start đến số bản ghi được phép hiển thị trên trang 
                  for($i=$paging->start; $i<$paging->start+$paging->num_per_page && $i<$paging->total_records; $i++){
                    $catalog = $catalogs[$i];
              ?>
                <tr>
                  <!-- Mã danh mục -->
                    <td class="align-middle text-center catalog_id" scope="row">
                      <?=$catalog->getIdTL()?>
                    </td>
                  <!-- Tên danh mục -->
                    <td class="  align-middle text-center catalog_name" style="max-width: 150px; word-wrap: break-word;">
                      <?=$catalog->getTenTL()?>
                    </td>
                  <!-- Trạng thái -->
                    <td class=" align-middle text-center text-success fw-bold">
                      <?php
                        if($catalog->getTrangthai())
                          echo '<span class="align-middle text-center text-success fw-bold">Hoạt động</span>';
                        else
                          echo '<span class="align-middle text-center text-danger fw-bold">Bị khóa</span>';
                        ?>
                    </td>
                  <!-- Tùy chỉnh -->
                    <td class="align-middle text-center">
                        <!-- Button chỉnh sửa -->
                          <!-- Button trigger modal -->
                          <button class="btn" fdprocessedid="r9x0b9" type="button" class="btn btn-success btn-sm open_edit_form" data-bs-toggle="modal" data-bs-target="#staticBackdropEditCatalog">
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
  <div class="modal fade" id="staticBackdropEditCatalog" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabelEditCatalog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="catalogModalLabel">Chỉnh sửa thông tin danh mục</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="" id="catalogForm">
          <!-- <input type="hidden" name="catalog_id" id="catalog_id" value=""> -->
          <div class="modal-body">
            <div class="row mb-3">
                <label for="" class=" col-sm-3 col-form-label fw-medium text-start">Tên danh mục</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="" placeholder="Nhập Tên danh mục sách...">
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

    <script src="../assets/admin/js/Catalog.js"></script>
    
    
</body>
</html>
