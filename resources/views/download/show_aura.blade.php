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
                                        <img src="{{ $aura20['work']['image_url'] }}">
                                    </div>
                                
                                    <div class="block-content left">
                                
                                        <h2 class="text-name">AURA Work</h2>
                                        <h3 class="text-title">相机控制客户端</h3>
                                        <p class="text-desc">{{ $aura20['work']['description'] }}</p>
                                
                                        <ul class="ul-platform">
                                            <li class="list-item">
                                                <div class="detail">
                                                <h4>{{ $aura20['work']['win']['version'] }}</h4>
                                                <p class="version-update-time">{{ $aura20['work']['win']['date'] }}</p>
                                                <div class="version-note lang-zh-toggle" style="max-height: none;">
                                                    {!! $aura20['work']['win']['log'] !!}
                                                </div>
                                                
                                                <a href="{{ $aura20['work']['win']['url'] }}" title="{{ $aura20['work']['win']['title'] }}" download target="_blank" class="btn btn btn-blue">
                                                    <img src="/img/icon-win.png">
                                                    <span>Win10</span>
                                                </a>
                                                </div>
                                            </li>
                                    
                                            <li class="list-item">
                                                <div class="detail">
                                                <h4>{{ $aura20['work']['mac']['version'] }}</h4>
                                                <p class="version-update-time">{{ $aura20['work']['mac']['date'] }}</p>
                                                <div class="version-note lang-zh-toggle" style="" data-readmore="" aria-expanded="false" id="rmjs-5">
                                                    {!! $aura20['work']['mac']['log'] !!}
                                                </div>
                                                <a href="{{ $aura20['work']['mac']['url'] }}" title="{{ $aura20['work']['mac']['title'] }}" download target="_blank" class="btn btn btn-dark">
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
                                        <img src="{{ $aura20['studio']['image_url'] }}">
                                    </div>
                                
                                    <div class="block-content left">
                                        <h2 class="text-name">AURA Studio</h2>
                                        <h3 class="text-title">素材拼接、编辑软件</h3>
                                        <p class="text-desc">{{ $aura20['studio']['description'] }}</p>
                                
                                        <ul class="ul-platform">
                                            <li class="list-item">
                                                <div class="detail">
                                                <h4>{{ $aura20['studio']['win']['version'] }}</h4>
                                                <p class="version-update-time">{{ $aura20['studio']['win']['date'] }}</p>
                                                <div class="version-note lang-zh-toggle" style="max-height: none;">
                                                    {!! $aura20['studio']['win']['log'] !!}
                                                </div>
                                                
                                                <a href="{{ $aura20['studio']['win']['url'] }}" title="{{ $aura20['studio']['win']['title'] }}" download target="_blank" class="btn btn btn-blue">
                                                    <img src="/img/icon-win.png">
                                                    <span>Win10</span>
                                                </a>
                                                <a href="http://v.youku.com/v_show/id_XMzIzMTUxMjQ4OA==.html?spm=a2hzp.8244740.0.0" target="_blank" class="instruction-link">软件使用教程</a>
                                                </div>
                                            </li>
                                            <li class="list-item">
                                                <div class="detail">
                                                <h4>{{ $aura20['studio']['mac']['version'] }}</h4>
                                                <p class="version-update-time">{{ $aura20['studio']['mac']['date'] }}</p>
                                                <div class="version-note lang-zh-toggle" style="max-height: none;">
                                                    {!! $aura20['studio']['mac']['log'] !!}
                                                </div>
                                                
                                                <a href="{{ $aura20['studio']['mac']['url'] }}" title="{{ $aura20['studio']['mac']['title'] }}" download target="_blank" class="btn btn btn-dark">
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
                                            <img src="{{ $aura20['firmware']['image_url'] }}">
                                        </div>
                                    
                                        <div class="block-content left">
                                            <h2 class="text-name">AURA FIRMWARE</h2>
                                            <h3 class="text-title">配套相机固件</h3>
                                            <p class="text-desc">{{ $aura20['firmware']['description'] }}</p>
                                            <ul class="ul-platform">
                                                <li class="list-item">
                                                    <div class="detail">
                                                    <h4>{{ $aura20['firmware']['version'] }}</h4>
                                                    <p class="version-update-time">{{ $aura20['firmware']['date'] }}</p>
                                                    <div class="version-note lang-zh-toggle" style="" data-readmore="" aria-expanded="false" id="rmjs-1">
                                                        {!! $aura20['firmware']['log'] !!}
                                                    </div>
                                                    
                                                    <a href="{{ $aura20['firmware']['url'] }}" title="{{ $aura20['firmware']['title'] }}" download target="_blank" class="btn btn-darkblue">
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
                            </div>
                        </div>
                    </div>                        
                </div>
            </div>
        </div>
@endsection
