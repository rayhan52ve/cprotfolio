@extends('frontend.layout')
@section('content')
    <div class="container-fluid">
        <marquee style="white-space: nowrap;margin-top:20px;">
                {{-- {!! $webSettings->breaking_news !!} --}}
                @foreach ($breaking->take(2) as $index => $breaking)
                    <h3 class="mt-1" style="display: inline;">*****
                        <a href="{{ route('postDetails', $breaking->id) }}">{{ $breaking->title }}</a>
                        ।*****
                    </h3>
                @endforeach
        </marquee>

    </div>

    <div class="container-fluid" style="margin-top: 40px;">
        <div class="row">
            <div class="col-md-8 col-sm-8">
                <!-- left content inner -->
                <section class="recent_news_inner">
                    <h3 class="category-headding ">সর্বশেষ সংবাদ</h3>
                    <div class="headding-border"></div>
                    <div class="row">
                        <div id="content-slide" class="owl-carousel">
                            @foreach ($recent_news->take(5) as $recent_new)
                                <div class="item home2-post">
                                    <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                        <!-- image -->
                                        <div class="post-thumb">
                                            <a href="{{ route('postDetails', $recent_new->id) }}">
                                                <img class="img-responsive" src="{{ asset($recent_new->image) }}"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="post-info meta-info-rn">
                                            {{-- <div class="slide">
                                                <a target="_blank" href="#" class="post-badge btn_six">T</a>
                                            </div> --}}
                                        </div>
                                    </div>
                                    <h3><a href="{{ route('postDetails', $recent_new->id) }}">{{ $recent_new->title }}</a>
                                    </h3>
                                    <div class="post-title-author-details">
                                        <div class="date">
                                            <ul>
                                                <li> <a title=""
                                                        href="#"><span>{{ $recent_new->userCreator->name }}</span></a>
                                                    --
                                                </li>
                                                <li><a title=""
                                                        href="#">{{ $recent_new->created_at->format('M j, Y') }}</a>
                                                    --</li>
                                                <li><a title=""
                                                        href="#"><span>{{ $recent_new->category->name ?? null }}</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <p>
                                            {{ strlen(strip_tags($recent_new->description)) > 50 ? substr(strip_tags($recent_new->description), 0, 50) . '...' : strip_tags($recent_new->description) }}
                                            @if (strlen(strip_tags($recent_new->description)) > 50)
                                                <a href="{{ route('postDetails', $recent_new->id) }}">আরও পড়ুন</a>
                                            @endif

                                        </p>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="row rn_block">
                        @foreach ($recent_news->skip(5) as $recent_new)
                            <div class="col-md-4 col-sm-4 padd">
                                <div class="home2-post">
                                    <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                        <!-- image -->
                                        <div class="post-thumb">
                                            <a href="{{ route('postDetails', $recent_new->id) }}">
                                                <img class="img-responsive" src="{{ asset($recent_new->image) }}"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="post-info meta-info-rn">
                                            {{-- <div class="slide">
                                                <a target="_blank" href="#" class="post-badge btn_eight">H</a>
                                            </div> --}}
                                        </div>
                                    </div>
                                    <div class="post-title-author-details">
                                        <h4><a
                                                href="{{ route('postDetails', $recent_new->id) }}">{{ $recent_new->title }}</a>
                                        </h4>
                                        <div class="date">
                                            <ul>
                                                <li> <a title=""
                                                        href="#"><span>{{ $recent_new->userCreator->name }}</span></a>
                                                    --
                                                </li>
                                                <li><a title=""
                                                        href="#">{{ $recent_new->created_at->format('M j, Y') }}</a>
                                                </li>
                                                <li><a title=""
                                                        href="#"><span>{{ $recent_new->category->name ?? null }}</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>
                <!-- Politics Area
                                                                                                                                                                ============================================ -->
                <section class="politics_wrapper">
                    @foreach ($categories as $category)
                        <h3 class="category-headding">{{ $category->name }}</h3>
                        <div class="headding-border"></div>
                        <div class="row">
                            <!-- item -->
                            <div class="item">
                                <div class="row">
                                    <!-- main post -->
                                    <div class="col-sm-6 col-md-6">
                                        @foreach ($category->posts->take(1) as $post)
                                            <div class="home2-post">
                                                <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                                    <!-- post image -->
                                                    <div class="post-thumb">
                                                        <a href="{{ route('postDetails', $post->id) }}">
                                                            <img src="{{ asset($post->image) }}" class="img-responsive"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                    <!-- post title -->
                                                    <h3><a
                                                            href="{{ route('postDetails', $post->id) }}">{{ $post->title }}</a>
                                                    </h3>
                                                </div>
                                                <div class="post-title-author-details">
                                                    <div class="date">
                                                        <ul>
                                                            <li> <a
                                                                    href="#"><span>{{ $post->userCreator->name }}</span></a>
                                                                --</li>
                                                            <li><a
                                                                    href="#">{{ $post->created_at->format('M j, Y') }}</a>
                                                                --</li>
                                                            <li><a
                                                                    href="#"><span>{{ $post->category->name ?? null }}</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <p>{{ strlen(strip_tags($post->description)) > 50 ? substr(strip_tags($post->description), 0, 150) . '...' : strip_tags($post->description) }}
                                                        @if (strlen(strip_tags($post->description)) > 50)
                                                            <a href="{{ route('postDetails', $post->id) }}">Read
                                                                More</a>
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <!-- right side post -->
                                    <div class="col-sm-6 col-md-6">
                                        <div class="row rn_block">
                                            @foreach ($category->posts->skip(1)->take(4) as $post)
                                                <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                                    <div class="home2-post">
                                                        <!-- post image -->
                                                        <div class="post-thumb wow fadeIn" data-wow-duration="1s"
                                                            data-wow-delay="0.2s">
                                                            <a href="{{ route('postDetails', $post->id) }}">
                                                                <img src="{{ asset($post->image) }}" class="img-responsive"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                        <div class="post-title-author-details">
                                                            <!-- post image -->
                                                            <h5><a
                                                                    href="{{ route('postDetails', $post->id) }}">{{ $post->title }}</a>
                                                            </h5>
                                                            <div class="date">
                                                                <ul>
                                                                    <li><a
                                                                            href="#"><span>{{ $post->userCreator->name }}</span></a>
                                                                        --</li>
                                                                    <li><a
                                                                            href="#">{{ $post->created_at->format('M j, Y') }}</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                        </div>
                    @endforeach

                    <!-- /.row -->
                </section>
                <!-- /.Politics -->
                {{-- <div class="ads">
                    <a href="#"><img src="{{ asset('frontend') }}/images/top-bannner2.jpg"
                            class="img-responsive center-block" alt=""></a>
                </div> --}}
                <div class="banner">
                    <a href="{{ $banner->home_banner_link2 }}">
                        <img src="{{ asset($banner->homebanner2) }}" width="800px" style="max-height:150px"
                            class="img-responsive center-block" alt=""></a>
                </div>


            </div>
            <!-- /.left content inner -->
            <div class="col-md-4 col-sm-4 left-padding">
                <!-- right content wrapper -->
                <div class="input-group search-area">
                    <!-- search area -->
                    <input type="text" class="form-control" placeholder="Search articles here ..." name="q">
                    <div class="input-group-btn">
                        <button class="btn btn-search" type="submit"><i class="fa fa-search"
                                aria-hidden="true"></i></button>
                    </div>
                </div>
                <!-- /.search area -->
                <!-- social icon -->
                <h3 class="category-headding ">সোশ্যাল পিক্সেল</h3>
                <div class="headding-border"></div>
                <div class="social">
                    <ul>
                        <li><a href="{{ $webSettings->social_link_2 }}" class="facebook"><i
                                    class="fa  fa-facebook"></i><span>3987</span>
                            </a>
                        </li>
                        <li><a href="{{ $webSettings->social_link_1 }}" class="twitter"><i
                                    class="fa  fa-twitter"></i><span>3987</span></a>
                        </li>
                        <li><a href="{{ $webSettings->social_link_3 }}" class="google"><i
                                    class="fa  fa-google-plus"></i><span>3987</span></a>
                        </li>
                        <li><a href="{{ $webSettings->social_link_4 }}" style="background-color: skyblue"><i
                                    class="fa fa-vimeo"></i><span>3987</span> </a>
                        </li>
                        <li><a href="{{ $webSettings->social_link_5 }}" style="background-color: rgb(199, 74, 74)"><i
                                    class="fa fa-pinterest"></i><span>3987</span> </a>
                        </li>
                    </ul>
                </div>
                <!-- /.social icon -->
                <div class="banner-add">
                    <!-- add -->
                    {{-- <span class="add-title">- Advertisement -</span> --}}
                    <a href="{{ @$banner->banner_link4 }}"><img src="{{ asset($banner->banner4) }}"
                            class="img-responsive center-block" width="300px" style="height: 300px" alt=""></a>
                </div>
                <div class="tab-inner">
                    <ul class="tabs">
                        <li>সর্বশেষ সংবাদ</li>
                    </ul>
                    <hr>
                    <!-- tabs -->
                    <div class="tab_content">
                        <div class="tab-item-inner">
                            @foreach ($recent_news as $recent_new)
                                <div class="box-item wow fadeIn" data-wow-duration="1s">
                                    <div class="img-thumb">
                                        <a href="{{ route('postDetails', $recent_new->id) }}" rel="bookmark"><img
                                                class="entry-thumb" src="{{ asset($recent_new->image) }}" alt=""
                                                height="80" width="90"></a>
                                    </div>
                                    <div class="item-details">
                                        <h3 class="td-module-title"><a
                                                href="{{ route('postDetails', $recent_new->id) }}">{{ $recent_new->title }}</a>
                                        </h3>
                                        <div class="post-editor-date">
                                            <!-- post date -->
                                            <div class="post-date">
                                                <i class="pe-7s-clock"></i>
                                                {{ $recent_new->created_at->format('M j, Y') }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- / tab_content -->
                    </div>
                    <!-- / tab -->
                </div>
                <!-- side content end -->
            </div>
            <!-- row end -->
        </div>
        <!-- container-fluid end -->

        <!-- second content -->
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="row">
                            @foreach ($categories as $category)
                                <div class="col-sm-4 col-md-4">
                                    <div class="buisness">
                                        <h3 class="category-headding ">{{ $category->name }}</h3>
                                        <div class="headding-border bg-color-5"></div>
                                        @foreach ($category->posts->take(1) as $post)
                                            <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                                <!-- post title -->
                                                <h3><a
                                                        href="{{ route('postDetails', $post->id) }}">{{ $post->title }}</a>
                                                </h3>
                                                <!-- post image -->
                                                <div class="post-thumb">
                                                    <a href="{{ route('postDetails', $post->id) }}">
                                                        <img src="{{ asset($post->image) }}" class="img-responsive"
                                                            alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="post-title-author-details">
                                                <div class="post-editor-date">
                                                    <!-- post date -->
                                                    <div class="post-date">
                                                        <i class="pe-7s-clock"></i>
                                                        {{ $post->created_at->format('M j, Y') }}
                                                    </div>
                                                    <!-- post comment -->
                                                    {{-- <div class="post-author-comment"><i class="pe-7s-comment"></i> 13
                                            </div> --}}
                                                </div>
                                                <p>{{ strlen(strip_tags($post->description)) > 50 ? substr(strip_tags($post->description), 0, 150) . '...' : strip_tags($post->description) }}
                                                    @if (strlen(strip_tags($post->description)) > 50)
                                                        <a href="{{ route('postDetails', $post->id) }}">আরও পড়ুন</a>
                                                    @endif
                                                </p>
                                            </div>
                                        @endforeach
                                        @foreach ($category->posts->take(10) as $post)
                                            <div class="box-item wow fadeIn" data-wow-duration="1s"
                                                data-wow-delay="0.2s">
                                                <div class="img-thumb">
                                                    <a href="{{ route('postDetails', $post->id) }}" rel="bookmark"><img
                                                            class="entry-thumb" src="{{ asset($post->image) }}"
                                                            alt="" height="70" width="100"></a>
                                                </div>
                                                <div class="item-details">
                                                    <h3 class="td-module-title"><a
                                                            href="{{ route('postDetails', $post->id) }}">{{ $post->title }}</a>
                                                    </h3>
                                                    <div class="post-editor-date">
                                                        <!-- post date -->
                                                        <div class="post-date">
                                                            <i class="pe-7s-clock"></i>
                                                            {{ $post->created_at->format('M j, Y') }}
                                                        </div>
                                                        <!-- post comment -->
                                                        {{-- <div class="post-author-comment"><i class="pe-7s-comment"></i>
                                                    13 </div> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>


                    </div>
                </div>
            </div>
        </section>
        <!-- second content end -->
        <!-- Video News Area
                                                                                                                                                    ============================================ -->
        <section class="video-post-inner">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="category-headding ">ভিডিও পোস্ট</h3>
                        <div class="headding-border"></div>
                    </div>
                    @foreach ($videos as $video)
                        <div class="col-sm-4">
                            <div class="post-style1">
                                <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                    <iframe width="100%" height="350"
                                        src="https://www.youtube.com/embed/{{ $video->video }}">
                                    </iframe>
                                </div>
                                <!-- post title -->
                                <h3><a href="#">{{ $video->title }}</a></h3>
                                <div class="post-title-author-details">
                                    <div class="date">
                                        <ul>

                                            <li> <span class="text-danger">{{ $video->userCreator->name }}</span>--</li>
                                            <li>{{ $video->created_at->format('M j, Y') }}</li>
                                            {{-- <li><a title="" href="#"><span>275 Comments</span></a></li> --}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </section>
        <!-- Article Post
                                                                                                                                                    ============================================ -->
        <section class="article-post-inner">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="articale-list">
                            <h3 class="category-headding ">সর্বশেষ সংবাদ</h3>
                            <div class="headding-border"></div>
                            <!--Post list-->
                            @foreach ($recent_news as $recent_new)
                                <div class="post-style2 wow fadeIn" data-wow-duration="1s">
                                    <a href="{{ route('postDetails', $recent_new->id) }}"><img
                                            src="{{ asset($recent_new->image) }}" width="300px" alt=""></a>
                                    <div class="post-style2-detail">
                                        <h3><a href="{{ route('postDetails', $recent_new->id) }}" title="">
                                                {{ $recent_new->title }}</a></h3>
                                        <div class="date">
                                            <ul>
                                                <li> <a title=""
                                                        href="#"><span>{{ $recent_new->userCreator->name }}</span></a>
                                                    --</li>
                                                <li><a title=""
                                                        href="#">{{ $recent_new->created_at->format('M j, Y') }}</a>
                                                    --
                                                </li>
                                                <li><a title=""
                                                        href="#"><span>{{ $recent_new->category->name ?? null }}</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <p>{{ strlen(strip_tags($recent_new->description)) > 50 ? substr(strip_tags($recent_new->description), 0, 50) . '...' : strip_tags($recent_new->description) }}
                                            @if (strlen(strip_tags($recent_new->description)) > 50)
                                                <a href="{{ route('postDetails', $recent_new->id) }}">আরও পড়ুন</a>
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="col-sm-4 left-padding">
                        <!-- slider widget -->
                        <div class="widget-slider-inner">
                            <h3 class="category-headding ">Slider Widget</h3>
                            <div class="headding-border"></div>
                            <div id="widget-slider" class="owl-carousel owl-theme">
                                <!-- widget item -->
                                <div class="item">
                                    <a href="#"><img src="{{ asset('frontend') }}/images/slider-widget-1.jpg"
                                            alt=""></a>
                                    <h4><a href="#">For good results must be make good plan</a></h4>
                                    <div class="date">
                                        <ul>
                                            <li><a title="" href="#"><span>Jone Kilna</span></a> --</li>
                                            <li><a title="" href="#">Oct 6, 2016</a></li>
                                        </ul>
                                    </div>
                                    <p>Dhaka: Dhaka Metropolitan Sessions a Judge Court on Wednesday issued warrants for the
                                        arrest of 29 BNP leaders, including some ina senior leaders...</p>
                                </div>
                                <!-- widget item -->
                                <div class="item">
                                    <a href="#"><img src="{{ asset('frontend') }}/images/slider-widget-2.jpg"
                                            alt=""></a>
                                    <h4><a href="#">Dog invason sparks chaos at IPL match</a></h4>
                                    <div class="date">
                                        <ul>
                                            <li><a title="" href="#"><span>Jone Kilna</span></a> --</li>
                                            <li><a title="" href="#">Oct 6, 2016</a></li>
                                        </ul>
                                    </div>
                                    <p>Dhaka: Dhaka Metropolitan Sessions a Judge Court on Wednesday issued warrants for the
                                        arrest of 29 BNP leaders, including some ina senior leaders ...</p>
                                </div>
                                <!-- widget item -->
                                <div class="item">
                                    <a href="#"><img src="{{ asset('frontend') }}/images/slider-widget-3.jpg"
                                            alt=""></a>
                                    <h4><a href="#">For good results must be make good plan</a></h4>
                                    <div class="date">
                                        <ul>
                                            <li><a title="" href="#"><span>Jone Kilna</span></a> --</li>
                                            <li><a title="" href="#">Oct 6, 2016</a></li>
                                        </ul>
                                    </div>
                                    <p>Dhaka: Dhaka Metropolitan Sessions a Judge Court on Wednesday issued warrants for the
                                        arrest of 29 BNP leaders, including some ina senior leaders ...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- pagination -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="banner">
                        <a href="{{ $banner->home_banner_link3 }}"></a>
                        <img src="{{ asset($banner->homebanner3) }}" width="800px" style="max-height:150px"
                            class="img-responsive center-block" alt="">
                    </div>
                </div>
            </div>
        </div>
    @endsection
