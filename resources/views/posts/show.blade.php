@extends('partials.layout')
@section('title', 'Show Post')
@section('content')
        <div class="container mx-auto">
                <div class="form-control w-full">
                        <div class="label">
                            <span class="label-text">Title</span>
                        </div>
                        <p class="input input-bordered w-full">{{ $post->title }}</p>
                </div>
                <div class="form-control">
                        <div class="label">
                            <span class="label-text">Content</span>
                        </div>
                        <p class="textarea textarea-bordered h-24">{{ $post->body }}</p>
                </div>
        </div>
@endsection