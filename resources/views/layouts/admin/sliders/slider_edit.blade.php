@extends('layouts.admin.master')
@section('title','Coazs')
@section('content')

    <section class="content-header">
        <h1>
            {{__('Slider add details')}}
            <a href="{{route('slider_view')}}" class="btn btn-sm btn-success"> {{__('Slider list ')}}</a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route("admin-dashboard")}}"> {{__('Dashboard')}}</a></li>
            <li class="active">{{__('Slider add')}}</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <!-- left column -->
                    <div class="col-md-8">
                        <form method="post" action="{{route('slider_update', $sliders->id)}}" id="sliderform"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="title">{{__('Title')}}</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                    value="{{$sliders->title}}">
                                </div>
                                <div class="form-group">
                                    <label for="sub_title">{{__('Sub Title')}}</label>
                                    <input type="text" class="form-control" id="sub_title"
                                           name="sub_title"value="{{$sliders->sub_title}}">
                                </div>

                                <div class="form-group">
                                    <input type="url" class="form-control" name="url" id="url"
                                           placeholder=" url" value="{{$sliders->url}}"/>
                                    <font style="color: red">{{($errors->has('url'))?($errors->first('url')):''}}</font>
                                </div>

                                <div class="form-group">
                                    <label>start date</label>
                                    <input type="date" class="form-control" name="start_date" id="start_date"
                                           placeholder=" start date" value="{{$sliders->start_date}}"/>
                                    <font style="color: red">{{($errors->has('start_date'))?($errors->first('start_date')):''}}</font>
                                </div>

                                <div class="form-group">
                                    <label>end date</label>
                                    <input type="date" class="form-control" name="end_date" id="end_date"
                                           placeholder=" end date" value="{{$sliders->end_date}}"/>
                                    <font style="color: red">{{($errors->has('end_date'))?($errors->first('end_date')):''}}</font>
                                </div>

                                <div class="form-group">

                                    <div class="imagepreview">
                                        <h5>{{__('Image preview for this value')}}</h5>
                                        <p class="cat_p_desc">{{__('Upload an image')}}</p>
                                        <img style="width: 300px;height:100px;" id="preview" src="{{(!empty
                                        ($sliders->slider_image))
                                    ?url ('upload/sliders/'.$sliders->slider_image):url('upload/no_image
                                    .png')}}"
                                             alt="slider" />
                                        <div class="file-input">
                                            <input class="choose" type="file" name="slider_image" accept="image/*">
                                            <span class="button">{{__('Upload')}}</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">

                                    <select class="form-control"  name="status" style="width: 30%;">
                                        <option selected disabled> Status</option>
                                        <option value="1" {{($sliders->status =="1")?"selected":""}}>active</option>
                                        <option value="0" {{($sliders->status =="0")?"selected":""}}>Inactive</select>
                                </div>

                            </div><!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">{{__('Add new Slider ')}}</button>
                            </div>
                        </form>


                    </div><!--/.col (left) -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
@endsection
