@extends('layouts.app')

@section('content')

    <div class="main contact">
        <div class="cont section-01">
            <div class="container">
                <div class="content">
                    <div class="text_panel">
                        <span class="title">CONTACT US/SUPPORT</span>
                        <p class="txt">联系我们/服务支持</p>
                    </div>
                    <div class="text_panel2">
                        <ul class="figs">
                            <li class="fig">
                                <form class="form-horizontal" role="form" method="post" action="/contact">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="type" value="1">
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
                                            <button type="submit" class="btn btn-primary" style="width: 100%;">提交/Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </div>
                    <div class="text_panel3">
                        <p class="txt">地址：深圳市南山区粤海街道高新南一道德赛科技大厦<br>标识层10层(自然层9层)1002室</p>
                        <p class="txt">全国服务热线：0755-26657982</p>
                    </div>
                </div>
            </div>
        </div>
@endsection