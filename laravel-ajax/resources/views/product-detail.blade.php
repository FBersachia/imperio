<section class="sec-product-detail bg0 p-t-65 p-b-60">

  <div class="container">
    <div class="row">
      <div class="col-md-11">

      </div>
      <div class="col-md-1">
          <a href="product.php"><i class="zmdi zmdi-close"></i></a>
      </div>

    </div>
    <div class="row">
      <div class="col-md-6 col-lg-7 p-b-30">
        <div class="p-l-25 p-r-30 p-lr-0-lg">
          <div class="wrap-slick3 flex-sb flex-w">
            <div class="wrap-slick3-dots"></div>
            <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

            <div class="slick3 gallery-lb">
              <div class="item-slick3" data-thumb="./productos/{{ $producto->imagen}}1.jpg">
                <div class="wrap-pic-w pos-relative">
                   <img src="./productos/{{ $producto->imagen}}1.jpg" alt="IMG-PRODUCT">

                  <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-01.jpg">
                    <i class="fa fa-expand"></i>
                  </a>
                </div>
              </div>

              <div class="item-slick3" data-thumb="./productos/{{ $producto->imagen}}2.jpg">
                <div class="wrap-pic-w pos-relative">
                     <img src="./productos/<?php echo $f['imagen'];?>2.jpg" alt="IMG-PRODUCT">

                  <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-02.jpg">
                    <i class="fa fa-expand"></i>
                  </a>
                </div>
              </div>

              <div class="item-slick3" data-thumb="./productos/{{ $producto->imagen}}3.jpg">
                <div class="wrap-pic-w pos-relative">
                  <img src="./productos/{{ $producto->imagen}}3.jpg" alt="IMG-PRODUCT">

                  <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-03.jpg">
                    <i class="fa fa-expand"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-5 p-b-30">
        <div class="p-r-50 p-t-5 p-lr-0-lg">
          <h4 class="mtext-105 cl2 js-name-detail p-b-14">
            {{ $producto->nombre}}
          </h4>

          <span class="mtext-106 cl2">
             ${{ $producto->precio}}
          </span>

          <p class="stext-102 cl3 p-t-23">
              {{ $producto->descripcion}}
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
