@php
    $categories = App\Models\Category::all();
    $banner = App\Models\Banner::first();
    $websettings = App\Models\WebSettings::first();
@endphp
<header>
    <!-- Mobile Menu Start -->
    <div class="mobile-menu-area navbar-fixed-top hidden-sm hidden-md hidden-lg">
        <nav class="mobile-menu" id="mobile-menu">
            <div class="sidebar-nav">
                <ul class="nav side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn mobile-menu-btn" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    @foreach ($categories as $category)
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle category03"
                                data-toggle="dropdown">{{ $category->name }}
                                <span class="pe-7s-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu menu-slide">
                                @foreach ($category->subCategories as $subCategory)
                                    <li><a
                                            href="{{ route('subCategoryPages', $subCategory->id) }}">{{ $subCategory->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endforeach
                    <li>
                        <a href="#">Contact<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="contact-style-one.html">Contact style one</a> </li>
                            <li><a href="contact-style-two.html">Contact style two</a></li>
                        </ul>
                    </li>
                    <!-- social icon -->
                    <li>
                        <div class="social">
                            <ul>
                                <li><a href="{{ $webSettings->social_link_2 }}" class="facebook"><i
                                            class="fa  fa-facebook"></i> </a></li>
                                <li><a href="{{ $webSettings->social_link_1 }}" class="twitter"><i
                                            class="fa  fa-twitter"></i></a></li>
                                <li><a href="{{ $webSettings->social_link_3 }}" class="google"><i
                                            class="fa  fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="top_header_icon">
                <span class="top_header_icon_wrap">
                    <a target="_blank" href="{{ $webSettings->social_link_1 }}" title="Twitter"><i
                            class="fa fa-twitter"></i></a>
                </span>
                <span class="top_header_icon_wrap">
                    <a target="_blank" href="{{ $webSettings->social_link_2 }}" title="Facebook"><i
                            class="fa fa-facebook"></i></a>
                </span>
                <span class="top_header_icon_wrap">
                    <a target="_blank" href="{{ $webSettings->social_link_3 }}" title="Google"><i
                            class="fa fa-google-plus"></i></a>
                </span>
                <span class="top_header_icon_wrap">
                    <a target="_blank" href="{{ $webSettings->social_link_4 }}" title="Vimeo"><i
                            class="fa fa-vimeo"></i></a>
                </span>
                <span class="top_header_icon_wrap">
                    <a target="_blank" href="{{ $webSettings->social_link_5 }}" title="Pintereset"><i
                            class="fa fa-pinterest-p"></i></a>
                </span>
            </div>
            <div id="showLeft" class="nav-icon">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- Mobile Menu End -->
    <!-- top header -->
    <div class="top_header hidden-xs">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4 col-md-3">
                    <div class="top_header_menu_wrap">
                        <ul class="top-header-menu">

                            <li><a href="contact-style-two.html">CONTACT</a></li>
                            @if (Route::has('login'))

                                @auth
                                    <li><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a></li>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                @else
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">LOGIN</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="login-inner">
                                                    <form method="POST" action="{{ route('login') }}">
                                                        @csrf
                                                        <input type="text" class="form-control" id="name_email"
                                                            name="email" placeholder="username or emaile">
                                                        <hr>
                                                        <input type="password" class="form-control" id="pass"
                                                            name="password" placeholder="*******">
                                                        <label class="checkbox-inline">
                                                            <input type="checkbox" value="">Remember me</label>
                                                        <button type="submit"
                                                            class="btn btn-lr btn-active">LOGIN</button>

                                                        {{-- <div class="social_icon">
                                                            <div class="social_icon_box social_icon_box_1">
                                                                <div class="icon facebook-icon"></div>
                                                                <span class="social_info">Login with facebook</span>
                                                            </div>
                                                        </div>
                                                        <div class="social_icon">
                                                            <div class="social_icon_box social_icon_box_2">
                                                                <div class="icon twitter-icon"></div>
                                                                <span class="social_info">Login with twitter</span>
                                                            </div>
                                                        </div> --}}
                                                    </form>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>

                                    @if (Route::has('register'))
                                        <li><a href="{{ route('login') }}">REGISTER</a></li>
                                    @endif

                                @endauth

                            @endif



                        </ul>
                    </div>
                </div>
                <!--breaking news-->
                <div class="col-sm-8 col-md-7">
                    <div class="newsticker-inner">
                        <ul class="newsticker">
                            <li><span class="color-1">Fashion</span><a href="#">Etiam imperdiet volutpat
                                    libero eu tristique.imperdiet volutpat libero eu tristique.</a></li>
                            <li><span class="color-2">International</span><a href="#">Curabitur porttitor
                                    ante eget hendrerit adipiscing.</a></li>
                            <li><span class="color-3">Health</span><a href="#">Praesent ornare nisl lorem,
                                    ut condimentum lectus gravida ut.</a></li>
                            <li><span class="color-4">technology</span><a href="#">Nunc ultrices tortor eu
                                    massa placerat posuere.</a></li>
                            <li><span class="color-1">Travel</span><a href="#">Etiam imperdiet volutpat
                                    libero eu tristique.imperdiet volutpat libero eu tristique.</a></li>
                        </ul>
                        <div class="next-prev-inner">
                            <a href="#" id="prev-button"><i class='pe-7s-angle-left'></i></a>
                            <a href="#" id="next-button"><i class='pe-7s-angle-right'></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-2">
                    <div class="top_header_icon">
                        <span class="top_header_icon_wrap">
                            <a target="_blank" href="{{ $webSettings->social_link_1 }}" title="Twitter"><i
                                    class="fa fa-twitter"></i></a>
                        </span>
                        <span class="top_header_icon_wrap">
                            <a target="_blank" href="{{ $webSettings->social_link_2 }}" title="Facebook"><i
                                    class="fa fa-facebook"></i></a>
                        </span>
                        <span class="top_header_icon_wrap">
                            <a target="_blank" href="{{ $webSettings->social_link_3 }}" title="Google"><i
                                    class="fa fa-google-plus"></i></a>
                        </span>
                        <span class="top_header_icon_wrap">
                            <a target="_blank" href="{{ $webSettings->social_link_4 }}" title="Vimeo"><i
                                    class="fa fa-vimeo"></i></a>
                        </span>
                        <span class="top_header_icon_wrap">
                            <a target="_blank" href="{{ $webSettings->social_link_5 }}" title="Pintereset"><i
                                    class="fa fa-pinterest-p"></i></a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="top_banner_wrap">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-md-3 col-sm-3">
                    <div class="header-logo">
                        <!-- logo -->
                        <a href="{{ url('/') }}">
                            <img class="td-retina-data img-responsive" src="{{ asset($webSettings->logo) }}"
                                alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xs-7 col-md-7 col-sm-7 hidden-xs">
                    <div class="header-banner">
                        <a href="{{ @$banner->home_banner_link1 }}"><img class="td-retina img-responsive"
                                src="{{ asset(@$banner->homebanner1) }}" width="700px" style="max-height:100px"
                                alt=""></a>
                    </div>
                </div>
                <div class="col-xs-82 col-md-2 col-sm-2 ">
                    <div class="datetime" style="position: absolute;margin-top:90px;">
                        <span id="english-date-today"></span><br>
                        <span id="date-today"></span> বঙ্গাব্দ
                    </div>
                    <style>
                        @media (max-width: 600px) {
                            .datetime {
                                /* position: relative;
                                margin-top:50px; */
                                display: none;
                            }
                        }
                    </style>
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            var options = {
                                weekday: 'long',
                                year: 'numeric',
                                month: 'long',
                                day: 'numeric'
                            };
                            var date = new Date();
                            var englishDate = date.toLocaleDateString('bn-BD', options);
                            document.getElementById('english-date-today').innerText = englishDate;
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
    <!-- navber -->
    <div class="container-fluid hidden-xs">
        <nav class="navbar">
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{{ url('/') }}" class="category01">হোম</a></li>
                    @foreach ($categories as $category)
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle category03"
                                data-toggle="dropdown">{{ $category->name }}
                                <span class="pe-7s-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu menu-slide">
                                @foreach ($category->subCategories as $subCategory)
                                    <li><a
                                            href="{{ route('subCategoryPages', $subCategory->id) }}">{{ $subCategory->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endforeach

                    <li><a href="contact-style-one.html" class="category08">যোগাযোগ</a></li>
                </ul>
            </div>
            <!-- navbar-collapse -->
        </nav>
    </div>
</header>
