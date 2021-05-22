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
<div class="row gx-4 gx-lg-5 justify-content-center">
    <div class="col-md-10 col-lg-8 col-xl-7">
        <!-- Post preview-->
        <div class="post-preview">
            <a href="https://adarsh-thakur.hashnode.dev/what-is-git">
                <h2 class="post-title">What is Git? How does it work?</h2>
                <h3 class="post-subtitle">A Brief introduction about popular version control system.</h3>
            </a>
            <p class="post-meta">
                Posted by
                <a href="#!">Adarsh Thakur</a>
                on May 22, 2021
            </p>
        </div>
        <!-- Divider-->
        <hr class="my-4" />
        <!-- Post preview-->
        <div class="post-preview">
            <a href="https://www.freecodecamp.org/news/get-started-with-version-control-and-git/"><h2 class="post-title">How to Get Started with Version Control Using Git</h2></a>
            <p class="post-meta">
                Posted by
                <a href="#!">Vasyl Lagutin</a>
                on September 18, 2021
            </p>
        </div>
        <!-- Divider-->
        <hr class="my-4" />
        <!-- Pager-->
    </div>
</div>
@endsection