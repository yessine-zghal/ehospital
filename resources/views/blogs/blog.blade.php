@extends('layouts.layout')

@section('content')
<style>
#container {
		  width: 100%;
		  height: 45px;
		  
		 
		  overflow: hidden;
		}
</style>
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-8 col-4">
                <h4 class="page-title">Blog</h4>
            </div>
            <div class="col-sm-4 col-8 text-right m-b-30">
                <a class="btn btn-primary btn-rounded float-right" href="/add-blog"><i class="fa fa-plus"></i> Add Blog</a>
            </div>
        </div>

       
        <div class="row">
        @foreach($blogs as $index => $blog)
            <div class="col-sm-6 col-md-6 col-lg-4">


             <div class="blog grid-blog">

                  
                    <div class="blog-image">
                        <a href="/blog/{{ $blog->id }}"><img  class="img-fluid" src="@if($blog->image == NULL)assets/img/blog/blog-01.jpg @else {{ asset('storage/uploads/blogs/'.$blog->image) }}@endif" alt=""></a>
                    </div>
                    <div class="blog-content">
                        <h3 class="blog-title"><a href="/blog-details">{{ $blog->blogname}}</a></h3>
                        <div id="container">{{ $blog->blogdescription}}...</div>
                        <a href="/blog/{{ $blog->id }}" class="read-more"><i class="fa fa-long-arrow-right"></i> Read More</a>
                        <div class="blog-info clearfix">
                            <div class="post-left">
                                <ul>
                                    <li><a href="#."><i class="fa fa-calendar"></i> <span> {{ $blog->created_at}}</span></a></li>
                                </ul>
                            </div>
                            <div class="post-right"><a href="#."><i class="fa fa-heart-o"></i>21</a> <a href="#."><i class="fa fa-eye"></i>8</a> <a href="#."><i class="fa fa-comment-o"></i>17</a></div>
                        </div>
                    </div>

                </div>
              
            </div>
            @endforeach
          
        </div>
        
        
    </div>

</div>


@endsection