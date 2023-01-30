<div class="col-md-12 d-flex ftco-animate">
    <div class="blog-entry align-self-stretch d-md-flex">
        <a href="{{route('blog.article', ['blogModel' => $article])}}" class="block-20" style="background-image: url('images/image_1.jpg');">
        </a>
        <div class="text d-block pl-md-4">
            <div class="meta mb-3">
                <div><a href="#">{{$article['created_at']->format('M d, Y')}}</a></div>
                <div><a href="#">{{$article['author']['name']}}</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
            </div>
            <h3 class="heading"><a href="{{route('blog.article', ['blogModel' => $article])}}">{{$article->title}}</a></h3>
            <p>{{$article->text}}</p>
            <p><a href="{{route('blog.article', ['blogModel' => $article])}}" class="btn btn-primary py-2 px-3">Read more</a></p>
        </div>
    </div>
</div>
