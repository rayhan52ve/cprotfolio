@extends('frontend.layout')
@section('content')
    <div class="container" style="width: 90%">
        <div class="row">
            <div class="col-md-3">
                @php
                    $sl = 1;
                @endphp

                @foreach ($posts as $post)
                    @if ($sl % 3 === 2)
                        <div class="post-style1">
                            <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                <!-- post image -->
                                <a href="{{ route('postDetails', $post->id) }}"><img src="{{ asset($post->image) }}"
                                        width="100%" class="img-responsive" alt=""></a>
                            </div>
                            <!-- post title -->
                            <h4><a href="{{ route('postDetails', $post->id) }}">{{ $post->title }}</a></h4>
                            <div class="post-title-author-details">
                                <div class="date">
                                    <ul>
                                        <li><a title=""
                                                href="#"><span>{{ $post->userCreator->name }}</span></a>
                                            --</li>
                                        <li><a title="" href="#">{{ $post->created_at->format('M j, Y') }}</a>
                                            --</li>
                                        <li><a title="" href="#"><span>275 Comments</span></a></li>
                                    </ul>
                                </div>
                                {{ strlen(strip_tags($post->description)) > 50 ? substr(strip_tags($post->description), 0, 50) . '...' : strip_tags($post->description) }}
                                @if (strlen(strip_tags($post->description)) > 50)
                                    <a href="{{ route('postDetails', $post->id) }}">আরও পড়ুন</a>
                                @endif
                            </div>
                        </div>
                    @endif

                    @php
                        $sl++;
                    @endphp
                @endforeach


            </div>
            <div class="col-md-3">
                @php
                    $sl = 1;
                @endphp

                @foreach ($posts as $post)
                    @if ($sl % 3 === 1)
                        <div class="post-style1">
                            <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                <!-- post image -->
                                <a href="{{ route('postDetails', $post->id) }}"><img src="{{ asset($post->image) }}"
                                        width="100% class="img-responsive" alt=""></a>
                            </div>
                            <!-- post title -->
                            <h4><a href="{{ route('postDetails', $post->id) }}">{{ $post->title }}</a></h4>
                            <div class="post-title-author-details">
                                <div class="date">
                                    <ul>
                                        <li><a title=""
                                                href="#"><span>{{ $post->userCreator->name }}</span></a> --</li>
                                        <li><a title="" href="#">{{ $post->created_at->format('M j, Y') }}</a>
                                            --</li>
                                        <li><a title="" href="#"><span>275 Comments</span></a></li>
                                    </ul>
                                </div>
                                {{ strlen(strip_tags($post->description)) > 50 ? substr(strip_tags($post->description), 0, 50) . '...' : strip_tags($post->description) }}
                                @if (strlen(strip_tags($post->description)) > 50)
                                    <a href="{{ route('postDetails', $post->id) }}">আরও পড়ুন</a>
                                @endif
                            </div>
                        </div>
                    @endif

                    @php
                        $sl++;
                    @endphp
                @endforeach

            </div>
            <div class="col-md-3">
                @php
                    $sl = 1;
                @endphp

                @foreach ($posts as $post)
                    @if ($sl % 3 === 0)
                        <div class="post-style1">
                            <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                <!-- post image -->
                                <a href="{{ route('postDetails', $post->id) }}"><img src="{{ asset($post->image) }}"
                                        width="100% class="img-responsive" alt=""></a>
                            </div>
                            <!-- post title -->
                            <h4><a href="{{ route('postDetails', $post->id) }}">{{ $post->title }}</a></h4>
                            <div class="post-title-author-details">
                                <div class="date">
                                    <ul>
                                        <li><a title=""
                                                href="#"><span>{{ $post->userCreator->name }}</span></a> --</li>
                                        <li><a title="" href="#">{{ $post->created_at->format('M j, Y') }}</a>
                                            --</li>
                                        <li><a title="" href="#"><span>275 Comments</span></a></li>
                                    </ul>
                                </div>
                                {{ strlen(strip_tags($post->description)) > 50 ? substr(strip_tags($post->description), 0, 50) . '...' : strip_tags($post->description) }}
                                @if (strlen(strip_tags($post->description)) > 50)
                                    <a href="{{ route('postDetails', $post->id) }}">আরও পড়ুন</a>
                                @endif
                            </div>
                        </div>
                    @endif

                    @php
                        $sl++;
                    @endphp
                @endforeach

            </div>
            <aside class="col-md-3 left-padding">
                <div class="input-group search-area c-search">
                    <!-- search area -->
                    {{-- <input type="text" class="form-control" placeholder="Search articles here ..." name="q">
                    <div class="input-group-btn">
                        <button class="btn btn-search" type="submit"><i class="fa fa-search"
                                aria-hidden="true"></i></button>
                    </div> --}}
                </div>
                <!-- social icon -->
                <h3 class="category-headding ">সোশ্যাল পিক্সেল</h3>
                <div class="headding-border"></div>
                <div class="social">
                    <ul>
                        <li><a href="{{ $webSettings->social_link_2 }}" class="facebook"><i
                                    class="fa  fa-facebook"></i>
                            </a>
                        </li>
                        <li><a href="{{ $webSettings->social_link_1 }}" class="twitter"><i
                                    class="fa  fa-twitter"></i></a>
                        </li>
                        <li><a href="{{ $webSettings->social_link_3 }}" class="google"><i
                                    class="fa  fa-google-plus"></i></a>
                        </li>
                        {{-- <li><a href="{{ $webSettings->social_link_4 }}" style="background-color: skyblue"><i
                                    class="fa fa-vimeo"></i></a> --}}
                        </li>
                        <li><a href="{{ $webSettings->social_link_5 }}" style="background-color: rgb(199, 74, 74)"><i
                                    class="fa fa-pinterest"></i> </a>
                        </li>
                    </ul>
                </div>
                <!-- /.social icon -->
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
                                            <!-- post comment -->
                                            {{-- <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div> --}}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- / tab item -->
                    </div>
                    <!-- / tab_content -->
                </div>
                <!-- / tab -->
                <div class="banner-add">
                    <!-- add -->
                    <span class="add-title">- Advertisement -</span>
                    <a href="{{ @$banner->banner_link4 }}"><img src="{{ asset($banner->banner4) }}"
                            class="img-responsive center-block" alt=""></a>
                </div>
                <!-- slider widget -->
                <div class="widget-slider-inner">
                    <h3 class="category-headding ">Slider Widget</h3>
                    <div class="headding-border"></div>
                    <div id="widget-slider" class="owl-carousel owl-theme">
                        <!-- widget item -->
                        <div class="item">
                            <a href="#"><img src="{{ asset('frontend/images/slider-widget-1.jpg') }}"
                                    alt=""></a>
                            <h4><a href="#">For good results must be make good plan</a></h4>
                            <div class="date">
                                <ul>
                                    <li><a title="" href="#"><span>Jone Kilna</span></a> --</li>
                                    <li><a title="" href="#">11 Nov 2015</a></li>
                                </ul>
                            </div>
                            <p>Dhaka: Dhaka Metropolitan Sessions a Judge Court on Wednesday issued warrants for the arrest
                                of 29 BNP leaders, including some ina senior leaders...</p>
                        </div>
                        <!-- widget item -->
                        <div class="item">
                            <a href="#"><img src="{{ asset('frontend/images/slider-widget-2.jpg') }}"
                                    alt=""></a>
                            <h4><a href="#">Dog invason sparks chaos at IPL match</a></h4>
                            <div class="date">
                                <ul>
                                    <li><a title="" href="#"><span>Jone Kilna</span></a> --</li>
                                    <li><a title="" href="#">11 Nov 2015</a></li>
                                </ul>
                            </div>
                            <p>Dhaka: Dhaka Metropolitan Sessions a Judge Court on Wednesday issued warrants for the arrest
                                of 29 BNP leaders, including some ina senior leaders ...</p>
                        </div>
                        <!-- widget item -->
                        <div class="item">
                            <a href="#"><img src="{{ asset('frontend/images/slider-widget-3.jpg') }}"
                                    alt=""></a>
                            <h4><a href="#">For good results must be make good plan</a></h4>
                            <div class="date">
                                <ul>
                                    <li><a title="" href="#"><span>Jone Kilna</span></a> --</li>
                                    <li><a title="" href="#">11 Nov 2015</a></li>
                                </ul>
                            </div>
                            <p>Dhaka: Dhaka Metropolitan Sessions a Judge Court on Wednesday issued warrants for the arrest
                                of 29 BNP leaders, including some ina senior leaders ...</p>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
        <!-- pagination -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="pagination">
                        {{-- Previous Page Link --}}
                        @if ($posts->onFirstPage())
                            <li class="disabled"><span>&laquo;</span></li>
                        @else
                            <li><a href="{{ $posts->previousPageUrl() }}" rel="prev">&laquo;</a></li>
                        @endif

                        {{-- Pagination Elements --}}
                        @for ($i = 1; $i <= $posts->lastPage(); $i++)
                            @if ($i == $posts->currentPage())
                                <li class="active"><span>{{ $i }}</span></li>
                            @else
                                <li><a href="{{ $posts->url($i) }}">{{ $i }}</a></li>
                            @endif
                        @endfor

                        {{-- Next Page Link --}}
                        @if ($posts->hasMorePages())
                            <li><a href="{{ $posts->nextPageUrl() }}" rel="next">&raquo;</a></li>
                        @else
                            <li class="disabled"><span>&raquo;</span></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>

    </div>
@endsection
