<!-- TOP MENU BAR -->
<div class="app-header header">
    <div class="container-fluid">
        <div class="d-flex">
            <a class="header-brand" href="{{ url('/') }}">
                <img src="{{URL::asset('img/brand/logo.png')}}" class="header-brand-img desktop-lgo" alt="Polly logo" style="width:80px;margin-left:-50px">
                <img src="{{URL::asset('img/brand/favicon.png')}}" class="header-brand-img mobile-logo" alt="Polly logo">
            </a>
            <div class="app-sidebar__toggle nav-link icon" data-toggle="sidebar">
                <a class="open-toggle" href="{{url('#')}}">
                    <span class="fa fa-align-left header-icon"></span>
                </a>
            </div>
            <!-- SEARCH BAR -->
            <!-- <div id="search-bar">
                <div>
                    <a class="nav-link icon">
                        <form id="search-field" action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="search" name='keyword'>
                        </form>
                    </a>
                </div>
            </div> -->
            <!-- END SEARCH BAR -->
            <!-- MENU BAR -->
            <div class="d-flex order-lg-2 ml-auto">

                <div class="dropdown items-center flex">
                    <a href="#" class="nav-link icon btn-theme-toggle">
                        <span class="header-icon fa-sharp fa-solid"></span>
                    </a>
                </div>
                <div class="dropdown header-expand">
                    <a class="nav-link icon" id="fullscreen-button">
                        <span class="header-icon fa-solid fa-expand" id="fullscreen-icon"></span>
                    </a>
                </div>

                <div class="dropdown profile-dropdown">
                    <a href="#" class="nav-link" data-bs-toggle="dropdown">
                        <span class="float-right">
                            <img src="{{ URL::asset('img/users/avatar.png') }}"
                                alt="img" class="avatar avatar-md">
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow animated">
                        <div class="text-center pt-2">
                            <span class="text-center user fs-12 pb-0 font-weight-bold">Mohsin Ali </span><br>
                            <span class="text-center fs-12 text-muted">---</span>
                            <div class="dropdown-divider mt-3"></div>


                        </div>


                        <a class="dropdown-item d-flex" href="">
                            <span class="profile-icon fa-solid fa-id-badge"></span>
                            <span class="fs-12">{{ __('My Profile') }}</span></a>
                        </a>
                        <a class="dropdown-item d-flex" href="">
                            <span class="profile-icon fa-solid fa-lock-hashtag"></span>
                            <div class="fs-12">{{ __('Change Password') }}</div>
                        </a>
                        <form action="{{route('logout')}}" method="post">
                            @csrf
                        <button class="dropdown-item d-flex" href="" type="submit">
                            <span class="profile-icon fa-solid fa-right-from-bracket"></span>
                            <div class="fs-12">Logout</div>
</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- END MENU BAR -->
        </div>
    </div>
</div>
<!-- END TOP MENU BAR -->
<style>
    .profile-dropdown .dropdown-menu {
    overflow-y: auto;
    height: auto;
}
</style>
