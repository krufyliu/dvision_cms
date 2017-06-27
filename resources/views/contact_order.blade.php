@extends('layouts.app')

@section('content')

    <div class="main contact_order">
        <div class="contord section-01">
            <div class="container">
                <div class="content">
                    <div class="text_panel">
                        <span class="title">欢迎订购 AURA</span>
                        <div class="divider"></div>
                        <p class="txt">业内目前唯一款可量产的10K、3D、VR拍摄设备：AURA <br>现正式接受预定！ </p>
                        <p class="txt"><a href="{{ url('/aura') }}">产品详情</a></p>
                        {{-- <span class="title"><small>订购价</small> ¥98,000</span> --}}
                    </div>
                    <div class="text_panel2">
                        <ul class="figs">
                            <li class="fig">
                                <form class="form-horizontal" role="form" method="post" action="{{ url('/contact')  }}">
                                    {{ csrf_field() }}

                                    <div class="form-group">
                                        <div class="input-bace">
                                            <input type="text" name="name" class="form-control" required="" placeholder="公司或个人名称 / Company or individual name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-bace">
                                            <input type="phone" name="phone" class="form-control" required="" placeholder="联系电话 / Phone">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-bace">
                                            <input type="email" name="email" class="form-control" required="" placeholder="联系邮箱 / E-mail">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-bace">
                                            <textarea class="form-control" name="content" rows="8" required="" placeholder="留言内容 / Content"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-bace">
                                            {!! Geetest::render() !!}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-bace">
                                            <button type="submit" class="btn btn-primary" style="width: 100%;">立即订购 / Order Immediately
</button>
                                        </div>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </div>
                    {{-- <div class="text_panel3">
                        <p class="txt">全国服务热线：<a href="tel:0755-26657982">0755-26657982</a></p>
                    </div> --}}
                </div>
            </div>
        </div>
@endsection