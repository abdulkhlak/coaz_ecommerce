
<option value="{{$allchild->id}}" @if(old('category_id',$selectedData) == $allchild->id) selected @endif
@if($category_id==$allchild->id) disabled @endif>
    @for($index=0;$index<$level;$index++)
        &nbsp;&nbsp;&nbsp;&nbsp;
    @endfor

    {{$allchild->category_name}}
</option>

@if($allchild->allChild)

    @php
        $level++
    @endphp
    @foreach($allchild->allChild as $child)
        @include('layouts.admin.partials.product_edit',['allchild'=>$child,'selectedData'=>$selectedData,
        'category_id'=>$category_id, 'level'=>$level])
    @endforeach
@endif