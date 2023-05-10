@extends('blog::layouts.master')

@section('content')
    

    <!-- Header -->
    @include('blog::header')

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="heading-page header-text">
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-content">
                <h4>Recent Posts</h4>
                <h2>Our Recent Blog Entries</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    
    <!-- Banner Ends Here -->

    <section class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="main-content">
              <div class="row">
                <div class="col-lg-8">
                  <span>Stand Blog HTML5 Template</span>
                  <h4>Creative HTML Template For Bloggers!</h4>
                </div>
                <div class="col-lg-4">
                  <div class="main-button">
                    <a href="https://templatemo.com/tm-551-stand-blog" target="_parent">Download Now!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="blog-posts grid-system">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">
                @foreach($blogs->items() as $item)
                <div class="col-lg-6">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <img src="/storage/{{$item->image}}" alt="">
                    </div>
                    <div class="down-content">
                      <span>{{$item->category_name}}</span>
                        <a href="{{route('detail', ['category_id' => $item->category_id, 'title' => $item->slug, 'id' => $item->id])}}">
                        <h4 class="title" title="{{$item->title}}">{{$item->title}}</h4>
                        </a>
                      <ul class="post-info">
                        <li><a href="#">{{$item->user_name}}</a></li>
                        <li><a href="#">{{\Carbon\Carbon::parse($item->publish_date)->format('d/m/Y')}}</a></li>
                        <li><a href="#">12 Comments</a></li>
                      </ul>
                      <div class="teaser"><p>{{$item->teaser}}</p></div>
                      <div class="post-options">
                        <div class="row">
                          <div class="col-lg-12">
                            <ul class="post-tags">
                              <li><i class="fa fa-tags"></i></li>
                              @foreach($item->tags()->limit(2)->get() as $tag)
                              <li><a href="#">{{$tag->name}}</a>,</li>
                              @endforeach
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
                
                <div class="col-lg-12">
                  <ul class="page-numbers">
                    @if($blogs->currentPage() != 1)
                        <li><a href="{{ $blogs->url($blogs->currentPage()-1) }}"><i class="fa fa-angle-double-left"></i></a></li>
                    @endif
                    @for($i=1; $i<=$blogs->lastPage(); $i++)
                        @if($i>=max($blogs->currentPage()-2, 1) && $i<=min($blogs->currentPage()+2, $blogs->lastPage()))
                            <li class="{{ ($blogs->currentPage() == $i) ? ' active' : '' }}"><a href="{{ $blogs->url($i) }}">{{ $i }}</a></li>
                        @endif
                    @endfor
                    @if($blogs->currentPage() != $blogs->lastPage())
                        <li><a href="{{ $blogs->url($blogs->currentPage()+1) }}"><i class="fa fa-angle-double-right"></i></a></li>
                    @endif
                    
                  </ul>
                </div>
              </div>
            </div>
          </div>
          
          @include('blog::sidebar')
        </div>
      </div>
    </section>
    
    @include('blog::footer')
@endsection
