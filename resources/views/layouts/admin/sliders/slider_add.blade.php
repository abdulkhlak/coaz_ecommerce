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
                        <form method="post" action="{{route('slider_store')}}" id="sliderform"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="title">{{__('Title')}}</label>
                                    <input type="text" class="form-control" id="title" name="title">
                                </div>
                                <div class="form-group">
                                    <label for="sub_title">{{__('Sub Title')}}</label>
                                    <input type="text" class="form-control" id="sub_title" name="sub_title">
                                </div>

                                <div class="form-group">
                                    <input type="url" class="form-control" name="url" id="url"
                                           placeholder=" url" value=""/>
                                    <font style="color: red">{{($errors->has('url'))?($errors->first('url')):''}}</font>
                                </div>

                                <div class="form-group">
                                    <label>start date</label>
                                    <input type="date" class="form-control" name="start_date" id="start_date"
                                           placeholder=" start date" value=""/>
                                    <font style="color: red">{{($errors->has('start_date'))?($errors->first('start_date')):''}}</font>
                                </div>

                                <div class="form-group">
                                    <label>end date</label>
                                    <input type="date" class="form-control" name="end_date" id="end_date"
                                           placeholder=" end date" value=""/>
                                    <font style="color: red">{{($errors->has('end_date'))?($errors->first('end_date')):''}}</font>
                                </div>

                                <div class="form-group">

                                    <div class="imagepreview">
                                        <img id="preview" src="">
                                        <div class="file-input">
                                            <input class="choose" type="file" name="slider_image" accept="image/*">
                                            <span class="button">{{__('Slider upload')}}</span>
                                            <font style="color: red">{{($errors->has('slider_image'))?($errors->first('slider_image')):''}}</font>
                                        </div>
                                    </div>
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
                                <button type="submit" class="btn btn-primary">{{__('Add new Slider ')}}</button>
                            </div>
                        </form>


                    </div><!--/.col (left) -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
@endsection
