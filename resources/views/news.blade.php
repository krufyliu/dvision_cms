@extends('layouts.app')

@section('content')

    <div class="main news">
        <div class="new section-01">
            <div class="container">
                <div class="content">
                    <div class="text_panel">
                        <span class="title">NEWS</span>
                        <p class="txt">VR行业新闻动态</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="new section-02">
            <div class="container">
                <div class="content">
                    <div class="text_panel">
                        <ul class="figs">
                            @foreach($posts as $post)
                                <li class="fig">
                                    <div class="icons" style="background-image: url({{ '/storage/' . $post->cover_image }})">
                                    </div>
                                    <div class="intro">
                                      <p class="txt">{{ str_limit($post->created_at, 10, '') }}</p>
                                        <a href="{{ !empty($post->link) ? $post->link : '#' }}" target="{{ !empty($post->link) ? '_blank' : '' }}" rel="nofollow" title="{{ $post->title }}">
                                            <span class="title">{{ $post->title }}</span>
                                        </a>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection