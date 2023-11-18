<!-- SIDE MENU BAR -->
<style>
       .scrollable-menu {
        height: 500px; /* Set a fixed height */
        overflow-y: auto; /* Add vertical scrollbar when content overflows */
        overflow-x: auto;
        width:245px; /* Add vertical scrollbar when content overflows */
    }
</style>
<aside class="app-sidebar" >
    <div class="app-sidebar__logo">
        <a class="header-brand" href="{{ url('/') }}">
            <img src="{{ URL::asset('img/users/logo.png') }}" class="header-brand-img desktop-lgo" alt="Admintro logo"
                style="width:80px;margin-left:-50px">
            <img src="{{ URL::asset('img/users/logo.png') }}" class="header-brand-img mobile-logo" alt="Admintro logo">
        </a>
    </div>
    <div class="scrollable-menu">
    <ul class="side-menu app-sidebar3">
        <li class="side-item side-item-category mt-4 mb-3">{{ __('AI Panel') }}</li>
        {{-- Dashboard start --}}
        <li class="slide">
            <a class="side-menu__item" href="{{ route('dashboard') }}">
                <span class="side-menu__icon lead-3 fa-solid fa-chart-tree-map"></span>
                <span class="side-menu__label">Dashboard</span></a>
        </li>

        <li class="slide">
            <a class="side-menu__item" href="{{ route('lesson') }}">
                <span class="side-menu__icon lead-3 fs-18 fa-solid fa-arrows-to-circle "></span>
                <span class="side-menu__label">Add Lesson</span></a>
        </li>

        <li class="slide">
            <a class="side-menu__item" href="{{ route('detail') }}">
                <span class="side-menu__icon lead-3 fs-18 fa-solid fa-arrows-to-circle "></span>
                <span class="side-menu__label">Add Detail Lesson</span></a>
        </li>
        <li class="slide">
            <a class="side-menu__item" href="{{ route('Guaideness') }}">
                <span class="side-menu__icon lead-3 fs-18 fa-solid fa-arrows-to-circle "></span>
                <span class="side-menu__label">Add Guaideness</span></a>
        </li>
        <li class="slide">
            <a class="side-menu__item" href="{{ route('practic') }}">
                <span class="side-menu__icon lead-3 fs-18 fa-solid fa-arrows-to-circle "></span>
                <span class="side-menu__label">Add practics</span></a>
        </li>
        <li class="slide">
            <a class="side-menu__item" href="{{ route('about') }}">
                <span class="side-menu__icon lead-3 fs-18 fa-solid fa-arrows-to-circle "></span>
                <span class="side-menu__label">Add About</span></a>
        </li>
        <li class="slide">
            <a class="side-menu__item" href="{{ route('Testing') }}">
                <span class="side-menu__icon lead-3 fs-18 fa-solid fa-arrows-to-circle "></span>
                <span class="side-menu__label">Add Testing </span></a>
        </li>
        <li class="slide">
            <a class="side-menu__item" href="{{ route('Answer') }}">
                <span class="side-menu__icon lead-3 fs-18 fa-solid fa-arrows-to-circle "></span>
                <span class="side-menu__label">Testing with Answer</span></a>
        </li>
        <li class="slide">
            <a class="side-menu__item" href="{{ route('blogpage') }}">
                <span class="side-menu__icon lead-3 fs-18 fa-solid fa-arrows-to-circle "></span>
                <span class="side-menu__label">Add Blog Page</span></a>
        </li>
        <li class="slide">
            <a class="side-menu__item" href="{{ route('blogpost') }}">
                <span class="side-menu__icon lead-3 fs-18 fa-solid fa-arrows-to-circle "></span>
                <span class="side-menu__label">Add Post</span></a>
        </li>
        <li class="slide">
            <a class="side-menu__item" href="{{ route('privecy') }}">
                <span class="side-menu__icon lead-3 fs-18 fa-solid fa-arrows-to-circle "></span>
                <span class="side-menu__label">Add privecy</span></a>
        </li>
        <li class="slide">
            <a class="side-menu__item" href="{{ route('condition') }}">
                <span class="side-menu__icon lead-3 fs-18 fa-solid fa-arrows-to-circle "></span>
                <span class="side-menu__label">Add term_condition</span></a>
        </li>






        <li class="slide">
            <a class="side-menu__item" href="{{ route('user.index') }}">
                <span class="side-menu__icon lead-3 fs-18 fa-solid fa-arrows-to-circle "></span>
                <span class="side-menu__label">Users </span></a>
        </li>


















    </ul>
    </div>
</aside>
<!-- END SIDE MENU BAR -->
