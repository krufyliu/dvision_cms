@extends('layouts.app')

@section('content')
    <div class="main home">
        <article class="gallery-container">
            <div class="apple-banner">
                <div class="swiper-container">
                    <a class="arrow-left" href="#" rel="nofollow"><span></span></a>
                    <a class="arrow-right" href="#" rel="nofollow"><span></span></a>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide slide3">
                            <div class="title txt">
                                <img src="img/banner03-1.png">
                                <p class="time">2018/01/09-12</p>
                                <p class="sub">35636,South Hall 4,LVCC,Las Vegas, NV</p>
                                <br><br><br>
                                <p class="time2">INVITATION</p>
                                <p class="sub2"><strong>深圳市量子视觉科技有限公司</strong>诚邀您参观于<br>
                                    1月9日-12日，美国，拉斯维加斯会展中心<br>
                                    举办的<strong>国际消费电子展（CES）</strong>，届时我司<br>
                                    将与华为海思一起展出全景摄影机AURA mini。<br>
                                    邀你共同见证，改变未来。</p>
                            </div>
                            <div class="title2">
                            </div>
                        </div>
                        <div class="swiper-slide slide1">
                            <div class="title txt">
                                <h1>AURA</h1>
                                <span>全球首款 10K 360度 3D 专业VR摄影机</span>
                                <h2>天圆地方，尽收一隅</h2><br>
                                <a href="{{ url('/aura') }}" title="了解更多">了解更多</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="{{ url('/lease') }}" title="A+ 计划" class="btn btn-default">A+ 计划&nbsp;</a>
                            </div>
                        </div>
                        <div class="swiper-slide slide2">

                            <!--h2 class="homepage-headline txt">Series 2 新登场。</h2-->
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
    <div class="promos promos-row">
        <ul>
            <li class="promo-position promo-postion-0">
                <a href="http://www.geekpark.net/topics/218305" target="_blank" class="promo" rel="nofollow" title="量子视觉AURA发布会回顾">
                    <div class="image"></div>
                </a>
            </li>
            <li class="promo-position promo-postion-1">
                <a href="http://cloud.youku.com/services/sharev?vid=XMjY0NTgxNzQ3Ng==" target="_blank" class="promo" rel="nofollow" title="AURA宣传视频">
                    <div class="image"></div>
                </a>
            </li>
            <li class="promo-position promo-postion-2">
                <a href="/news" target="_blank" class="promo" title="新闻">
                    <div class="image"></div>
                </a>
            </li>
            <li class="promo-position promo-postion-3">
                <a href="/video" target="_blank" class="promo" title="内容">
                    <div class="image"></div>
                </a>
            </li>
        </ul>
    </div>
@endsection