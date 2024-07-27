@php
    $webSettings = App\Models\WebSettings::first();
@endphp
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="{{url('/')}}" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>{{ $webSettings->title }}</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{ asset('backend') }}/img/user.jpg" alt=""
                    style="width: 40px; height: 40px;">
                <div
                    class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                </div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{ auth()->user()->name }}</h6>
                <span>{{ auth()->user()->type }}</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{ route('admin.home') }}"
                class="nav-item nav-link {{ Request::routeIs('admin.home') ? 'active' : '' }}"><i
                    class="fa fa-tachometer-alt me-2"></i>Dashboard</a>

            <div class="nav-item dropdown {{ Request::routeIs('category.index') ? 'active' : '' }} ">
                <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown"><i
                        class="far fa-plus-square me-2"></i>Category</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ route('category.index') }}" class="dropdown-item ">Parent Category</a>
                    <a href="{{ route('sub-category.index') }}" class="dropdown-item ">Sub Category</a>
                </div>
            </div>
            <a href="{{ route('post.index') }}"
                class="nav-item nav-link {{ Request::routeIs('post.index') ? 'active' : '' }}"><i
                    class="fa fa-chart-bar me-2"></i>Posts</a>
            <a href="{{ route('video.index') }}"
                class="nav-item nav-link {{ Request::routeIs('video.index') ? 'active' : '' }}"><i
                    class="fa fa-chart-bar me-2"></i>Video</a>
            <a href="{{ route('page.index') }}"
                class="nav-item nav-link {{ Request::routeIs('page.index') ? 'active' : '' }}"><i
                    class="fa fa-chart-bar me-2"></i>Page</a>
            <a href="{{ route('section.index') }}"
                class="nav-item nav-link {{ Request::routeIs('section.index') ? 'active' : '' }}"><i
                    class="fa fa-chart-bar me-2"></i>Section</a>
            <a href="{{ route('web-settings.index') }}"
                class="nav-item nav-link {{ Request::routeIs('web-settings.index') ? 'active' : '' }}"><i
                    class="fa fa-chart-bar me-2"></i>Web Settings</a>
            <a href="{{ route('banner.index') }}"
                class="nav-item nav-link {{ Request::routeIs('banner.index') ? 'active' : '' }}"><i
                    class="fa fa-chart-bar me-2"></i>Banner</a>
            <div class="nav-item dropdown">
                <a href="{{ route('page.index') }}" class="nav-link dropdown-toggle " data-bs-toggle="dropdown"><i
                        class="far fa-file-alt me-2"></i>Page</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="blank.html" class="dropdown-item ">Blank Page</a>
                </div>
            </div>
        </div>
    </nav>
</div>
