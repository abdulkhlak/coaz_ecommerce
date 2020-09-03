@extends('layouts.admin.master')
@section('title','Coazs')
@section('content')

    <section class="content-header">
        <h1>
            {{__('color deatis')}}
            <a href="{{route('color_view')}}" class="btn btn-sm btn-success"> {{__('Color list ')}}</a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route("admin-dashboard")}}"> {{__('Dashboard')}}</a></li>
            <li class="active"><a href="{{route("color_add")}}"> {{__('Color add')}}</a></li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <!-- left column -->
                    <div class="col-md-12">
                        <form method="post" action="{{route('color_store')}}" id="colorform" >
                            @csrf
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="cat_name">{{__('Color name')}}</label>
                                    <input type="text" class="form-control" id="color_name" name="color_name" placeholder="Color name">
                                </div>
                                <div class="form-group">
                                    <label for="cat_desc">{{__('Description')}}</label><br/>
                                    <textarea class="" name="color_desc" id="color_desc" rows="5" cols="100"></textarea>

                                </div>
                                <div class="form-group">
                                    <label for="cat_desc">{{__('Color status')}}</label><br/>
                                    <select class="form-control" name="status" style="width: 30%;">
                                        <option selected disabled> {{__('Status')}}</option>
                                        <option value="1">{{__('Active')}}</option>
                                        <option value="0">{{__('Inactive')}}</option>
                                    </select>
                                </div>

                            </div><!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">{{__('Publish ')}}</button>
                            </div>
                        </form>

                        <script>
                            // count down on meta keyword/description text size

                            function countDown($source, $target) {
                                var max = $source.attr("data-maxchar");
                                $target.html(max - $source.val().length);

                                $source.keyup(function () {
                                    $target.html(max - $source.val().length);
                                });
                            }
                        </script>
                    </div><!--/.col (left) -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->

    </section><!-- /.content -->
@endsection
