<ul>
    @foreach ($children as $subcategory)
        @if (count($subcategory->children))
            <span>{{$subcategory->title}}</span>
            @include('home.categorytree', ['children'=>$subcategory->children])
        @else
        <li>
            <a href="{{route('categoryplaces', ['id'=>$subcategory->id, 'slug'=>$subcategory->title])}}">{{$subcategory->title}}</a>
        </li>
        @endif
    @endforeach
</ul>
