<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="{{url('css/normalize.css')}}"/>
        <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}"/>
        <link rel="stylesheet" href="{{url('css/font-awesome.min.css')}}"/>
        <link rel="stylesheet" href="{{url('css/navbar.css')}}"/>
        <link rel="stylesheet" href="{{url('css/chat_styles.css')}}"/>
        <link rel="stylesheet" href="{{url('css/form_styles.css')}}"/>
        <link rel="stylesheet" href="{{url('css/posts.css')}}"/>
        <link rel="stylesheet" href="{{url('css/style.css')}}"/>

        <!--Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i,800" rel="stylesheet">

        <script src="https://use.fontawesome.com/07b0ce5d10.js"></script>
    </head>

    <body>
        <header class="header">
            <nav class="navbar navbar-default">
                <div class="container-fluid">                
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>                  
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="/home">Home</a></li>
                            <li class="active"><a href="/">Jensen</a></li>
                            <li><a href="/posts">My Posts</a></li>
                            <!-- <li><a href="#">Messages</a></li> -->                           
                        </ul>                  
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav> 

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
                <div class="col-md-2">
                    <div class="all_users_sidebar">
                        <ul class="sidebar_users">
                            <div class="topnav">                                
                                <div class="search-container">
                                    <form action="" method="post">
                                        <input type="text" placeholder="Search..." name="search" maxlength="17">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <li><a href="#">
                                <div class="user">
                                    <img src="{{url('images/users_chat/user2.jpg')}}" class="user_img img-circle">
                                    <p class="user_name">Jensen AcklesAcklesAckles</p>
                                </div>
                            </a></li>
                             <li><a href="#">
                                <div class="user">
                                    <img src="{{url('images/users_chat/user2.jpg')}}" class="user_img img-circle">
                                    <p class="user_name">Jensen Ackles</p>
                                </div>
                            </a></li>
                             <li><a href="#">
                                <div class="user">
                                    <img src="{{url('images/users_chat/user2.jpg')}}" class="user_img img-circle">
                                    <p class="user_name">Jensen Ackles</p>
                                </div>
                            </a></li>
                             <li><a href="#">
                                <div class="user">
                                    <img src="{{url('images/users_chat/user2.jpg')}}" class="user_img img-circle">
                                    <p class="user_name">Jensen Ackles</p>
                                </div>
                            </a></li>
                             <li><a href="#">
                                <div class="user">
                                    <img src="{{url('images/users_chat/user2.jpg')}}" class="user_img img-circle">
                                    <p class="user_name">Jensen Ackles</p>
                                </div>
                            </a></li>
                             <li><a href="#">
                                <div class="user">
                                    <img src="{{url('images/users_chat/user2.jpg')}}" class="user_img img-circle">
                                    <p class="user_name">Jensen Ackles</p>
                                </div>
                            </a></li>
                             <li><a href="#">
                                <div class="user">
                                    <img src="{{url('images/users_chat/user2.jpg')}}" class="user_img img-circle">
                                    <p class="user_name">Jensen Ackles</p>
                                </div>
                            </a></li>
                             <li><a href="#">
                                <div class="user">
                                    <img src="{{url('images/users_chat/user2.jpg')}}" class="user_img img-circle">
                                    <p class="user_name">Jensen Ackles</p>
                                </div>
                            </a></li>
                             <li><a href="#">
                                <div class="user">
                                    <img src="{{url('images/users_chat/user2.jpg')}}" class="user_img img-circle">
                                    <p class="user_name">Jensen Ackles</p>
                                </div>
                            </a></li>
                             <li><a href="#">
                                <div class="user">
                                    <img src="{{url('images/users_chat/user2.jpg')}}" class="user_img img-circle">
                                    <p class="user_name">Jensen Ackles</p>
                                </div>
                            </a></li>
                             <li><a href="#">
                                <div class="user">
                                    <img src="{{url('images/users_chat/user2.jpg')}}" class="user_img img-circle">
                                    <p class="user_name">Jensen Ackles</p>
                                </div>
                            </a></li>
                             <li><a href="#">
                                <div class="user">
                                    <img src="{{url('images/users_chat/user2.jpg')}}" class="user_img img-circle">
                                    <p class="user_name">Jensen Ackles</p>
                                </div>
                            </a></li>
                             <li><a href="#">
                                <div class="user">
                                    <img src="{{url('images/users_chat/user2.jpg')}}" class="user_img img-circle">
                                    <p class="user_name">Jensen Ackles</p>
                                </div>
                            </a></li>
                        </ul>
                    </div>
                </div>             
            </div>
        </header>

        <section class="section_form col-md-9">
            <div class="row">
                <div class="col-md-5">
                    <form class="form-horizontal">
                        <h2>About Me</h2>
                        <div class="form-group">
                            <!-- <label for="InputName" class="col-sm-2 control-label">Name</label> -->
                            <div class="col-sm-12">
                              <input type="name" class="form-control" id="InputName" placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <!-- <label for="InputSurname" class="col-sm-2 control-label">Surname</label> -->
                            <div class="col-sm-12">
                               <input type="text" class="form-control" id="InputSurname" placeholder="Surname">
                            </div>
                        </div>
                        <div class="form-group">
                            <!-- <label for="InputNickname" class="col-sm-2 control-label">Nickname</label> -->
                            <div class="col-sm-12">
                               <input type="text" class="form-control" id="InputNickname" placeholder="Nickname">
                            </div>
                        </div>
                        <div class="form-group">
                            <!-- <label for="inputEmail3" class="col-sm-2 control-label">Email</label> -->
                            <div class="col-sm-12">
                              <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <!-- <label for="inputPassword3" class="col-sm-2 control-label">Password</label> -->
                            <div class="col-sm-12">
                                <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="gender_form_group">
                                <!-- <label for="InputGender">Gender</label> -->
                                <label class="radio-inline">
                                    <input type="radio" name="inlineRadioOptions" id="InputGender1" value="male"> Male
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="inlineRadioOptions" id="InputGender2" value="female"> Female
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="date" class="form-control" name="bday">
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
                </div>
            </div>
        </section>
        <script type="text/javascript" src="{{url('js/jQuery_3.3.1.js')}}"></script>
        <script type="text/javascript" src="{{url('js/bootstrap.min.js')}}"></script>
    </body>
</html>
