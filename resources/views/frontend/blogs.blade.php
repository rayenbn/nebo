@extends('layouts.theme')
@section('content')

<!-- Start Breadcarumb area  -->
<div class="breadcrumb-area breadcarumb-style-1 ptb--120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner text-center">
                    <h1 class="title theme-gradient h2">NEBO NEWS.</h1>
                    <ul class="page-list">
                        <li class="rn-breadcrumb-item"><a href="/">Home</a></li>
                        <li class="rn-breadcrumb-item active">nebo news</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcarumb area  -->
<!-- Start Theme Style  -->
<div>
    <div class="rn-gradient-circle"></div>
    <div class="rn-gradient-circle theme-pink"></div>
</div>
<!-- End Theme Style  -->

 <!-- Start Rn Blog Area  -->
 <div class="main-content">
    <div class="rn-blog-area rn-section-gap">
        <div class="container">
            <div class="row mt_dec--30">
                <div class="col-lg-12">
                    <div class="row row--15">
                        @if($blogs->count() > 0)
                        @foreach($blogs as $key => $blog)
                        <div class="col-lg-4 col-md-6 col-12 mt--30" data-sal="slide-up" data-sal-duration="700" data-sal-delay="{{ ($loop->iteration % 3) * 100}}">
                            <div class="rn-card box-card-style-default">
                                <div class="inner">
                                    @if ($blog->image)
                                    <div class="thumbnail">
                                        <a class="image" href="{{ $blog->path() }}">
                                            <img class="w-100" src="../storage/blogs/thumbnail/{{ $blog->image }}" alt="Nebo news image">
                                        </a>
                                    </div>
                                    @endif

                                    <div class="content">
                                        <ul class="rn-meta-list">
                                            <li><a href="#">{{ $blog->created_by ?? ''}}</a></li>
                                            <li class="separator">/</li>
                                            <li>{{ $blog->created_at->diffForHumans() }}</li>
                                        </ul>
                                        <h4 class="title"><a href="{{ $blog->path() }}">{{ $blog->title ?? ''}}</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach 
                        @else
                        <h4 class="title" style="text-align: center;">No news available!</h4>
                        @endif
                    </div>
                </div>
                <!-- <div class="col-lg-12 text-center">
                    <div class="rwt-load-more text-center mt--60">
                        <a class="btn-default" href="blog-grid.html">View More Post
                            <i class="feather-loader"></i>
                        </a>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>
<!-- End Rn Blog Area  -->

@endsection