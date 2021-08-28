@extends('layouts.layout')

@section('content')
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
<title>E-Hospital</title>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/tagsinput.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">






<div class="main-wrapper">

    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h4 class="page-title">Add Blog</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <form action="{{ route('store-blog') }}" method="POST" enctype='multipart/form-data'>
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Blog Name<span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="blogname">

                        </div>
                        <div class="form-group">
                            <label>Blog Images <span class="text-danger">*</span></label>
                            <div class="profile-upload">
                                <div class="upload-img">
                                    <img alt="" src="assets/img/blog/blog-01.jpg">
                                </div>
                                <div class="upload-input">
                                    <input type="file" class="form-control" name="image">
                                </div>
                            </div>


                        </div>


                        <div class="form-group">
                            <label>Blog Category<span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="blogcategory">


                        </div>
                        <div class="form-group">
                            <label>Blog Description<span class="text-danger">*</span></label>
                            <textarea cols="30" rows="6" class="form-control" name="blogdescription"></textarea>

                        </div>
                        <div class="form-group">
                            <label>Tags <span class="text-danger">*</span> <small>(separated with a comma)</small></label>
                            <input type="text" placeholder="Enter your tags" data-role="tagsinput" class="form-control" name="tags">
                        </div>
                        <div class="form-group">
                            <label>author name<span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="authorname">

                        </div>
                        <div class="form-group">
                            <label>about author <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="aboutname">

                        </div>
                        <div class="m-t-20 text-center">
                            <button class="btn btn-primary submit-btn">Publish Blog</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="sidebar-overlay" data-reff=""></div>
<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>
<script src="assets/js/select2.min.js"></script>
<script src="assets/js/tagsinput.js"></script>
<script src="assets/js/app.js"></script>
@endsection