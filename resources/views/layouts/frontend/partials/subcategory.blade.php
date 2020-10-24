
<li class="dropdown menu-item"><a href="#" class="dropdown-toggle"
                                  data-toggle="dropdown">{{$category->category_name}}</a>
    @if(count($category->allChild))
        <ul class="dropdown-menu mega-menu">

            <li class="yamm-content">

                <div class="row">

                    @foreach($category->allChild as $subcategory)
                        <div class="col-sm-12 col-md-3">
                            <ul class="links list-unstyled">
                                <li>@include('layouts.admin.partials._category',['category'=>$subcategory])</li>

                            </ul>
                        </div>

                @endforeach

                <!-- /.col -->

                    <!-- /.col -->
                </div>

                <!-- /.row -->
            </li>

            <!-- /.yamm-content -->
        </ul>
@endif
<!-- /.dropdown-menu --> </li>