@extends('layout')
@section('content')
<div class="row container" id="wrapper">
    <div class="halim-panel-filter">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-6">
                    <div class="yoast_breadcrumb hidden-xs"><span><span><a href="{{route('category',$movie->category->slug)}}">{{$movie->category->title}}</a> »» <span class="breadcrumb_last" aria-current="page">{{$movie->title}}</span></span></span></div>
                </div>
            </div>
        </div>
        <div id="ajax-filter" class="panel-collapse collapse" aria-expanded="true" role="menu">
            <div class="ajax"></div>
        </div>
    </div>
    <main id="main-contents" class="col-xs-12 col-sm-12 col-md-8">
        <section id="content" class="test">
            <div class="clearfix wrap-content">

                <div class="halim-movie-wrapper">
                    <div class="title-block">
                        <div id="bookmark" class="bookmark-img-animation primary_ribbon" data-id="38424">
                            <div class="halim-pulse-ring"></div>
                        </div>
                        <div class="title-wrapper" style="font-weight: bold;">
                            Bookmark
                        </div>
                    </div>
                    <div class="movie_info col-xs-12">
                        <div class="movie-poster col-md-3">
                            <img class="movie-thumb" src="https://animevsb.com/wp-content/uploads/2022/07/naruto-shippuden-thumb-198x300.jpg" alt="CVH">
                            <div class="bwa-content">
                                <div class="loader"></div>
                                <a href="{{route('watch',['slug'=>$movie->slug])}}" class="bwac-btn">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                        </div>
                        <div class="film-poster col-md-9">
                            <h1 class="movie-title title-1" style="display:block;line-height:35px;margin-bottom: -14px;color: #ffed4d;text-transform: uppercase;font-size: 18px;">{{$movie->title}}</h1>
                            <h2 class="movie-title title-2" style="font-size: 12px;">{{$movie->name_eng}}</h2>
                            <ul class="list-info-group">
                                <li class="list-info-group-item"><span>Trạng Thái</span> : <span class="quality">HD</span><span class="episode">Vietsub</span></li>
                                <li class="list-info-group-item"><span>Thời lượng</span> : 133 Phút</li>
                                <li class="list-info-group-item"><span>Tập phim</span> : {{$movie->sotap}}/{{$movie->sotap}}- Hoàn thành</li>
                                <li class="list-info-group-item"><span>Thể loại</span> :
                                    <a href="{{route('genre',$movie->genre->slug)}}" rel="category tag">{{$movie->genre->title}}</a>
                                    </li>
                                <li class="list-info-group-item"><span>Danh mục phim</span> :
                                    <a href="{{route('category',$movie->category->slug)}}" rel="category tag">{{$movie->category->title}}</a>
                                </li>
                            <div class="movie-trailer hidden"></div>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div id="halim_trailer"></div>
                <div class="clearfix"></div>
                <div class="section-bar clearfix">
                    <h2 class="section-title"><span style="color:#ffed4d">Nội dung phim</span></h2>
                </div>
                <div class="entry-content htmlwrap clearfix">
                    <div class="video-item halim-entry-box">
                        <article id="post-38424" class="item-content">
                          {{$movie->description}}
                        </article>
                    </div>
                </div>
            </div>
        </section>
{{--        <section class="related-movies">--}}
{{--            <div id="halim_related_movies-2xx" class="wrap-slider">--}}
{{--                <div class="section-bar clearfix">--}}
{{--                    <h3 class="section-title"><span>CÓ THỂ BẠN MUỐN XEM</span></h3>--}}
{{--                </div>--}}
{{--                <div id="halim_related_movies-2" class="owl-carousel owl-theme related-film">--}}
{{--                    <article class="thumb grid-item post-38498">--}}
{{--                        <div class="halim-item">--}}
{{--                            <a class="halim-thumb" href="chitiet.php" title="Đại Thánh Vô Song">--}}
{{--                                <figure><img class="lazy img-responsive" src="https://images2-focus-opensocial.googleusercontent.com/gadgets/proxy?container=focus&gadget=a&no_expand=1&refresh=604800&url=https://1.bp.blogspot.com/-w860_-tiHFI/YO7DW5hwmNI/AAAAAAAAJqg/yFXRsVIh70oslGUKU4Fg3NxipcmCiPt3ACLcBGAsYHQ/s320/unnamed.jpg" alt="Đại Thánh Vô Song" title="Đại Thánh Vô Song"></figure>--}}
{{--                                <span class="status">HD</span><span class="episode"><i class="fa fa-play" aria-hidden="true"></i>Vietsub</span>--}}
{{--                                <div class="icon_overlay"></div>--}}
{{--                                <div class="halim-post-title-box">--}}
{{--                                    <div class="halim-post-title ">--}}
{{--                                        <p class="entry-title">Đại Thánh Vô Song</p>--}}
{{--                                        <p class="original_title">Monkey King: The One And Only</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </article>--}}
{{--                    <article class="thumb grid-item post-38498">--}}
{{--                        <div class="halim-item">--}}
{{--                            <a class="halim-thumb" href="chitiet.php" title="Đại Thánh Vô Song">--}}
{{--                                <figure><img class="lazy img-responsive" src="https://images2-focus-opensocial.googleusercontent.com/gadgets/proxy?container=focus&gadget=a&no_expand=1&refresh=604800&url=https://1.bp.blogspot.com/-w860_-tiHFI/YO7DW5hwmNI/AAAAAAAAJqg/yFXRsVIh70oslGUKU4Fg3NxipcmCiPt3ACLcBGAsYHQ/s320/unnamed.jpg" alt="Đại Thánh Vô Song" title="Đại Thánh Vô Song"></figure>--}}
{{--                                <span class="status">HD</span><span class="episode"><i class="fa fa-play" aria-hidden="true"></i>Vietsub</span>--}}
{{--                                <div class="icon_overlay"></div>--}}
{{--                                <div class="halim-post-title-box">--}}
{{--                                    <div class="halim-post-title ">--}}
{{--                                        <p class="entry-title">Đại Thánh Vô Song</p>--}}
{{--                                        <p class="original_title">Monkey King: The One And Only</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </article>--}}
{{--                    <article class="thumb grid-item post-38498">--}}
{{--                        <div class="halim-item">--}}
{{--                            <a class="halim-thumb" href="chitiet.php" title="Đại Thánh Vô Song">--}}
{{--                                <figure><img class="lazy img-responsive" src="https://images2-focus-opensocial.googleusercontent.com/gadgets/proxy?container=focus&gadget=a&no_expand=1&refresh=604800&url=https://1.bp.blogspot.com/-w860_-tiHFI/YO7DW5hwmNI/AAAAAAAAJqg/yFXRsVIh70oslGUKU4Fg3NxipcmCiPt3ACLcBGAsYHQ/s320/unnamed.jpg" alt="Đại Thánh Vô Song" title="Đại Thánh Vô Song"></figure>--}}
{{--                                <span class="status">HD</span><span class="episode"><i class="fa fa-play" aria-hidden="true"></i>Vietsub</span>--}}
{{--                                <div class="icon_overlay"></div>--}}
{{--                                <div class="halim-post-title-box">--}}
{{--                                    <div class="halim-post-title ">--}}
{{--                                        <p class="entry-title">Đại Thánh Vô Song</p>--}}
{{--                                        <p class="original_title">Monkey King: The One And Only</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </article>--}}
{{--                    <article class="thumb grid-item post-38498">--}}
{{--                        <div class="halim-item">--}}
{{--                            <a class="halim-thumb" href="chitiet.php" title="Đại Thánh Vô Song">--}}
{{--                                <figure><img class="lazy img-responsive" src="https://images2-focus-opensocial.googleusercontent.com/gadgets/proxy?container=focus&gadget=a&no_expand=1&refresh=604800&url=https://1.bp.blogspot.com/-w860_-tiHFI/YO7DW5hwmNI/AAAAAAAAJqg/yFXRsVIh70oslGUKU4Fg3NxipcmCiPt3ACLcBGAsYHQ/s320/unnamed.jpg" alt="Đại Thánh Vô Song" title="Đại Thánh Vô Song"></figure>--}}
{{--                                <span class="status">HD</span><span class="episode"><i class="fa fa-play" aria-hidden="true"></i>Vietsub</span>--}}
{{--                                <div class="icon_overlay"></div>--}}
{{--                                <div class="halim-post-title-box">--}}
{{--                                    <div class="halim-post-title ">--}}
{{--                                        <p class="entry-title">Đại Thánh Vô Song</p>--}}
{{--                                        <p class="original_title">Monkey King: The One And Only</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </article>--}}
{{--                    <article class="thumb grid-item post-38498">--}}
{{--                        <div class="halim-item">--}}
{{--                            <a class="halim-thumb" href="chitiet.php" title="Đại Thánh Vô Song">--}}
{{--                                <figure><img class="lazy img-responsive" src="https://images2-focus-opensocial.googleusercontent.com/gadgets/proxy?container=focus&gadget=a&no_expand=1&refresh=604800&url=https://1.bp.blogspot.com/-w860_-tiHFI/YO7DW5hwmNI/AAAAAAAAJqg/yFXRsVIh70oslGUKU4Fg3NxipcmCiPt3ACLcBGAsYHQ/s320/unnamed.jpg" alt="Đại Thánh Vô Song" title="Đại Thánh Vô Song"></figure>--}}
{{--                                <span class="status">HD</span><span class="episode"><i class="fa fa-play" aria-hidden="true"></i>Vietsub</span>--}}
{{--                                <div class="icon_overlay"></div>--}}
{{--                                <div class="halim-post-title-box">--}}
{{--                                    <div class="halim-post-title ">--}}
{{--                                        <p class="entry-title">Đại Thánh Vô Song</p>--}}
{{--                                        <p class="original_title">Monkey King: The One And Only</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </article>--}}

{{--                </div>--}}
{{--                <script>--}}
{{--                    jQuery(document).ready(function($) {--}}
{{--                        var owl = $('#halim_related_movies-2');--}}
{{--                        owl.owlCarousel({loop: true,margin: 4,autoplay: true,autoplayTimeout: 4000,autoplayHoverPause: true,nav: true,navText: ['<i class="hl-down-open rotate-left"></i>', '<i class="hl-down-open rotate-right"></i>'],responsiveClass: true,responsive: {0: {items:2},480: {items:3}, 600: {items:4},1000: {items: 4}}})});--}}
{{--                </script>--}}
{{--            </div>--}}
{{--        </section>--}}
    </main>
{{--    <aside id="sidebar" class="col-xs-12 col-sm-12 col-md-4"></aside>--}}

    @include('pages.include.sidebar')
</div>
@endsection