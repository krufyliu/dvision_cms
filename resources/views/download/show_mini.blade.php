@extends('layouts.app')

@section('content')

    <div class="main download_show">
        <div class="mini section-01">
            <div class="container">
                <div class="content">
                    <div class="wrap">
                        <div class="contentbox">
                            <div class="container-block">
                                <div id="" class="section-box section-pro-firmware">
                                    <div class="block-icon left">                    
                                        <img src="{{ $mini8['work']['image_url'] }}">
                                    </div>
                                
                                    <div class="block-content left">
                                
                                        <h2 class="text-name">AURA Work</h2>
                                        <h3 class="text-title">相机控制客户端</h3>
                                        <p class="text-desc">{{ $mini8['work']['description'] }}</p>
                                
                                        <ul class="ul-platform">
                                            <li class="list-item">
                                                <div class="detail">
                                                <h4>{{ $mini8['work']['win']['version'] }}</h4>
                                                <p class="version-update-time">{{ $mini8['work']['win']['date'] }}</p>
                                                <div class="version-note lang-zh-toggle" style="max-height: none;">
                                                    {!! $mini8['work']['win']['log'] !!}
                                                </div>
                                                
                                                <a href="{{ $mini8['work']['win']['url'] }}" title="{{ $mini8['work']['win']['title'] }}" download target="_blank" class="btn btn btn-blue">
                                                    <img src="/img/icon-win.png">
                                                    <span>Win10</span>
                                                </a>
                                                </div>
                                            </li>
                                    
                                            <li class="list-item">
                                                <div class="detail">
                                                <h4>{{ $mini8['work']['mac']['version'] }}</h4>
                                                <p class="version-update-time">{{ $mini8['work']['mac']['date'] }}</p>
                                                <div class="version-note lang-zh-toggle" style="" data-readmore="" aria-expanded="false" id="rmjs-5">
                                                    {!! $mini8['work']['mac']['log'] !!}
                                                </div>
                                                <a href="{{ $mini8['work']['mac']['url'] }}" title="{{ $mini8['work']['mac']['title'] }}" download target="_blank" class="btn btn btn-dark">
                                                    <img src="/img/icon-mac.png">
                                                    <span>Mac OSX</span>
                                                </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="container-block">     
                                <div id="" class="section-box section-stitcher">
                                    <div class="block-icon left">
                                        <img src="{{ $mini8['studio']['image_url'] }}">
                                    </div>
                                
                                    <div class="block-content left">
                                        <h2 class="text-name">AURA Studio</h2>
                                        <h3 class="text-title">素材拼接、编辑软件</h3>
                                        <p class="text-desc">{{ $mini8['studio']['description'] }}</p>
                                
                                        <ul class="ul-platform">
                                            <li class="list-item">
                                                <div class="detail">
                                                <h4>{{ $mini8['studio']['win']['version'] }}</h4>
                                                <p class="version-update-time">{{ $mini8['studio']['win']['date'] }}</p>
                                                <div class="version-note lang-zh-toggle" style="max-height: none;">
                                                    {!! $mini8['studio']['win']['log'] !!}
                                                </div>
                                                
                                                <a href="{{ $mini8['studio']['win']['url'] }}" title="{{ $mini8['studio']['win']['title'] }}" download target="_blank" class="btn btn btn-blue">
                                                    <img src="/img/icon-win.png">
                                                    <span>Win10</span>
                                                </a>
                                                <a href="http://v.youku.com/v_show/id_XMzIzMTUxMjQ4OA==.html?spm=a2hzp.8244740.0.0" target="_blank" class="instruction-link">软件使用教程</a>
                                                </div>
                                            </li>
                                            <li class="list-item">
                                                <div class="detail">
                                                <h4>{{ $mini8['studio']['mac']['version'] }}</h4>
                                                <p class="version-update-time">{{ $mini8['studio']['mac']['date'] }}</p>
                                                <div class="version-note lang-zh-toggle" style="max-height: none;">
                                                    {!! $mini8['studio']['mac']['log'] !!}
                                                </div>
                                                
                                                <a href="{{ $mini8['studio']['mac']['url'] }}" title="{{ $mini8['studio']['mac']['title'] }}" download target="_blank" class="btn btn btn-dark">
                                                    <img src="/img/icon-mac.png">
                                                    <span>Mac OSX</span>
                                                </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="container-block">    
                                    <div id="" class="section-box section-procontrol">
                                
                                        <div class="block-icon left">
                                            <img src="{{ $mini8['firmware']['image_url'] }}">
                                        </div>
                                    
                                        <div class="block-content left">
                                            <h2 class="text-name">AURAmini FIRMWARE</h2>
                                            <h3 class="text-title">配套相机固件</h3>
                                            <p class="text-desc">{{ $mini8['firmware']['description'] }}</p>
                                            <ul class="ul-platform">
                                                <li class="list-item">
                                                    <div class="detail">
                                                    <h4>{{ $mini8['firmware']['version'] }}</h4>
                                                    <p class="version-update-time">{{ $mini8['firmware']['date'] }}</p>
                                                    <div class="version-note lang-zh-toggle" style="" data-readmore="" aria-expanded="false" id="rmjs-1">
                                                        {!! $mini8['firmware']['log'] !!}
                                                    </div>
                                                    
                                                    <a href="{{ $mini8['firmware']['url'] }}" title="{{ $mini8['firmware']['title'] }}" download target="_blank" class="btn btn-darkblue">
                                                        <img src="/img/icon-download.png">
                                                        <span>固件下载</span>
                                                    </a>
                                                    {{--  <a href="#" target="_blank" class="link-upgrade">如何升级固件?</a>  --}}
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                
                                    </div>
                                </div>
    

                            <div class="container-block">    
                                <div id="" class="section-box section-player">
                            
                                    <div class="block-icon left">
                                        <img src="{{ $mini8['remote']['image_url'] }}">
                                    </div>
                                
                                    <div class="block-content left">
                                
                                        <h2 class="text-name">AURAmini REMOTE</h2>
                                        <h3 class="text-title">无线控制程序</h3>
                                        <p class="text-desc">{{ $mini8['remote']['description'] }}</p>
                                
                                        <ul class="ul-platform">
                                            <li class="list-item">
                                                <div class="detail">
                                                <h4>{{ $mini8['remote']['appstore']['version'] }}</h4>
                                                <p class="version-update-time">{{ $mini8['remote']['appstore']['date'] }}</p>
                                                <div class="version-note lang-zh-toggle" data-readmore="" aria-expanded="false" id="rmjs-9">
                                                    {!! $mini8['remote']['appstore']['log'] !!}
                                                </div>
                                                
                                                <a href="{{ $mini8['remote']['appstore']['url'] }}" title="{{ $mini8['remote']['appstore']['title'] }}" target="_blank" class="btn btn-dark">
                                                    <span class="version-qrcode">
                                                    <i id="player-ios-qrcode"><img src="https://qr.api.cli.im/qr?data=https%253A%252F%252Fitunes.apple.com%252Fcn%252Fapp%252Faura-remote%252Fid1296187375&level=H&transparent=false&bgcolor=%23ffffff&forecolor=%23000000&blockpixel=12&marginblock=1&logourl=http%3A&size=102&kid=cliim&key=4353efba14b13ae8aaff4b676d6a57cc" alt="" style="width: 102px; margin: 0px;"></i>
                                                    </span>
                                                    <img src="/img/icon-mac.png">
                                                    <span>App Store</span>
                                                </a>
                                                {{--  <a href="//static.insta360.com/html/help/Player_help/Android/ch/android_player_help_ch_supportdevice.html" target="_blank" class="instruction-link">机型兼容列表（部分）</a>  --}}
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                            
                                </div>
                            </div>
                        </div>
                    </div>                        
                </div>
            </div>
        </div>
@endsection
