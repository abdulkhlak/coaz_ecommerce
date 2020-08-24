

    <option value="{{$category->id}}" @if(old('category')==$category->id) selected @endif data-image="{{asset($category->category_logo)}}">

        @for($index=0;$index<$level;$index++)
            &nbsp;&nbsp;&nbsp;&nbsp;
        @endfor

            &nbsp;&nbsp;&nbsp;&nbsp; {{$category->category_name}}
    </option>

        @if($category->allChild)

            @php
                $level++
            @endphp
            @foreach($category->allChild as $child)
                @include('layouts.admin.storemanagment.categories.subCategoryList',['category'=>$child,'level'=>$level])
            @endforeach
        @endif