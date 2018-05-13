@extends('layouts.app')
@section('content')
    @include('errors.messages')
    <section class="section_messages">
        <div class="row">
            <div class="col-md-10">
                @foreach($messages as $message)
                    <ul class="msgs_ul_cont">
                    @if($message->from_user_id === Auth::user()->id)
                        <li>
                            <div class="auth_user_message macro">
                                <div class="user_avatar">
                                    <img src="/images/users_chat/user2.jpg" class="img-circle" width="50">
                                </div>
                                <div class="text_l text">
                                    <p>
                                        {{ $message->content }}
                                    </p>
                                </div>
                            </div>
                        </li>
                    @else
                        <li>
                            <div class="other_user_message macro">
                                <div class="text_r text">
                                    <p>
                                        {{ $message->content }}
                                    </p>
                                </div>
                                <div class="user_avatar">
                                    <img src="/images/users_chat/user2.jpg" class="img-circle" width="50">
                                </div>
                            </div>
                        </li>
                    @endif
                    </ul>
                @endforeach
            </div>
        </div>
    </section>
    <section class="section_write_message">
        <div class="row">
            <div class="col-md-10">
                <form method="post" action="{{ url('/conversations/'.$to_user_id) }}">
                    @csrf
                    <textarea class="form-control" rows="5" name="content" placeholder="Write Something..."></textarea>
                    <button type="submit" class="btn create_post_btn pull-right">SEND</button>
                </form>
            </div>
        </div>
    </section>
@endsection
