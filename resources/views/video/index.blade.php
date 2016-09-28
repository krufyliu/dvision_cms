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
                <button type="button" class="btn btn-primary">全部</button>
                <button type="button" class="btn btn-default">运动</button>
                <button type="button" class="btn btn-default">生活</button>
            </div>
        </div>
    </div>
</div>
<div class="row video">
    <div class="col-xs-12 col-sm-6 col-md-4 video-item">
        <a href="#">
        <img src="/image/video01.jpg" class="img-responsive" alt="Responsive image"/>
        <div>
            <p class="text-center">
                <span class="play"></span>
                <span class="h5 text-lighter">万水千山总是万水千山总是万水千山总是万水千山总是万水千山总是万水千山总是</span>
            </p>
        </div>
        </a>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 video-item">
        <a href="#">
        <img src="/image/video02.jpg" class="img-responsive" alt="Responsive image"/>
        <div>
            <p class="text-center">
                <span class="play"></span>
                <span class="h5 text-lighter">万水千山总是情</span>
            </p>
        </div>
        </a>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 video-item">
        <a href="#">
        <img src="/image/video03.jpg" class="img-responsive" alt="Responsive image"/>
        <div>
            <p class="text-center">
                <span class="play"></span>
                <span class="h5 text-lighter">万水千山总是情</span>
            </p>
        </div>
        </a>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 video-item">
        <a href="#">
        <img src="/image/video02.jpg" class="img-responsive" alt="Responsive image"/>
        <div>
            <p class="/text-center">
                <span class="play"></span>
                <span class="h5 text-lighter">万水千山总是情</span>
            </p>
        </div>
        </a>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 video-item">
        <a href="#">
        <img src="/image/video03.jpg" class="img-responsive" alt="Responsive image"/>
        <div>
            <p class="text-center">
                <span class="play"></span>
                <span class="h5 text-lighter">万水千山总是情</span>
            </p>
        </div>
        </a>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 video-item">
        <a href="#">
        <img src="/image/video01.jpg" class="img-responsive" alt="Responsive image"/>
        <div>
            <p class="text-center">
                <span class="play"></span>
                <span class="h5 text-lighter">万水千山总是情</span>
            </p>
        </div>
        </a>
    </div>
</div>
<br>
<br>
<div class="row">
    <div class="col-sm-12 text-center">
        <button type="button" class="btn btn-primary">加载更多</button>
    </div>
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