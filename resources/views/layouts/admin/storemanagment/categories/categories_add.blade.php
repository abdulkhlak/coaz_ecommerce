@extends('layouts.admin.master')
@section('title','Coazs')
@section('content')

    <section class="content-header">
        <h1>
            {{__('Category add details')}}
            <a href="{{route('categories_view')}}" class="btn btn-sm btn-success"> {{__('Category list ')}}</a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route("admin-dashboard")}}"> {{__('Dashboard')}}</a></li>
            <li class="active">{{__('Category add')}}</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <!-- left column -->
                    <div class="col-md-12">
                        <form method="post" action="{{route('categories_store')}}" id="brandform" enctype="multipart/form-data">
                            @csrf
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="cat_name">{{__('Name')}}</label>
                                    <input type="text" class="form-control" id="category_name" name="category_name">
                                    <p class="cat_p_desc">{{__('The name is how it appears on your site.')}}</p>
                                </div>
                                <div class="form-group">
                                    <label for="cat_name">{{__('parent category')}}</label>
                                    <select name="category"  class="form-control" id="category">
                                        <option value="0" selected >None</option>
                                        @foreach($categories as $category)


                                            @include('layouts.admin.storemanagment.categories.subCategoryList',['category' => $category,'level'=>0])

                                        @endforeach
                                    </select>

                                    <!-- Parent category content -->
                                </div>


                                <div class="form-group">
                                    <label for="cat_desc">{{__('Description')}}</label><br/>
                                    <textarea class="" name="category_desc" id="category_desc" rows="5" cols="100"></textarea>
                                    <p class="cat_p_desc">{{ __('The description is not prominent by default; however,
                                        some themes may show it.') }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="cat_desc">{{__('Category status')}}</label><br/>
                                    <select class="form-control" name="status" style="width: 30%;">
                                        <option selected disabled> {{__('Status')}}</option>
                                        <option value="1">{{__('Active')}}</option>
                                        <option value="0">{{__('Inactive')}}</option>
                                    </select>
                                </div>

                                <div class="form-group">

                                    <div class="imagepreview">
                                        <h5>{{__('Image preview for this value')}}</h5>
                                        <p class="cat_p_desc">{{__('Upload an image')}}</p>
                                        <img id="preview" src="">
                                        <div class="file-input">
                                            <input class="choose" type="file" name="category_logo" accept="image/*">
                                            <span class="button">{{__('Upload')}}</span>
                                        </div>
                                    </div>
                                </div>

                            </div><!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">{{__('Add new Category ')}}</button>
                            </div>
                        </form>

                        <script>
                            // count down on meta keyword/description text size

                            function countDown($source, $target) {
                                var max = $source.attr("data-maxchar");
                                $target.html(max - $source.val().length);

                                $source.keyup(function () {
                                    $target.html(max - $source.val().length);
                                });
                            }
                        </script>
                    </div><!--/.col (left) -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->

    </section><!-- /.content -->
@endsection
