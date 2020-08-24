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

            <li class="treeview {{ (Route::currentRouteName() == 'brands_view')||(Route::currentRouteName() == 'brands_add')? 'active': '' }} ">
                <a href="#">
                    <i class="fas fa-tshirt"></i>
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

            <li class="treeview {{ (Route::currentRouteName() == 'product_view')
            ||(Route::currentRouteName() == 'product_add')
            ||(Route::currentRouteName() == 'categories_view')
            ||(Route::currentRouteName() == 'categories_add')?
            'active': '' }} ">
                <a href="#">
                    <i class="fa fa-product-hunt" aria-hidden="true"></i><span>{{__('Products')}}</span><span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ (Route::currentRouteName() == 'product_view')? 'active': '' }}"><a href="{{route("product_view")}}">{{__('All Products')}}</a></li>
                    <li class="{{ (Route::currentRouteName() == 'product_add')? 'active': '' }}"><a href="{{route("product_add")}}">{{__('Add New')}}</a></li>
                    <li class="{{ (Route::currentRouteName() == 'categories_view')||(Route::currentRouteName() == 'categories_add')? 'active': '' }}"><a href="{{route
                    ("categories_view")}}">{{__('Categories')}}</a></li>

                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-table"></i> <span>Tables</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
                    <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-folder"></i> <span>Examples</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
                    <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
                    <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
                    <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
                    <li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
                    <li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
                    <li><a href="pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
                    <li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
                    <li><a href="pages/examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
                </ul>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
