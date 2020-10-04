@extends('layouts.admin.master')
@section('title','Coazs')
@section('content')

    <section class="content-header">
        <h1>
            {{__('Brand details')}}
            <a href="{{route("slider_add")}}" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> {{__('Add new')}}
            </a>
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
                                <th>{{__('Title')}}</th>
                                <th>{{__('Preview')}}</th>
                                <th>{{__('sub title')}}</th>
                                <th>{{__('url')}}</th>
                                <th>{{__('expire date')}}</th>
                                <th>{{__('status')}}</th>
                                <th>{{__('Action')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($sliders as $key => $slider)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$slider->title}}</td>
                                    <td><img style="width: 300px;height:170px;" id="img-uploaded" src="{{(!empty
                                    ($slider->slider_image))
                                    ?url ('upload/sliders/'.$slider->slider_image):url('upload/no_image.png')}}"
                                             alt="slider image" /></td>
                                    <td>{{$slider->sub_title}}</td>
                                    <td><a class="btn btn-primary btn-xs" target="_blank" href="{{$slider->url}}">click here</a> </td>
                                    <td>{{$slider->start_date.' - '.$slider->end_date}}</td>
                                    <td>@if ($slider->status=='1')
                                            <span style="color:#fff0ff; background: #00A65A; padding: 3px 10px 3px 10px">{{__('active')
                                    }}</span>
                                        @elseif($slider->status=='0')
                                            <span style="color:#fff0ff; background: #DD4B39; padding: 3px 5px 3px 5px">{{__('Inactive')
                                        }}</span>

                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('slider_edit', base64_encode($slider->id))}}"
                                           class=""><i class="fa fa-edit"></i></a>
                                        <a href="{{route('slider_delete', base64_encode
                                     ($slider->id))}}" id="delete" class=""><i class="fa fa-trash"></i></a></td>

                                </tr>
                            @endforeach

                            </tbody>
                            <tfoot>
                            <tr>
                                <th>{{__('ID')}}</th>
                                <th>{{__('Title')}}</th>
                                <th>{{__('Preview')}}</th>
                                <th>{{__('sub title')}}</th>
                                <th>{{__('url')}}</th>
                                <th>{{__('expire date')}}</th>
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
