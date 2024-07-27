@extends('frontend.layout')
@section('content')
    <div class="container" style="width: 80%">
        <div class="row">
            <div class="col-sm-8">
                <article class="content">
                    <div class="post-thumb">
                        <img src="{{ asset($post->image) }}" class="img-responsive post-image" alt="">
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
                                <li><a href="{{ $webSettings->social_link_4 }}" style="background-color: skyblue"><i
                                            class="fa fa-vimeo"></i> </a>
                                </li>
                                <li><a href="{{ $webSettings->social_link_5 }}"
                                        style="background-color: rgb(199, 74, 74)"><i
                                            class="fa fa-pinterest"></i> </a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.social icon -->
                    </div>
                    <h1>{{ $post->title }}</h1>
                    <div class="date">
                        <ul>
                            <li>By<a title="" href="#"><span>{{ $post->userCreator->name }}</span></a> --</li>
                            <li><a title="" href="#">{{ $post->created_at->format('M j, Y') }}</a> --</li>
                            <li><a title="" href="#"><span>275 Comments</span></a></li>
                        </ul>
                    </div>
                    {!! $post->description !!}

                    <!-- tags -->
                    <div class="tags">
                        <ul>
                            @foreach ($subCategories as $subCategory)
                                <li> <a
                                        href="{{ route('subCategoryPages', $subCategory->id) }}">{{ $subCategory->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- Related news area
                                                                ============================================ -->
                    <div class="related-news-inner">
                        <h3 class="category-headding ">সর্বশেষ সংবাদ</h3>
                        <div class="headding-border"></div>
                        <div class="row">
                            <div id="content-slide-5" class="owl-carousel">
                                <!-- item-1 -->
                                <div class="item">
                                    <div class="row rn_block">
                                        @foreach ($recent_news->skip(5)->take(3) as $recent_new)
                                            <div class="col-xs-12 col-md-4 col-sm-4 padd">
                                                <div class="post-wrapper wow fadeIn" data-wow-duration="2s">
                                                    <!-- image -->
                                                    <div class="post-thumb">
                                                        <a href="{{ route('postDetails', $recent_new->id) }}">
                                                            <img class="img-responsive"
                                                                src="{{ asset($recent_new->image) }}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="post-info meta-info-rn">
                                                        <div class="slide">
                                                            <a target="_blank"
                                                                href="{{ route('postDetails', $recent_new->id) }}"
                                                                class="post-badge">{{ $recent_new->category->name }}</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="post-title-author-details">
                                                    <h4><a href="#">{{ $recent_new->title }}</a>
                                                    </h4>
                                                    <div class="post-editor-date">
                                                        <div class="post-date">
                                                            <i class="pe-7s-clock"></i>
                                                            {{ $recent_new->created_at->format('M j, Y') }}
                                                        </div>
                                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> 13
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>

                                </div>
                                <!-- item-2 -->
                                <div class="item">
                                    <div class="row rn_block">
                                        @foreach ($recent_news->skip(8)->take(3) as $recent_new)
                                            <div class="col-xs-12 col-md-4 col-sm-4 padd">
                                                <div class="post-wrapper wow fadeIn" data-wow-duration="2s">
                                                    <!-- image -->
                                                    <div class="post-thumb">
                                                        <a href="{{ route('postDetails', $recent_new->id) }}">
                                                            <img class="img-responsive"
                                                                src="{{ asset($recent_new->image) }}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="post-info meta-info-rn">
                                                        <div class="slide">
                                                            <a target="_blank"
                                                                href="{{ route('postDetails', $recent_new->id) }}"
                                                                class="post-badge">{{ $recent_new->category->name }}</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="post-title-author-details">
                                                    <h4><a href="#">{{ $recent_new->title }}</a>
                                                    </h4>
                                                    <div class="post-editor-date">
                                                        <div class="post-date">
                                                            <i class="pe-7s-clock"></i>
                                                            {{ $recent_new->created_at->format('M j, Y') }}
                                                        </div>
                                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> 13
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- form
                                                                ============================================ -->
                    <div class="form-area">
                        <h3 class="category-headding ">LEAVE A COMMENT</h3>
                        <div class="headding-border"></div>
                        <form method="post" action="{{ route('comment.store') }}">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <span class="input">
                                        <input class="input_field" type="text" id="input-1" name="name" required>
                                        <label class="input_label" for="input-1">
                                            <span class="input_label_content" data-content="Your Name">Your Name</span>
                                        </label>
                                    </span>
                                </div>
                                <div class="col-sm-6">
                                    <span class="input">
                                        <input class="input_field" type="text" id="input-2" name="email">
                                        <label class="input_label" for="input-2">
                                            <span class="input_label_content" data-content="Your Email">Your Email</span>
                                        </label>
                                    </span>
                                </div>
                                <input type="hidden" value="{{ $post->id }}" name="post_id">
                                <div class="col-sm-12">
                                    <span class="input">
                                        <textarea class="input_field" id="message" name="comment" required></textarea>
                                        <label class="input_label" for="message">
                                            <span class="input_label_content" data-content="Your Message">Your
                                                Message</span>
                                        </label>
                                    </span>
                                    <button type="submit" class="btn btn-style">Post Your Comment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- comment box
                                                                ============================================ -->
                    <div class="comments-container">
                        <h1>Comment </h1>
                        <ul id="comments-list" class="comments-list">
                            <li>
                                <div class="comment-main-level">
                                    <!-- Avatar -->
                                    <div class="comment-avatar"><img src="{{ asset('frontend/images/comment-01.jpg') }}"
                                            class="img-circle" alt=""></div>
                                    <!-- Contenedor del Comentario -->
                                    <div class="comment-box">
                                        <div class="comment-head">
                                            <h6 class="comment-name by-author"><a href="#">Agustin Ortiz</a></h6>
                                            <span>hace 20 minutos</span>
                                            <i class="fa fa-reply"></i>
                                            <i class="fa fa-heart"></i>
                                        </div>
                                        <div class="comment-content">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et
                                            iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                                        </div>
                                    </div>
                                </div>
                                <!-- Respuestas de los comentarios -->
                                <ul class="comments-list reply-list">
                                    <li>
                                        <!-- Avatar -->
                                        <div class="comment-avatar"><img
                                                src="{{ asset('frontend/images/comment-02.jpg') }}" class="img-circle"
                                                alt=""></div>
                                        <!-- Contenedor del Comentario -->
                                        <div class="comment-box">
                                            <div class="comment-head">
                                                <h6 class="comment-name"><a href="#">Lorena Rojero</a></h6>
                                                <span>hace 10 minutos</span>
                                                <i class="fa fa-reply"></i>
                                                <i class="fa fa-heart"></i>
                                            </div>
                                            <div class="comment-content">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi
                                                et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <!-- Avatar -->
                                        <div class="comment-avatar"><img
                                                src="{{ asset('frontend/images/comment-01.jpg') }}" class="img-circle"
                                                alt=""></div>
                                        <!-- Contenedor del Comentario -->
                                        <div class="comment-box">
                                            <div class="comment-head">
                                                <h6 class="comment-name by-author"><a href="#">Agustin Ortiz</a>
                                                </h6>
                                                <span>hace 10 minutos</span>
                                                <i class="fa fa-reply"></i>
                                                <i class="fa fa-heart"></i>
                                            </div>
                                            <div class="comment-content">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi
                                                et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <div class="comment-main-level">
                                    <!-- Avatar -->
                                    <div class="comment-avatar"><img src="{{ asset('frontend/images/comment-02.jpg') }}"
                                            class="img-circle" alt=""></div>
                                    <!-- Contenedor del Comentario -->
                                    <div class="comment-box">
                                        <div class="comment-head">
                                            <h6 class="comment-name"><a href="#">Lorena Rojero</a></h6>
                                            <span>hace 10 minutos</span>
                                            <i class="fa fa-reply"></i>
                                            <i class="fa fa-heart"></i>
                                        </div>
                                        <div class="comment-content">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et
                                            iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </article>
            </div>
            <div class="col-sm-4 left-padding">
                <aside class="sidebar">
                    <div class="input-group search-area">
                        <!-- search area -->
                        <input type="text" class="form-control" placeholder="Search articles here ..."
                            name="q">
                        <div class="input-group-btn">
                            <button class="btn btn-search" type="submit"><i class="fa fa-search"
                                    aria-hidden="true"></i></button>
                        </div>
                    </div>
                    <!-- /.search area -->
                    <div class="banner-add">
                        <!-- add -->
                        <span class="add-title">- Advertisement -</span>
                        <a href="{{ @$banner->banner_link4 }}"><img src="{{ asset($banner->banner4) }}"
                                class="img-responsive center-block" alt=""></a>
                    </div>
                    <div class="tab-inner">
                        <ul class="tabs">
                            <li>Recent News</li>
                        </ul>
                        <hr>
                        <!-- tabs -->
                        <div class="tab_content">
                            <div class="tab-item-inner">
                                @foreach ($recent_news->take(5) as $recent_new)
                                    <div class="box-item wow fadeIn" data-wow-duration="1s">
                                        <div class="img-thumb">
                                            <a href="{{ route('postDetails', $recent_new->id) }}" rel="bookmark"><img
                                                    class="entry-thumb" src="{{ asset($recent_new->image) }}"
                                                    alt="" height="80" width="90"></a>
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
                                        <li>By<a title="" href="#"><span>Jone Kilna</span></a> --</li>
                                        <li><a title="" href="#">11 Nov 2015</a></li>
                                    </ul>
                                </div>
                                <p>Dhaka: Dhaka Metropolitan Sessions a Judge Court on Wednesday issued warrants for the
                                    arrest of 29 BNP leaders, including some ina senior leaders...</p>
                            </div>
                            <!-- widget item -->
                            <div class="item">
                                <a href="#"><img src="{{ asset('frontend/images/slider-widget-2.jpg') }}"
                                        alt=""></a>
                                <h4><a href="#">Dog invason sparks chaos at IPL match</a></h4>
                                <div class="date">
                                    <ul>
                                        <li>By<a title="" href="#"><span>Jone Kilna</span></a> --</li>
                                        <li><a title="" href="#">11 Nov 2015</a></li>
                                    </ul>
                                </div>
                                <p>Dhaka: Dhaka Metropolitan Sessions a Judge Court on Wednesday issued warrants for the
                                    arrest of 29 BNP leaders, including some ina senior leaders ...</p>
                            </div>
                            <!-- widget item -->
                            <div class="item">
                                <a href="#"><img src="{{ asset('frontend/images/slider-widget-3.jpg') }}"
                                        alt=""></a>
                                <h4><a href="#">For good results must be make good plan</a></h4>
                                <div class="date">
                                    <ul>
                                        <li>By<a title="" href="#"><span>Jone Kilna</span></a> --</li>
                                        <li><a title="" href="#">11 Nov 2015</a></li>
                                    </ul>
                                </div>
                                <p>Dhaka: Dhaka Metropolitan Sessions a Judge Court on Wednesday issued warrants for the
                                    arrest of 29 BNP leaders, including some ina senior leaders ...</p>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
@endsection
