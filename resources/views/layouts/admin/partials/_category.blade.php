

<option style="color: #0d3349;" value="{{$category->id}}" @if(old('category')==$category->id) selected @endif data-image="{{asset
    ($category->category_logo)}}">

    @for($index=0;$index<$level;$index++)
        &nbsp;&nbsp;&nbsp;&nbsp;
    @endfor

    &nbsp;&nbsp;&nbsp;<h2 style="color: #0AA699">{{$category->category_name}}</h2>
</option>

@if($category->allChild)

    @php
        $level++
    @endphp
    @foreach($category->allChild as $child)
        @include('layouts.admin.partials._category',['category'=>$child,'level'=>$level])
    @endforeach
@endif