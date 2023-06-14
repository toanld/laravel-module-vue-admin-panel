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
                    <li><a href="{{route('detail', ['category_id' => $item->category_id, 'title' => $item->slug, 'id' => $item->id])}}">
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