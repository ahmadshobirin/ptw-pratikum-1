@extends('layouts.app')

@section('header')
<header class="masthead" style="background-image: url('assets/img/post-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="post-heading">
                    <h1>What is Laravel Framework?</h1>
                    <h2 class="subheading">The PHP Framework for Web Artisans</h2>
                    <span class="meta">
                        Posted by
                        <a href="#!">Taylor Ottwel</a>
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
                <p>Laravel is an open-source PHP framework, which is robust and easy to understand. It follows a model-view-controller design pattern. Laravel reuses the existing components of different frameworks which helps in creating a web application. The web application thus designed is more structured and pragmatic.</p>

                <p>Laravel offers a rich set of functionalities which incorporates the basic features of PHP frameworks like CodeIgniter, Yii and other programming languages like Ruby on Rails. Laravel has a very rich set of features which will boost the speed of web development.</p>

                <p>If you are familiar with Core PHP and Advanced PHP, Laravel will make your task easier. It saves a lot time if you are planning to develop a website from scratch. Moreover, a website built in Laravel is secure and prevents several web attacks.</p>


                <h2 class="section-heading">Advantages of Laravel</h2>
                <p>Laravel offers you the following advantages, when you are designing a web application based on it −</p>
                <ol>
                    <li>The web application becomes more scalable, owing to the Laravel framework.</li>
                    <li>Considerable time is saved in designing the web application, since Laravel reuses the components from other framework in developing web application.</li>
                    <li>
                        It includes namespaces and interfaces, thus helps to organize and manage resources.
                    </li>
                </ol>
                <h2 class="section-heading">Features of Laravel</h2>
                <p>Laravel offers the following key features which makes it an ideal choice for designing web applications −</p>

                <b>Modularity</b>
                <p>Laravel provides 20 built in libraries and modules which helps in enhancement of the application. Every module is integrated with Composer dependency manager which eases updates</p>

                <b>Testability</b>
                <p>Laravel includes features and helpers which helps in testing through various test cases. This feature helps in maintaining the code as per the requirements</p>

                <b>Routing</b>
                <p>Laravel provides a flexible approach to the user to define routes in the web application. Routing helps to scale the application in a better way and increases its performance.</p>

                <b>Configuration Management</b>
                <p>A web application designed in Laravel will be running on different environments, which means that there will be a constant change in its configuration. Laravel provides a consistent approach to handle the configuration in an efficient way.</p>

                <b>Query Builder and ORM</b>
                <p>Laravel incorporates a query builder which helps in querying databases using various simple chain methods. It provides ORM (Object Relational Mapper) and ActiveRecord implementation called Eloquent.</p>

                <b>Template Engine</b>
                <p>Laravel uses the Blade Template engine, a lightweight template language used to design hierarchical blocks and layouts with predefined blocks that include dynamic content.</p>

                <b>E-mail</b>
                <p>Laravel includes a mail class which helps in sending mail with rich content and attachments from the web application.</p>

                <b>Authentication</b>
                <p>User authentication is a common feature in web applications. Laravel eases designing authentication as it includes features such as register, forgot password and send password reminders.</p>

                <b>Redis</b>
                <p>Laravel uses Redis to connect to an existing session and general-purpose cache. Redis interacts with session directly.</p>

                <b>Queues</b>
                <p>Laravel includes queue services like emailing large number of users or a specified Cron job. These queues help in completing tasks in an easier manner without waiting for the previous task to be completed.</p>

                <b>Event and Command Bus</b>
                <p>Laravel 5.1 includes Command Bus which helps in executing commands and dispatch events in a simple way. The commands in Laravel act as per the application’s lifecycle.</p>


                <p>
                    Source By
                    <a href="https://www.tutorialspoint.com/laravel/laravel_overview.htm">Tutorials Point</a>
                    &middot; Images by
                    <a href="https://unsplash.com/">UNSPLASH</a>
                </p>
            </div>
        </div>
    </div>
</article>
@endsection