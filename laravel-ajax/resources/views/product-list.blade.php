@extends('nav-footer')
@section('seccion')

  <div class="container">
      <div class="p-b-10">
          <h3 class="ltext-103 cl5">
              Linea de productos
          </h3>
      </div>

      <div class="flex-w flex-sb-m p-b-52">
          <div class="flex-w flex-l-m filter-tope-group m-tb-10">
              <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
                  Todo
              </button>

              <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".women">
                  Mujer
              </button>

              <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".men">
                  Hombre
              </button>

              <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".top">
                  Alta Costura
              </button>

              <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".elegant">
                  Elegante Sport
              </button>

              <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".sport">
                  Linea Deportiva
              </button>
          </div>

          <div class="flex-w flex-c-m m-tb-10">
              <div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
                  <i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
                  Filtros
              </div>

              <div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
                  <i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
                  Buscar
              </div>
          </div>
      </div>
  </div>
  <div class="container">
  <div class="row">
    @foreach ($products as $producto)

      <div class="block2 m-x-auto p-b-30">
          <div class="block2-pic hov-img0 {{ $producto->genero}} {{ $producto->tipo}}">
              <img src="{{ URL::asset('productos/'.$producto->imagen.'-1.jpg' )}}">

              <a href="./product-detail.php?id={{ $producto->id }}>" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
                  Ver
              </a>
          </div>
          <div class="block2-txt flex-w flex-t p-t-14">
              <div class="block2-txt-child1 flex-col-l ">
                  <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                      {{ $producto->nombre }}
                  </a>
                  <span class="stext-105 cl3">
                      <span>${{ $producto->precio }}</span>
                  </span>
              </div>

             <div class="block2-txt-child2 flex-r p-t-3">
                  <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                      <img class="icon-heart1 dis-block trans-04" src="{{ URL::asset('icons/icon-heart-01.png') }}" alt="ICON">
                      <img class="icon-heart2 dis-block trans-04 ab-t-l" src="{{ URL::asset('icons/icon-heart-02.png') }}" alt="ICON">
                  </a>
              </div>
          </div>
      </div>

  @endforeach

</div>
<!-- Load more -->
<div class="flex-c-m flex-w w-full p-t-45 p-b-30">
  <a href="product.html" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
    Ver mas
  </a>
</div>

</div>
</div>
</div>



@endsection
