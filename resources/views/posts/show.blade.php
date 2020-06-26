@extends('layouts.app')

@section('content')
<div class="container"> 
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" class="w-100">
        </div>
        <div class="col-4">
            <div>
                <div class="d-flex align-items-center">
                    <div>
                        <img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle" width="50px">
                    </div>
                    <div class="pl-3 pr-1">
                        <div class="font-weight-bold">
                            <a href="/profile/{{$post->user_id}}">
                                <span class="text-dark">{{$post->user->username}}</span>
                            </a>  |
                            <a href="/profile/{{ $post->user->id }}" class="pl-1">Follow</a>
                        </div>
                    </div>
                </div>

                <hr>

                <p><span class="font-weight-bold">
                    <a href="/profile/{{$post->user_id}}">
                        <span class="text-dark">{{$post->user->username}}</span>
                    </a></span> {{$post->caption}}
                </p>
                
                <form action="/comments" method="POST">
                    @csrf
                    <textarea 
                    id="comment" 
                    placeholder="Make a comment"
                    type="text" 
                    name="comment"
                    class="form-control @error('comment') is-invalid @enderror" 
                    comment="comment" 
                    value="{{ old('comment') }}" 
                    required autocomplete="comment" autofocus></textarea>
                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                    <input type="hidden" name="username" value="{{ auth()->user()->username}}">

                    <button class="btn btn-primary mt-2 mb-3">
                        Send
                    </button>
                </form>
                @foreach ($comments as $comment)
                <p><span class="font-weight-bold">
                    <a href="/profile/{{$comment->user_id}}"> 
                        <span class="text-dark">{{ $comment->name }}</span>
                    </a></span> &nbsp;{{$comment->comment}} 
                </p>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
