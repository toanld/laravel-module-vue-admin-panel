<div class="main-banner header-text">
    <div class="container-fluid">
        <div class="owl-banner owl-carousel">
            @foreach($home_banner as $item)
            <div class="item">
                <img src="/storage/{{$item->image}}" alt="">
                <div class="item-content">
                    <div class="main-content">
                        <div class="meta-category">
                            <span>{{$item->category_name}}</span>
                        </div>
                        <a href="post-details.html"><h4>{{$item->title}}</h4></a>
                        <ul class="post-info">
                            <li><a href="#">{{$item->user_name}}</a></li>
                            <li><a href="#">{{\Carbon\Carbon::parse($item->publish_date)->format('d/m/Y')}}</a></li>
                            <li><a href="#">12 Comments</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>