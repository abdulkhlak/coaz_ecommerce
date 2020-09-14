@extends('layouts.admin.master')
@section('title','Coazs')
@section('content')

    <section class="content-header">
        <h1>
            {{__('Product details')}}
            <a href="{{route('product_add')}}" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> {{__('Add new')}} </a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route("admin-dashboard")}}"> {{__('Dashboard')}}</a></li>
            <li class="active">{{__('All categories')}}</li>
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
                                <th>{{__('Name')}}</th>
                                <th>{{__('price')}}</th>
                                <th>{{__('categories')}}</th>
                                <th>{{__('tags')}}</th>
                                <th>{{__('size')}}</th>
                                <th>{{__('color')}}</th>
                                <th>{{__('status')}}</th>
                                <th>{{__('Action')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $key => $product)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td><img style="width: 70px;height:50px;" id="img-uploaded" src="{{(!empty
                                    ($product->featured_image))?url ('upload/store_managment/products/'.$product->featured_image)
                                    :url('upload/no_image.png')}}" alt="featured_image"/></td>
                                    <td>{{$product->product_name}}</td>
                                    <td>{{$product->regular_price}} -<br/> {{$product->sale_price}}</td>
                                    @if ($product->category)
                                        <td>{{$product->category->category_name}}</td>
                                    @endif
                                    <td>
                                        @if ($product->tags)
                                            @foreach($product->tags as $product_tag)
                                                <label class=" label label-warning"> {{$product_tag->tag_name}}</label><br/>
                                            @endforeach
                                        @endif

                                    </td>
                                    <td>
                                        @if ($product->sizes)
                                            @foreach($product->sizes as $product_size)
                                                <label class=" label label-warning"> {{$product_size->size_name}}</label><br/>
                                            @endforeach
                                        @endif

                                    </td>
                                    <td>
                                        @if ($product->colors)
                                            @foreach($product->colors as $product_color)
                                                <label class=" label label-warning"> {{$product_color->color_name}}</label><br/>
                                            @endforeach
                                        @endif

                                    </td>

                                    <td>@if ($product->status=='1')
                                            <span style="color:#fff0ff; background: #00A65A; padding: 3px 10px 3px 10px">{{__('active')
                                    }}</span>
                                        @elseif($product->status=='0')
                                            <span style="color:#fff0ff; background: #DD4B39; padding: 3px 5px 3px 5px">{{__('Inactive')
                                        }}</span>

                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('product_edit', base64_encode($product->id))}}"
                                           class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a>
                                        <a href="{{route('product_delete', base64_encode
                                     ($product->id))}}" id="delete" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                    </td>

                                </tr>
                            @endforeach

                            </tbody>
                            <tfoot>
                            <tr>
                                <th>{{__('ID')}}</th>
                                <th>{{__('Preview')}}</th>
                                <th>{{__('Name')}}</th>
                                <th>{{__('price')}}</th>
                                <th>{{__('categories')}}</th>
                                <th>{{__('tags')}}</th>
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
