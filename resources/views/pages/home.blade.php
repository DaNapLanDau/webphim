@extends('layout')
@section('content')
    <div class="row container" id="wrapper">
        <div class="halim-panel-filter">
            <div id="ajax-filter" class="panel-collapse collapse" aria-expanded="true" role="menu">
                <div class="ajax"></div>
            </div>
        </div>
        <div class="col-xs-12 carausel-sliderWidget">

            <div class="clearfix"></div>
        </div>
        <main id="main-contents" class="col-xs-12 col-sm-12 col-md-8">
            @foreach($category_home as $key => $cate_home)
            <section id="halim-advanced-widget-2">
                <div class="section-heading">
                    <a href="danhmuc.php" title="Phim Bộ">
                        <span class="h-text">Phim Bộ</span>
                    </a>
                </div>
                <div id="halim-advanced-widget-2-ajax-box" class="halim_box">
                    @foreach($cate_home->movie->take(8) as $key => $mov)
                    <article class="col-md-3 col-sm-3 col-xs-6 thumb grid-item post-37606">
                        <div class="halim-item">
                            <a class="halim-thumb" href="{{route('movie',$mov->slug)}}">
                                <figure><img class="lazy img-responsive" src="{{asset('uploads/movie/'.$mov->image)}}" title="{{$mov->title}}"></figure>
                                <span class="status">TẬP 1</span><span class="episode"><i class="fa fa-play" aria-hidden="true"></i>Vietsub</span>
                                <div class="icon_overlay"></div>
                                <div class="halim-post-title-box">
                                    <div class="halim-post-title ">
                                        <p class="entry-title">{{$mov->title}}</p>
                                        <p class="original_title">{{$mov->name_eng}} </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </article>
                        @endforeach
                </div>
            </section>
            <div class="clearfix"></div>
                @endforeach
                <div class="section-heading">
                    <a href="danhmuc.php" title="Phim Lẻ">
                        <span class="h-text">{{$cate_home->title}}</span>
                    </a>
                </div>
                <div id="halim-advanced-widget-2-ajax-box" class="halim_box">
                    <article class="col-md-3 col-sm-3 col-xs-6 thumb grid-item post-37606">
                        <div class="halim-item">
                            <a class="halim-thumb" href="chitiet.php">
                                <figure><img class="lazy img-responsive" src="https://animevsb.com/wp-content/uploads/2022/07/naruto-shippuden-thumb-198x300.jpg" alt="" title=""></figure>
                                <span class="status">TẬP 5</span><span class="episode"><i class="fa fa-play" aria-hidden="true"></i>Vietsub</span>
                                <div class="icon_overlay"></div>
                                <div class="halim-post-title-box">
                                    <div class="halim-post-title ">
                                        <p class="entry-title">Cửu Vĩ Hồ</p>
                                        <p class="original_title">Naruto Shipuden</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </article>

                </div>
            </section>
            <div class="clearfix"></div>
            <section id="halim-advanced-widget-2">
                <div class="section-heading">
                    <a href="danhmuc.php" title="Phim Lẻ">
                        <span class="h-text">Phim Chiếu Rạp</span>
                    </a>
                </div>
                <div id="halim-advanced-widget-2-ajax-box" class="halim_box">
                    <article class="col-md-3 col-sm-3 col-xs-6 thumb grid-item post-37606">
                        <div class="halim-item">
                            <a class="halim-thumb" href="chitiet.php">
                                <figure><img class="lazy img-responsive" src="https://animevsb.com/wp-content/uploads/2022/07/naruto-shippuden-thumb-198x300.jpg" alt="BẠN CÙNG PHÒNG CỦA TÔI LÀ GUMIHO" title="BẠN CÙNG PHÒNG CỦA TÔI LÀ GUMIHO"></figure>
                                <span class="status">TẬP 5</span><span class="episode"><i class="fa fa-play" aria-hidden="true"></i>Vietsub</span>
                                <div class="icon_overlay"></div>
                                <div class="halim-post-title-box">
                                    <div class="halim-post-title ">
                                        <p class="entry-title">Cửu Vĩ Hồ</p>
                                        <p class="original_title">Naruto Shipuden</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </article>
                </div>
            </section>
            <div class="clearfix"></div>
        </main>
@include('pages.include.sidebar')
    </div>
@endsection
