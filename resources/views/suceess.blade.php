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
    <div style="position: absolute; width: 100%; top: 20%; left: 0px; color: #fff; opacity: 0.9;">
        <div class="container-fluid">
            <div class="row contact">
                <div class="col-md-6 col-md-offset-3">
                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label"> </label>
                        <div class="col-sm-8 text-center">
                            <h2><i class="fa fa-check-circle fa-5x" style="color: #3aafd6;"></i></h2>

                            <h4>留言成功！我们将尽快联系您.</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection