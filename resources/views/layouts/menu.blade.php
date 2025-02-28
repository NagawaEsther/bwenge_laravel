

<!-- Dashboard -->
{{-- <li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="/home">
        <i class="fas fa-building"></i><span>Dashboard</span>
    </a>
</li> --}}



<!-- adverts -->
<li class="side-menus {{ Request::is('adverts*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('adverts.index') }}">
        <i class="fas fa-plus-circle"></i><span>Adverts</span>
    </a>
</li>

<!-- subscribers -->
<li class="side-menus {{ Request::is('subscribers*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('subscribers.index') }}">
        <i class="fas fa-users"></i><span>Subscribers</span>
    </a>
</li>

<!-- News -->
<li class="side-menus {{ Request::is('news*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('news.index') }}">
        <i class="fas fa-newspaper"></i><span>News</span>
    </a>
</li>
