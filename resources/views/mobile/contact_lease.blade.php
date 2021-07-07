@extends('layouts.mobile')

@section('content')
    <div class="section">
        <img src="/img/mobile_contact_lease_01.jpg" alt="mobile_contact_lease_01.jpg" width="100%" draggable="false">
    </div>
    <div class="section">
        <img src="/img/mobile_contact_lease_02.jpg" alt="mobile_contact_lease_02.jpg" width="100%" draggable="false">
    </div>
    <div class="section cnt">
        <div class="contlease section-05">
            <div class="container">
                <div class="content">
                     <div class="text_panel">
                        <span class="title">请在下方留下联系方式</span><br>
                        <span class="title">等待工作人员联系</span>
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
                                            <input type="hidden" name="email" required="" placeholder="联系邮箱 / E-mail" value="未填写">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-bace">
                                            <input type="hidden" name="content" required="" placeholder="留言内容 / Content" value="未填写">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-bace">
                                            {!! Geetest::render() !!}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-bace">
                                            <button type="submit" class="btn btn-sm btn-primary" style="width: 100%;">提交 / Submit
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </div>
                     <div class="text_panel3">
                        <p class="txt">若有意向成为"A+ 城市合伙人" <br>请致电下方全国服务热线</p>
                    </div> 
                </div>
            </div>
        </div>
    </div>
@endsection