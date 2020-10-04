@extends('layouts.admin.master')
@section('title','Coazs')
@section('content')

    <section class="content-header">
        <h1>
            {{__('Coupon add details')}}
            <a href="{{route('coupon_view')}}" class="btn btn-sm btn-success"> {{__('Coupon list ')}}</a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route("admin-dashboard")}}"> {{__('Dashboard')}}</a></li>
            <li class="active">{{__('Coupon add')}}</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <!-- left column -->
                    <div class="col-md-8">
                        <form method="post" action="{{route('coupon_store')}}" id="couponform">
                            @csrf
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="coupon_code">{{__('Coupon Code')}}</label>
                                    <input type="text" class="form-control" placeholder="coupon code" id="coupon_code"
                                           name="coupon_code">
                                    <font style="color: red">{{($errors->has('coupon_code'))?($errors->first('coupon_code')):''}}</font>
                                </div>
                                <div class="form-group">
                                    <label for="amount_type">{{__('Amount Type')}}</label><br/>
                                    <select class="form-control" name="amount_type" style="width: 30%;">
                                        <option selected disabled> Amount type</option>
                                        <option value="percentage">percentage</option>
                                        <option value="fixed">fixed</option>
                                    </select>
                                    <font style="color: red">{{($errors->has('amount_type'))?($errors->first('amount_type')):''}}</font>
                                </div>

                                <div class="form-group">
                                    <label for="amount">{{__('Coupon amount')}}</label>
                                    <input type="text" class="form-control" placeholder="coupon amount" id="amount"
                                           name="amount">
                                    <font style="color: red">{{($errors->has('amount'))?($errors->first('amount')):''}}</font>
                                </div>

                                <div class="form-group">
                                    <label for="expiry_date">{{__('expiry date')}}</label>
                                    <input type="date" class="form-control" id="expiry_date"
                                           name="expiry_date">
                                    <font style="color: red">{{($errors->has('expiry_date'))?($errors->first('expiry_date')):''}}</font>
                                </div>
                                <div class="form-group">
                                    <label for="status">{{__('coupon status')}}</label><br/>
                                    <select class="form-control" name="status" style="width: 30%;">
                                        <option selected disabled> Status</option>
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                    <font style="color: red">{{($errors->has('status'))?($errors->first('status')):''}}</font>
                                </div>


                            </div><!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">{{__('Add Coupon ')}}</button>
                            </div>
                        </form>


                    </div><!--/.col (left) -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
@endsection
