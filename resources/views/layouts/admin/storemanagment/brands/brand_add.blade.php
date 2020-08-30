@extends('layouts.admin.master')
@section('title','Coazs')
@section('content')

    <section class="content-header">
        <h1>
            {{__('Brand add details')}}
            <a href="{{route('brands_view')}}" class="btn btn-sm btn-success"> {{__('Brand list ')}}</a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route("admin-dashboard")}}"> {{__('Dashboard')}}</a></li>
            <li class="active">{{__('Brand add')}}</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <!-- left column -->
                    <div class="col-md-8">
                        <form method="post" action="{{route('brands_store')}}" id="brandform" enctype="multipart/form-data">
                            @csrf
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="cat_name">{{__('Name')}}</label>
                                    <input type="text" class="form-control" id="brand_name" name="brand_name">
                                    <p class="cat_p_desc">{{__('The name is how it appears on your site.')}}</p>
                                </div>
                                <div class="form-group">
                                    <label for="cat_slug">{{__('Slug')}}</label>
                                    <input type="text" class="form-control" id="brand_slug" name="brand_slug">
                                    <p class="cat_p_desc">
                                        {{ __('The “slug” is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.') }}
                                    </p>
                                </div>
                                <div class="form-group">
                                    <label for="cat_desc">{{__('Description')}}</label><br/>
                                    <textarea class="" name="brand_desc" id="brand_desc" rows="5" cols="100"></textarea>
                                    <p class="cat_p_desc">{{ __('The description is not prominent by default; however,
                                        some themes may show it.') }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="cat_desc">{{__('Brand status')}}</label><br/>
                                    <select class="form-control" name="status" style="width: 30%;">
                                        <option selected disabled> Status</option>
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>

                                <div class="form-group">

                                    <div class="imagepreview">
                                        <h5>{{__('Image preview for this value')}}</h5>
                                        <p class="cat_p_desc">{{__('Upload an image')}}</p>
                                        <img id="preview" src="">
                                        <div class="file-input">
                                            <input class="choose" type="file" name="brand_logo" accept="image/*">
                                            <span class="button">{{__('Upload')}}</span>
                                        </div>
                                    </div>
                                </div>

                            </div><!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">{{__('Add new Brand ')}}</button>
                            </div>
                        </form>


                    </div><!--/.col (left) -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
@endsection
