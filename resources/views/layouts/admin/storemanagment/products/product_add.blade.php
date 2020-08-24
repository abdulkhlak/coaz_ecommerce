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
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                        <!-- left column -->
                        <div class="col-md-12">
                            <form method="post" action="{{route('categories_store')}}" id="brandform" enctype="multipart/form-data">
                                @csrf
                                <div class="box-body">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="category_name" name="category_name"
                                               placeholder="Product Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="cat_desc">{{__('Description')}}</label><br/>
                                        <textarea class="" name="category_desc" id="category_desc" rows="5" cols="100"></textarea>
                                    </div>


                                    <div class="row">
                                        <div class="col-sm-3 col-md-4 col-lg-3">
                                            <div class="form-wizard condensed mgbt-xs-20">
                                                <ul class="nav nav-tabs nav-stacked">
                                                    <li class="active"><a href="#tabinfo" data-toggle="tab"> <i class="fas fa-wrench"></i> Genarel </a></li>
                                                    <li><a href="#tabship" data-toggle="tab"> <i class="fa fa-truck append-icon"></i> Shipping</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 col-md-8 col-lg-9 tab-right">
                                            <div class="panel widget panel-bd-left light-widget">
                                                <div class="panel-heading no-title"> </div>
                                                <div  class="panel-body">
                                                    <div class="tab-content no-bd mgbt-xs-20">
                                                        <div id="tabinfo" class="tab-pane active">
                                                            <form class="form-horizontal">
                                                                <!-- form-group -->

                                                                <div class="form-group">
                                                                    <label for="name_1" class="control-label col-lg-3 required"> <span title="" data-toggle="tooltip" class="label-tooltip" > Regular price (৳ ) </span> </label>
                                                                    <div class="col-lg-8">
                                                                        <div class="row mgbt-xs-0">
                                                                            <div class="col-sm-9">
                                                                                <input type="text" required  name="name_1" class="  updateCurrentText " id="name_1" >
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="name_1" class="control-label col-lg-3 required"> <span title="" data-toggle="tooltip" class="label-tooltip" > Sale price (৳ )</span> </label>
                                                                    <div class="col-lg-8">
                                                                        <div class="row mgbt-xs-0">
                                                                            <div class="col-sm-9">
                                                                                <input type="text" required  name="name_1" class="  updateCurrentText " id="name_1" >
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="name_1" class="control-label col-lg-3 required">
                                                                        <span title="" data-toggle="tooltip" class="label-tooltip" >
                                                                            Sale price dates</span> </label>
                                                                    <div class="col-lg-8">
                                                                        <div class="row mgbt-xs-0">
                                                                            <div class="col-sm-9">
                                                                                <input type="date" required  name="name_1" class="
                                                                                updateCurrentText " id="name_1" >
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input type="date" required  name="name_1" class="
                                                                                updateCurrentText " id="name_1" >
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <!-- form-group -->

                                                            </form>
                                                        </div>



                                                        <div id="tabship" class="tab-pane">
                                                            <h3 class="mgtp-15 mgbt-xs-20"> Shipping</h3>
                                                            <form class="form-horizontal">
                                                                <div class="form-group">
                                                                    <label for="width" class="control-label col-lg-3"> Package width</label>
                                                                    <div class=" col-lg-2">
                                                                        <div class="input-group"> <span class="input-group-addon">in</span>
                                                                            <input type="text" onkeyup="if (isArrowKey(event)) return ;this.value = this.value.replace(/,/g, '.');" value="0.000000" name="width" id="width" maxlength="14">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="height" class="control-label col-lg-3"> Package height</label>
                                                                    <div class="col-lg-2">
                                                                        <div class="input-group"> <span class="input-group-addon">in</span>
                                                                            <input type="text" onkeyup="if (isArrowKey(event)) return ;this.value = this.value.replace(/,/g, '.');" value="0.000000" name="height" id="height" maxlength="14">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="depth" class="control-label col-lg-3"> Package depth</label>
                                                                    <div class="col-lg-2">
                                                                        <div class="input-group"> <span class="input-group-addon">in</span>
                                                                            <input type="text" onkeyup="if (isArrowKey(event)) return ;this.value = this.value.replace(/,/g, '.');" value="0.000000" name="depth" id="depth" maxlength="14">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="weight" class="control-label col-lg-3"> Package weight</label>
                                                                    <div class="col-lg-2">
                                                                        <div class="input-group"> <span class="input-group-addon">lb</span>
                                                                            <input type="text" onkeyup="if (isArrowKey(event)) return ;this.value = this.value.replace(/,/g, '.');" value="0.000000" name="weight" id="weight" maxlength="14">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="weight" class="control-label col-lg-3">Carriers</label>
                                                                    <div class="col-lg-9">
                                                                        <div class="row">
                                                                            <div class="col-sm-6">
                                                                                <div class="vd_checkbox checkbox-success">
                                                                                    <input type="checkbox" id="checkbox-1" value="DHL">
                                                                                    <label for="checkbox-1"> DHL </label>
                                                                                </div>
                                                                                <div class="vd_checkbox checkbox-success">
                                                                                    <input type="checkbox" id="checkbox-2" value="Fedex">
                                                                                    <label for="checkbox-2"> Fedex </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <div class="vd_checkbox checkbox-success">
                                                                                    <input type="checkbox" id="checkbox-3" value="My Courier">
                                                                                    <label for="checkbox-3"> My Courier </label>
                                                                                </div>
                                                                                <div class="vd_checkbox checkbox-success">
                                                                                    <input type="checkbox" id="checkbox-4" value="Post">
                                                                                    <label for="checkbox-4"> Post </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>

                                                    </div>
                                                    <!-- tab-content -->

                                                </div>
                                                <!-- panel-body -->

                                                <!-- form-horizontal -->
                                            </div>
                                            <!-- Panel Widget -->
                                        </div>
                                        <!-- col-sm-12-->
                                    </div>

                                    <div class="form-group">
                                        <label for="cat_desc">{{__('Category status')}}</label><br/>
                                        <select class="form-control"  name="status" style="width: 30%;">
                                            <option selected disabled> {{__('Status')}}</option>
                                            <option value="1">{{__('Active')}}</option>
                                            <option value="0">{{__('Inactive')}}</option>
                                        </select>
                                    </div>

                                    <div class="form-group">

                                        <div class="imagepreview">
                                            <h5>{{__('Image preview for this value')}}</h5>
                                            <p class="cat_p_desc">{{__('Upload an image')}}</p>
                                        <img id="preview" src="">
                                        <div class="file-input">
                                            <input class="choose" type="file" name="category_logo" accept="image/*">
                                            <span class="button">{{__('Upload')}}</span>
                                        </div>
                                        </div>
                                    </div>

                                </div><!-- /.box-body -->

                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">{{__('Add new Category ')}}</button>
                                </div>
                            </form>


                        </div><!--/.col (left) -->

                </div><!-- /.box -->


            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
@endsection
