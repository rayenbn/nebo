@extends('layouts.theme')
@section('content')

<!-- Start Theme Style  -->
<div>
    <div class="rn-gradient-circle"></div>
    <div class="rn-gradient-circle theme-pink"></div>
</div>
<!-- End Theme Style  -->



<!-- Start Advance Pricing Area  -->
<div class="rn-blog-details-area">
    <div class="post-page-banner rn-section-gapTop">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="content text-center">
                        <div class="page-title">
                            <h1 class="theme-gradient">{{ $blog->title ?? '' }}</h1>
                        </div>
                        <ul class="rn-meta-list">
                            <!-- <li>
                                <i class="feather-user"></i>
                                <a href="#">Irin Pervin</a>
                            </li> -->
                            <li>
                                <i class="feather-calendar"></i>
                                {{ $blog->created_at->diffForHumans() }}
                            </li>
                        </ul>
                        <div class="thumbnail alignwide mt--60">
                            <img class="w-100 radius" src="../storage/blogs/thumbnail/{{ $blog->image ?? ''}}" alt="Nebo Blog Images">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blog-details-content pt--60 rn-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="content">

                        {!! $blog->text !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Advance Pricing Area  -->

@endsection