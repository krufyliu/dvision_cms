@extends('layouts.app')

@section('content')
    <div class="main videoshow">
        <div class="vdosw section-01">
            <div class="content">
                <div id="pano" style="width:100%;">
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
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <p class="h3">
                            {{ $video->title }}
                        </p>
                        <p>
                            {!! $video->description !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection

@section('script')
    <script type="text/javascript" src="/vrplay/krpano.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#pano').height($('#pano').width()*(6.8/16));
        window.onresize = function() {
            $('#pano').height($('#pano').width()*(6.8/16));
        }
        var u = navigator.userAgent;
        var isAndroid = u.indexOf('Android') > -1 || u.indexOf('Adr') > -1; //android终端
        var isiOS = !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/); //ios终端
        window.currentNum = "";
        var timer="";
        window.base = document.location.origin+"/";
        var settings = {};
        settings["videourl_low"] = "{{ $video->url['video_720p'] }}";
        settings["videourl_high"] = "{{ $video->url['video_1080p'] }}";
        if(isiOS){
            settings["soundurl"] = "{{ $video->url['audio'] }}";
        }
        if (!document.domain || isAndroid || isiOS) {
            $("#pano").append('<div class="text-center" style="padding-top:80px;"><h2>提示</h2><p>为保证给您带来良好的视觉体验</p><p>建议在PC使用 <strong>Chrome</strong> 浏览器观看VR视频</p><p><a href="{{ $video->url['mobile'] }}" class="btn btn-primary" role="button" rel="nofollow">点击播放</a></p></div>');
        } else {
            embedpano({
                vars: settings,
                swf: "/vrplay/krpano.swf",
                id: "krpanoSWFObject",
                xml: "/vrplay/krpano.xml",
                target: "pano",
                mobilescale: 0.4,
                passQueryParameters: true,
                bgcolor: "#f0f0f0",
                html5: "prefer",
                webglsettings: {
                    preserveDrawingBuffer: false,
                    depth: false,
                    stencil: false
                }
            });
        }
    });
    </script>
@endsection
