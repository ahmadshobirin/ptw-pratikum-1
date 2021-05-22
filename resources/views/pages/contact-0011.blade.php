@extends('layouts.app')

@section("header")
<!-- Page Header-->
<header class="masthead" style="background-image: url('assets/img/header-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1>Ahmad Shobirin</h1>
                    <span class="subheading">Just an ordinary person</span>
                </div>
            </div>
        </div>
    </div>
</header>
@endsection

@section('content')
<main class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="d-flex justify-content-center pt-2">
                    <img src="{{ URL::asset("assets/img/profile.jpg") }}" alt="aw" class="rounded-circle"
                        style="width: 240px; height:240px; object-fit: cover">
                </div>
                <p class="text-wrap fs-6 text-center text-break">So some people call me "Shob" and Iam Backend Developer at Twiscode. At work I usually play with
                    Go-lang, and still love Laravel. And this is where the activity is usually:</p>

                <div class="d-flex justify-content-center pt-2">
                    <ul class="list-inline text-center">
                        <li class="list-inline-item">
                            <a href="https://twitter.com/ahmadsrob">
                                <span class="fa-stack fa-lg">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://github.com/ahmadshobirin">
                                <span class="fa-stack fa-lg">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</main>
@endsection
