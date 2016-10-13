@extends('layouts.app')

@section('content')
    <div id="carousel-generic" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="/image/news01.jpg" class="img-responsive" width="100%" alt="...">
                <div class="carousel-caption">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid news">
        <div class="container">
            <div class="row margin-middle">
                @foreach($posts as $post)
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <div class="news-box">
                                <a href="{{ url('/news') . '/' . $post->id }}">
                                <img src="{{ '/storage/' . $post->cover_image }}" class="img-responsive">
                                <div class="news-boxbg">
                                </div>
                                </a>
                            </div>
                            <div class="caption">
                                <p class="text-muted">
                                    {{ str_limit($post->created_at, 10, '') }}
                                </p>
                                <a href="{{ url('/news') . '/' . $post->id }}">
                                <h4>{{ $post->title }}</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection