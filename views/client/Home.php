<section class="slider mt-3 mt-md-0 border-bottom pb-5">
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000" data-bs-wrap="true">
      <div class="carousel-indicators">
          <?php
              $i = 0;
              $banners = $result['banners'];
              foreach($banners as $index => $item) {
          ?>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?= $index ?>" 
                  class="<?= $index == 0 ? 'active' : '' ?>" 
                  aria-current="<?= $index == 0 ? 'true' : 'false' ?>" 
                  aria-label="Slide <?= $index + 1 ?>"></button>
          <?php
              }
          ?>
      </div>
      <div class="carousel-inner">
            <?php
              // var_dump($banners);
              $i = 1;
              foreach($banners as $item){
                if($i++ == 1 ){
            ?>
          <div class="carousel-item active">
              <?php 
                  } else {
              ?>
          <div class="carousel-item">
              <?php
                  }
              ?>
              <img src="assets/uploads/<?=$item->getHinhanh()?>" class="d-block w-100" alt="..."> 
          </div>
          <?php
                }
          ?>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
      </button>
  </div>
</section>
<!-- Slider End -->

<!-- Sản phẩm mới (hiển thị top8 sản phẩm mới được add vào CSDL - tính theo ID mới)-->
<section class="new-product pb-5 py-2 border-bottom">
  <div class="container">
      <!-- Label sản phẩm mới - row labellabel -->
      <div class="row py-1 border-bottom">
          <h2 class="fs-5 fw-medium col-6">SẢN PHẨM MỚI</h2>
          <a href="#"class="col-6 d-lg-flex justify-content-end text-decoration-none text-success">XEM THÊM>></a>
      </div>
       <!-- Row hiển thị các sản phẩm mới-->
       <div class="row d-flex ">
          <!-- Mỗi cột sản phẩm -->
        <a href="#" class="px-0 py-2 me-2 text-decoration-none " style="max-width: 16rem;">
            <div class="card shadow-sm border-light rounded p-3 " style="max-width: 16rem;">
              <!-- Tag giảm giá -->
            <div class="sale-tag position-absolute top-0 start-0 px-3 py-1 fw-bold">
              -60%
              </div>  
              <img src="assets/uploads/spdemo.jpg" class="card-img-top rounded " alt="..." >
                <div class="card-body">
                  <h5 class="card-title">Kẻ nhìn trộm</h5>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item text-warning">4 lượt bán</li>
                  <li class="list-group-item ">
                    <div class="d-flex justify-content-between align-items-center">
                      <p class="text-success fw-bold fs-5">120.000 đ</p>
                      <p class="text-muted text-decoration-line-through">300.000 đ</p>
                    </div>
                  </li>
                </ul>
            </div>
          </a><!-- Mỗi cột sản phẩm -->
       </div>
  </div>
</section>
<!-- Sản phẩm nổi bật (hiển thị top8 sản phẩm có số lượng bán nhiều nhấtnhất) -->
<section class="hot-product pb-5 py-2 border-bottom">
      <div class="container">
          <!-- Label của sản phẩm nổi bật - row labellabel -->
          <div class="row py-1 border-bottom">
              <h2 class="fs-5 fw-medium col-6">SÁCH BÁN CHẠY</h2>
              <a href="#"class="col-6 d-lg-flex justify-content-end text-decoration-none text-success">XEM THÊM>></a>
          </div>
          <!-- Row hiển thị các sản phẩm nổi bật-->
          <div class="row d-flex">
              <!-- Mỗi cột sản phẩm -->
                  <?php
                    $bookBestSellers = $result['bookBestSellers'];
                    foreach($bookBestSellers as $item){
                    ?>
              <a href="#" class="px-0 me-2 py-2 text-decoration-none " style="max-width: 16rem;">
                  <div class="card shadow-sm border-light rounded p-3 " style="max-width: 16rem;">
                    <!-- Tag giảm giá -->
                  <div class="sale-tag position-absolute top-0 start-0 px-3 py-1 fw-bold">
                    -60%
                    </div>  
                    <img src="assets/uploads/spdemo.jpg" class="card-img-top rounded " alt="..." >
                      <div class="card-body">
                        <h5 class="card-title"><?=$item->getTenSP()?></h5>
                      </div>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item text-warning"><?=$item->getLuotban()?> lượt bán</li>
                        <li class="list-group-item ">
                          <div class="d-flex justify-content-between align-items-center">
                            <p class="text-success fw-bold fs-5"><?=$item->getGiaban()?> đ</p>
                            <p class="text-muted text-decoration-line-through"><?=$item->getGiabia()?> đ</p>
                          </div>
                        </li>
                      </ul>
                  </div>
              </a>
              <?php 
                    }
              ?>
          </div>
      </div>
              
</section>
<!-- End Sản phẩm nổi bật -->

<!-- Văn phòng phẩm nổi bật -->
<section class="new-product pb-5 py-2 border-bottom">
  <div class="container">
      <!-- Label sản phẩm mới - row labellabel -->
      <div class="row py-1 border-bottom">
          <h2 class="fs-5 fw-medium col-6">VĂN PHÒNG PHẨM BÁN CHẠY</h2>
          <a href="#"class="col-6 d-lg-flex justify-content-end text-decoration-none text-success">XEM THÊM>></a>
      </div>
       <!-- Row hiển thị các sản phẩm mới-->
       <div class="row d-flex">
          <!-- Mỗi cột sản phẩm -->
              <?php
                $stationeryBestSellers = $result['stationeryBestSellers'];
                foreach($stationeryBestSellers as $item){
              ?>
          <a href="#" class="px-0 py-2 me-2 text-decoration-none " style="max-width: 16rem;">
              <div class="card shadow-sm border-light rounded p-3 " style="max-width: 16rem;">
                <!-- Tag giảm giá -->
                <div class="sale-tag position-absolute top-0 start-0 px-3 py-1 fw-bold">
                  -60%
                  </div>  
                <img src="assets/uploads/vpp1.webp" class="card-img-top rounded " alt="..." >
                  <div class="card-body">
                    <h5 class="card-title"><?=$item->getTenSP()?></h5>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item text-warning"><?=$item->getLuotban()?> lượt bán</li>
                    <li class="list-group-item ">
                      <div class="d-flex justify-content-between align-items-center">
                        <p class="text-success fw-bold fs-5"><?=$item->getGiaban()?> đ</p>
                        <p class="text-muted text-decoration-line-through"><?=$item->getGianhap()?> đ</p>
                      </div>
                    </li>
                  </ul>
              </div>
          </a>
          <?php 
            }
          ?>
       </div>

  </div>
</section>

<!-- End sản phẩm mới -->