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
                             用眼看世界、用芯走未来，为智慧城市、智慧生活贡献力量。
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach($careerjobs as $careerjob)
                <div class="col-md-6" style="margin-top: 30px;">
                    <a href="#jobs_{{ $careerjob->id }}" data-toggle="modal">
                        <div class="item" style="display: table; background-color: #fff;">
                            <div class="col-md-4 col-sm-3 col-xs-12" style="padding: 0px;">
                                <img src="{{ '/storage/' . $careerjob->cover_image }}" class="img-responsive" style="margin: 0 auto;" alt="">
                            </div>
                            <div class="col-md-8 col-sm-9 col-xs-12">
                                <h3 style="color: #000;">{{ $careerjob->title }}</h3>
                                <p class="h5 text-lighter" style="max-width: 240px;"><span>部门-{{ $careerjob->department }}</span><span class="pull-right">地点-{{ $careerjob->location }}</span></p>
                                <br>
                                <p class="h6">{!! str_limit(strip_tags($careerjob->description), $limit = 70, $end = '...') !!}</p>
                            </div>
                        </div>
                    </a>
                    <div class="modal fade" id="jobs_{{ $careerjob->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header" style="border-bottom: 0px;">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                </div>
                                <div class="modal-body">
                                    <p class="h3 text-center">
                                        {{ $careerjob->title }}
                                    </p>
                                    <p class="col-md-6 margin-middle" style="padding: 0px">
                                        部门: {{ $careerjob->department }}
                                    </p>
                                    <p class="col-md-6 margin-middle" style="padding: 0px;">
                                        工作地点: {{ $careerjob->location }}
                                    </p>

                                    {!! $careerjob->description !!}
                                </div>
                                <div class="modal-footer" style="border-top: 0px;">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
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
        $("main").css("background-color","#eee");
        if(document.documentElement.clientWidth > 768) {
            var video = document.getElementById('video');
            var video2 = document.getElementById('video2');
            video.play();
            video2.play();
        }
    });
    </script>
@endsection