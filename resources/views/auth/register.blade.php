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
                        <h2>Register</h2>
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
                                <button type="submit" class="btn btn-default submit_btn">Register</button>
                            </div>
                        </div>
                        <p class="form_link">Have an account? <a href="/login">Please Login <span class="fa fa-long-arrow-right"></span></a></p>
                    </form>
                </div>
            </div>
        </section>
    </body>
</html>