@extends('layouts.admin.master')
@section('title','Coazs')
@section('content')

    <section class="content-header">
        <h1>
            {{__('Add new Tag')}}
            <a href="{{route('tag_view')}}" class="btn btn-sm btn-success"> {{__('Tag list ')}}</a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route("admin-dashboard")}}"> {{__('Dashboard')}}</a></li>
            <li class="active"><a href="{{route("tag_add")}}"> {{__('Tag add')}}</a></li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <!-- left column -->
                    <div class="col-md-12">
                        <form method="post" action="{{route('tag_store')}}" id="tagform" >
                            @csrf
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="tag_name">{{__('Tag name')}}</label>
                                    <input type="text" class="form-control" id="tag_name" name="tag_name" >
                                    <p class="cat_p_desc">
                                        {{ __('The name is how it appears on your site.') }}
                                    </p>
                                </div>

                                <div class="form-group">
                                    <label for="tag_slug">{{__('Slug')}}</label>
                                    <input type="text" class="form-control" id="tag_slug" name="tag_slug">
                                    <p class="cat_p_desc">
                                        {{ __('The “slug” is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.') }}
                                    </p>
                                </div>
                                <div class="form-group">
                                    <label for="cat_desc">{{__('Description')}}</label><br/>
                                    <textarea class="" name="tag_desc" id="tag_desc" rows="5" cols="100"></textarea>
                                    <p class="cat_p_desc">
                                        {{ __('The description is not prominent by default; however, some themes may show it.') }}
                                    </p>

                                </div>
                                <div class="form-group">
                                    <label for="cat_desc">{{__('Tag status')}}</label><br/>
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
