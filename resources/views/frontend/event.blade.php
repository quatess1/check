@extends('frontend.main')
@section('title', 'Blog Page')
@section('content')

    <!-- Intro Section -->
    <section class="inner-intro bg-img light-color overlay-before parallax-background">
        <div class="container">
            <div class="row title">
                <div class="title_row">
                    <h1 data-title="Blog"><span>Blog</span></h1>
                    <div class="page-breadcrumb">
                        <a>Home</a>/ <span>Blog</span>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- Intro Section -->
    <!-- Blog Post Section -->
    <section class="ptb ptb-xs-60">
        <div class="container">
            <div class="row">
                <!-- Post Item -->
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-md-12 blog-post-hr">
                            @foreach($blogs as $blog)
                            <div class="blog-post mb-30">
                                <div class="post-media"> <img src="{{ asset('frontend/images/blog/img3.jpg') }}" alt="" /><span class="event-calender blog-date"> 21 <span>june</span> </span> </div>
                                <div class="post-meta"> <span>by <a href="javascript:avoid(0);">Admin</a>,</span><span> <a href="javascript:avoid(0);"><i class="fa fa-comment-o"></i> 25</a>,</span><span> <a href="javascript:avoid(0);"><i class="fa fa-heart-o"></i> 57</a>,</span>
                                    <div class="post-more-link pull-right">
                                        <div class="icons-hover-black"> <a href="#" class="facebook-icon"> <i class="fa fa-facebook"></i> </a><a href="#" class="twitter-icon"> <i class="fa fa-twitter"></i> </a><a href="#" class="googleplus-icon"> <i class="fa fa-google-plus"></i> </a><a href="#" class="linkedin-icon"> <i class="fa fa-linkedin"></i> </a> </div>
                                        <a class="btn-text xs-hidden"> <i class="ion-android-share-alt"></i></a> </div>
                                </div>
                                <div class="post-header">
                                    <h2><a href="blog-detail.html">Maecenas nec odio ante varcy tincidunt</a></h2>
                                </div>
                                <div class="post-entry">
                                    <p> Praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. </p>
                                    <p> Similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. </p>
                                </div>
                                <div class="post-more-link pull-left"> <a href="blog-detail.html" class="btn-text">Read More</a> </div>
                            </div>
                            <hr />
                             @endforeach
                        </div>
                    </div>
                    <!-- Pagination Nav -->
                    <div class="pagination-nav text-left mt-60 mtb-xs-30">
                        <ul>
                            <li> {{ $blog->links }}</li>
                        </ul>
                    </div>
                    <!-- End Pagination Nav -->
                </div>
                <!-- End Post Item -->

            </div>
        </div>

    </section>
    <!-- End Blog Post Section -->
@endsection