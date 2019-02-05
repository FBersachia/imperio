@extends('nav-footer')
@section('seccion')

<section class="sec-product-detail bg0 p-t-65 p-b-60">
  <div class="container">
    <div class="row">
      <div class="col-md-11">

      </div>
      <div class="col-md-1">
          <a href="{{ route('listado') }}"><i class="zmdi zmdi-close"></i></a>
      </div>

    </div>
    <div class="row">
      <div class="col-md-6 col-lg-7 p-b-30">
        <div class="p-l-25 p-r-30 p-lr-0-lg">
          <div class="wrap-slick3 flex-sb flex-w">
            <div class="wrap-slick3-dots"></div>
            <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

            <div class="slick3 gallery-lb">
              <div class="item-slick3" data-thumb="{{ URL::asset('productos/'.$product->imagen.'-1.jpg' )}}">
                <div class="wrap-pic-w pos-relative">
                   <img src="{{ URL::asset('productos/'.$product->imagen.'-1.jpg' )}}" alt="IMG-PRODUCT">

                  <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{ URL::asset('productos/'.$product->imagen.'-1.jpg' )}}">
                    <i class="zmdi zmdi-fullscreen"></i>
                  </a>
                </div>
              </div>

              <div class="item-slick3" data-thumb="{{ URL::asset('productos/'.$product->imagen.'-2.jpg' )}}">
                <div class="wrap-pic-w pos-relative">
                     <img src="{{ URL::asset('productos/'.$product->imagen.'-2.jpg' )}}" alt="IMG-PRODUCT">

                  <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{ URL::asset('productos/'.$product->imagen.'-2.jpg' )}}">
                    <i class="fa fa-expand"></i>
                  </a>
                </div>
              </div>

              <div class="item-slick3" data-thumb="{{ URL::asset('productos/'.$product->imagen.'-3.jpg' )}}">
                <div class="wrap-pic-w pos-relative">
                  <img src="{{ URL::asset('productos/'.$product->imagen.'-3.jpg' )}}" alt="IMG-PRODUCT">

                  <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{ URL::asset('productos/'.$product->imagen.'-3.jpg' )}}">
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
            {{ $product->nombre}}
          </h4>

          <span class="mtext-106 cl2">
             ${{ $product->precio}}
          </span>

          <p class="stext-102 cl3 p-t-23">
              {{ $product->descripcion}}
          </p>
        </div>

        <div class="m-t-150">
          <a href="#" class="m-r-50">Pagar</a>
          <a href="#" class="m-l-50">@include('form', ['product' => $product])</a>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
