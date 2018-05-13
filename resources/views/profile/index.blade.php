@extends('layouts.app')
@section('content')
    @include('errors.messages')
    <header class="header">
        <div class="user_info_cont row">
            <div class="user_bg_area col-md-10">
                <div class="user_info_area col-md-4 col-sm-4 col-xs-12">
                    <div class="user_info_wrapper">
                        <img class="img-circle user_pict" src="{{url('images/bale.jpg')}}" width="150" height="150">
                        <h2 class="nickname"> {{ $user['nickname'] }}</h2>
                        <h2 class="user_profile_name">{{ $user['name'] }}</h2>
                        <h2 class="user_profile_surname">{{ $user['surname'] }}</h2>
                        <p class="post_count">20 posts</p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @if($user->id === Auth::id())
        <section class="section_form col-md-9">
            <div class="row">
                <div class="col-md-5">
                    <form method="post" action="{{ url('profiles/me') }}" class="form-horizontal">
                        @csrf
                        <h2>About Me</h2>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="name" class="form-control" id="InputName" value="{{ $user->name }}" name="name">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="text" class="form-control"  value="{{ $user->surname }}" name="surname">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="text" class="form-control"  value="{{ $user->nickname }}" name="nickname">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="email" class="form-control"  value="{{ $user->email }}" name="email">
                            </div>
                        </div>
                        <div class="form-group gender_form_group row">
                            <div>
                                <label class="radio-inline col-form-label">
                                    <input type="radio" name="gender" value="male" @if($user->gender == 'male')checked @endif>Male
                                </label>
                                <label class="radio-inline col-form-label">
                                    <input type="radio" name="gender" value="female" @if($user->gender == 'female')checked @endif>Female
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="date" class="form-control" name="date_of_birth" @if($user->date_of_birth) value="{{ $user->date_of_birth }}" @endif>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-default submit_btn">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    @else
        <section class="user_about col-md-3">
            <div class="row">
                <div>
                    <h2>About Me</h2>
                    <p>{{ $user->name }}</p>
                    <p>{{ $user->surname }}</p>
                    <p>{{ $user->nickname }}</p>
                    <p>{{ $user->email }}</p>
                    <p>{{ $user->gender }}</p>
                    <p>{{ $user->date_of_birth }}</p>
                </div>
            </div>
        </section>
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
                                            <a href="/posts/{{ $post->id }}" class="show_more">Show More<span class="fa fa-long-arrow-right"></span></a>
                                        </div>
                                        <div class="content-footer">
                                            <img class="user-small-img" src="{{url('images/users_chat/user2.jpg')}}">
                                            <span>{{ $user->name }}</span>
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
                                                    <h3>{{ $user->name }}</h3>
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
