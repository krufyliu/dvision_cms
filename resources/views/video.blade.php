@extends('layouts.app')

@section('content')

    <div class="main video">
        <div class="vdo section-01">
            <div class="container">
                <div class="content">
                    <div class="text_panel">
                        <span class="title">VR VIDEO</span>
                        <p class="txt">这里都是你想要的VR视频内容</p>
                    </div>
                </div>
            </div>
        </div>

        @foreach($videos as $index=>$video)
            <div class="vdo section-02" >
                <div class="blur" style="background-image: url({{ '/storage/' . $video->cover_image }})"></div>
                <div class="container">
                    <div class="content {{ $index%2 == 0 ? 'left' : 'right' }}">
                        <a href="{{ url('/video') . '/' . $video->id }}" title="{{ $video->title }}">
                            <div class="icon" style="background-image: url({{ '/storage/' . $video->cover_image }})">
                                <img src="/img/icon-play.png" alt="icon-play" width="76" class="icon-play">
                            </div>
                        </a>
                      <div class="text_panel">
                            <span class="title">{{ $video->title }}</span>
                            <p class="txt">{!! str_limit(strip_tags($video->description), $limit = 140, $end = '...') !!}</p>
                        </div>
                    </div>
                </div>
            </div>

        @endforeach
    </div>
@endsection