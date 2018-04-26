@extends('layouts.app')
@section('content')
@include('errors.messages')

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
                                        <form class="form-horizontal register_form" method="post" action="{{ url('/create') }}">
                                            @csrf
                                            @if($categories)
                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <label for="sel1">Select Category</label>
                                                        <select class="form-control" id="category_select" name = "category">
                                                            @foreach($categories as $category)
                                                                <option>{{ $category->title }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            @endif

                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" id = "inputTitle" name="title" placeholder="Input post's title">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <textarea class="form-control" rows="5" placeholder= "Input post's content" id = "inputContent" name="content"></textarea>
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

                            <div class="modal fade edit-post-modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                                <div class="modal-dialog modal-sm" role="document">
                                    <div class="modal-content">
                                        <form class="form-horizontal register_form" method="post" action="{{ url('/edit') }}">
                                            @csrf
                                            @if($categories)
                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <label for="sel1">Select Category</label>
                                                        <select class="form-control" id="category_select" name = "category">
                                                            @foreach($categories as $category)
                                                                <option @if($category->id === $post->category['id']) selected @endif>{{ $category->title }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            @endif
                                            <input type="hidden" class="form-control" id = "post_id" name="id" value="{{ $post->id }}">
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" id = "inputTitle" name="title" value="{{ $post->title }}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <textarea class="form-control" rows="5"   id = "inputContent" name="content">{{ $post->content }}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-10">
                                                    <button type="submit" class="btn btn-default submit_btn">Edit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            @if($post)
                                <aside class="post">
                                    <div class="category_cont">
                                        <h3>{{ $post->category['title'] }}</h3>
                                    </div>
                                    <img src="{{url('images/posts_img/BB.jpg')}}" class="img-responsive post_img">
                                    <div class="content-title">
                                        <div class="text-center">
                                            <h3>{{ $post->title }}</h3>
                                            <div class="post_cont">{{ $post->content }}</div>
                                        </div>
                                    </div>
                                    <div class="content-footer">
                                        <img class="user-small-img" src="{{url('images/users_chat/user2.jpg')}}">
                                        <span>{{ $user->name }} {{ $user->surname }}</span>
                                        <span class="pull-right">
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> {{ $post->comments->count() }}</a>
                                            <a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-heart"></i>{{ $post->likes->count() }}</a>
                                        </span>
                                    </div>
                                </aside>
                                @if($user->id === Auth::id())
                                    <div class="btn-group edit_delete_btn_group pull-right" role="group">
                                        <button type="button" class="btn btn-default btn_edit" data-toggle="modal" data-target=".edit-post-modal">Edit</button>
                                        <a href="/delete/{{ $post->id }}"><button type="button" class="btn btn-default btn_delete">Delete</button></a>
                                    </div>
                                @endif
                                <section class="add_comments">
                                    <form class="">
                                        <div class="form-group">
                                            <textarea class="form-control" rows="5" placeholder="Add Your Comment"></textarea>
                                        </div>

                                        <button type="submit" class="btn create_post_btn pull-right">Comment</button>

                                    </form>
                                </section>
                                <hr class="horizontal">
                                @if($comments)
                                    @foreach($comments as $comment)
                                        <section class="comments">
                                            <div class="row comments_cont">
                                                <div class="col-md-2">
                                                    <div class="comment_user">
                                                        <img class="user-small-img img-circle" src="{{url('images/users_chat/user2.jpg')}}" width="50px" height="50px">
                                                        <span>{{ $comment->user['nickname'] }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-9 comment_text">
                                                    <p>{{ $comment->content }}<span class="comment_date">{{
                                                       $comment->created_at
                                                    }}</span></p>
                                                </div>
                                            </div>
                                        </section>
                                    @endforeach
                                @endif
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
