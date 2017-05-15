@extends('layouts.mobile')

@section('content')
    <div class="main home">
        <article class="gallery-container">
            <div class="apple-banner">
                <div class="swiper-container">
                    <a class="arrow-left" href="#" rel="nofollow"><span></span></a>
                    <a class="arrow-right" href="#" rel="nofollow"><span></span></a>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide slide1" onclick="javascript:window.location.href='/mobile/aura';">
                            <div class="title txt">
                                <img src="/img/mobile_auratm.png" alt="mobile_auratm.png" width="120" draggable="false">
                            </div>
                            <div class="title2">
                                <h2>唯一可量产的专业级VR摄影机</h2>
                            </div>
                        </div>
                        <div class="swiper-slide slide2" onclick="javascript:window.location.href='/mobile/aurawork';">
                            <div class="title txt">
                                <img src="/img/mobile_auratmwork.png" alt="mobile_auratmwork.png" width="200" draggable="false">
                            </div>
                            <div class="title2">
                                <h2>AURA专属全镜头监视工具。</h2>
                            </div>
                        </div>
                        <div class="swiper-slide slide3" onclick="javascript:window.location.href='/mobile/aurastudio';">
                            <div class="title txt">
                                <img src="/img/mobile_auratmstudio.png" alt="mobile_auratmstudio.png" width="220" draggable="false">
                            </div>
                            <div class="title2">
                                <h2>配合AURA的快速轻剪辑工具。</h2>
                            </div>
                        </div>
                    </div>
                    <ul class="pagination autoplay">
                        <li><span><i></i></span></li>
                        <li><span><i></i></span></li>
                        <li><span><i></i></span></li>
                    </ul>
                </div>
            </div>
        </article>
    </div>
@endsection