@extends('layouts.theme')
@section('content')

<!-- Start Team-Style-Default Area  -->
<div class="rwt-team-area rn-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                    <h2 class="title w-600 mb--20">Login</h2>
                </div>
            </div>
        </div>
        
        <div class="row mt--40 row--15 justify-content-center">
            <div class="col-lg-7">

                @if(\Session::has('message'))
                    <div class="alert alert-danger">
                        <strong>Error!</strong>
                        {{ \Session::get('message') }}
                    </div>
                @endif

                <form class="contact-form-1" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="form-group mb-20">
                        <input type="text" class="form-control mb-10 active" name="email" placeholder="Email">
                    </div>

                    <div class="form-group mb-20">
                        <input type="password" name="password" class="form-control mb-10 active" placeholder="Password">
                    </div>

                    {{--
                    <div class="row">
                        <label class="col-6" style="text-align: initial;">
                            <input name="remember" type="checkbox" /> {{ trans('global.remember_me') }}
                        </label>
                        <label class="col-6 text-right" >
                            <a class="" href="{{ route('password.request') }}">
                                {{ trans('global.forgot_password') }}
                            </a>
                        </label>
                    </div>
                    --}}

                    <div class="form-group">
                        <button name="submit" type="submit" class="btn-default btn-large rn-btn">
                            <span>{{ trans('global.login') }}</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
<!-- End Team-Style-Default Area  -->

@endsection