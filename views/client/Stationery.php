<section class="product py-4 border-bottom">
    <div class="container">
        <!-- Rơw 1 -->
        <div class="row">
            <!-- Cột tất cả sách -->
            <div class="col-md-6">
                <h5>Tất cả văn phòng phẩm</h5>
            </div>
            <!-- Cột sắp xếp theo -->
             <div class="col-md-6 text-end">
                <span style="opacity:0.8" class="fw-medium">Sắp xếp theo:</span>
                <button class="badge  rounded-pill me-2 " style="background-color: #dadddf; color: rgb(12, 11, 11); border: none;">
                    <span class="fw-medium">Giá cao đến thấp</span>
                </button>
                <button class="badge  rounded-pill me-2 " style="background-color: #dadddf; color: rgb(12, 11, 11); border: none;">
                    <span class="fw-medium">Giá thấp đến cao</span>
                </button>
                <button class="badge  rounded-pill me-2 " style="background-color: #dadddf; color: rgb(12, 11, 11); border: none;">
                    <span class="fw-medium">A->Z</span>
                </button>
                <button class="badge  rounded-pill me-2 " style="background-color: #dadddf; color: rgb(12, 11, 11); border: none;">
                    <span class="fw-medium">Z->A</span>
                </button>
                
             </div>

        </div>
        <!-- Row 2 : sản phẩm và bộ lọc -->
        <div class="row py-4">
            <!-- col bộ lọc -->
          <div class="col-md-3">
           
            <div class="list-group small mb-3 mt-2 shadow bg-body-tertiary rounded">
                <div class="d-flex justify-content-between text-bg-light fw-bold p-3">
                    <span>Bộ lọc</span>
                    <img src="/assets/img/sort.png" alt="">
                </div>
                 <!-- Lọc theo thể loại -->
                <div href="#" class="list-group-item list-group-item-action ">
                    <span class="fw-bold">Phân loại</span>
                  
                    <form class="mt-2">
                        <!-- Danh sách thể loại -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Action" id="action">
                            <label class="form-check-label" for="action">
                                Thước
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Adventure" id="adventure">
                            <label class="form-check-label" for="adventure">
                                Bút chì
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Comedy" id="comedy">
                            <label class="form-check-label" for="comedy">
                                Vở
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Horror" id="horror">
                            <label class="form-check-label" for="horror">
                                Bút bi
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Horror" id="horror">
                            <label class="form-check-label" for="horror">
                                Gôm
                            </label>
                        </div>
                        
                    </form>

                </div>
                 <!-- Lọc theo Giá -->
                <div href="#" class="list-group-item list-group-item-action ">
                    <span class="fw-bold">Giá</span>
                    <form class="mt-2 mt-2">
                        <div class="d-flex justify-content-between me-3 mb-2">
                            <label class="form-check-label" for="action">
                                Từ
                            </label>
                            <input type="text" class="form-control form-control-sm" placeholder="" required="" fdprocessedid="k7jew" style="width:220px">
                        </div>
                        <div class="d-flex justify-content-between me-3 mb-2">
                            <label class="form-check-label" for="action">
                                Đến
                            </label>
                            <input type="text" class="form-control form-control-sm" placeholder="" required="" fdprocessedid="k7jew" style="width:220px">
                        </div>
                        
                    </form>

                </div>

                <!-- Các nút xóa, lọc -->
                <div href="#" class="list-group-item list-group-item-action py-3 d-flex  ">
                    <button type="button" class="btn d-flex justify-content-between align-items-center me-4" style="background-color: #dadddf">
                        <img src="/assets/img/trash.png" alt="">
                        <span class="small fw-medium ms-2">Xóa tất cả</span>
                    </button>
                    <button type="button" class="btn btn-success d-flex justify-content-between align-items-center ms-4 px-3">
                        <img  class="img" src="/assets/img/sortLight.png" alt="">
                        <span class="small fw-medium ms-2">Lọc</span>
                    </button>
                    
                </div>
               
            </div>
          </div>
          <!-- col sản phẩm -->
          <div class="col-md-9">
            <!-- Row hiển thị các sản phẩm -->
            <div class="row">
                <!-- Mỗi cột sản phẩm -->
                <a href="/assets/layout/client/stationeryDetail.html" class="col-md-3 py-2 text-decoration-none ">
                    <div class="card shadow-sm border-light rounded p-3 " style="max-width: 16rem;">
                        <!-- Tag giảm giá -->
                        <div class="sale-tag position-absolute top-0 start-0 px-3 py-1 fw-bold">
                        -60%
                        </div>
                        <img src="https://down-vn.img.susercontent.com/file/vn-11134207-7qukw-lgd44ov7zgtz22.webp" class="card-img-top rounded " alt="..." >
                        <div class="card-body">
                          <h5 class="card-title">Bút thần kỳ</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item text-warning">4 lượt bán</li>
                          <li class="list-group-item ">
                            <div class="d-flex justify-content-between align-items-center">
                              <p class="text-success fw-bold fs-5">120.000đ</p>
                              <p class="text-muted text-decoration-line-through small">300.000đ</p>
                            </div>
                          </li>
                        </ul>
                    </div>
                 </a>
                <!-- Mỗi cột sản phẩm -->
                <a href="#" class="col-md-3 py-2 text-decoration-none">
                  <div class="card shadow-sm border-light rounded p-3" style="max-width: 16rem; position: relative;">
                      <!-- Tag giảm giá -->
                      <div class="sale-tag position-absolute top-0 start-0 px-3 py-1 fw-bold">
                          -60%
                      </div>
                      
                      <img src="/assets/uploads/vpp1.webp" class="card-img-top rounded" alt="...">
                      
                      <div class="card-body">
                          <h5 class="card-title">Những con cá voi 52 Hertz</h5>
                      </div>
                      
                      <ul class="list-group list-group-flush">
                          <li class="list-group-item text-warning">9 lượt bán</li>
                          <li class="list-group-item">
                              <div class="d-flex justify-content-between align-items-center">
                                  <p class="text-success fw-bold fs-5">120.000đ</p>
                                  <p class="text-muted text-decoration-line-through small">300.000đ</p>
                              </div>
                          </li>
                      </ul>
                  </div>
              </a>
                <!-- Mỗi cột sản phẩm -->
                <a href="#" class="col-md-3 py-2 text-decoration-none ">
                    <div class="card shadow-sm border-light rounded p-3 " style="max-width: 16rem;">
                      <!-- Tag giảm giá -->
                      <div class="sale-tag position-absolute top-0 start-0 px-3 py-1 fw-bold">
                        -60%
                        </div>  
                      <img src="/assets/uploads/vpp4.webp" class="card-img-top rounded" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Người kép già</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item text-warning">9 lượt bán</li>
                          <li class="list-group-item ">
                            <div class="d-flex justify-content-between align-items-center">
                              <p class="text-success fw-bold fs-5">120.000đ</p>
                              <p class="text-muted text-decoration-line-through small">300.000đ</p>
                            </div>
                          </li>
                        </ul>
                    </div>
                 </a>
                <!-- Mỗi cột sản phẩm -->
                <a href="#" class="col-md-3 py-2 text-decoration-none ">
                    <div class="card shadow-sm border-light rounded p-3 " style="max-width: 16rem;">
                      <!-- Tag giảm giá -->
                      <div class="sale-tag position-absolute top-0 start-0 px-3 py-1 fw-bold">
                        -60%
                        </div>  
                      <img src="/assets/uploads/vpp3.webp" class="card-img-top rounded" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Từ Vô Hình Đến Hữu Hình - Khám Phá Thế Giới Diệu Kỳ Của Các Loại Vật Chất</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item text-warning">9 lượt bán</li>
                          <li class="list-group-item ">
                            <div class="d-flex justify-content-between align-items-center">
                              <p class="text-success fw-bold fs-5">120.000đ</p>
                              <p class="text-muted text-decoration-line-through small">300.000đ</p>
                            </div>
                          </li>
                        </ul>
                    </div>
                 </a>
                <!-- Mỗi cột sản phẩm -->
                <a href="#" class="col-md-3 py-2 text-decoration-none ">
                    <div class="card shadow-sm border-light rounded p-3 " style="max-width: 16rem;">
                      <!-- Tag giảm giá -->
                      <div class="sale-tag position-absolute top-0 start-0 px-3 py-1 fw-bold">
                        -60%
                        </div>  
                      <img src="/assets/uploads/vpp2.webp" class="card-img-top rounded " alt="..." >
                        <div class="card-body">
                          <h5 class="card-title">Kẻ nhìn trộm</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item text-warning">4 lượt bán</li>
                          <li class="list-group-item ">
                            <div class="d-flex justify-content-between align-items-center">
                              <p class="text-success fw-bold fs-5">120.000đ</p>
                              <p class="text-muted text-decoration-line-through small">300.000đ</p>
                            </div>
                          </li>
                        </ul>
                    </div>
                 </a>
                <!-- Mỗi cột sản phẩm -->
                <a href="#" class="col-md-3 py-2 text-decoration-none ">
                    <div class="card shadow-sm border-light rounded p-3 " style="max-width: 16rem;">
                      <!-- Tag giảm giá -->
                      <div class="sale-tag position-absolute top-0 start-0 px-3 py-1 fw-bold">
                        -60%
                        </div>  
                      <img src="https://down-vn.img.susercontent.com/file/sg-11134201-7rdxy-lzyakag7kotz0e.webp" class="card-img-top rounded" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Những con cá voi 52 Hertz</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item text-warning">9 lượt bán</li>
                          <li class="list-group-item ">
                            <div class="d-flex justify-content-between align-items-center">
                              <p class="text-success fw-bold fs-5">120.000đ</p>
                              <p class="text-muted text-decoration-line-through small">300.000đ</p>
                            </div>
                          </li>
                        </ul>
                    </div>
                 </a>
                <!-- Mỗi cột sản phẩm -->
                <a href="#" class="col-md-3 py-2 text-decoration-none ">
                    <div class="card shadow-sm border-light rounded p-3 " style="max-width: 16rem;">
                      <!-- Tag giảm giá -->
                      <div class="sale-tag position-absolute top-0 start-0 px-3 py-1 fw-bold">
                        -60%
                        </div>  
                      <img src="https://down-vn.img.susercontent.com/file/sg-11134201-7rbl8-loxpxfq759zx89.webp" class="card-img-top rounded" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Người kép già</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item text-warning">9 lượt bán</li>
                          <li class="list-group-item ">
                            <div class="d-flex justify-content-between align-items-center">
                              <p class="text-success fw-bold fs-5">120.000đ</p>
                              <p class="text-muted text-decoration-line-through small">300.000đ</p>
                            </div>
                          </li>
                        </ul>
                    </div>
                 </a>
                <!-- Mỗi cột sản phẩm -->
                <a href="#" class="col-md-3 py-2 text-decoration-none ">
                    <div class="card shadow-sm border-light rounded p-3 " style="max-width: 16rem;">
                      <!-- Tag giảm giá -->
                      <div class="sale-tag position-absolute top-0 start-0 px-3 py-1 fw-bold">
                        -60%
                        </div>  
                      <img src="https://down-vn.img.susercontent.com/file/sg-11134201-7qvd2-ljlztorx7b1w00.webp" class="card-img-top rounded" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Từ Vô Hình Đến Hữu Hình - Khám Phá Thế Giới Diệu Kỳ Của Các Loại Vật Chất</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item text-warning">9 lượt bán</li>
                          <li class="list-group-item ">
                            <div class="d-flex justify-content-between align-items-center">
                              <p class="text-success fw-bold fs-5">120.000đ</p>
                              <p class="text-muted text-decoration-line-through small">300.000đ</p>
                            </div>
                          </li>
                        </ul>
                    </div>
                 </a>
            </div>
            <!-- row phân trang -->
            <div class="row mt-5">
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
        </div>

        </div>
         
    </div>

</section>