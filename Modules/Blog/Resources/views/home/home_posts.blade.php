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
                    <img src="assets/images/blog-post-01.jpg" alt="">
                </div>
                <div class="down-content">
                    <span>{{$item->category_name}}</span>
                    <a href="post-details.html"><h4>{{$item->title}}</h4></a>
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
        <div class="col-lg-4">
        <div class="sidebar">
            <div class="row">
            <div class="col-lg-12">
                <div class="sidebar-item search">
                <form id="search_form" name="gs" method="GET" action="#">
                    <input type="text" name="q" class="searchText" placeholder="type to search..." autocomplete="on">
                </form>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="sidebar-item recent-posts">
                <div class="sidebar-heading">
                    <h2>Recent Posts</h2>
                </div>
                <div class="content">
                    <ul>
                    @foreach($recent_posts as $item)
                    <li><a href="post-details.html">
                        <h5>{{$item->title}}</h5>
                        <span>{{\Carbon\Carbon::parse($item->publish_date)->format('d/m/Y')}}</span>
                    </a></li>
                    @endforeach
                    </ul>
                </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="sidebar-item categories">
                <div class="sidebar-heading">
                    <h2>Danh mục</h2>
                </div>
                <div class="content">
                    <ul>
                    @foreach($categoryRoot as $item)
                    <li><a href="#">- {{$item['name']}}</a></li>
                    @endforeach
                    </ul>
                </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="sidebar-item tags">
                <div class="sidebar-heading">
                    <h2>Tag</h2>
                </div>
                <div class="content">
                    <ul>
                    @foreach($tags as $item)
                    <li><a href="#">{{$item->name}}</a></li>
                    @endforeach
                    </ul>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>