@foreach ($pages as $page)
    <li class="nav-item">
        <a href="{{$page->url}}" class="nav-link">
            {{$page->title}}
            {{--@if (count($page->children))
                <span class="caret"></span>
            @endif--}}
        </a>
        {{--@if (count($page->children))
            <ul class="dropdown-menu">
                @inclide('partials.nav', ['pages'=>$page->children])
            </ul>
        @endif--}}
    </li>
@endforeach
