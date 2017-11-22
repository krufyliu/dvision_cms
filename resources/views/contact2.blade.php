@extends('layouts.app')

@section('content')
<div id="carousel-generic" class="carousel slide hidden-xs hidden-sm" data-ride="carousel" style="height: 100vh; min-height: 800px; background: url(/image/contactus_high_01.jpg) no-repeat; background-size: cover;">
    <div class="carousel-inner" role="listbox">
        <!-- <div class="item active">
            <img src="/image/contactus_high_01.jpg" class="hidden-xs hidden-sm" alt="contact" width="100%" style="min-height: 100%;">
            <img src="/image/contactus_low_01.jpg" class="visible-xs visible-sm" alt="contact" width="100%" style="min-height: 100%;">
            <div class="carousel-caption">
            </div>
        </div> -->
    </div>
</div>
<div id="carousel-generic" class="carousel slide visible-xs visible-sm" data-ride="carousel" style="height: 165vh; background: url(/image/contactus_high_01.jpg) no-repeat; background-size: cover;">
    <div class="carousel-inner" role="listbox">
    </div>
</div>
<div style="position: absolute; width: 100%; top: 10%; left: 0px; color: #fff; opacity: 0.9;">
    <div class="container-fluid">
        <div class="row contact">
            <div class="col-md-6 col-md-offset-3">
                <form class="form-horizontal" role="form" method="post" action="{{ url('/contact')  }}">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <div class="col-sm-12 text-center">
                            <h2 style="font-weight: 300;">联系我们/Contact</h2>
                            <!-- <p>如果您想要更深入的了解我们的产品和服务<br>请填写下面的表格，我们将很快与您取得联系</p> -->
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-8 text-center h2">
                            <a href="tel:075526657982" style="color: #fff;"><i class="fa fa-phone"></i> 0755-26657982</a>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-8 text-center h5 hidden-xs hidden-sm">
                            <a href="http://j.map.baidu.com/xeP99" style="color: #fff; font-weight: 300; line-height: 35px;" target="_blank" >深圳市南山区粤海街道高新南一道德赛科技大厦标识层10层(自然层9层)1002室</a>
                        </div>
                        <div class="col-sm-offset-2 col-sm-8 text-center h5 visible-xs visible-sm">
                            <a href="http://j.map.baidu.com/xeP99" style="color: #fff; font-weight: 300; line-height: 35px;" target="_blank" >深圳市南山区粤海街道高新南一道德赛科技大厦<br>标识层10层(自然层9层)1002室</a>
                        </div>
                    </div>

                    <div class="form-group" style="margin-top: 40px;">
                        <label for="" class="col-sm-3 col-md-3 control-label" style="padding-top: 0px;"><span style="color: red;">*</span>&nbsp;公司或个人名称<br>Company or individual name</label>
                        <div class="col-sm-7">
                            <input type="text" name="name" class="form-control" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-3 col-md-3 control-label" style="padding-top: 0px;"><span style="color: red;">*</span>&nbsp;联系电话<br>Phone</label>
                        <div class="col-sm-7">
                            <input type="phone" name="phone" class="form-control" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-3 col-md-3 control-label" style="padding-top: 0px;"><span style="color: red;">*</span>&nbsp;联系邮箱<br>E-mail</label>
                        <div class="col-sm-7">
                            <input type="email" name="email" class="form-control" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-3 col-md-3 control-label" style="padding-top: 0px;"><span style="color: red;">*</span>&nbsp;留言内容<br>Content</label>
                        <div class="col-sm-7">
                            <textarea class="form-control" name="content" rows="8" required=""></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-3 col-md-3 control-label"></label>
                        <div class="col-sm-7">
                            {!! Geetest::render() !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-7">
                            <button type="submit" class="btn btn-primary" style="width: 100%;">留言/Leaving a message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection