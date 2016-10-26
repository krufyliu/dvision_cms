@extends('layouts.app')

@section('content')
    <div class="join_video">
        <video id="video" class="video hidden-xs hidden-sm" loop="loop" preload="none" muted width="100%" poster="/image/1920-736_100.jpg">
            <source src="/vendor/1920-736.mp4" type="video/mp4" />
                Your browser does not support the video tag.
        </video>
        <img src="/image/1920-736_100.jpg" alt="video" class="visible-xs visible-sm">
        <div class="content">
            <div class="container hidden-xs hidden-sm">
                <div class="row text-right margin-middle">
                    <div class="col-md-12 margin-middle">
                        <p class="h1 text-lighter">
                            一个好玩的公司
                        </p>
                        <p>
                            我们是一个，青春向上，欢乐的团队，各种坚持以互联网的思维来创新发展，<br>
                             用眼看世界、用芯走未来，为智慧城市、智慧生活贡献力量。我们期待您的加入
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        @foreach($careerjobs as $careerjob)
            <div class="col-sm-12 col-md-8 col-lg-4 col-md-offset-2 col-lg-offset-4 margin-middle">
                <p class="h3 text-center">
                    {{ $careerjob->title }}
                </p>
                <div class="col-md-6 margin-middle">
                    部门: {{ $careerjob->department }}
                </div>
                <div class="col-md-6 margin-middle">
                    工作地点: {{ $careerjob->location }}
                </div>
                <div class="col-md-12">
                    {!! $careerjob->description !!}
                </div>
            </div>
        @endforeach
    </div>
    <div class="row">
        <div class="col-md-12 margin-middle text-center">
            <a href="mailto:hr@visiondk.com" class="h2 text-lighter">
                <i class="fa fa-envelope-o"></i>&nbsp;hr@visiondk.com
            </a>
        </div>
    </div>


    <div class="row">
        <div class="join_video">
            <video id="video2" class="video hidden-xs hidden-sm" loop="loop" preload="none" muted width="100%" poster="/image/1920-518_10.jpg">
                <source src="/vendor/1920-518.mp4" type="video/mp4" />
                    Your browser does not support the video tag.
            </video>
            <img src="/image/1920-518_10.jpg" alt="video" class="visible-xs visible-sm">
            <div class="content">
                <div class="container hidden-xs hidden-sm">
                    <div class="row text-right margin-middle"  style="position: absolute; bottom: 50px; left: 50%; margin-left: -248px;">
                        <div class="col-md-12 margin-middle">
                            <p class="h1 text-lighter">
                                快来加入我们吧！来啊！来啊！
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
    $(document).ready(function() {
        if(document.documentElement.clientWidth > 768) {
            var video = document.getElementById('video');
            var video2 = document.getElementById('video2');
            video.play();
            video2.play();
        }
    });
    </script>
@endsection