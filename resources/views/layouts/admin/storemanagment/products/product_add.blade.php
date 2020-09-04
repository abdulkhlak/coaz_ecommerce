@extends('layouts.admin.master')
@section('title','Coazs')
@section('content')

    <section class="content-header">
        <h1>
            {{__('Add new product')}}
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route("admin-dashboard")}}"> {{__('Dashboard')}}</a></li>
            <li class="active">{{__('Product add')}}</li>
        </ol>
    </section>
    <section class="content ">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <form method="post" action="{{route('product_store')}}" id="productform" enctype="multipart/form-data">
                    @csrf
                        <!-- product  colum -->
                        <div class="col-md-12">

                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="product_name">{{__('Product name')}}</label>
                                        <input type="text" class="form-control" id="product_name" name="product_name"
                                               placeholder="Product Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="product_slug">{{__('Product slug')}}</label>
                                        <input type="text" class="form-control" id="product_slug" name="product_slug"
                                               placeholder="Product slug">
                                    </div>

                                    <div class="form-group">
                                        <label for="description">{{__('Description')}}</label>
                                        <textarea class="form-control" id="editor1" name="description"
                                                  placeholder="description" rows="5" cols="100"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="regular_price">{{__('regular price')}}</label>
                                        <input type="text" class="form-control" id="regular_price" name="regular_price"
                                               placeholder="৳ 00.00">
                                    </div>
                                    <div class="form-group">
                                        <label for="sale_price">{{__('sale  price')}}</label>
                                        <input type="text" class="form-control" id="sale_price" name="sale_price"
                                               placeholder="৳ 00.00">
                                        <a href="#" class="sale_schedule" id="sale_schedule" style="display: inline;">Schedule</a>
                                    </div>

                                    <div class="sale_price_date" id="sale_price_date" style="display:none;">
                                        <label for="regular_price">{{__('sale price dates')}}</label>
                                    <div class="form-group">
                                        <label for="sale_date_start">{{__('FORM')}}</label>
                                        <input type="date" class="form-control" name="sale_date_start" id="sale_date_start"
                                               placeholder=" Form...YYYY-MM-DD " value=""/>
                                    </div>
                                    <div class="form-group">
                                        <label for="sale_date_end">{{__('TO')}}</label>
                                        <input type="date" class="form-control" name="sale_date_end" id="sale_date_end"
                                               placeholder=" To...YYYY-MM-DD " value=""/>
                                    </div>
                                    </div> <!-- sale price date div -->
                                    <div class="form-group">
                                        <label for="product_model">{{__('Product model')}}</label>
                                        <input type="text" class="form-control" id="product_model" name="product_model"
                                               placeholder="Product model">
                                    </div>
                                    <div class="form-group">
                                        <label for="product_code">{{__('Product code')}}</label>
                                        <input type="text" class="form-control" id="product_code" name="product_code"
                                               placeholder="Product code">
                                    </div>
                                    <div class="form-group">
                                        <label for="product_status">{{__('product status')}}</label>
                                        <select name="product_status" class="form-control">
                                            <option disabled selected >status</option>
                                            <option value="1">New</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="product_weight">{{__('product weight')}}</label>
                                        <input type="text" class="form-control" id="product_weight" name="product_weight"
                                               placeholder="Product weight">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="cat_id">{{__('product categories')}}</label>
                                            <select name="cat_id" class="form-control">
                                                <option disabled selected >status</option>
                                                @foreach($categories as $category)


                                                    @include('layouts.admin.partials._category',['category' => $category,'level'=>0])

                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="brand_id">{{__('product brand')}}</label>
                                            <select name="brand_id" class="form-control">
                                                <option disabled selected >brand select</option>
                                                @foreach($brands as $brand)
                                                <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                                                    @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="color_id">{{__('product color')}}</label>
                                            <select name="color_id" class="form-control">
                                                <option disabled selected >color</option>
                                                @foreach($colors as $color)
                                                    <option value="{{$color->id}}">{{$color->color_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="size_id">{{__('product size')}}</label>
                                            <select name="size_id" class="form-control">
                                                <option disabled selected >size</option>
                                                @foreach($sizes as $size)
                                                    <option value="{{$size->id}}">{{$size->size_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="product_description">{{__('product description')}}</label>
                                        <textarea class="form-control" id="editor2" name="product_description"
                                                  placeholder="description" rows="5" cols="100"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="tags_id">{{__('product tags')}}</label>
                                        <select name="tags_id" class="form-control select2" >

                                            @foreach($tags as $tag)
                                                <option value="{{$tag->id}}">{{$tag->tag_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <!-- radio -->
                                    <div class="form-group">
                                        <label for="warranty" class="control-label">{{__('Warranty')}}</label>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="warranty" id="warranty" value="1" checked>
                                                {{__('Yes')}}
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="warranty" id="warranty_2" value="0">
                                                {{__('No')}}
                                            </label>
                                        </div>
                                    </div>
                                    <div class="warranty-box" style="display:none;" >
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="warranty" class="control-label">{{__('warranty duration')}}</label>
                                                <input type="text" class="form-control" name="warranty_duration" id="warranty_duration"
                                                       placeholder="warranty duration" value=""/>
                                                <font style="color: red">{{($errors->has('warranty_duration'))?($errors->first('warranty_duration')):''}}</font>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>warranty condition </label>
                                                <textarea class="form-control"
                                                          name="warranty_condition"placeholder="description" rows="5" cols="100"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="video_url">{{__('video url')}}</label>
                                        <input type="url" class="form-control" name="video_url" id="video_url"
                                               placeholder="video url" value=""/>
                                    </div>
                                    <div class="form-group">
                                        <label for="featured_image">{{__('featured image')}}</label>
                                        <div class="imagepreview">
                                            <h5>{{__('Image preview for this value')}}</h5>
                                            <p class="cat_p_desc">{{__('Upload an image')}}</p>
                                        <img id="preview" src="">
                                        <div class="file-input">
                                            <input class="choose" type="file" name="featured_image">
                                            <span class="button">{{__('Upload')}}</span>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="product_gallery">{{__('product gallery')}}</label>
                                        <div class="field" align="left">
                                            <input type="file" id="files" multiple name="product_gallery[]"  />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <select class="form-control"  name="status" style="width: 100%;">
                                            <option selected disabled> Status</option>
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>

                                </div><!-- /.box-body -->

                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">{{__('Add new Category ')}}</button>
                                </div>



                        </div><!--/.col (product colum) -->
                    </form>
                </div><!-- /.box -->



            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            if (window.File && window.FileList && window.FileReader) {
                $("#files").on("change", function(e) {
                    var files = e.target.files,
                        filesLength = files.length;
                    for (var i = 0; i < filesLength; i++) {
                        var f = files[i]
                        var fileReader = new FileReader();
                        fileReader.onload = (function(e) {
                            var file = e.target;
                            $("<span class=\"pip\">" +
                                "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
                                "<br/><span class=\"remove\">Remove image</span>" +
                                "</span>").insertAfter("#files");
                            $(".remove").click(function(){
                                $(this).parent(".pip").remove();
                            });

                            // Old code here
                            /*$("<img></img>", {
                              class: "imageThumb",
                              src: e.target.result,
                              title: file.name + " | Click to remove"
                            }).insertAfter("#files").click(function(){$(this).remove();});*/

                        });
                        fileReader.readAsDataURL(f);
                    }
                    console.log(files);
                });
            } else {
                alert("Your browser doesn't support to File API")
            }
        });
    </script>
    <script>
        $(function () {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('editor1');
            //bootstrap WYSIHTML5 - text editor
            $(".textarea").wysihtml5();
        });
        $(function () {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('editor2');
            //bootstrap WYSIHTML5 - text editor
            $(".textarea").wysihtml5();
        });
    </script>
@endsection