@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row margin-middle">
            <h1 class="text-center">{{ $post->title }}</h1>
            <div class="text-center text-muted">
                <span>{{ $post->created_at }}</span>
            </div>
        </div>
        <div class="row margin-middle">
            <div class="col-md-12">
                {!! $post->content !!}
            </div>
        </div>
    </div>
@endsection