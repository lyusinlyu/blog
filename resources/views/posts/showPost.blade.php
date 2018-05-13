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
                                        <form class="form-horizontal register_form" method="post" action="{{ url('/posts') }}">
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

                            <div class="modal fade edit-post-modal" id="edit-post-modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                                <div class="modal-dialog modal-sm" role="document">
                                    <div class="modal-content">
                                        <form class="form-horizontal register_form" method="post" action="{{ url('/posts/'.$post->id) }}">
                                            <input name="_method" type="hidden" value="PUT">
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
                                        <button type="button" class="btn btn-default btn_edit" data-toggle="modal" data-target="#edit-post-modal">Edit</button>
                                        <form action="{{ url('/posts/'.$post->id) }}" method="post">
                                            <input type="hidden" name="_method" value="delete" />
                                            @csrf
                                            <button type="submit" class="btn btn-default btn_delete pull-right">Delete</button>
                                        </form>
                                    </div>
                                @endif
                                <div class="pull-right like_img">
                                    <form action="{{ url('/posts/'.$post->id.'/likes') }}" method="post">
                                       @csrf
                                       <button type="submit" class="like_btn"><img src="{{url('images/posts_img/like.jpg')}}" width="25" alt="LIKE"></button>
                                    </form>
                                    <form action="{{ url('/posts/'.$post->id.'/likes') }}" method="post">
                                        <input type="hidden" name="_method" value="delete" />
                                        @csrf
                                        <button type="submit" class="like_btn"><img src="{{url('images/posts_img/unlike.jpg')}}" width="25" alt="UNLIKE"></button>
                                    </form>
                                </div>
                                <section class="add_comments">
                                    <form method="post" action="{{ url('posts/'.$post->id.'/comments') }}">
                                        @csrf
                                        <div class="form-group">
                                            <textarea class="form-control" rows="5" name="comment" placeholder="Add Your Comment"></textarea>
                                        </div>
                                        <button type="submit" class="btn create_post_btn pull-right">Comment</button>
                                    </form>
                                </section>
                                <hr class="horizontal">
                                @if($comments)
                                    <section class="comments">
                                        @foreach($comments as $comment)
                                            <div class="row comments_cont">
                                                <div class="col-md-2">
                                                    <div class="comment_user">
                                                        <img class="user-small-img img-circle" src="{{url('images/users_chat/user2.jpg')}}" width="50px" height="50px">
                                                        <span>{{ $comment->user['nickname'] }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-9 comment_text" id="{{$comment->id}}">
                                                    <p>{{ $comment->content }}<span class="comment_date">{{
                                                    $comment->created_at
                                                    }}</span></p>
                                                </div>
                                            </div>
                                            @if( $comment->user_id === Auth::user()->id )
                                                <div class="comment_btn_wrapper">
                                                    <button  onclick="editComment({{$comment->id}})" class="comm_edit_btn">Edit</button>
                                                    <form action="{{ url('/posts/'.$comment->post_id.'/comments/'.$comment->id) }}" method="post">
                                                        <input type="hidden" name="_method" value="delete" />
                                                        @csrf
                                                        <button type="submit">Delete</button>
                                                    </form>
                                                </div>
                                            @endif

                                        @endforeach
                                    </section>
                                    <div class="pager_cont">
                                        {{ $comments->links() }}
                                    </div>
                                @endif
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        window.comments = {!! json_encode($comments) !!};
        function editComment(commId) {
            var commCont = $('#'+commId);
            commCont.html('');
            for (var i = 0; i < comments['data'].length; i++) {
                if (comments['data'][i]['id'] === commId) {
                    commCont.append('<form method="post" action="/posts/'+comments["data"][i]["post_id"]+'/comments/'+commId+'"><input type="hidden" name="_method" value="put" />@csrf<textarea class="form-control edit_comment_area" rows="3" name="comment">'+comments['data'][i]["content"]+'</textarea><button class="edit_comment_btn" type="submit">OK</button></form>');
                }
            }
        }
    </script>
@endsection


