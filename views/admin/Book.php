<div class="container py-4 bg-light">
  <!-- row Panel -->
  <div class="row pb-4">
    <h4>
        Quản lý sách
    </h4>
  </div>
  <!-- row filter, button thêm sách -->
  <div class="row py-3 px-1 mb-2">
    <!-- Form tìm kiếm -->
    <div class="col-md-11 d-flex">
      <form class="d-flex w-100">
          <select class="form-select me-2" aria-label="Default select example" style="max-width: 200px;">
              <option selected>Tất cả thể loại</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
          </select>
          <input type="text" placeholder="Nhập mã, tên sách..." style="max-width: 360px;" class="form-control me-4" id="">
          <!-- div tìm kiếm theo khoảng giá -->
          <div class="d-flex justify-content-center text-align-items-center me-4">
            <span class="me-2 d-flex justify-content-center align-items-center">
              Khoảng giá:
            </span>
            <input type="text" style="max-width: 90px;" class="form-control me-2" id="">
            <span class="fs-3 me-2">-</span>
            <input type="text" style="max-width: 90px;" class="form-control" id="">
          </div>
          <div class="me-2 d-flex justify-content-center text-align-items-center">
            <span class="me-2 d-flex justify-content-center align-items-center">Tồn kho:</span>
            <button class="btn me-2 d-flex justify-content-center align-items-center">
              <i class="fa-solid fa-arrow-up-wide-short fs-5 "></i>
            </button>
            <button class="btn me-2 d-flex justify-content-center align-items-center">
              <i class="fa-solid fa-arrow-down-wide-short fs-5 "></i>
            </button>
          </div>
          <button class="btn btn-success btn-sm " >Tìm kiếm</button>
      </form>
    </div>
    <!-- Button thêm sách -->
    <div class="col-md-1 d-flex justify-content-end">
      <button class="btn btn-success btn-sm open_add_form" style="width:110px" data-bs-toggle="modal" data-bs-target="#staticBackdropEdit" role="button" type="button">Thêm mới</button>
      <!-- Thêm sách mới Modal -->
      
    </div>
  </div>
  <!-- row table -->
  <div class="row">
    <div class="col-md-12">
      <div class=" pb-2 px-2 border rounded-3 shadow bg-white table-responsive">
        <table class="table table-hover">
            <thead class="text-center">
              <tr>
                <th scope="col">Mã sách</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col">Tên sách</th>
                <th scope="col">Số lượng tồn kho</th>
                <th scope="col">Giá bán</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Tùy chỉnh</th>

              </tr>
            </thead>
            <tbody  class="table-group-divider">
                <tr>
                  <!-- Mã sách -->
                    <td class="align-middle text-center" scope="row">
                        SP001
                    </td>
                  <!-- Hình ảnh sách -->
                    <td class="book-image text-center" scope="row">
                        <img src="/assets/uploads/spdemo.jpg" style="width:120px" alt="">
                    </td>
                  <!-- Tên sách -->
                    <td class="book-name  align-middle text-center" style="max-width: 150px; word-wrap: break-word;">
                        Pháp Y Tống Từ  
                    </td>
                  <!-- Số lượng tồn kho -->
                    <td class="align-middle text-center">
                        998
                    </td> 
                  <!-- Giá bán -->
                    <td class="align-middle text-center ">
                        100.000đ
                    </td>
                  <!-- Trạng thái -->
                    <td class=" align-middle text-center text-success fw-bold">
                        Hoạt động
                    </td>
                  <!-- Tùy chỉnh -->
                    <td class="align-middle text-center">
                      <!-- Button xem thông tin chi tiết -->
                        <button class="btn" fdprocessedid="r9x0b9" type="button" class="btn btn-success btn-sm open_view_form" data-bs-toggle="modal" data-bs-target="#staticBackdropInfo">
                            <img src="../assets/admin/img/info.png" style="width:20px" alt="">
                        </button>
                        <!-- Button chỉnh sửa -->
                          <!-- Button trigger modal -->
                          <button fdprocessedid="r9x0b9" type="button" class="btn btn-sm open_edit_form" data-bs-toggle="modal" data-bs-target="#staticBackdropEdit">
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
<!-- Modal form popup -->
<div class="modal fade" id="staticBackdropEdit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="productModalLabel">Chỉnh sửa thông tin sách</h1>
        <button type="button" class="btn-close" id="btn-close-modal" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="" id="productForm">
        <div class="modal-body">
          <div class="row">
            <!-- col hình ảnh -->
            <div class="col-md-3">
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
                  <input type="file" id="uploadImage1" class="d-none" accept="image/*" onchange="previewFileEditProduct()">
                </div>
              </div>
            </div>
            <!-- col thông tin sách -->
            <div class="col-md-9 px-3">
                <div class="row mb-3">
                  <label for="" class=" col-sm-2 col-form-label fw-medium text-start">Tên sách</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="" placeholder="Nhập tên sách...">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="" class="col-sm-2 col-form-label fw-medium text-start">Nhà xuất bản</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="" placeholder="Nhập nhà xuất bản...">
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6 d-flex justify-content-between">
                    <label for="" class="col-form-label fw-medium">Nhà cung cấp</label>
                    <!-- <input type="text" class="form-control"  id="" placeholder="" style="width: 255px; background-color: white; color: black" > -->
                    <select class="form-select align-items-end" aria-label="Default select example" style="width: 255px">
                      <option selected>Chọn nhà cung cấp</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                  <div class="col-md-6 d-flex justify-content-between">
                    <label for="" class="col-form-label fw-medium ">Thể loại</label>
                    <select class="form-select align-items-end" aria-label="Default select example" style="width: 290px">
                      <option selected>Chọn thể loại</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6 d-flex justify-content-between">
                    <label for="" class="col-form-label fw-medium">Giá bìa</label>
                    <input type="text" class="form-control" id="" placeholder="Nhập giá bìa (đồng)" style="width: 255px">
                  </div>
                  <div class="col-md-6 d-flex justify-content-between">
                    <label for="" class="col-form-label fw-medium">Trọng lượng</label>
                    <input type="text" class="form-control" id="" placeholder="Nhập trọng lượng (gam)" style="width: 290px">
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6 d-flex justify-content-between">
                    <label for="" class="col-form-label fw-medium">Năm xuất bản</label>
                    <input type="text" class="form-control" id="" placeholder="Nhập năm xuất bản..." style="width: 255px">
                  </div>
                <!-- Cột tác giả -->
                <div class="col-md-6 d-flex">
                  <label for="" class="col-form-label fw-medium me-5 pe-2">Tác giả</label>
                  <!-- Button trigger modal -->
                  <!-- <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                    Chọn tác giả
                  </button> -->
                  <!-- Nút mở modal AuthorPopup -->
                  <button class="btn btn-outline-success" id="openAuthorModal" type="button">
                    Chọn tác giả
                  </button>
                </div>
                </div>
                <div class="edit">
                  <div class="row mb-3 edit">
                    <label for="" class=" col-sm-2 col-form-label fw-medium text-start">Khuyến mãi</label>
                    <div class="col-sm-10">
                      <select class="form-select col-sm-10" aria-label="Default select example" >
                        <option selected>Chọn khuyến mãi</option>
                        <option value="">One</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-12 d-flex justify-content-between ">
                    <label for="" class="col-form-label fw-medium">Mô tả</label>
                    <textarea class="form-control" aria-label="With textarea" style="width: 675px; max-height: 150px; overflow-y: auto;"></textarea>
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
          <button type="submit" class="btn btn-success" id="submit_btn">Xác nhận</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Author Modal -->
<div class="modal fade AuthorModal" id="AuthorModal" aria-hidden="true" aria-labelledby="AuthorModalLabel" tabindex="-2">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="AuthorModalLabel">Chọn tác giả</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="modal-body row row-cols-sm-1 row-cols-md-2 g-3" style="padding: 0px;">
          <div class="col">
            <input type="checkbox" class="form-check-input" >
            <label for="" class="form-check-label">Nguyễn Nhật Ánh</label>
          </div>
          <div class="col">
            <input type="checkbox" class="form-check-input">
            <label for="" class="form-check-label">Nguyễn Nhật Ánh</label>
          </div>
          
        </div>
        
      </div>
      <div class="modal-footer">
        <button class="btn btn-success" type="button">Chọn</button>
      </div>
    </div>
  </div>
</div>
  
</div>

<!-- ------------------------------------------------------------------------------------------------- -->
    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- js -->
    <script src="../assets/admin/js/Book.js"></script>
    
</body>
</html>