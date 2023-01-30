@extends('layouts.app')



@section('content')
    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="\">Home</a></span> <span>Blog</span></p>
                    <h1 class="mb-0 bread">Blog</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 ftco-animate">
                    <div class="row">
                        @each('blog.include.list-article', $articles, 'article')
                    </div>
                </div> <!-- .col-md-8 -->
                <div class="col-lg-4 sidebar ftco-animate">
                    <div class="sidebar-box">
                        <form action="#" class="search-form">
                            <div class="form-group">
                                <span class="icon ion-ios-search"></span>
                                <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                            </div>
                        </form>
                    </div>
                    <div class="sidebar-box ftco-animate">
                        <h3 CLASS="heading">Categories</h3>
                        <ul class="categories">
                            <li><a href="#">Bags <span>(12)</span></a></li>
                            <li><a href="#">Shoes <span>(22)</span></a></li>
                            <li><a href="#">Dress <span>(37)</span></a></li>
                            <li><a href="#">Accessories <span>(42)</span></a></li>
                            <li><a href="#">Makeup <span>(14)</span></a></li>
                            <li><a href="#">Beauty <span>(140)</span></a></li>
                        </ul>
                    </div>

                    <div class="sidebar-box ftco-animate">
                        <h3 CLASS="heading">Recent Blog</h3>
                        @each('blog.include.recent-blog', $recentBlog, 'article')
                    </div>

                    <div class="sidebar-box ftco-animate">
                        <h3 CLASS="heading">Tag Cloud</h3>
                        <div class="tagcloud">
                            <a href="#" class="tag-cloud-link">shop</a>
                            <a href="#" class="tag-cloud-link">products</a>
                            <a href="#" class="tag-cloud-link">shirt</a>
                            <a href="#" class="tag-cloud-link">jeans</a>
                            <a href="#" class="tag-cloud-link">shoes</a>
                            <a href="#" class="tag-cloud-link">dress</a>
                            <a href="#" class="tag-cloud-link">coats</a>
                            <a href="#" class="tag-cloud-link">jumpsuits</a>
                        </div>
                    </div>

                    <div class="sidebar-box ftco-animate">
                        <h3 class="heading">Paragraph</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
