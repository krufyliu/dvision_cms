@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row margin-middle">
        <div class="col-md-12 text-center">
            <p class="h1 text-lighter">
                走进虚拟世界
            </p>
            <p>
                OZO独特的交互式监控功能，可捕捉360°球形视频和360x360全方位环绕音频
            </p>
        </div>
    </div>
    <div class="row margin-middle">
        <div class="col-md-12">
            <div class="btn-group">
                <a href="/video" class="btn btn-primary">全部</a>
                @foreach(App\Models\VideoCategory::all() as $category)
                    <a href="{{ url('video?category_id=').$category->id }}" class="btn btn-default">{{$category->title}}</a>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="row video">
    @foreach($videos as $video)
        <div class="col-xs-12 col-sm-6 col-md-4 video-item">
            <a href="{{ url('/video') . '/' . $video->id }}">
            <img src="{{ '/storage/' . $video->cover_image }}" class="img-responsive" alt="Responsive image"/>
            <div>
                <p class="text-center">
                    <span class="play"></span>
                    <span class="h5 text-lighter">{{ $video->title }}</span>
                </p>
            </div>
            </a>
        </div>
    @endforeach
</div>
@endsection

@section('script')
    <script type="text/javascript">
    $(document).ready(function() {
        if(document.documentElement.clientWidth > 768) {
            $('.video > .video-item ').each(function() {
                $(this).hoverdir({
                    hoverDelay: 75
                });
            });
        }
    });
    </script>
@endsection