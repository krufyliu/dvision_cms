@extends('layouts.app')

@section('content')

    <div class="main contact_lease">
        <div class="contlease section-01">
            <div class="container">
                <div class="content">
                    <div class="text_panel" draggable="false">
                        <span class="title">量子视觉 "A+计划"</span>

                        <p class="txt">1500元/天/台</p>
                        <div class="divider"></div>
                        <p class="txt1">在北京、深圳、广州三个城市试行租赁</p>

                        <p class="txt2">"VR影像2.0——高画质低门槛的影像时代来临"<br> 量子视觉将率先打破高品质VR摄影机门槛较高的现状<br>开启AURA "A+ 计划" 租赁业务</p>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="contlease section-02">
            <div class="container">
                <div class="content">
                    <div class="text_panel" draggable="false">
                        <p class="txt2">“A+计划“希望能够帮助高频拍摄需求行业如影视、广告、婚庆、地产的拍摄者，<br>以低门槛的方式利用高品质产品拍出优质的作品。<br><br><br>在此之前，AURA已经获得了大量国内外行业客户如Next Joy、<br>优酷、爱奇艺、腾讯、飞亚达、万科、中粮等认可<br><br></p>
                        <p class="txt1">最新拍摄制作包括</p>
                        <p class="txt2">
                          <span class="label label-default">“库里2017成都行活动”</span><br>
                          <span class="label label-default">“2017爱奇艺尖叫之夜演唱会”</span><br>
                          <span class="label label-default">VR+教育 </span><br>
                          <span class="label label-default">VR+婚庆 </span><br>
                          <span class="label label-default">VR+地产 </span><br>
                          等各种行业案例</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="contlease section-03">
            <div class="container">
                <div class="content">
                    <div class="text_panel" draggable="false">
                        <span class="title">一键导出与拼接，一切只为降低门槛，撕掉复杂标签</span><br><br>
                        <span class="title">优秀≠曲高和寡</span><br><br>
                        <span class="title">“A+计划”为了连接优秀、激活市场</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="contlease section-04">
            <div class="container">
                <div class="content">
                    <div class="text_panel" draggable="false">
                        <span class="title">&nbsp;可选配套服务</span>
                        <ul class="figs">
                            <li class="fig">
                                <span class="fig_title">
                                摄影助理
                                </span>
                                <p class="fig_value">
                                500/天
                                </p>
                            </li>
                            <li class="fig">
                                <span class="fig_title">
                                80000mAh移动电源
                                </span>
                                <p class="fig_value">
                                300/天
                                </p>
                            </li>
                            <li class="fig">
                                <span class="fig_title">
                                 工作电脑<br>
                                </span>
                                <p class="fig_value">
                                300/天
                                </p>
                            </li>
                        </ul>
                        <ul class="figs">
                            <li class="fig">
                                <span class="fig_title">
                                摄影素材免费保留
                                </span>
                                <p class="fig_value">
                                15天
                                </p>
                            </li>
                            <li class="fig">
                                <span class="fig_title">
                                无线图传套件
                                </span>
                                <p class="fig_value">
                                300/天
                                </p>
                            </li>
                            <li class="fig">
                                <span class="fig_title">
                                移动拍摄车
                                </span>
                                <p class="fig_value">
                                3000/天
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="contlease section-05">
            <div class="container">
                <div class="content">
                    <div class="text_panel">
                        <span class="title">有意向申请租赁的人士在下方留下联系方式</span><br><br>
                        <span class="title">等待工作人员联系</span>
                        <p class="txt"><br><a href="{{ url('/aura') }}">产品详情</a></p>

                    </div>
                    <div class="text_panel2">
                        <ul class="figs">
                            <li class="fig">
                                <form class="form-horizontal" role="form" method="post" action="{{ url('/contact')  }}">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="type" value="4">
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
                                            <button type="submit" class="btn btn-primary" style="width: 100%;">提交 / Submit
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </div>
                    <div class="text_panel3">
                        <p class="txt">若有意向成为"A+ 城市合伙人" 请致电全国服务热线：<a href="tel:0755-26657982">0755-26657982</a></p>
                    </div>
                </div>
            </div>
        </div>
@endsection