<header class="">
    <nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="{{route('home')}}"><h2>Stand Blog<em>.</em></h2></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item {{request()->route()->getName() == 'home' ? 'active' : '' }}">
            <a class="nav-link" href="{{route('home')}}">Trang chủ
                <span class="sr-only">(current)</span>
            </a>
            </li> 
            <li class="nav-item {{request()->route()->getName() == 'about' ? 'active' : '' }}" href="{{route('about')}}">
            <a class="nav-link" href="{{route('about')}}">Giới thiệu</a>
            </li>
            <li class="nav-item {{request()->route()->getName() == 'blog' ? 'active' : '' }}">
            <a class="nav-link" href="{{route('blog')}}">Blog Entries</a>
            </li>
            <!-- <li class="nav-item {{request()->route()->getName() == 'detail' ? 'active' : '' }}">
            <a class="nav-link" href="">Post Details</a>
            </li> -->
            <li class="nav-item {{request()->route()->getName() == 'contact' ? 'active' : '' }}">
            <a class="nav-link" href="{{route('contact')}}">Liên hệ</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
</header>