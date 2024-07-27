@php
    $webSettings = App\Models\WebSettings::first();
@endphp
<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">
                <div class="footer-box footer-logo-address">
                    <!-- address  -->
                    <img src="{{ asset($webSettings->logo) }}" class="img-responsive" alt="">
                    <address>
                        {!! $webSettings->address_1 !!}
                        <br> Tell: 0{{ $webSettings->contact_1 }}
                        <br> Email: {{ $webSettings->email_1 }}
                    </address>
                </div>
                <!-- /.address  -->
            </div>
            <div class="col-sm-5">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="footer-box">
                            <h3 class="category-headding">categories</h3>
                            <div class="headding-border bg-color-4"></div>
                            <ul>
                                <li><i class="fa fa-dot-circle-o"></i><a href="#">Newsletter</a></li>
                                <li><i class="fa fa-dot-circle-o"></i><a href="#">Pressroom</a></li>
                                <li><i class="fa fa-dot-circle-o"></i><a href="#">Advertise online</a>
                                </li>
                                <li><i class="fa fa-dot-circle-o"></i><a href="#">Language</a></li>
                                <li><i class="fa fa-dot-circle-o"></i><a href="#">Being Part</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="footer-box">
                            <h3 class="category-headding">POPULAR CATEGORY</h3>
                            <div class="headding-border bg-color-5"></div>
                            <ul>
                                <li><i class="fa fa-dot-circle-o"></i><a href="#">Digital Edition</a></li>
                                <li><i class="fa fa-dot-circle-o"></i><a href="#">Site Map</a></li>
                                <li><i class="fa fa-dot-circle-o"></i><a href="#">About Ads</a></li>
                                <li><i class="fa fa-dot-circle-o"></i><a href="#">Give a Gift</a></li>
                                <li><i class="fa fa-dot-circle-o"></i><a href="#">About Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="footer-box">
                    <!-- featured news -->
                    <h3 class="category-headding ">FEATURED NEWS</h3>
                    <div class="headding-border bg-color-2"></div>
                    <div class="box-item wow fadeIn" data-wow-duration="1s">
                        <div class="img-thumb">
                            <a href="#" rel="bookmark"><img class="entry-thumb"
                                    src="{{ asset('frontend') }}/images/popular_news_01.jpg" alt=""
                                    height="80" width="100"></a>
                        </div>
                        <div class="item-details">
                            <h6 class="sub-category-title bg-color-1">
                                <a href="#">SPORTS</a>
                            </h6>
                            <h3 class="td-module-title"><a href="#">It is a long established fact that a
                                    reader will</a></h3>
                            <div class="post-editor-date">
                                <!-- post date -->
                                <div class="post-date">
                                    <i class="pe-7s-clock"></i> Oct 6, 2016
                                </div>
                                <!-- post comment -->
                                <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <div class="img-thumb">
                            <a href="#" rel="bookmark"><img class="entry-thumb"
                                    src="{{ asset('frontend') }}/images/popular_news_02.jpg" alt=""
                                    height="80" width="100"></a>
                        </div>
                        <div class="item-details">
                            <h6 class="sub-category-title bg-color-2">
                                <a href="#">TECHNOLOGY </a>
                            </h6>
                            <h3 class="td-module-title"><a href="#">The generated Lorem Ipsum is
                                    therefore</a></h3>
                            <div class="post-editor-date">
                                <!-- post date -->
                                <div class="post-date">
                                    <i class="pe-7s-clock"></i> Oct 6, 2016
                                </div>
                                <!-- post comment -->
                                <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.featured news -->
            </div>
        </div>
    </div>
</footer>
<div class="sub-footer">
    <!-- sub footer -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <p><a href="#" class="color-1">{{$webSettings->copyright}}</a></p>
                <div class="social">
                    <ul>
                        <li><a href="#" class="facebook"><i class="fa  fa-facebook"></i> </a></li>
                        <li><a href="#" class="twitter"><i class="fa  fa-twitter"></i></a></li>
                        <li><a href="#" class="google"><i class="fa  fa-google-plus"></i></a></li>
                        <li><a href="#" class="flickr"><i class="fa fa-flickr"></i></a></li>
                        <li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#" class="vimeo"><i class="fa fa-vimeo"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
