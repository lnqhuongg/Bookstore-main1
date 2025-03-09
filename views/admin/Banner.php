<!-- --------------------------------------------------------------------------------------------- -->
<div class="container py-4 bg-light">
    <!-- row Panel -->
    <div class="row pb-4">
      <h4>
          Quản lý banner
      </h4>
    </div>
    <!-- row filter, button thêm sách -->
    <div class="row py-3 px-1 mb-2">
      <!-- Form tìm kiếm -->
      <div class="col-md-11 d-flex">
        <form class="d-flex">
            <select class="form-select me-2" aria-label="Default select example" style="max-width: 200px;">
                <option selected>Tất cả trạng thái</option>
                <option value="1">One</option>
            </select>
            <div class="input-group">
              <span class="input-group-text">Số lượng banner hiển thị trang chủ</span>
              <input type="text"  aria-label="First name" class="form-control">
            </div>
        </form> 
      </div>
      <!-- Button thêm sách -->
      <div class="col-md-1 d-flex justify-content-end">
        <button class="btn btn-success btn-sm open_add_form" style="width:110px" data-bs-toggle="modal" data-bs-target="#staticBackdropEditBanner" role="button" type="button">Thêm mới</button>
        <!-- Thêm sách mới Modal -->
        
      </div>
    </div>
    <!-- row table -->
    <div class="row">
      <div class="col-md-12">
        <div class=" pb-2 px-2 border rounded-3 shadow bg-white ">
          <table class="table table-hover">
              <thead class="text-center">
                <tr>
                  <th scope="col">Mã banner</th>
                  <th scope="col">Hình ảnh</th>
                  <th scope="col">Mô tả</th>
                  <th scope="col">Trạng thái</th>
                  <th scope="col">Tùy chỉnh</th>
  
                </tr>
              </thead>
              <tbody class="table-group-divider">
                    <?php
                      $banners = $result['paging']; 
                        if($banners == null) {
                          echo '<tr><td colspan="6">Không có dữ liệu</td> </tr>';
                          echo '</tbody></table></div></div>';
                      } else {
                      echo '<input type="hidden" name="curr_page" class="curr_page" value="'.$paging->curr_page.'">';
                      // số bản ghi sẽ được lấy từ start đến số bản ghi được phép hiển thị trên trang 
                      for($i=$paging->start; $i<$paging->start+$paging->num_per_page && $i<$paging->total_records; $i++){
                          $banner = $banners[$i];
                    ?>
                <tr>
                  <!-- Mã Banner -->
                    <td class="align-middle text-center banner_id" scope="row">
                      <?=$banner->getIdBN()?>
                    </td>
                    <?php
                    $imagePath = "/DoAnWeb2/Bookstore-main1/assets/uploads/" . $banner->getHinhanh();
                    ?>
                    <td class="align-middle text-center">
                        <img src="<?= $imagePath ?>" alt="Banner Image" style="max-width: 280px; height: auto;">
                    </td>
                  <!-- Mô tả -->
                    <td class="  align-middle text-center description" style="max-width: 150px; word-wrap: break-word;">
                      <?=$banner->getMota()?>
                    </td>
                  <!-- Trạng thái -->
                    <td class="align-middle text-center text-success fw-bold">
                        <?php
                            if($banner->getTrangthai())
                                echo '<span class="align-middle text-center text-success fw-bold">Hoạt động</span>';
                            else
                                echo '<span class="align-middle text-center text-danger fw-bold">Bị khóa</span>';
                        ?>
                    </td>
                  <!-- Tùy chỉnh -->
                    <td class="align-middle text-center">
                        <!-- Button chỉnh sửa -->
                        <!-- Button trigger modal -->
                        <button fdprocessedid="r9x0b9" type="button" class="btn btn-sm open_edit_form" data-bs-toggle="modal" data-bs-target="#staticBackdropEditBanner">
                          <img src="../assets/admin/img/edit.png" style="width:20px" alt="">
                        </button>
                        <!-- <button fdprocessedid="r9x0b9" type="button" class="btn btn-sm open_edit_form" data-bs-toggle="modal" data-bs-target="#staticBackdropEditBanner">
                          <img src="../assets/admin/img/trash.png" style="width:20px" alt="">
                        </button> -->
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
  <!-- Modal form popup -->
  <div class="modal fade" id="staticBackdropEditBanner" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="bannerModalLabel">Cái này là title modal</h1>
          <button type="button" class="btn-close" id="btn-close-modal" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="" id="bannerForm">
        <input type="hidden" name="banner_id" id="banner_id" value="">
          <div class="modal-body">
            <div class="row">
              <!-- col hình ảnh -->
              <div class="col-md-5">
                <div class="row ">
                  <!-- Khung hình ảnh -->
                  <div class="col-md-12 text-center">
                    <div class="border rounded-3 p-4 bg-light" style="height: 300px; display: flex; align-items: center; justify-content: center;">
                      <img id="previewImage1" src="https://via.placeholder.com/150" alt="Preview" style="max-width: 100%; max-height: 100%; display: none;">
                      <span id="placeholderText1" class="text-muted" style="font-size: 1.2rem;">Chưa tải ảnh lên</span>
                    </div>
                  </div>
                </div>
                <div class="row justify-content-center mt-3">
                  <!-- Nút nhập hình ảnh -->
                  <div class="col-md-12 text-center">
                    <label for="uploadImage1" class="btn btn-outline-success rounded-pill">
                      <i class="fa-solid fa-upload"></i> Tải hình ảnh
                    </label>
                    <input type="file" id="uploadImage1" name="uploadImage1" class="d-none edit" accept="image/*">
                  </div>
                </div>
              </div>
              <!-- col mô tả -->
              <div class="col-md-7 px-3">
                  <div class="row mb-3">
                    <div class="col-md-12 modal-description">
                      <label for="" class="col-form-label fw-medium">Mô tả</label>
                      <textarea class="form-control " 
                                id="description"
                                name="description"
                                aria-label="With textarea" 
                                style="max-width: 500px; min-height: 262px; overflow-y: auto; color: #333"
                                placeholder="Nhập vào mô tả Banner..."></textarea>
                                <span class="text-message text-danger description-msg"></span>
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
            </div>
          </div>
          <div class="modal-footer">
            <input type="hidden" name="" id="submit_btn">
            <button type="submit" class="btn btn-success" id="submit_btn">Xác nhận</button>
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
    <script src="../assets/admin/js/Banner.js"></script>
</body>
</html>