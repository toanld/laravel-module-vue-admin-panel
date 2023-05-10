<section class="blog-posts">
    <div class="container">
    <div class="row">
        <div class="col-lg-8">
        <div class="all-blog-posts">
            <div class="row">
            @foreach($home_banner as $item)
            <div class="col-lg-12">
                <div class="blog-post">
                <div class="blog-thumb">
                    <img src="/storage/{{$item->image}}" alt="">
                </div>
                <div class="down-content">
                    <span>{{$item->category_name}}</span>
                    <a href="{{route('detail', ['category_id' => $item->category_id, 'title' => $item->slug, 'id' => $item->id])}}"><h4>{{$item->title}}</h4></a>
                    <ul class="post-info">
                    <li><a href="#">{{$item->user_name}}</a></li>
                    <li><a href="#">{{\Carbon\Carbon::parse($item->publish_date)->format('d/m/Y')}}</a></li>
                    <li><a href="#">12 Comments</a></li>
                    </ul>
                    <p>{{$item->teaser}}</p>
                    <div class="post-options">
                    <div class="row">
                        <div class="col-6">
                        <ul class="post-tags">
                            <li><i class="fa fa-tags"></i></li>
                            @foreach($item->tags()->get() as $tag)
                            <li><a href="#">{{$tag->name}}</a>,</li>
                            @endforeach
                        </ul>
                        </div>
                        <!-- <div class="col-6">
                        <ul class="post-share">
                            <li><i class="fa fa-share-alt"></i></li>
                            <li><a href="#">Facebook</a>,</li>
                            <li><a href="#"> Twitter</a></li>
                        </ul>
                        </div> -->
                    </div>
                    </div>
                </div>
                </div>
            </div>
            @endforeach
            <div class="col-lg-12">
                <div class="main-button">
                <a href="blog.html">View All Posts</a>
                </div>
            </div>
            </div>
        </div>
        </div>
        @include('blog::sidebar')
    </div>
    </div>
</section>