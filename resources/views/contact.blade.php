@extends('layouts.app')

@section('content')
<div id="carousel-generic" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="/image/contactus_high_01.jpg" class="hidden-xs hidden-sm" alt="contact" width="100%">
            <img src="/image/contactus_low_01.jpg" class="visible-xs visible-sm" alt="contact" width="100%">
            <div class="carousel-caption">
            </div>
        </div>
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
                            <h2 style="font-weight: 300;">联系我们</h2>
                            <!-- <p>如果您想要更深入的了解我们的产品和服务<br>请填写下面的表格，我们将很快与您取得联系</p> -->
                        </div>
                    </div>

                    <div class="form-group">
                        <a href="tel:075526657982" style="color: #fff;" class="col-sm-offset-2 col-sm-8 text-center h2"><i class="fa fa-phone"></i> 0755-26657982</a>
                    </div>
                    <div class="form-group">
                        <a href="http://j.map.baidu.com/AhgTH" style="color: #fff; font-weight: 300; line-height: 35px;" target="_blank" class="col-sm-offset-2 col-sm-8 text-center h5">深圳市南山区铜鼓路39号大冲国际中心5号楼902</a>
                    </div>

                    <div class="form-group" style="margin-top: 60px;">
                        <label for="" class="col-sm-2 control-label"><span style="color: red;">*</span>&nbsp;公司或个人名称</label>
                        <div class="col-sm-8">
                            <input type="text" name="name" class="form-control" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label"><span style="color: red;">*</span>&nbsp;联系电话</label>
                        <div class="col-sm-8">
                            <input type="phone" name="phone" class="form-control" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label"><span style="color: red;">*</span>&nbsp;联系邮箱</label>
                        <div class="col-sm-8">
                            <input type="email" name="email" class="form-control" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label"><span style="color: red;">*</span>&nbsp;留言内容</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" name="content" rows="8" required=""></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label"></label>
                        <div class="col-sm-8">
                            {!! Geetest::render() !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-8">
                            <button type="submit" class="btn btn-primary" style="width: 100%;">留言</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection