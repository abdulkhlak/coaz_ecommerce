@extends('layouts.admin.master')
@section('title','Coazs')
@section('content')

    <section class="content-header">
        <h1>
            {{__('Category details')}}
            <a href="{{route('categories_add')}}" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> {{__('Add new ')}}</a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route("admin-dashboard")}}"> {{__('Dashboard')}}</a></li>
            <li class="active">{{__('All category')}}</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>{{__('ID')}}</th>
                                <th>{{__('Name')}}</th>
                                <th>{{__('Preview')}}</th>
                                <th>{{__('Description')}}</th>
                                <th>{{__('Slug')}}</th>
                                <th>{{__('status')}}</th>
                                <th>{{__('Action')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $key => $category)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$category->category_name}}</td>
                                    <td><img style="width: 70px;height:50px;" id="img-uploaded" src="{{(!empty($category->category_logo))
                                    ?url ('upload/store_managment/icon/'.$category->category_logo):url('upload/no_image.png')}}"
                                             alt="brand logo" /></td>
                                    <td>{{$category->category_desc}}</td>
                                    <td>{{$category->category_slug}}</td>
                                    <td >{{$category->status ==1
                                               ?'active':'inctive'}}</td>
                                    <td>
                                        <a href="{{route('categories_edit', base64_encode($category->id))}}"
                                           class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a>
                                        <a href="{{route('categories_delete', base64_encode
                                     ($category->id))}}" id="delete" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a></td>

                                </tr>
                            @endforeach

                            </tbody>
                            <tfoot>
                            <tr>
                                <th>{{__('ID')}}</th>
                                <th>{{__('Name')}}</th>
                                <th>{{__('Preview')}}</th>
                                <th>{{__('Description')}}</th>
                                <th>{{__('Slug')}}</th>
                                <th>{{__('status')}}</th>
                                <th>{{__('Action')}}</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
@endsection
