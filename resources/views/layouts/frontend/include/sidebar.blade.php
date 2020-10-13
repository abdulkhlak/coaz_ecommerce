<div class="side-menu animate-dropdown outer-bottom-xs">

    <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categories</div>
    <nav class="yamm megamenu-horizontal">
        <ul class="nav">
            @if($categories)
            @foreach($categories as $category)
            <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon
             fa fa-diamond"></i>{{$category->category_name}}</a>

                    @if ($category->allChild)

                    <ul class="dropdown-menu mega-menu">
                    @foreach($category->allChild as $childs)
                    <li class="yamm-content">
                        <div class="row">


                            <div class="col-sm-12 col-md-3">


                                <ul class="links list-unstyled">


                                    <li><a href="#">{{$childs->category_name}}</a></li>

                                </ul>
                            </div>


                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </li>
                    <!-- /.yamm-content -->
                @endforeach
        </ul>
                @endif

                <!-- /.dropdown-menu --> </li>
        @endforeach
            @endif
            <!-- /.menu-item -->
        </ul>
        <!-- /.nav -->
    </nav>

    <!-- /.megamenu-horizontal -->
</div>