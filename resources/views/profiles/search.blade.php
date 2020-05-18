<?php
use App\Profile;
?>
@extends('layouts.app')
@section('content')
<div class="container"> 
    @foreach ($users as $user)
        <?php
        $follows = (auth()->user()) ? auth()->user()->following->contains($user->id) : false;
        $profile = Profile::where('id', '=', $user->id)->get();
        ?>
        <div class="col-8">
            <div class="d-flex">
                <div>
                    <a href="/profile/{{ $user->id }}">
                        <img src="/storage/{{ $profile[0]->image }}" class="rounded-circle" width="50px">
                    </a>
                </div>
                <div class="pl-3 pr-1">
                    <div class="font-weight-bold">
                        <a href="/profile/{{ $user->id }}">
                            <span class="text-dark">{{ $user->name }}</span>
                        </a>
                    </div>
                    <div class="d-flex">
                        {{$profile[0]->description}}
                        <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                    </div>
                </div>
            </div>
            
        </div>
    @endforeach
</div>
@endsection
