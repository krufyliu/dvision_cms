@extends('layouts.app')

@section('content')

    <div class="main download">
        <div class="dld section-01">
            <div class="container">
                <div class="content">
                    <div class="text_panel">
                        <span class="title">DOWNLOAD</span>
                        <p class="txt">软件下载</p>
                    </div>
                    <div class="text_panel2">
                        <ul class="figs">
                            <li class="fig">
                                <div class="icons" style="margin-top: 27px; margin-bottom: 25px;">
                                    <img src="{{ $download->aura['studio']['image_url'] }}" alt="aura_sec06_04" width="238" draggable="false">
                                </div>
                                <span class="title">流畅剪辑<br>云端精拼的专业体验</span>
                                <p class="txt">推荐配置要求：<br>第七代智能英特尔酷睿i5处理器以上<br>16G内存、7200转机械硬盘或SSD固态硬盘<br>Windows10或MacOS 10.12+操作系统<br> NVIDIA GeForce GTX10系列、8G显存以上(Windows)<br>最佳使用分辨率2560x1600(全屏)</p>
                                <div class="links">
                                  <a href="{{ $download->aura['studio']['win']['url'] }}" title="{{ $download->aura['studio']['win']['title'] }}" class="link"  target="_blank" rel="nofollow" download><img src="/img/icon-win.png" width="17" class="ics" draggable="false">&nbsp;Win10</a>
                                  <a href="{{ $download->aura['studio']['mac']['url'] }}" title="{{ $download->aura['studio']['mac']['title'] }}" class="link" target="_blank" rel="nofollow" download><img src="/img/icon-mac.png" width"17" class="ics" draggable="false">&nbsp;MacOS</a>
                                  {{--  <a href="#" class="link" rel="nofollow">更新日志</a>  --}}
                                </div>
                                <p class="txt small">{{ $download->aura['studio']['description'] }}</p>
                                {{-- <p class="txt">未开放下载</p> --}}
                            </li>
                            <li class="fig right">
                                <div class="icons">
                                    <img src="{{ $download->aura['work']['image_url'] }}" alt="aura_sec06_03" width="238" draggable="false">
                                </div>
                                <span class="title">实时监控<br>所有镜头  实时操控</span>
                                <p class="txt">推荐配置要求：<br>第七代智能英特尔酷睿i5处理器以上<br>16G内存、7200转机械硬盘或SSD固态硬盘<br>Windows10或MacOS 10.12+操作系统<br> NVIDIA GeForce GTX10系列、8G显存以上(Windows)<br>最佳使用分辨率2560x1600(全屏)</p>
                                <div class="links">
                                  <a href="{{ $download->aura['work']['win']['url'] }}" title="{{ $download->aura['work']['win']['title'] }}" class="link"  target="_blank" rel="nofollow" download><img src="/img/icon-win.png" width="17" class="ics" draggable="false">&nbsp;Win10</a>
                                  <a href="{{ $download->aura['work']['mac']['url'] }}" title="{{ $download->aura['work']['mac']['title'] }}" class="link"  target="_blank" rel="nofollow" download><img src="/img/icon-mac.png" width"17" class="ics" draggable="false">&nbsp;MacOS</a>
                                  {{-- <a href="/contact" class="link"  target="_blank" rel="nofollow">使用必读</a> --}}
                                </div>
                                <p class="txt small">{{ $download->aura['work']['description'] }}</p>
                                {{-- <p class="txt">未开放下载</p> --}}
                            </li>
                            <li class="fig">
                                <div class="icons" style="margin-top: 27px; margin-bottom: 25px;">
                                    <img src="{{ $download->aura['firmware']['image_url'] }}" alt="download_sec01_03" width="278" draggable="false">
                                </div>
                                <span class="title">固件下载</span>
                                <p class="txt">我们会不断完善AURA的功能体验，您可以下载后<br>使用AURA WORK对AURA相机进行升级。</p>
                                <div class="links">
                                  <a href="{{ $download->aura['firmware']['url'] }}" title="{{ $download->aura['firmware']['title'] }}" class="link"  target="_blank" rel="nofollow" download>&nbsp;立即下载</a>
                                  {{-- <a href="/contact" class="link"  target="_blank" rel="nofollow">使用必读</a> --}}
                                </div>
                                <p class="txt small">{{ $download->aura['firmware']['version'] }}</p>
                            </li>

                            <li class="fig right">
                                <div class="icons">
                                    <img src="img/download_sec01_04.png" alt="download_sec01_04" width="200" draggable="false">
                                </div>
                                <span class="title">即刻体验</span>
                                <p class="txt">只需要搭配一台服务器，您就可以使用AURA进行4K VR直播，<br>将奇幻的场景分享到世界的每一个角落。</p>
                                <div class="links">
                                  <a href="{{ $download->aura['live']['url'] }}" title="{{ $download->aura['live']['title'] }}" class="link"  target="_blank" rel="nofollow" download>&nbsp;立即下载</a>
                                  {{-- <a href="/contact" class="link"  target="_blank" rel="nofollow">使用必读</a> --}}
                                </div>
                                {{-- <div class="links">
                                  <a href="/contact" class="link" rel="nofollow"><img src="/img/icon-win.png" width="17" class="ics" draggable="false">&nbsp;Win10</a>
                                  <a href="/contact" class="link" rel="nofollow"><img src="/img/icon-mac.png" width"17" class="ics" draggable="false">&nbsp;MacOS</a>
                                  <a href="/contact" class="link" rel="nofollow">使用必读</a>
                                </div> --}}
                                <p class="txt small">&nbsp;</p>
                                <p class="txt"></p>
                            </li>

                            <li class="fig">
                                <div class="icons" style="margin-top: 27px; margin-bottom: 25px;">
                                    <img src="/img/download_sec01_05.png" alt="download_sec01_05" width="264" draggable="false">
                                </div>
                                <span class="title">远程设置</span>
                                <p class="txt">本应用远程设置量子视觉 VR 全景摄像参数，监控VR摄像机画面。</p>
                                <div class="links">
                                  <a href="https://itunes.apple.com/cn/app/aura-remote/id1296187375?mt=8" title="aura remote" class="link"  target="_blank" rel="nofollow"><img src="/img/icon-mac.png" width"17"="" class="ics" draggable="false">&nbsp;立即安装</a>
                                  {{-- <a href="/contact" class="link"  target="_blank" rel="nofollow">使用必读</a> --}}
                                </div>
                                {{--  <p class="txt small">{{ $download->aura['firmware']['version'] }}</p>  --}}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
@endsection
