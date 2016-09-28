@extends('layouts.app')

@section('content')
    <div id="pano" style="width:100%; height:600px;">
        <noscript>
        <table style="width:100%;height:100%;">
        <tr style="vertical-align:middle;text-align:center;">
            <td>
                ERROR:<br>
                <br>
                Javascript not activated<br>
                <br>
            </td>
        </tr>
        </table>
        </noscript>
    </div>
    <div class="container">
        <div class="row margin-middle">
            <div class="col-md-8">
                <p class="h3 text-lighter">
                    万水千山总是情
                </p>
                <p>
                    文本文本
                </p>
            </div>
        </div>
        <div class="row video">
            <div class="col-xs-12 col-sm-6 col-md-4 video-item">
                <a href="#">
                <img src="/image/video01.jpg" class="img-responsive" alt="Responsive image"/>
                <div>
                    <p class="text-center">
                        <!-- <span class="fa fa-youtube-play fa-3x"></span> -->
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
                        <!-- <span class="fa fa-youtube-play fa-3x"></span> -->
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
                        <!-- <span class="fa fa-youtube-play fa-3x"></span> -->
                        <span class="play"></span>
                        <span class="h5 text-lighter">万水千山总是情</span>
                    </p>
                </div>
                </a>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript" src="/vrplay/krpano.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        var u = navigator.userAgent;
        // alert(u)
        var isAndroid = u.indexOf('Android') > -1 || u.indexOf('Adr') > -1; //android终端
        var isiOS = !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/); //ios终端
        window.currentNum = "";
        var timer="";
        window.base = document.location.origin+"/";
        var settings = {};
        settings["posterurl_low"] = base + "image/video-1024x512-poster.jpg";
        settings["posterurl_high"] = base + "image/video-1920x960-poster.jpg";
        settings["videourl_low"] = base+ "image/video-1024x512";
        settings["videourl_high"] = base+ "image/video-1920x960";
        if(isiOS){
            settings["soundurl"] =base+ "image/iphone-audio";
        }
        if (!document.domain ||
              (navigator.userAgent.indexOf("Android") >= 0 && navigator.userAgent.indexOf("QQ") >= 0) ||
              (navigator.userAgent.indexOf("Mac OS X") >= 0 && navigator.userAgent.indexOf("OS 10_0_2") >= 0)) {
            $("#pano").append('<div class="text-center"><h2>抱歉</h2><p>您的当前浏览器内核暂不支持VR视频播放</p><p>请使用支持WebGL的浏览器体验VR服务</p><p>推荐使用 <strong>Chrome</strong> 浏览器</p></div>');
        } else {
            embedpano({
                vars: settings,
                swf: "/vrplay/krpano.swf",
                id: "krpanoSWFObject",
                xml: "/vrplay/krpano.xml",
                target: "pano",
                mobilescale: 0.4,
                passQueryParameters: true,
                bgcolor: "#ffffff",
                html5: "prefer",
                webglsettings: {
                    preserveDrawingBuffer: false,
                    depth: false,
                    stencil: false
                }
            });
        }
        function selecthtml5usage() {
            if (navigator.userAgent.indexOf("Android") >= 0 && navigator.userAgent.indexOf("QQ") >= 0) {
                return "auto+css3d"
            } else {
                return "prefer";
            }
        }
        // console.log(isiOS);
        if (isAndroid || isiOS) {
            var winWidth = $(window).width();
            var winHeight = $(window).height();
            if (winWidth > winHeight) {
                $("#krpanoSWFObject").css({
                    'position':'fixed',
                    'top':0,
                    'bottom':0,
                    'left':0,
                    'right':0
                })
            } else {
                $("#krpanoSWFObject").css({
                    'position':'relative',
                    'top':'auto',
                    'bottom':'auto',
                    'left':'auto',
                    'right':'auto'
                })
            }
            $(window).resize(function () {
                var winWidth = $(window).width();
                var winHeight = $(window).height();
                if (winWidth > winHeight) {
                    $("#krpanoSWFObject").css({
                        'position':'fixed',
                        'top':0,
                        'bottom':0,
                        'left':0,
                        'right':0
                    })
                } else {
                    $("#krpanoSWFObject").css({
                        'position':'relative',
                        'top':'auto',
                        'bottom':'auto',
                        'left':'auto',
                        'right':'auto'
                    })
                }
            })
        }

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