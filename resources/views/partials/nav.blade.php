@foreach ($pages->sortBy('weight') as $page)
    <li class="nav-item">
        <a href="{{$page->url}}" class="nav-link {{ Request::is($page->url) ? 'active' : '' }}">
            {{$page->title}}
        </a>
    </li>
@endforeach
