@extends('layouts.theme')
@section('content')
 <!-- Start Theme Style  -->
 <div>
    <div class="rn-gradient-circle"></div>
    <div class="rn-gradient-circle theme-pink"></div>
</div>
<!-- End Theme Style  -->

<!-- Start Contact Area  -->
<div class="main-content">

<div class="rwt-contact-area rn-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb--40">
                <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                    <h4 class="subtitle "><span class="theme-gradient">Contact Form</span></h4>
                    <h2 class="title w-600 mb--20">Our Contact Address Here.</h2>
                </div>
            </div>
        </div>
        <div class="row row--15">
            <div class="col-lg-12">
                <div class="rn-contact-address mt_dec--30">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="rn-address">
                                <div class="icon">
                                    <i class="feather-headphones"></i>
                                </div>
                                <div class="inner">
                                    <h4 class="title">Contact Phone Number</h4>
                                    <p><a href="#">{{ $contactus->phone ?? ''}}</a></p>
                                    <p><a href="#">{{ $contactus->phone1 ?? ''}}</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="rn-address">
                                <div class="icon">
                                    <i class="feather-mail"></i>
                                </div>
                                <div class="inner">
                                    <h4 class="title">Our Email Address</h4>
                                    <p><a href="mailto:{{ $contactus->email ?? ''}}">{{ $contactus->email ?? ''}}</a></p>
                                    <p><a href="mailto:{{ $contactus->email1 ?? ''}}">{{ $contactus->email1 ?? ''}}</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="rn-address">
                                <div class="icon">
                                    <i class="feather-map-pin"></i>
                                </div>
                                <div class="inner">
                                    <h4 class="title">Our Location</h4>
                                    <p>{!! $contactus->address ?? '' !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt--40 row--15 justify-content-center">
            <div class="col-lg-7">

                @if(count($errors) > 0)
                <ul>
                    @foreach($errors->all() as $error)
                    <li style="color: #ff4a56;">-> {{ $error }}</li>
                    @endforeach
                </ul>
                @endif
                @if($message = Session::get('success'))
                <h1 style="font-size: 22px;color:#34e582;">*** {{ $message }} ***</h1>
                @endif

                <form class="contact-form-1 " action="{{ url('get-a-quote/send') }}" method="post">
                {{ csrf_field() }}
                    <div class="form-group">
                        <input type="text" name="name" id="name" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <input type="text" name="phone" id="phone" placeholder="Phone Number">
                    </div>
                    <div class="form-group">
                        <input type="email" id="email" name="email" placeholder="Your Email">
                    </div>

                    <div class="form-group">
                        <input type="text" id="product" name="product" placeholder="Your Subject">
                    </div>

                    <div class="form-group">
                        <textarea name="message" id="message" placeholder="Your Message"></textarea>
                    </div>

                    <div class="form-group">
                        <button name="submit" type="submit" class="btn-default btn-large rn-btn">
                            <span>Submit Now</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</div>
<!-- End Contact Area  -->

@endsection