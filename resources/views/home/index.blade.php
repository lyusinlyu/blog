@extends('layouts.app')
@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <section id="blog-section" >
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10">
                    <div class="row post_row">
                        @if($posts)
                            @foreach($posts as $post)
                                <div class="col-md-4">
                                    <aside>
                                        <div class="category_cont">
                                            <h3>{{ $post->category['title'] }}</h3>
                                        </div>
                                        <img src="{{url('images/posts_img/BB.jpg')}}" class="img-responsive">
                                        <div class="content-title">
                                            <div class="text-center caption">
                                                <h3>{{ $post->title }}</h3>
                                                <div>{{ $post->content }}</div>
                                            </div>
                                            <a href="/post/{{ $post->user_id }}/{{ $post->id }}" class="show_more">Show More<span class="fa fa-long-arrow-right"></span></a>
                                        </div>
                                        <div class="content-footer">
                                            <img class="user-small-img" src="{{url('images/users_chat/user2.jpg')}}">
                                            <span>{{ $post->user['name'] }}</span>
                                            <span class="pull-right">
                                                <a href="#" data-toggle="tooltip" data-placement="left" title="Comments">
                                                    <i class="fa fa-comments" ></i>
                                                {{ $post->comments->count() }}</a>
                                                <a href="#" data-toggle="tooltip" data-placement="right" title="Loved">
                                                    <i class="fa fa-heart"></i>
                                                {{ $post->likes->count() }}</a>
                                            </span>
                                            <div class="user-ditels">
                                                <div class="user-img"><img src="{{url('images/users_chat/user2.jpg')}}"></div>
                                                <span class="user-full-ditels">
                                                    <h3>{{ $post->user['name'] }}</h3>
                                                    <p>Web & Graphics Disigner</p>
                                                </span>
                                                <div class="social-icon">
                                                    <a href="#">
                                                        <i class="fa fa-facebook" data-toggle="tooltip" data-placement="bottom" title="Facebook"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="fa fa-twitter" data-toggle="tooltip" data-placement="bottom" title="Twitter"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="fa fa-google-plus" data-toggle="tooltip" data-placement="bottom" title="Google Plus"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="fa fa-youtube" data-toggle="tooltip" data-placement="bottom" title="Youtube"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="fa fa-github" data-toggle="tooltip" data-placement="bottom" title="Github"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </aside>
                                </div>
                            @endforeach

                        @endif
                    </div>

                    <div class="pager_cont">
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

