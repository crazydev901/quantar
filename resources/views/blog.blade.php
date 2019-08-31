@extends("layouts.app")

@section("content")
    <div class="position-relative">
        <!-- shape Hero -->
        <section class="section section-lg section-shaped" style=" padding-bottom: 0;">
            <div class="shape shape-style-1 shape-primary">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </section>
        <!-- 1st Hero Variation -->
    </div>

    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-sm-12 col-lg-12">
                    <div class="row blog">
                        <div class="col-lg-4">
                            <div class="categories-blog">
                                <div class="categories-title">
                                    <h1>Post Categories</h1>
                                </div>
                                <div class="categories_list">
                                    <ul>
                                        @foreach($categories as $category)
                                        <li>{{ $category->name  }} ({{ $category->posts()->count()  }})</li>
                                        @endforeach
                                    </ul>
                                </div>
                                {{--<div class="recent-news">--}}
                                    {{--<h1>Recent News</h1>--}}
                                    {{--<div class="widget mkdf-recent-post-widget">--}}
                                        {{--<ul class="mkdf-recent-posts">--}}
                                            {{--<li class="mkdf-rp-item clearfix">--}}
                                                {{--<a href="#">--}}
                                                    {{--<div class="mkdf-rp-image">--}}
                                                        {{--<img width="56" height="56" src="{{asset('assets/img/blog/blog-sidebar-img-6-100x100')}}.png" class="attachment-56x56 size-56x56 wp-post-image" sizes="(max-width: 56px) 100vw, 56px">--}}
                                                    {{--</div>--}}
                                                    {{--<div class="mkdf-rp-text">--}}
                                                        {{--<h5 class="mkdf-rp-title">Five books every </h5>--}}
                                                        {{--<span class="mkdf-rp-date">October 30, 2018</span>--}}
                                                    {{--</div>--}}
                                                {{--</a>--}}
                                            {{--</li>--}}
                                            {{--<li class="mkdf-rp-item clearfix">--}}
                                                {{--<a href="#">--}}
                                                    {{--<div class="mkdf-rp-image">--}}
                                                        {{--<img width="56" height="56" src="{{asset('assets/img/blog/blog-sidebar-img-5-100x100')}}.png" class="attachment-56x56 size-56x56 wp-post-image" sizes="(max-width: 56px) 100vw, 56px">--}}
                                                    {{--</div>--}}
                                                    {{--<div class="mkdf-rp-text">--}}
                                                        {{--<h5 class="mkdf-rp-title">Data Scientist</h5>--}}
                                                        {{--<span class="mkdf-rp-date">October 31, 2018</span>--}}
                                                    {{--</div>--}}
                                                {{--</a>--}}
                                            {{--</li>--}}
                                            {{--<li class="mkdf-rp-item clearfix">--}}
                                                {{--<a href="#">--}}
                                                    {{--<div class="mkdf-rp-image">--}}
                                                        {{--<img width="56" height="56" src="{{asset('assets/img/blog/blog-sidebar-img-7-100x100')}}.png" class="attachment-56x56 size-56x56 wp-post-image" sizes="(max-width: 56px) 100vw, 56px">--}}
                                                    {{--</div>--}}
                                                    {{--<div class="mkdf-rp-text">--}}
                                                        {{--<h5 class="mkdf-rp-title">How Docker</h5>--}}
                                                        {{--<span class="mkdf-rp-date">November 1, 2018</span>--}}
                                                    {{--</div>--}}
                                                {{--</a>--}}
                                            {{--</li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            </div>
                        </div>
                        <div class="col-sm-8 col-lg-8 news-page text-center">

                            @foreach($posts as $post)
                            <div class="mkdf-post-image img-blog">
                                <img class="img-fluid img-center" width="1300" height="740"
                                     src="{{ Voyager::image( $post->image ) }}" alt="">
                            </div>

                            <div class="mkdf-post-text">
                                <div class="mkdf-post-text-inner">
                                    <div class="mkdf-post-info-top text-left">
                                        <a rel="category tag"><i style="padding-right: 3px;"
                                                                 class="fa fa-folder-open-o"></i>{{ $post->category->name or " " }}</a>
                                        <a rel="category tag"><i style="padding-right: 3px;" class="fa fa-calendar"></i>{{ $post->created_at->format("F d, Y")  }}</a>
                                    </div>
                                    <div class="mkdf-post-text-main">
                                        <h3 itemprop="name" class="entry-title mkdf-post-title">
                                            <a itemprop="url" title="Creative mood">{{ $post->title  }}</a>
                                        </h3>
                                        <div class="mkdf-post-excerpt-holder text-left">
                                            <p itemprop="description" href="{{ route("learn.index", ["post"=>$post->id]) }}" class="mkdf-post-excerpt">{{ $post->excerpt  }} </p>
                                        </div>
                                    </div>
                                    <div class="mkdf-post-info-bottom clearfix">
                                        <div class="mkdf-post-info-bottom-left">
                                            <div class="mkdf-post-read-more-button text-left">
                                                <a itemprop="url" href="{{ route("learn.index", ["post"=>$post->id]) }}" target="_self"
                                                   class="mkdf-btn mkdf-btn-medium mkdf-btn-simple mkdf-btn-icon mkdf-blog-list-button">
                                                    <span class="mkdf-btn-text">Read More <i
                                                                class="fa fa-long-arrow-right"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                        {{--<div class="mkdf-post-info-bottom-right">--}}
                                            {{--<div class="mkdf-post-info-comments-holder">--}}
                                                {{--<a itemprop="url" class="mkdf-post-info-comments"--}}
                                                   {{--href="#">--}}
                                                    {{--<i class="fa fa-comment-o" aria-hidden="true"></i>--}}
                                                    {{--<span>3 Comments</span>--}}
                                                {{--</a>--}}
                                            {{--</div>--}}
                                            {{--<div class="mkdf-blog-like ">--}}
                                                {{--<a href="#" class="mkdf-like" id="mkdf-like-1964-896" title="Like this">--}}
                                                    {{--<i class="fa fa-heart-o"></i>--}}
                                                    {{--<span> Like</span>--}}
                                                {{--</a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection