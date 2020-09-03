@extends('layouts.admin.master')
@section('title','Coazs')
@section('content')

    <section class="content-header">
        <h1>
            {{__('Color edit')}}
            <a href="{{route('color_view')}}" class="btn btn-sm btn-success"> {{__('Color list ')}}</a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route("admin-dashboard")}}"> {{__('Dashboard')}}</a></li>
            <li class="active">{{__('Color edit')}}</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <!-- left column -->
                    <div class="col-md-8">
                        <form method="post" action="{{route('color_update',$allcolor->id)}}" id="myForm" >
                            @csrf

                            <div class="box-body">
                                <div class="form-group">
                                    <label for="color_name">{{__('Name')}}</label>
                                    <input type="text" class="form-control" id="color_name" name="color_name"
                                           value="{{$allcolor->color_name}}" />
                                </div>
                                <div class="form-group">
                                    <label for="color_desc">{{__('Description')}}</label><br/>
                                    <textarea class="" name="color_desc" id="color_desc" rows="5"
                                              cols="100">{{$allcolor->color_desc}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="status">{{__('Color status')}}</label><br/>
                                    <select class="form-control"  name="status" style="width: 30%;">
                                        <option selected disabled> Status</option>
                                        <option value="1" {{($allcolor->status =="1")?"selected":""}}>active</option>
                                        <option value="0" {{($allcolor->status =="0")?"selected":""}}>Inactive</select>
                                </div>

                            </div><!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">{{__('Update ')}}</button>
                            </div>
                        </form>


                    </div><!--/.col (left) -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
@endsection
