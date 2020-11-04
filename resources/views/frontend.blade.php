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
       <div class="row">

           <div class="col-md-12">
               @if ($banners)
                   @foreach($banners as $banner)
                       <div class="CollectionGrid-container">
                           <a class="CollectionGrid-tile " href="#">
                               <div class="CollectionGrid-tileImage align-center">
                                   <img  id="img-uploaded"src="{{(!empty($banner->home_banner))?url
                                   ('upload/banners/'.$banner->home_banner):url('upload/no_image.png')}}"
                                         alt="banner image" />
                               </div>

                           </a>


                       </div>
                   @endforeach
               @endif
           </div>



       </div>
       <div class="row">
           <div class="col-md-9">
               <h2>Shop by Brands</h2>
           </div>  <div class="col-md-3">

           </div>
           <div class="col-md-12">
               @if($brands)
                   @foreach($brands as $brand)
                       <div class="CollectionGrid-container">
                           <a class="CollectionGrid-tile " href="#">
                               <div class="CollectionGrid-tileImage align-center">
                                   <img id="brand-image-size"src="{{(!empty($brand->brand_logo))?url
                                   ('upload/store_managment/brands_logo/'.$brand->brand_logo):url('upload/no_image.png')}}"
                                         alt="banner image" />
                               </div>
                               <div class="CollectionGrid-tileName js-dotdotdot">
                                   {{$brand->brand_name}}
                               </div>
                           </a>


                       </div>
                   @endforeach
               @endif
           </div>



       </div>
      <!-- ============================================== CONTENT : END ============================================== -->
   </div>
   <!-- /.row -->




      <!-- ============================================== SCROLL TABS : END ============================================== -->
   </section>
@stop