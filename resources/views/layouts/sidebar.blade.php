<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        {{-- <img class="navbar-brand-full app-header-logo" src="{{ asset('storage/images/bwenge.jpg') }}" width="50"
        
             alt="Infyom Logo"> --}}

             <img class="navbar-brand-full app-header-logo" src="{{ asset('storage/images/bwenge.jpg') }}" width="200" alt="Infyom Logo">

        <a href="{{ url('/') }}"></a>
    </div>

    <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{ url('/') }}" class="small-sidebar-text">
            <img class="navbar-brand-full" src="{{ asset('storage/images/bwenge.jpg') }}" width="200px" alt=""/>
        </a>
    </div>
    <ul class="sidebar-menu">
        @include('layouts.menu')
    </ul>
</aside>
