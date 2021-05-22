@extends('layouts.app')

@section('header')
<header class="masthead" style="background-image: url('assets/img/post-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="post-heading">
                    <h1>What is Laravel PHP?</h1>
                    <h2 class="subheading">Fast, flexible and pragmatic, PHP powers everything from your blog to the most popular websites in the world.</h2>
                    <span class="meta">
                        Posted by
                        <a href="#!">Official PHP</a>
                        on August 24, 2021
                    </span>
                </div>
            </div>
        </div>
    </div>
</header>
@endsection

@section('content')
<article class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <p>PHP (recursive acronym for PHP: Hypertext Preprocessor) is a widely-used open source general-purpose scripting language that is especially suited for web development and can be embedded into HTML.</p>

                <p> Nice, but what does that mean? An example: </p>


                <p>Instead of lots of commands to output HTML (as seen in C or Perl), PHP pages contain HTML with embedded code that does "something" (in this case, output "Hi, I'm a PHP script!"). The PHP code is enclosed in special start and end processing instructions that allow you to jump into and out of "PHP mode." </p>

                <p>What distinguishes PHP from something like client-side JavaScript is that the code is executed on the server, generating HTML which is then sent to the client. The client would receive the results of running that script, but would not know what the underlying code was. You can even configure your web server to process all your HTML files with PHP, and then there's really no way that users can tell what you have up your sleeve.</p>

                <p>The best things in using PHP are that it is extremely simple for a newcomer, but offers many advanced features for a professional programmer. Don't be afraid reading the long list of PHP's features. You can jump in, in a short time, and start writing simple scripts in a few hours. </p>

                <p>Although PHP's development is focused on server-side scripting, you can do much more with it. Read on, and see more in the What can PHP do? section, or go right to the introductory tutorial if you are only interested in web programming. </p>

                <p>
                    Source By
                    <a href="https://www.php.net/manual/en/intro-whatis.php">PHP Documentaion</a>
                    &middot; Images by
                    <a href="https://unsplash.com/">UNSPLASH</a>
                </p>
            </div>
        </div>
    </div>
</article>
@endsection