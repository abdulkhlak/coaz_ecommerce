<div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
    @if ($sliders)
        @foreach($sliders as $slider)

<a href="{{$slider->url}}" target="_blank">
    <div class="item" style="background-image: url({{(!empty($slider->slider_image))?url ('upload/sliders/'
    .$slider->slider_image):url('upload/no_image.png')}}">

        <!-- /.container-fluid -->
    </div>
        @endforeach
@endif
    <!-- /.item -->


</div>
</a>