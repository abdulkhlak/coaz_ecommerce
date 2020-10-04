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
                        <form method="post" action="{{route('banner_update',$banners->id)}}" id="bannerform"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="box-body">


                                <div class="form-group">

                                    <div class="imagepreview">
                                        <p class="cat_p_desc">{{__('Upload an image')}}</p>
                                        <img style="width: 850px;height:100px;" id="preview" src="{{(!empty
                                        ($banners->home_banner))
                                    ?url ('upload/banners/'.$banners->home_banner):url('upload/no_image
                                    .png')}}"
                                             alt="banner image" />
                                        <div class="file-input">
                                            <input class="choose" type="file" name="home_banner" accept="image/*">
                                            <span class="button">{{__('Upload')}}</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="url" class="form-control" name="url" id="url"
                                           placeholder=" url" value="{{$banners->url}}"/>
                                    <font style="color: red">{{($errors->has('url'))?($errors->first('url')):''}}</font>
                                </div>


                                <div class="form-group">

                                    <select class="form-control"  name="status" style="width: 30%;">
                                        <option selected disabled> Status</option>
                                        <option value="1" {{($banners->status =="1")?"selected":""}}>active</option>
                                        <option value="0" {{($banners->status =="0")?"selected":""}}>Inactive</select>
                                </div>

                            </div><!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">{{__('Update banner  ')}}</button>
                            </div>
                        </form>


                    </div><!--/.col (left) -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
@endsection
