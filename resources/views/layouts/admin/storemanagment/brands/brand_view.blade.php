@extends('layouts.admin.master')
@section('title','Coazs')
@section('content')

    <section class="content-header">
        <h1>
            {{__('Brand details')}}
            <a href="#" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> {{__('Add new')}} </a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route("admin-dashboard")}}"> {{__('Dashboard')}}</a></li>
            <li class="active">{{__('All brands')}}</li>
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
                            @foreach($brands as $key => $brand)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$brand->brand_name}}</td>
                                    <td><img style="width: 70px;height:50px;" id="img-uploaded" src="{{(!empty($brand->brand_logo))
                                    ?url ('upload/store_managment/brands_logo/'.$brand->brand_logo):url('upload/no_image.png')}}" alt="brand logo" /></td>
                                    <td>{{$brand->brand_desc}}</td>
                                    <td>{{$brand->brand_slug}}</td>
                                    <td >{{$brand->status ==1
                                               ?'active':'inctive'}}</td>
                                    <td>
                                        <a href="{{route('brands_edit', base64_encode($brand->id))}}"
                                           class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a>
                                        <a href="{{route('brands_delete', base64_encode
                                     ($brand->id))}}" id="delete" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a></td>

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
