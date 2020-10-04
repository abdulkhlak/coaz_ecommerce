@extends('layouts.admin.master')
@section('title','Coazs')
@section('content')

    <section class="content-header">
        <h1>
            {{__('Coupon details')}}
            <a href="{{route("coupon_add")}}" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> {{__('Add new')}} </a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route("admin-dashboard")}}"> {{__('Dashboard')}}</a></li>
            <li class="active">{{__('All Coupon')}}</li>
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
                                <th>{{__('Coupon code')}}</th>
                                <th>{{__('amount type')}}</th>
                                <th>{{__('amount')}}</th>
                                <th>{{__('expiry date')}}</th>
                                <th>{{__('status')}}</th>
                                <th>{{__('Action')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($coupons as $key => $coupon)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$coupon->coupon_code}}</td>
                                    <td>{{$coupon->amount_type}}</td>
                                    <td>{{$coupon->amount}}</td>
                                    <td>{{$coupon->expiry_date}}</td>
                                    <td>@if ($coupon->status=='1')
                                            <span style="color:#fff0ff; background: #00A65A; padding: 3px 10px 3px 10px">{{__('active')
                                    }}</span>
                                        @elseif($coupon->status=='0')
                                            <span style="color:#fff0ff; background: #DD4B39; padding: 3px 5px 3px 5px">{{__('Inactive')
                                        }}</span>

                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('coupon_edit', base64_encode($coupon->id))}}"
                                           class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a>
                                        <a href="{{route('coupon_delete', base64_encode
                                     ($coupon->id))}}" id="delete" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a></td>

                                </tr>
                            @endforeach

                            </tbody>
                            <tfoot>
                            <tr>
                                <th>{{__('ID')}}</th>
                                <th>{{__('Coupon code')}}</th>
                                <th>{{__('amount type')}}</th>
                                <th>{{__('amount')}}</th>
                                <th>{{__('expiry date')}}</th>
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
