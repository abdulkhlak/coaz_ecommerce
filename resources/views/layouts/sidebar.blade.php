<aside class="main-sidebar">

    <section class="sidebar">

        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('backend/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>

        <ul class="sidebar-menu" data-widget="tree">

            <li class="header">STORE MANAGMENT</li>
            <br/>


            <li class="treeview {{ (Route::currentRouteName() == 'brands_view')||(Route::currentRouteName() == 'brands_add')? 'active': '' }} ">
                <a href="#">
                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                    <span>{{__('Brands')}}</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ (Route::currentRouteName() == 'brands_view')? 'active': '' }}"><a href="{{route("brands_view")}}">
                            {{__('All brands')}}</a></li>
                    <li class="{{ (Route::currentRouteName() == 'brands_add')? 'active': '' }}"><a href="{{route("brands_add")}}">
                            {{__('Add new')}}</a></li>
                </ul>
            </li>

            <li class="treeview {{ (Route::currentRouteName() == 'coupon_view')||(Route::currentRouteName() == 'coupon_add')? 'active': '' }} ">
                <a href="#">
                    <i class="fa fa-certificate" aria-hidden="true"></i>
                    <span>{{__('Coupons')}}</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ (Route::currentRouteName() == 'coupon_view')? 'active': '' }}"><a href="{{route("coupon_view")}}">
                            {{__('All coupons')}}</a></li>
                    <li class="{{ (Route::currentRouteName() == 'coupon_add')? 'active': '' }}"><a href="{{route("coupon_add")}}">
                            {{__('Create new coupon')}}</a></li>
                </ul>
            </li>

            <li class="treeview {{ (Route::currentRouteName() == 'product_view')
            ||(Route::currentRouteName() == 'product_add')
            ||(Route::currentRouteName() == 'categories_view')
            ||(Route::currentRouteName() == 'categories_add')
            ||(Route::currentRouteName() == 'tag_view')
            ||(Route::currentRouteName() == 'tag_add')?
            'active': '' }} ">
                <a href="#">
                    <i class="fa fa-product-hunt" aria-hidden="true"></i><span>{{__('Products')}}</span><span
                            class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ (Route::currentRouteName() == 'product_view')? 'active': '' }}"><a
                                href="{{route("product_view")}}">{{__('All Products')}}</a></li>
                    <li class="{{ (Route::currentRouteName() == 'product_add')? 'active': '' }}"><a
                                href="{{route("product_add")}}">{{__('Add New')}}</a></li>
                    <li class="{{ (Route::currentRouteName() == 'categories_view')||(Route::currentRouteName() == 'categories_add')? 'active': '' }}">
                        <a href="{{route
                    ("categories_view")}}">{{__('Categories')}}</a></li>
                    <li class="{{ (Route::currentRouteName() == 'tag_view')||(Route::currentRouteName() == 'tag_add')?
                    'active': '' }}">
                        <a href="{{route
                    ("tag_view")}}">{{__('Tags')}}</a></li>

                </ul>
            </li>
            <li class="treeview  {{ (Route::currentRouteName() == 'size_view')
            ||(Route::currentRouteName() == 'color_view')
            ||(Route::currentRouteName() == 'size_view')?
            'active': '' }}">
                <a href="#">
                    <i class="fa fa-table"></i> <span>{{__('Attributes')}}</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ (Route::currentRouteName() == 'size_view')? 'active': '' }}"><a
                                href="{{route('size_view')}}">{{__('size guides')}}</a></li>
                    <li class="{{ (Route::currentRouteName() == 'color_view')? 'active': '' }}"><a
                                href="{{route('color_view')}}">{{__('Colors')}}</a></li>
                </ul>
            </li>

            <li class="header">SLIDERS</li>
            <br/>


            <li class="treeview  {{ (Route::currentRouteName() == 'slider_view')
            ||(Route::currentRouteName() == 'slider_add')
            ||(Route::currentRouteName() == 'slider_view')?
            'active': '' }}">
                <a href="#">
                    <i class="fa fa-sliders" aria-hidden="true"></i>
                    <span>{{__('Sliders')}}</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ (Route::currentRouteName() == 'slider_view')? 'active': '' }}"><a href="{{route('slider_view')}}">{{__('Sliders')}}</a></li>
                    <li class="{{ (Route::currentRouteName() == 'slider_add')? 'active': '' }}"><a
                                href="{{route('slider_add')}}">{{__('Add new slider')}}</a></li>
                </ul>
            </li>
            <li class="treeview  {{ (Route::currentRouteName() == 'banner_view')
            ||(Route::currentRouteName() == 'banner_add')
            ||(Route::currentRouteName() == 'banner_view')?
            'active': '' }}">
                <a href="#">
                    <i class="fa fa-sliders" aria-hidden="true"></i>
                    <span>{{__('Banners')}}</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ (Route::currentRouteName() == 'bannner_view')? 'active': '' }}"><a href="{{route
                    ('banner_view')}}">{{__('Banners')}}</a></li>
                </ul>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
