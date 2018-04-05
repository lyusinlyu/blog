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
                            <li><a href="/">Jensen</a></li>
                            <li><a href="posts">My Posts</a></li>
                            <!-- <li><a href="#">Messages</a></li> -->                           
                        </ul>                  
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav> 
        </header>
        <section id="blog-section" >
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-10">
                        
                        <div class="row post_row">
                            <div class="col-md-offset-1 col-md-10">
                                <button type="button" class="btn btn-default create_btn" data-toggle="modal" data-target=".post-modal" ><i class="fa fa-plus-circle" aria-hidden="true"></i>Create Post</button>
                                <div class="modal fade post-modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                                    <div class="modal-dialog modal-sm" role="document">
                                        <div class="modal-content">
                                            <form class="form-horizontal register_form">                                                               
                                           
                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <input type="text" class="form-control" id="inputCategoryTitle" placeholder="Input Category Title">
                                                    </div>
                                                </div> 
                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <textarea class="form-control" rows="5" id="comment" placeholder= "Input Post's Content"></textarea>
                                                    </div>
                                                </div>                                                                        
                                                <div class="form-group">
                                                    <div class="col-sm-10">
                                                        <button type="submit" class="btn btn-default submit_btn">Create</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <aside class="post_cont">
                                    <div class="category_cont">
                                        <h3>Earth Today</h3>
                                    </div>
                                    <img src="{{url('images/posts_img/BB.jpg')}}" class="img-responsive post_img">
                                    <div class="content-title">
                                        <div class="text-center caption caption_show_post">
                                            <h3>Post Title</h3>
                                            <div>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.ras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.ras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.ras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.ras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.ras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</div>                                           
                                        </div>
                                    </div>
                                    <div class="content-footer">
                                        <img class="user-small-img" src="{{url('images/users_chat/user2.jpg')}}">
                                        <span style="font-size: 16px;color: #fff;">Jensen Ackles</span>
                                        <span class="pull-right">
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> 30</a>
                                            <a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-heart"></i> 20</a>                  
                                        </span>
                                    </div>
                                </aside>
                                <div class="btn-group edit_delete_btn_group pull-right" role="group">
                                    <button type="button" class="btn btn-default btn_edit">Edit</button>             
                                    <button type="button" class="btn btn-default btn_delete">Delete</button>
                                </div>
                                <section class="add_comments">
                                    <form class="">
                                        <div class="form-group">
                                            <textarea class="form-control" rows="5" placeholder="Add Your Comment"></textarea>
                                        </div>                              
                                        
                                        <button type="submit" class="btn create_post_btn pull-right">Comment</button>

                                    </form>
                                </section>
                                <hr class="horizontal">
                                <section class="comments">
                                    <div class="row comments_cont">
                                        <div class="col-md-2">
                                            <div class="comment_user">
                                                <img class="user-small-img img-circle" src="{{url('images/users_chat/user2.jpg')}}" width="50px" height="50px">
                                                <span style="font-size: 16px;">@nickname</span>
                                            </div>
                                        </div>
                                        <div class="col-md-9 comment_text">
                                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.ras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.<span class="comment_date">12.26.2018</span></p>
                                        </div>
                                    </div>
                                    <div class="row comments_cont">
                                        <div class="col-md-2">
                                            <div class="comment_user">
                                                <img class="user-small-img img-circle" src="{{url('images/users_chat/user2.jpg')}}" width="50px" height="50px">
                                                <span style="font-size: 16px;">@nickname</span>
                                            </div>
                                        </div>
                                        <div class="col-md-9 comment_text">
                                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.ras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.<span class="comment_date">12.26.2018</span></p>
                                        </div>
                                    </div>
                                    <div class="row comments_cont">
                                        <div class="col-md-2">
                                            <div class="comment_user">
                                                <img class="user-small-img img-circle" src="{{url('images/users_chat/user2.jpg')}}" width="50px" height="50px">
                                                <span style="font-size: 16px;">@nickname</span>
                                            </div>
                                        </div>
                                        <div class="col-md-9 comment_text">
                                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.ras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.<span class="comment_date">12.26.2018</span></p>
                                        </div>
                                    </div>
                                    <div class="row comments_cont">
                                        <div class="col-md-2">
                                            <div class="comment_user">
                                                <img class="user-small-img img-circle" src="{{url('images/users_chat/user2.jpg')}}" width="50px" height="50px">
                                                <span style="font-size: 16px;">@nickname</span>
                                            </div>
                                        </div>
                                        <div class="col-md-9 comment_text">
                                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.ras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.<span class="comment_date">12.26.2018</span></p>
                                        </div>
                                    </div>
                                    <div class="row comments_cont">
                                        <div class="col-md-2">
                                            <div class="comment_user">
                                                <img class="user-small-img img-circle" src="{{url('images/users_chat/user2.jpg')}}" width="50px" height="50px">
                                                <span style="font-size: 16px;">@nickname</span>
                                            </div>
                                        </div>
                                        <div class="col-md-9 comment_text">
                                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.ras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.<span class="comment_date">12.26.2018</span></p>
                                        </div>
                                    </div>
                                </section>
                            </div>
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
                                    <p class="user_name">Jensen AcklesAckles</p>
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
        </section>
        <script type="text/javascript" src="{{url('js/jQuery_3.3.1.js')}}"></script>
        <script type="text/javascript" src="{{url('js/bootstrap.min.js')}}"></script>
    </body>
</html>