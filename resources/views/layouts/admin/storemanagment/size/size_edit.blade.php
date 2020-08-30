@extends('layouts.admin.master')
@section('title','Coazs')
@section('content')

    <section class="content-header">
        <h1>
            {{__('Size edit guides')}}
            <a href="{{route('size_view')}}" class="btn btn-sm btn-success"> {{__('Size list ')}}</a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route("admin-dashboard")}}"> {{__('Dashboard')}}</a></li>
            <li class="active">{{__('Size edit')}}</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <!-- left column -->
                    <div class="col-md-8">
                        <form method="post" action="{{route('size_update',$allsize->id)}}" id="myForm" enctype="multipart/form-data">
                            @csrf

                            <div class="box-body">
                                <div class="form-group">
                                    <label for="size_name">{{__('Name')}}</label>
                                    <input type="text" class="form-control" id="size_name" name="size_name"
                                           value="{{$allsize->size_name}}" />
                                </div>
                                <div class="form-group">
                                    <label for="size_desc">{{__('Description')}}</label><br/>
                                    <textarea class="" name="size_desc" id="size_desc" rows="5"
                                              cols="100">{{$allsize->size_desc}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="status">{{__('Size status')}}</label><br/>
                                    <select class="form-control"  name="status" style="width: 30%;">
                                        <option selected disabled> Status</option>
                                        <option value="1" {{($allsize->status =="1")?"selected":""}}>active</option>
                                        <option value="0" {{($allsize->status =="0")?"selected":""}}>Inactive</select>
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
