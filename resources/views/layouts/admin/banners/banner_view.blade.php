@extends('layouts.admin.master')
@section('title','Coazs')
@section('content')

    <section class="content-header">
        <h1>
            {{__('Banner details')}}
            <a href="{{route("banner_add")}}" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> {{__('Add
            new')}}
            </a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route("admin-dashboard")}}"> {{__('Dashboard')}}</a></li>
            <li class="active">{{__('All Banner')}}</li>
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
                                <th>{{__('Preview')}}</th>
                                <th>{{__('url')}}</th>
                                <th>{{__('status')}}</th>
                                <th>{{__('Action')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($banners as $key => $banner)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td> <img style="width: 450px;height:170px;" id="img-uploaded"
                                                             src="{{(!empty
                                    ($banner->home_banner))
                                    ?url ('upload/banners/'.$banner->home_banner):url('upload/no_image.png')}}"
                                             alt="banner image" /></td>
                                    <td><a class="btn btn-primary btn-xs" target="_blank" href="{{$banner->url}}">click here</a> </td>
                                    <td>@if ($banner->status=='1')
                                            <span style="color:#fff0ff; background: #00A65A; padding: 3px 10px 3px 10px">{{__('active')
                                    }}</span>
                                        @elseif($banner->status=='0')
                                            <span style="color:#fff0ff; background: #DD4B39; padding: 3px 5px 3px 5px">{{__('Inactive')
                                        }}</span>

                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('banner_edit', base64_encode($banner->id))}}"
                                           class=""><i class="fa fa-edit"></i></a>
                                        <a href="{{route('banner_delete', base64_encode
                                     ($banner->id))}}" id="delete" class=""><i class="fa fa-trash"></i></a></td>

                                </tr>
                            @endforeach

                            </tbody>
                            <tfoot>
                            <tr>
                                <th>{{__('ID')}}</th>
                                <th>{{__('Preview')}}</th>
                                <th>{{__('url')}}</th>
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
