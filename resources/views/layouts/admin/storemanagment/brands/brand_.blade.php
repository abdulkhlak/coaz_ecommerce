@extends('layouts.admin.master')
@section('title','Coazs')
@section('content')
    <div class="row">
        <div class="col-md-4">

            <form method="post" action="" id="brandform" enctype="multipart/form-data">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label for="cat_name">{{__('Name')}}</label>
                        <input type="text" class="form-control" id="brand_name" name="brand_name">
                        <p class="cat_p_desc">{{__('The name is how it appears on your site.')}}</p>
                    </div>
                    <div class="form-group">
                        <label for="cat_slug">{{__('Slug')}}</label>
                        <input type="text" class="form-control" id="brand_slug" name="brand_slug">
                        <p class="cat_p_desc">
                            {{ __('The “slug” is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.') }}
                        </p>
                    </div>
                    <div class="form-group">
                        <label for="cat_desc">{{__('Description')}}</label><br/>
                        <textarea class="" name="brand_desc" id="brand_desc" rows="5" cols="100"></textarea>
                        <p class="cat_p_desc">{{ __('The description is not prominent by default; however,
                                        some themes may show it.') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="cat_desc">{{__('Brand status')}}</label><br/>
                        <select class="form-control" name="status" style="width: 30%;">
                            <option selected disabled> Status</option>
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>

                    <div class="form-group">

                        <div class="imagepreview">
                            <h5>{{__('Image preview for this value')}}</h5>
                            <p class="cat_p_desc">{{__('Upload an image')}}</p>
                            <img id="preview" src="">
                            <div class="file-input">
                                <input class="choose" type="file" name="brand_logo" accept="image/*">
                                <span class="button">{{__('Upload')}}</span>
                            </div>
                        </div>
                    </div>

                </div><!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" id="addnew" class="btn btn-primary">{{__('Add new Brand ')}}</button>
                </div>
            </form>


        </div>
        <div class="col-md-8">
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
                            <td>{{$brand->id}}</td>
                            <td>{{$brand->brand_name}}</td>
                            <td><img style="width: 70px;height:50px;" id="img-uploaded" src="{{(!empty($brand->brand_logo))
                                    ?url ('upload/store_managment/brands_logo/'.$brand->brand_logo):url('upload/no_image.png')}}"
                                     alt="brand logo"/></td>
                            <td>{{$brand->brand_desc}}</td>
                            <td>{{$brand->brand_slug}}</td>
                            <td>{{$brand->status ==1?'active':'inctive'}}</td>
                            <td>
                                <a href="{{route('brands_edit', base64_encode($brand->id))}}"class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a>
                                <a href="{{route('brands_delete', base64_encode ($brand->id))}}" id="delete" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a></td>

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
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            $.ajaxSetup({
                headers:
                    {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
            });
            $("#addnew").click(function (e) {
                e.preventDefault();
                var formData = new FormData($('#brandform')[0]);
                $.ajax({
                    url: "{{route('brands_store')}}",
                    data: formData,
                    contentType: false,
                    processData: false,
                    cache: false,
                    type: 'POST',
                    success: function (data) {
                        var newdata = "<tr>";
                        newdata += "<td>" + data.id + "</td>";
                        newdata += "<td>" + data.brand_name + "</td>";
                        newdata += "<td><img style='width: 70px;height:50px;' id='img-uploaded' src='";
                        if (data.brand_logo)
                            newdata += "/upload/store_managment/brands_logo/" + data.brand_logo + "'/></td>";
                        else
                            newdata += "/upload/no_image.png'/></td>";

                        newdata += "<td>" + data.brand_desc + "</td>";
                        newdata += "<td>" + data.brand_slug + "</td>";
                        if (data.status == 1)
                            newdata += "<td>Active</td>";
                        else

                            newdata += "<td>Inactive</td>";

                        $("#example1 tbody").prepend(newdata);
                        $("#brandform")[0].reset();
                        $("#preview").attr('src', '');
                    },
                });
            });
        });

    </script>
@endsection