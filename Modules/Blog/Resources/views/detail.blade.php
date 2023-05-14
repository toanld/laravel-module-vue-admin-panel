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
                <h4>Post Details</h4>
                <h2>Single blog post</h2>
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
                    <a rel="nofollow" href="https://templatemo.com/tm-551-stand-blog" target="_parent">Download Now!</a>
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
                <div class="col-lg-12">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <img src="/storage/{{$data->image}}" alt="">
                    </div>
                    <div class="down-content">
                      <span>{{$data->category_name}}</span>
                      <a href="{{route('detail', ['category_id' => $data->category_id, 'title' => $data->slug, 'id' => $data->id])}}"><h4>{{$data->title}}</h4></a>
                      <ul class="post-info">
                        <li><a href="#">{{$data->user_name}}</a></li>
                        <li><a href="#">{{\Carbon\Carbon::parse($data->publish_date)->format('d/m/Y')}}</a></li>
                        <li><a href="#">10 Comments</a></li>
                      </ul>
                        <div class="content">
                        {!! $data->content !!}
                        </div>
                      <div class="post-options">
                        <div class="row">
                          <div class="col-6">
                            <ul class="post-tags">
                              <li><i class="fa fa-tags"></i></li>
                                @foreach($data->tags()->get() as $tag)
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
                <div class="col-lg-12">
                  <div class="sidebar-item comments">
                    <div class="sidebar-heading">
                      <h2>4 comments</h2>
                    </div>
                    <div class="content">
                      <ul>
                        @foreach($data->comment()->paginate(5) as $item)
                        <li>
                          <div class="author-thumb">
                            <img src="/assets/images/user.jpeg" alt="">
                            <!-- <i class="fa fa-user" aria-hidden="true"></i> -->
                          </div>
                          <div class="right-content">
                            <h4>{{$item->user->name}}<span>{{\Carbon\Carbon::parse($item->updated_at)->format('d/m/Y')}}</span></h4>
                            <p>{{$item->content}}</p>
                          </div>
                        </li>
                        @endforeach
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item submit-comment" id="submit-comment">
                    <div class="sidebar-heading">
                      <h2>Your comment</h2>
                    </div>
                    <div class="content">
                      <!-- <form id="comment" method="post"> -->
                        <div class="row">
                          <!-- <div class="col-md-6 col-sm-12">
                            <fieldset>
                              <input name="name" type="text" id="name" placeholder="Your name" required="">
                            </fieldset>
                          </div>
                          <div class="col-md-6 col-sm-12">
                            <fieldset>
                              <input name="email" type="text" id="email" placeholder="Your email" required="">
                            </fieldset>
                          </div> 
                          <div class="col-md-12 col-sm-12">
                            <fieldset>
                              <input name="subject" type="text" id="subject" placeholder="Subject">
                            </fieldset>
                          </div> -->
                          <div class="col-lg-12">
                            <fieldset>
                              <textarea name="message" rows="6" id="message" placeholder="Type your comment" required=""></textarea>
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <button type="submit" id="form-submit" class="main-button" data-id="{{$data->id}}">Submit</button>
                            </fieldset>
                          </div>
                        </div>
                      <!-- </form> -->
                    </div>
                  </div>
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
