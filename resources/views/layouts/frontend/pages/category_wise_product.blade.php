@extends('layouts.frontend.master')

@section('title')
{{__('  Coaz online shop')}}
@endsection
@section('main-content')
        <!DOCTYPE html>
<html lang="en">

<div class="body-content outer-top-xs">
    <div class='container'>
        <div class='row'>

            <div class='col-md-12'>
                <!-- ========================================== SECTION – HERO ========================================= -->

                <div class="search-result-container ">
                    <div id="myTabContent" class="tab-content category-list">
                        <div class="tab-pane active " id="grid-container">
                            <div class="category-product">
                                <div class="row">
                                    @if($products)
                                        @foreach($products as $product)
                                            <div class="col-sm-6 col-md-2 wow fadeInUp">
                                                <div class="products">
                                                    <div class="product">
                                                        <div class="product-image">
                                                            <div class="image"><a
                                                                        href="{{route('details',$product->product_slug)}}"><img
                                                                            src="{{(!empty ($product->featured_image))?url ('upload/store_managment/products/'.$product->featured_image)
                                    :url('upload/no_image.png')}}" alt=""></a>
                                                            </div>
                                                            <!-- /.image -->
                                                            @if ($product->product_status=='1')
                                                                <div class="tag new"><span>{{__('new')}}</span></div>
                                                            @elseif($product->product_status=='2')
                                                                <div class="tag new"><span>{{__('hot')}}</span></div>
                                                            @elseif($product->product_status=='3')
                                                                <div class="tag new"><span>{{__('sale')}}</span></div>

                                                            @endif

                                                        </div>
                                                        <!-- /.product-image -->

                                                        <div class="product-info text-left">
                                                            <h3 class="name"><a
                                                                        href="{{route('details',$product->product_slug)
                                                                        }}">{{$product->product_name}}</a>
                                                            </h3>

                                                            <div class="description"></div>
                                                            <div class="product-price"><span
                                                                        class="price">৳{{$product->regular_price}}</span>
                                                                <span class="discount-price">12%</span>
                                                                <span
                                                                        class="price-before-discount">৳{{$product->sale_price}}</span>
                                                            </div>
                                                            <!-- /.product-price -->

                                                        </div>

                                                    </div>
                                                    <!-- /.product -->

                                                </div>
                                                <!-- /.products -->
                                            </div>
                                            <!-- /.item -->
                                        @endforeach

                                    @endif

                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.category-product -->

                        </div>
                        <!-- /.tab-pane -->

                    </div>
                    <!-- /.tab-content -->

                    <!-- /.pagination-container -->
                </div>
                <!-- /.text-right -->

            </div>
            <!-- /.filters-container -->

        </div>
        <!-- /.search-result-container -->

    </div>
    <!-- /.col -->
</div>
<!-- /.row -->
</div>
<!-- /.container -->

</div>
<!-- /.body-content -->
</body>

<!-- Mirrored from www.themesground.com/flipmart-demo/HTML/category.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Jul 2020 07:07:01 GMT -->
</html>
@endsection