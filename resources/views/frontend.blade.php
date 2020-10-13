@extends('layouts.frontend.master')
@section('title')
 {{__('  Coaz online shop')}}
@endsection
@section('main-content')
   <div class="row">
      <!-- ============================================== SIDEBAR ============================================== -->
      <div class="col-xs-12 col-sm-12 col-md-3 sidebar">

         <!-- ================================== TOP NAVIGATION ================================== -->
      @include('layouts.frontend.include.sidebar')
      <!-- /.side-menu -->
         <!-- ================================== TOP NAVIGATION : END ================================== -->
      </div>
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
      <!-- ============================================== INFO BOXES ============================================== -->
      <div class="info-boxes wow fadeInUp">
         <div class="info-boxes-inner">
            <div class="row">
               <div class="col-md-6 col-sm-4 col-lg-4">
                  <div class="info-box">
                     <div class="row">
                        <div class="col-xs-12">
                           <h4 class="info-box-heading green">money back</h4>
                        </div>
                     </div>
                     <h6 class="text">30 Days Money Back Guarantee</h6>
                  </div>
               </div>
               <!-- .col -->

               <div class="hidden-md col-sm-4 col-lg-4">
                  <div class="info-box">
                     <div class="row">
                        <div class="col-xs-12">
                           <h4 class="info-box-heading green">free shipping</h4>
                        </div>
                     </div>
                     <h6 class="text">Shipping on orders over $99</h6>
                  </div>
               </div>
               <!-- .col -->

               <div class="col-md-6 col-sm-4 col-lg-4">
                  <div class="info-box">
                     <div class="row">
                        <div class="col-xs-12">
                           <h4 class="info-box-heading green">Special Sale</h4>
                        </div>
                     </div>
                     <h6 class="text">Extra $5 off on all items </h6>
                  </div>
               </div>
               <!-- .col -->
            </div>
            <!-- /.row -->
         </div>
         <!-- /.info-boxes-inner -->

      </div>
      <!-- /.info-boxes -->
      <!-- ============================================== INFO BOXES : END ============================================== -->
      <!-- ============================================== SCROLL TABS ============================================== -->

      <div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
         <!--Category slider Start-->
         <div class="CollectionGrid-container">
            <div class="CollectionGrid container">
               <a class="CollectionGrid-tile hover-overlay-light" href="#">
                  <div class="CollectionGrid-tileImage align-center">
                     <img src="{{asset("frontend")}}/assets/images/products-images/bags.jpg" alt="bags">
                  </div>
                  <div class="CollectionGrid-tileName js-dotdotdot">
                     Handbags
                  </div>
               </a>
               <a class="CollectionGrid-tile hover-overlay-light" href="#">
                  <div class="CollectionGrid-tileImage align-center">
                     <img src="{{asset("frontend")}}/assets/images/products-images/light.jpg" alt="bags">
                  </div>
                  <div class="CollectionGrid-tileName js-dotdotdot">
                     Lighting
                  </div>
               </a><a class="CollectionGrid-tile hover-overlay-light" href="#">
                  <div class="CollectionGrid-tileImage align-center">
                     <img src="{{asset("frontend")}}/assets/images/products-images/kids.jpg" alt="bags">
                  </div>
                  <div class="CollectionGrid-tileName js-dotdotdot">
                     Kids
                  </div>
               </a><a class="CollectionGrid-tile hover-overlay-light" href="#">
                  <div class="CollectionGrid-tileImage align-center">
                     <img src="{{asset("frontend")}}/assets/images/products-images/kids.jpg" alt="bags">
                  </div>
                  <div class="CollectionGrid-tileName js-dotdotdot">
                     Kids
                  </div>
               </a><a class="CollectionGrid-tile hover-overlay-light" href="#">
                  <div class="CollectionGrid-tileImage align-center">
                     <img src="{{asset("frontend")}}/assets/images/products-images/kids.jpg" alt="bags">
                  </div>
                  <div class="CollectionGrid-tileName js-dotdotdot">
                     Kids
                  </div>
               </a><a class="CollectionGrid-tile hover-overlay-light" href="#">
                  <div class="CollectionGrid-tileImage align-center">
                     <img src="{{asset("frontend")}}/assets/images/products-images/kids.jpg" alt="bags">
                  </div>
                  <div class="CollectionGrid-tileName js-dotdotdot">
                     Kids
                  </div>
               </a><a class="CollectionGrid-tile hover-overlay-light" href="#">
                  <div class="CollectionGrid-tileImage align-center">
                     <img src="{{asset("frontend")}}/assets/images/products-images/kids.jpg" alt="bags">
                  </div>
                  <div class="CollectionGrid-tileName js-dotdotdot">
                     Kids
                  </div>
               </a><a class="CollectionGrid-tile hover-overlay-light" href="#">
                  <div class="CollectionGrid-tileImage align-center">
                     <img src="{{asset("frontend")}}/assets/images/products-images/kids.jpg" alt="bags">
                  </div>
                  <div class="CollectionGrid-tileName js-dotdotdot">
                     Kids
                  </div>
               </a><a class="CollectionGrid-tile hover-overlay-light" href="#">
                  <div class="CollectionGrid-tileImage align-center">
                     <img src="{{asset("frontend")}}/assets/images/products-images/kids.jpg" alt="bags">
                  </div>
                  <div class="CollectionGrid-tileName js-dotdotdot">
                     Kids
                  </div>
               </a><a class="CollectionGrid-tile hover-overlay-light" href="#">
                  <div class="CollectionGrid-tileImage align-center">
                     <img src="{{asset("frontend")}}/assets/images/products-images/kids.jpg" alt="bags">
                  </div>
                  <div class="CollectionGrid-tileName js-dotdotdot">
                     Kids
                  </div>
               </a><a class="CollectionGrid-tile hover-overlay-light" href="#">
                  <div class="CollectionGrid-tileImage align-center">
                     <img src="{{asset("frontend")}}/assets/images/products-images/kids.jpg" alt="bags">
                  </div>
                  <div class="CollectionGrid-tileName js-dotdotdot">
                     Kids
                  </div>
               </a><a class="CollectionGrid-tile hover-overlay-light" href="#">
                  <div class="CollectionGrid-tileImage align-center">
                     <img src="{{asset("frontend")}}/assets/images/products-images/kids.jpg" alt="bags">
                  </div>
                  <div class="CollectionGrid-tileName js-dotdotdot">
                     Kids
                  </div>
               </a><a class="CollectionGrid-tile hover-overlay-light" href="#">
                  <div class="CollectionGrid-tileImage align-center">
                     <img src="{{asset("frontend")}}/assets/images/products-images/kids.jpg" alt="bags">
                  </div>
                  <div class="CollectionGrid-tileName js-dotdotdot">
                     Kids
                  </div>
               </a><a class="CollectionGrid-tile hover-overlay-light" href="#">
                  <div class="CollectionGrid-tileImage align-center">
                     <img src="{{asset("frontend")}}/assets/images/products-images/kids.jpg" alt="bags">
                  </div>
                  <div class="CollectionGrid-tileName js-dotdotdot">
                     Kids
                  </div>
               </a><a class="CollectionGrid-tile hover-overlay-light" href="#">
                  <div class="CollectionGrid-tileImage align-center">
                     <img src="{{asset("frontend")}}/assets/images/products-images/kids.jpg" alt="bags">
                  </div>
                  <div class="CollectionGrid-tileName js-dotdotdot">
                     Kids
                  </div>
               </a><a class="CollectionGrid-tile hover-overlay-light" href="#">
                  <div class="CollectionGrid-tileImage align-center">
                     <img src="{{asset("frontend")}}/assets/images/products-images/kids.jpg" alt="bags">
                  </div>
                  <div class="CollectionGrid-tileName js-dotdotdot">
                     Kids
                  </div>
               </a><a class="CollectionGrid-tile hover-overlay-light" href="#">
                  <div class="CollectionGrid-tileImage align-center">
                     <img src="{{asset("frontend")}}/assets/images/products-images/watch.jpg" alt="bags">
                  </div>
                  <div class="CollectionGrid-tileName js-dotdotdot">
                     Watches
                  </div>
               </a><a class="CollectionGrid-tile hover-overlay-light" href="#">
                  <div class="CollectionGrid-tileImage align-center">
                     <img src="{{asset("frontend")}}/assets/images/products-images/kichen.jpg" alt="bags">
                  </div>
                  <div class="CollectionGrid-tileName js-dotdotdot">
                     kitchen
                  </div>
               </a>
            </div>
         </div>
         <!--Category silder End-->
         <!-- /.tab-content -->
      </div>
      <!-- /.scroll-tabs -->





      <!-- ============================================== SCROLL TABS : END ============================================== -->
   </section>
@stop