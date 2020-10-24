@extends('layouts.frontend.master')
@section('title')
 {{__('  Coaz online shop')}}
@endsection
@section('main-content')
   <div class="row">
      <!-- ============================================== SIDEBAR ============================================== -->


         <!-- ================================== TOP NAVIGATION ================================== -->
      @include('layouts.frontend.include.sidebar')
      <!-- /.side-menu -->
         <!-- ================================== TOP NAVIGATION : END ================================== -->

      <!-- /.sidemenu-holder -->
      <!-- ============================================== SIDEBAR : END ============================================== -->

      <!-- ============================================== CONTENT ============================================== -->
      <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
         <!-- ========================================== SECTION – HERO ========================================= -->

         <div id="hero">
         @include('layouts.frontend.include.slider')
         <!-- /.owl-carousel -->
         </div>

         <!-- ========================================= SECTION – HERO : END ========================================= -->





      </div>
      <!-- /.homebanner-holder -->
      <!-- ============================================== CONTENT : END ============================================== -->
   </div>
   <!-- /.row -->
   <section>
       <style>
           .test{
               width: 190px;
               height: 126px;
           }
       </style>
       <div class="row">
           @if ($banners)
               @foreach($banners as $banner)
                <div class="col-xs-2  ">
                   <img  id="img-uploaded"src="{{(!empty($banner->home_banner))?url ('upload/banners/'.$banner->home_banner):url('upload/no_image.png')}}"
                        alt="banner image" />
                </div>
             @endforeach
           @endif


       </div>
   </section>
   <section>

{{--      <!-- ============================================== INFO BOXES ============================================== -->--}}
{{--      <div class="info-boxes wow fadeInUp">--}}
{{--         <div class="info-boxes-inner">--}}
{{--            <div class="row">--}}
{{--               <div class="col-md-6 col-sm-4 col-lg-4">--}}
{{--                  <div class="info-box">--}}
{{--                     <div class="row">--}}
{{--                        <div class="col-xs-12">--}}
{{--                           <h4 class="info-box-heading green">money back</h4>--}}
{{--                        </div>--}}
{{--                     </div>--}}
{{--                     <h6 class="text">30 Days Money Back Guarantee</h6>--}}
{{--                  </div>--}}
{{--               </div>--}}
{{--               <!-- .col -->--}}

{{--               <div class="hidden-md col-sm-4 col-lg-4">--}}
{{--                  <div class="info-box">--}}
{{--                     <div class="row">--}}
{{--                        <div class="col-xs-12">--}}
{{--                           <h4 class="info-box-heading green">free shipping</h4>--}}
{{--                        </div>--}}
{{--                     </div>--}}
{{--                     <h6 class="text">Shipping on orders over $99</h6>--}}
{{--                  </div>--}}
{{--               </div>--}}
{{--               <!-- .col -->--}}

{{--               <div class="col-md-6 col-sm-4 col-lg-4">--}}
{{--                  <div class="info-box">--}}
{{--                     <div class="row">--}}
{{--                        <div class="col-xs-12">--}}
{{--                           <h4 class="info-box-heading green">Special Sale</h4>--}}
{{--                        </div>--}}
{{--                     </div>--}}
{{--                     <h6 class="text">Extra $5 off on all items </h6>--}}
{{--                  </div>--}}
{{--               </div>--}}
{{--               <!-- .col -->--}}
{{--            </div>--}}
{{--            <!-- /.row -->--}}
{{--         </div>--}}
{{--         <!-- /.info-boxes-inner -->--}}

{{--      </div>--}}
{{--      <!-- /.info-boxes -->--}}
{{--      <!-- ============================================== INFO BOXES : END ============================================== -->--}}
      <!-- ============================================== SCROLL TABS ============================================== -->

{{--      <div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">--}}
{{--         <!--Category slider Start-->--}}



{{--         <div class="CollectionGrid-container">--}}
{{--            <div class="CollectionGrid container">--}}
{{--               @if ($brands)--}}
{{--                  @foreach($brands as $brand)--}}
{{--               <a class="CollectionGrid-tile hover-overlay-light" href="{{$brand->brand_slug}}">--}}
{{--                  <div class="CollectionGrid-tileImage align-center">--}}
{{--                     <img  id="img-uploaded" src="{{(!empty($brand->brand_logo))--}}
{{--                                    ?url ('upload/store_managment/brands_logo/'.$brand->brand_logo):url('upload/no_image.png')}}" alt="brand logo" />--}}
{{--                  </div>--}}
{{--                  <div class="CollectionGrid-tileName js-dotdotdot">{{$brand->brand_name}}</div>--}}
{{--               </a>--}}
{{--                  @endforeach--}}
{{--               @endif--}}
{{--            </div>--}}
{{--         </div>--}}

{{--         <!--Category silder End-->--}}
{{--         <!-- /.tab-content -->--}}
{{--      </div>--}}
      <!-- /.scroll-tabs -->

      <div class="container">
         <div class="row">
            <div class="col-md-12">
               @foreach($categories as $category)
            <div class="col-md-5ths">
               <div class="catloogo">
               <img  id="img-uploaded" width="150" height="150" src="{{(!empty($category->category_logo))?url
               ('upload/store_managment/icon/'
               .$category->category_logo)
               :url('upload/no_image.png')}}"
                     alt="banner image" />
               </div>
               <div class="catname">
                  <h4>{{$category->category_name}}</h4>
               </div>

            </div>

                  @endforeach
         </div>
         </div>


      </div>

      <!-- ============================================== SCROLL TABS : END ============================================== -->
   </section>
@stop