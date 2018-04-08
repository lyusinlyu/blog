@extends('layouts.app')
@section('content')
    <header class="header">
    <div class="user_info_cont row">
                <div class="user_bg_area col-md-10">
                    <div class="user_info_area col-md-4 col-sm-4 col-xs-12">
                    <div class="user_info_wrapper">
                        <img class="img-circle user_pict" src="{{url('images/bale.jpg')}}" width="150" height="150">
                        <div class="user_nick">
                            <h2 class="nickname">@nickname</h2>
                            <!-- <a href="#"><button>Message</button></a> -->
                        </div>
                    </div>
                    <h2 class="username">username surname</h2>
                    <p class="post_count">20 posts</p>
                </div>
                </div>
            </div>
        </header>
        @if($data['user']->id == Auth::user()->id)
        <section class="section_form col-md-9">
            <div class="row">
                <div class="col-md-5">
                    <form method = "post" action="{{ url('/me') }}" class="form-horizontal">
                        @csrf
                        <h2>About Me</h2>
                        <div class="form-group">
                            <div class="col-sm-12">
                              <input type="name" class="form-control" id="InputName" placeholder="{{ $data['user']->name }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                               <input type="text" class="form-control" id="InputSurname" placeholder="{{ $data['user']->surname }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                               <input type="text" class="form-control" id="InputNickname" placeholder="{{ $data['user']->nickname }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                              <input type="email" class="form-control" id="inputEmail3" placeholder="{{ $data['user']->email }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group gender_form_group row">
                            <div>
                                <label class="radio-inline col-form-label">
                                    @if($data['user']->gender == 'male')
                                    <input type="radio" name="gender" id="InputGender1" value="male" checked>Male
                                    @else <input type="radio" name="gender" id="InputGender1" value="male" required>Male
                                    @endif
                                </label>
                                <label class="radio-inline col-form-label">
                                    @if($data['user']->gender == 'female')
                                    <input type="radio" name="gender" id="InputGender1" value="female" checked>Female
                                    @else <input type="radio" name="gender" id="InputGender1" value="female" required>Female
                                    @endif
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                            @if(isset($data['user']->date_of_birth) && !empty($data['user']->date_of_birth))
                                <input type="date" class="form-control" name="date_of_birth" value="{{ $data['user']->date_of_birth }}">
                            @else
                            <input type="date" class="form-control" name="date_of_birth">
                            @endif
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
                <div class="">
                    <h2>About Me</h2>
                    <p>{{ $data['user']->name }}</p>
                    <p>{{ $data['user']->surname }}</p>
                    <p>{{ $data['user']->nickname }}</p>
                    <p>{{ $data['user']->email }}</p>
                    <p>{{ $data['user']->gender }}</p>
                    <p>{{ $data['user']->date_of_birth }}</p>

                </div>
            </div>
        </section>

        @endif

        <section id="blog-section" >
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-10">
                        <div class="row post_row">
                            <div class="col-md-4">
                                <aside>
                                    <div class="category_cont">
                                        <h3>Earth Today</h3>
                                    </div>
                                    <img src="{{url('images/posts_img/BB.jpg')}}" class="img-responsive">
                                    <div class="content-title">
                                        <div class="text-center caption">
                                            <h3>Post Title</h3>
                                            <div>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</div>
                                        </div>
                                         <a href="/post" class="show_more">Show More<span class="fa fa-long-arrow-right"></span></a>
                                    </div>
                                    <div class="content-footer">
                                        <img class="user-small-img" src="{{url('images/users_chat/user2.jpg')}}">
                                        <span style="font-size: 16px;color: #fff;">Jensen Ackles</span>
                                        <span class="pull-right">
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> 30</a>
                                            <a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-heart"></i> 20</a>
                                        </span>
                                        <div class="user-ditels">
                                            <div class="user-img"><img src="{{url('images/users_chat/user2.jpg')}}"></div>
                                            <span class="user-full-ditels">
                                                <h3>Jensen Ackles</h3>
                                                <p>Web & Graphics Disigner</p>
                                            </span>
                                            <div class="social-icon">
                                                <a href="#"><i class="fa fa-facebook" data-toggle="tooltip" data-placement="bottom" title="Facebook"></i></a>
                                                <a href="#"><i class="fa fa-twitter" data-toggle="tooltip" data-placement="bottom" title="Twitter"></i></a>
                                                <a href="#"><i class="fa fa-google-plus" data-toggle="tooltip" data-placement="bottom" title="Google Plus"></i></a>
                                                <a href="#"><i class="fa fa-youtube" data-toggle="tooltip" data-placement="bottom" title="Youtube"></i></a>
                                                <a href="#"><i class="fa fa-github" data-toggle="tooltip" data-placement="bottom" title="Github"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                            <div class="col-md-4">
                                <aside>
                                    <div class="category_cont">
                                        <h3>Breaking Bad</h3>
                                    </div>
                                    <img src="{{url('images/posts_img/BB2.jpg')}}" class="img-responsive">
                                    <div class="content-title">
                                        <div class="text-center caption">
                                            <h3>Post Title</h3>
                                            <div>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</div>
                                        </div>
                                         <a href="/post" class="show_more">Show More<span class="fa fa-long-arrow-right"></span></a>
                                    </div>
                                    <div class="content-footer">
                                        <img class="user-small-img" src="{{url('images/users_chat/user2.jpg')}}">
                                        <span style="font-size: 16px;color: #fff;">Jensen Ackles</span>
                                        <span class="pull-right">
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> 30</a>
                                            <a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-heart"></i> 20</a>
                                        </span>
                                        <div class="user-ditels">
                                            <div class="user-img"><img src="{{url('images/users_chat/user2.jpg')}}" class="img-responsive"></div>
                                            <span class="user-full-ditels">
                                                <h3>Jensen Ackles</h3>
                                                <p>Web & Graphics Disigner</p>
                                            </span>
                                            <div class="social-icon">
                                                <a href="#"><i class="fa fa-facebook" data-toggle="tooltip" data-placement="bottom" title="Facebook"></i></a>
                                                <a href="#"><i class="fa fa-twitter" data-toggle="tooltip" data-placement="bottom" title="Twitter"></i></a>
                                                <a href="#"><i class="fa fa-google-plus" data-toggle="tooltip" data-placement="bottom" title="Google Plus"></i></a>
                                                <a href="#"><i class="fa fa-youtube" data-toggle="tooltip" data-placement="bottom" title="Youtube"></i></a>
                                                <a href="#"><i class="fa fa-github" data-toggle="tooltip" data-placement="bottom" title="Github"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                            <div class="col-md-4">
                                <aside>
                                    <div class="category_cont">
                                        <h3>Breaking Bad</h3>
                                    </div>
                                    <img src="{{url('images/posts_img/BB3.jpg')}}" class="img-responsive">
                                    <div class="content-title">
                                        <div class="text-center caption">
                                            <h3>Post Title</h3>
                                            <div>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</div>
                                        </div>
                                         <a href="/post" class="show_more">Show More<span class="fa fa-long-arrow-right"></span></a>
                                    </div>
                                    <div class="content-footer">
                                        <img class="user-small-img" src="{{url('images/users_chat/user2.jpg')}}">
                                        <span style="font-size: 16px;color: #fff;">Jensen Ackles</span>
                                        <span class="pull-right">
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> 30</a>
                                            <a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-heart"></i> 20</a>
                                        </span>
                                        <div class="user-ditels">
                                            <div class="user-img"><img src="{{url('images/users_chat/user2.jpg')}}" class="img-responsive"></div>
                                            <span class="user-full-ditels">
                                                <h3>Jensen Ackles</h3>
                                                <p>Web & Graphics Disigner</p>
                                            </span>
                                            <div class="social-icon">
                                                <a href="#"><i class="fa fa-facebook" data-toggle="tooltip" data-placement="bottom" title="Facebook"></i></a>
                                                <a href="#"><i class="fa fa-twitter" data-toggle="tooltip" data-placement="bottom" title="Twitter"></i></a>
                                                <a href="#"><i class="fa fa-google-plus" data-toggle="tooltip" data-placement="bottom" title="Google Plus"></i></a>
                                                <a href="#"><i class="fa fa-youtube" data-toggle="tooltip" data-placement="bottom" title="Youtube"></i></a>
                                                <a href="#"><i class="fa fa-github" data-toggle="tooltip" data-placement="bottom" title="Github"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                        </div>
                        <div class="row post_row">
                            <div class="col-md-4">
                                <aside>
                                    <div class="category_cont">
                                        <h3>Earth Today</h3>
                                    </div>
                                    <img src="{{url('images/posts_img/BB.jpg')}}" class="img-responsive">
                                    <div class="content-title">
                                        <div class="text-center caption">
                                            <h3>Post Title</h3>
                                            <div>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</div>
                                        </div>
                                         <a href="/post" class="show_more">Show More<span class="fa fa-long-arrow-right"></span></a>
                                    </div>
                                    <div class="content-footer">
                                        <img class="user-small-img" src="{{url('images/users_chat/user2.jpg')}}">
                                        <span style="font-size: 16px;color: #fff;">Jensen Ackles</span>
                                        <span class="pull-right">
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> 30</a>
                                            <a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-heart"></i> 20</a>
                                        </span>
                                        <div class="user-ditels">
                                            <div class="user-img"><img src="{{url('images/users_chat/user2.jpg')}}"></div>
                                            <span class="user-full-ditels">
                                                <h3>Jensen Ackles</h3>
                                                <p>Web & Graphics Disigner</p>
                                            </span>
                                            <div class="social-icon">
                                                <a href="#"><i class="fa fa-facebook" data-toggle="tooltip" data-placement="bottom" title="Facebook"></i></a>
                                                <a href="#"><i class="fa fa-twitter" data-toggle="tooltip" data-placement="bottom" title="Twitter"></i></a>
                                                <a href="#"><i class="fa fa-google-plus" data-toggle="tooltip" data-placement="bottom" title="Google Plus"></i></a>
                                                <a href="#"><i class="fa fa-youtube" data-toggle="tooltip" data-placement="bottom" title="Youtube"></i></a>
                                                <a href="#"><i class="fa fa-github" data-toggle="tooltip" data-placement="bottom" title="Github"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                            <div class="col-md-4">
                                <aside>
                                    <div class="category_cont">
                                        <h3>Breaking Bad</h3>
                                    </div>
                                    <img src="{{url('images/posts_img/BB2.jpg')}}" class="img-responsive">
                                    <div class="content-title">
                                        <div class="text-center caption">
                                            <h3>Post Title</h3>
                                            <div>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</div>
                                        </div>
                                         <a href="/post" class="show_more">Show More<span class="fa fa-long-arrow-right"></span></a>
                                    </div>
                                    <div class="content-footer">
                                        <img class="user-small-img" src="{{url('images/users_chat/user2.jpg')}}">
                                        <span style="font-size: 16px;color: #fff;">Jensen Ackles</span>
                                        <span class="pull-right">
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> 30</a>
                                            <a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-heart"></i> 20</a>
                                        </span>
                                        <div class="user-ditels">
                                            <div class="user-img"><img src="{{url('images/users_chat/user2.jpg')}}" class="img-responsive"></div>
                                            <span class="user-full-ditels">
                                                <h3>Jensen Ackles</h3>
                                                <p>Web & Graphics Disigner</p>
                                            </span>
                                            <div class="social-icon">
                                                <a href="#"><i class="fa fa-facebook" data-toggle="tooltip" data-placement="bottom" title="Facebook"></i></a>
                                                <a href="#"><i class="fa fa-twitter" data-toggle="tooltip" data-placement="bottom" title="Twitter"></i></a>
                                                <a href="#"><i class="fa fa-google-plus" data-toggle="tooltip" data-placement="bottom" title="Google Plus"></i></a>
                                                <a href="#"><i class="fa fa-youtube" data-toggle="tooltip" data-placement="bottom" title="Youtube"></i></a>
                                                <a href="#"><i class="fa fa-github" data-toggle="tooltip" data-placement="bottom" title="Github"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                            <div class="col-md-4">
                                <aside>
                                    <div class="category_cont">
                                        <h3>Breaking Bad</h3>
                                    </div>
                                    <img src="{{url('images/posts_img/BB3.jpg')}}" class="img-responsive">
                                    <div class="content-title">
                                        <div class="text-center caption">
                                            <h3>Post Title</h3>
                                            <div>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</div>
                                        </div>
                                         <a href="/post" class="show_more">Show More<span class="fa fa-long-arrow-right"></span></a>
                                    </div>
                                    <div class="content-footer">
                                        <img class="user-small-img" src="{{url('images/users_chat/user2.jpg')}}">
                                        <span style="font-size: 16px;color: #fff;">Jensen Ackles</span>
                                        <span class="pull-right">
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> 30</a>
                                            <a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-heart"></i> 20</a>
                                        </span>
                                        <div class="user-ditels">
                                            <div class="user-img"><img src="{{url('images/users_chat/user2.jpg')}}" class="img-responsive"></div>
                                            <span class="user-full-ditels">
                                                <h3>Jensen Ackles</h3>
                                                <p>Web & Graphics Disigner</p>
                                            </span>
                                            <div class="social-icon">
                                                <a href="#"><i class="fa fa-facebook" data-toggle="tooltip" data-placement="bottom" title="Facebook"></i></a>
                                                <a href="#"><i class="fa fa-twitter" data-toggle="tooltip" data-placement="bottom" title="Twitter"></i></a>
                                                <a href="#"><i class="fa fa-google-plus" data-toggle="tooltip" data-placement="bottom" title="Google Plus"></i></a>
                                                <a href="#"><i class="fa fa-youtube" data-toggle="tooltip" data-placement="bottom" title="Youtube"></i></a>
                                                <a href="#"><i class="fa fa-github" data-toggle="tooltip" data-placement="bottom" title="Github"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                        </div>
                        <div class="row post_row">
                            <div class="col-md-4">
                                <aside>
                                    <div class="category_cont">
                                        <h3>Earth Today</h3>
                                    </div>
                                    <img src="{{url('images/posts_img/BB.jpg')}}" class="img-responsive">
                                    <div class="content-title">
                                        <div class="text-center caption">
                                            <h3>Post Title</h3>
                                            <div>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</div>
                                        </div>
                                         <a href="/post" class="show_more">Show More<span class="fa fa-long-arrow-right"></span></a>
                                    </div>
                                    <div class="content-footer">
                                        <img class="user-small-img" src="{{url('images/users_chat/user2.jpg')}}">
                                        <span style="font-size: 16px;color: #fff;">Jensen Ackles</span>
                                        <span class="pull-right">
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> 30</a>
                                            <a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-heart"></i> 20</a>
                                        </span>
                                        <div class="user-ditels">
                                            <div class="user-img"><img src="{{url('images/users_chat/user2.jpg')}}"></div>
                                            <span class="user-full-ditels">
                                                <h3>Jensen Ackles</h3>
                                                <p>Web & Graphics Disigner</p>
                                            </span>
                                            <div class="social-icon">
                                                <a href="#"><i class="fa fa-facebook" data-toggle="tooltip" data-placement="bottom" title="Facebook"></i></a>
                                                <a href="#"><i class="fa fa-twitter" data-toggle="tooltip" data-placement="bottom" title="Twitter"></i></a>
                                                <a href="#"><i class="fa fa-google-plus" data-toggle="tooltip" data-placement="bottom" title="Google Plus"></i></a>
                                                <a href="#"><i class="fa fa-youtube" data-toggle="tooltip" data-placement="bottom" title="Youtube"></i></a>
                                                <a href="#"><i class="fa fa-github" data-toggle="tooltip" data-placement="bottom" title="Github"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                            <div class="col-md-4">
                                <aside>
                                    <div class="category_cont">
                                        <h3>Breaking Bad</h3>
                                    </div>
                                    <img src="{{url('images/posts_img/BB2.jpg')}}" class="img-responsive">
                                    <div class="content-title">
                                        <div class="text-center caption">
                                            <h3>Post Title</h3>
                                            <div>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</div>
                                        </div>
                                         <a href="/post" class="show_more">Show More<span class="fa fa-long-arrow-right"></span></a>
                                    </div>
                                    <div class="content-footer">
                                        <img class="user-small-img" src="{{url('images/users_chat/user2.jpg')}}">
                                        <span style="font-size: 16px;color: #fff;">Jensen Ackles</span>
                                        <span class="pull-right">
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> 30</a>
                                            <a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-heart"></i> 20</a>
                                        </span>
                                        <div class="user-ditels">
                                            <div class="user-img"><img src="{{url('images/users_chat/user2.jpg')}}" class="img-responsive"></div>
                                            <span class="user-full-ditels">
                                                <h3>Jensen Ackles</h3>
                                                <p>Web & Graphics Disigner</p>
                                            </span>
                                            <div class="social-icon">
                                                <a href="#"><i class="fa fa-facebook" data-toggle="tooltip" data-placement="bottom" title="Facebook"></i></a>
                                                <a href="#"><i class="fa fa-twitter" data-toggle="tooltip" data-placement="bottom" title="Twitter"></i></a>
                                                <a href="#"><i class="fa fa-google-plus" data-toggle="tooltip" data-placement="bottom" title="Google Plus"></i></a>
                                                <a href="#"><i class="fa fa-youtube" data-toggle="tooltip" data-placement="bottom" title="Youtube"></i></a>
                                                <a href="#"><i class="fa fa-github" data-toggle="tooltip" data-placement="bottom" title="Github"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                            <div class="col-md-4">
                                <aside>
                                    <div class="category_cont">
                                        <h3>Breaking Bad</h3>
                                    </div>
                                    <img src="{{url('images/posts_img/BB3.jpg')}}" class="img-responsive">
                                    <div class="content-title">
                                        <div class="text-center caption">
                                            <h3>Post Title</h3>
                                            <div>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</div>
                                        </div>
                                         <a href="/post" class="show_more">Show More<span class="fa fa-long-arrow-right"></span></a>
                                    </div>
                                    <div class="content-footer">
                                        <img class="user-small-img" src="{{url('images/users_chat/user2.jpg')}}">
                                        <span style="font-size: 16px;color: #fff;">Jensen Ackles</span>
                                        <span class="pull-right">
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> 30</a>
                                            <a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-heart"></i> 20</a>
                                        </span>
                                        <div class="user-ditels">
                                            <div class="user-img"><img src="{{url('images/users_chat/user2.jpg')}}" class="img-responsive"></div>
                                            <span class="user-full-ditels">
                                                <h3>Jensen Ackles</h3>
                                                <p>Web & Graphics Disigner</p>
                                            </span>
                                            <div class="social-icon">
                                                <a href="#"><i class="fa fa-facebook" data-toggle="tooltip" data-placement="bottom" title="Facebook"></i></a>
                                                <a href="#"><i class="fa fa-twitter" data-toggle="tooltip" data-placement="bottom" title="Twitter"></i></a>
                                                <a href="#"><i class="fa fa-google-plus" data-toggle="tooltip" data-placement="bottom" title="Google Plus"></i></a>
                                                <a href="#"><i class="fa fa-youtube" data-toggle="tooltip" data-placement="bottom" title="Youtube"></i></a>
                                                <a href="#"><i class="fa fa-github" data-toggle="tooltip" data-placement="bottom" title="Github"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                        </div>
                        <div class="pager_cont">
                            <nav aria-label="...">
                                <ul class="pager">
                                    <li class="previous disabled"><a href="#"><span aria-hidden="true">&larr;</span> Older</a></li>
                                    <li class="next"><a href="#">Newer <span aria-hidden="true">&rarr;</span></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
@endsection
