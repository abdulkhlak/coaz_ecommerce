@extends('layouts.admin.master')
@section('title','Coazs')
@section('content')

    <section class="content-header">
        <h1>
            {{__('Tag Edit')}}
            <a href="{{route('tag_view')}}" class="btn btn-sm btn-success"> {{__('Tag list ')}}</a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route("admin-dashboard")}}"> {{__('Dashboard')}}</a></li>
            <li class="active">{{__('Tag edit')}}</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <!-- left column -->
                    <div class="col-md-8">
                        <form method="post" action="{{route('tag_update',$tags->id)}}" id="myForm" enctype="multipart/form-data">
                            @csrf

                            <div class="box-body">
                                <div class="form-group">
                                    <label for="tag_name">{{__('Name')}}</label>
                                    <input type="text" class="form-control" id="tag_name" name="tag_name"
                                           value="{{$tags->tag_name}}" />
                                </div>
                                <div class="form-group">
                                    <label for="tag_desc">{{__('Description')}}</label><br/>
                                    <textarea class="" name="tag_desc" id="tag_desc" rows="5"
                                              cols="100">{{$tags->tag_desc}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="tag_slug">{{__('Slug')}}</label>
                                    <input type="text" class="form-control" id="tag_slug" name="tag_slug"
                                           value="{{$tags->tag_slug}}" />
                                </div>
                                <div class="form-group">
                                    <label for="status">{{__('Tag status')}}</label><br/>
                                    <select class="form-control"  name="status" style="width: 30%;">
                                        <option selected disabled> Status</option>
                                        <option value="1" {{($tags->status =="1")?"selected":""}}>active</option>
                                        <option value="0" {{($tags->status =="0")?"selected":""}}>Inactive</select>
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
