@extends('layouts.layout')

@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Blog View</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="blog-view">
                    <article class="blog blog-single-post">
                        <h3 class="blog-title">{{ $blog->blogname }}</h3>
                        <div class="blog-info clearfix">
                            <div class="post-left">
                                <ul>
                                    <li><a href="#."><i class="fa fa-calendar"></i> <span> {{ $blog->created_at }}</span></a></li>
                                    <li><a href="#."><i class="fa fa-user-o"></i> <span>By {{ $blog->authorname }}</span></a></li>
                                </ul>
                            </div>
                            <div class="post-right"><a href="#."><i class="fa fa-comment-o"></i>1 Comment</a></div>
                        </div>
                        <div class="blog-image">
                            <a href="#."><img alt="" src="@if($blog->image == NULL)assets/img/blog/blog-01.jpg @else {{ asset('storage/uploads/blogs/'.$blog->image) }}@endif" class="img-fluid"></a>
                        </div>
                        <div class="blog-content">


                            <blockquote>
                                <p>{{ $blog->blogdescription }}</p>
                            </blockquote>

                        </div>
                    </article>
                    <div class="widget blog-share clearfix">
                        <h3>Share the post</h3>
                        <ul class="social-share">
                            <li><a href="#." title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#." title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#." title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#." title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#." title="Youtube"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                    <div class="widget author-widget clearfix">
                        <h3>About author</h3>
                        <div class="about-author">

                            <div class="author-details">
                                <span class="blog-author-name">{{ $blog->authorname }}</span>
                                <p>{{ $blog->aboutname }}</p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <aside class="col-md-4">
                <div class="widget search-widget">
                    <h5>Blog Search</h5>
                    <form class="search-form">
                        <div class="input-group">
                            <input type="text" placeholder="Search..." class="form-control">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="widget category-widget">
                    <h5>Blog Categories</h5>
                    <ul class="categories">
                        <li><a href="#."><i class="fa fa-long-arrow-right"></i> {{ $blog->blogcategory }}</a></li>

                    </ul>
                </div>
                <div class="widget tags-widget">
                    <h5>Tags</h5>
                    <ul class="tags">
                        <li><a href="#." class="tag">Heart</a></li>
                        <li><a href="#." class="tag">Cancer</a></li>
                        <li><a href="#." class="tag">Kids</a></li>
                        <li><a href="#." class="tag">Family</a></li>
                        <li><a href="#." class="tag">Medical</a></li>
                        <li><a href="#." class="tag">Injection</a></li>
                        <li><a href="#." class="tag">Secure</a></li>
                        <li><a href="#." class="tag">Insurance</a></li>
                        <li><a href="#." class="tag">Doctor</a></li>
                        <li><a href="#." class="tag">Nurse</a></li>
                    </ul>
                </div>
            </aside>
        </div>
    </div>

</div>
</div>
@endsection