@extends('layouts.admin.master')
@section('title','Coazs')
@section('content')

    <section class="content-header">
        <h1>
            {{__('Banner add details')}}
            <a href="{{route('banner_view')}}" class="btn btn-sm btn-success"> {{__('Banner list ')}}</a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route("admin-dashboard")}}"> {{__('Dashboard')}}</a></li>
            <li class="active">{{__('Banner add')}}</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <!-- left column -->
                    <div class="col-md-8">
                        <form method="post" action="{{route('banner_store')}}" id="bannerform"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="box-body">


                                <div class="form-group">

                                    <div class="imagepreview">
                                        <img id="preview" src="">
                                        <div class="file-input">
                                            <input class="choose" type="file" name="home_banner" accept="image/*">
                                            <span class="button">{{__('Banner upload')}}</span>
                                            <font style="color: red">{{($errors->has('home_banner'))?($errors->first('home_banner')):''}}</font>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="url" class="form-control" name="url" id="url"
                                           placeholder=" url" value=""/>
                                    <font style="color: red">{{($errors->has('url'))?($errors->first('url')):''}}</font>
                                </div>


                                <div class="form-group">
                                    <label for="cat_desc">{{__('status')}}</label><br/>
                                    <select class="form-control" name="status" style="width: 30%;">
                                        <option selected disabled> Status</option>
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>

                            </div><!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">{{__('Add new banner ')}}</button>
                            </div>
                        </form>


                    </div><!--/.col (left) -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
@endsection
