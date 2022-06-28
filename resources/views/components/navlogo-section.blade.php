<a {{ $attributes }} href="{{url('/')}}">
    <ul class="left-nav-ul">
        <li><x-land-logo class="land-logo-nav" /></li>
        <li>
            @if (!Str::contains(Request::path(), 'dashboard'))
                <x-navlogo/>
            @endif
        </li>
    </ul>
    </a>
