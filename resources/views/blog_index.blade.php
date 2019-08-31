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
                <div class="col-lg-12 text-center">
                    <div class="blog blog1">
                        <div class="news-page">
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
                                            <a itemprop="url" title="Creative mood"> {{ $post->title  }} </a>
                                        </h3>
                                        <div class="mkdf-post-excerpt-holder text-left">
                                            {!! $post->body !!}
                                        </div>
                                    </div>

                                    <div class="addthis_inline_share_toolbox"></div>

                                    {{--<div id="disqus_thread"></div>--}}
                                    {{--<script>--}}

                                        {{--/**--}}
                                         {{--*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.--}}
                                         {{--*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/--}}

                                        {{--var disqus_config = function () {--}}
                                        {{--this.page.url = "{{ route("learn.index", ["post"=>$post->id]) }}";  // Replace PAGE_URL with your page's canonical URL variable--}}
                                        {{--this.page.identifier ="{{  $post->slug }}"; // Replace PAGE_IDENTIFIER with your page's unique identifier variable--}}
                                        {{--};--}}

                                        {{--(function() { // DON'T EDIT BELOW THIS LINE--}}
                                            {{--var d = document, s = d.createElement('script');--}}
                                            {{--s.src = 'https://quantaur-io.disqus.com/embed.js';--}}
                                            {{--s.setAttribute('data-timestamp', +new Date());--}}
                                            {{--(d.head || d.body).appendChild(s);--}}
                                        {{--})();--}}
                                    {{--</script>--}}
                                    {{--<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>--}}


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
