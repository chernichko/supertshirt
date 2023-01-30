<div class="block-21 mb-4 d-flex">
    <a class="blog-img mr-4" style="background-image: url(/images/image_1.jpg);"></a>
    <div class="text">
        <h3 class="heading-1"><a href="{{route('blog.article',['blogModel' => $article])}}">{{$article['title']}}</a></h3>
        <div class="meta">
            <div><a href="#"><span class="icon-calendar"></span> {{$article['created_at']->format('M d, Y')}}</a></div>
            <div><a href="#"><span class="icon-person"></span> {{$article['author']['name']}}</a></div>
            <div><a href="#"><span class="icon-chat"></span> 19</a></div>
        </div>
    </div>
</div>
