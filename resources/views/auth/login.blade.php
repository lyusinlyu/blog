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

        <script src="https://use.fontawesome.com/07b0ce5d10.js"></script>
    </head>

    <body>
        <section class="section_form form col-md-12">
            <div class="row">
                <div class="col-md-5">
                    <form class="form-horizontal register_form">
                        <h2>Login</h2>                        
                       
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
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-default submit_btn">Login</button>
                            </div>
                        </div>
                        <p class="form_link">Doesn't have an account? <a href="/register">Please Register <span class="fa fa-long-arrow-right"></span></a></p>
                    </form>
                </div>
            </div>
        </section>
    </body>
</html>