@extends('layouts.app')

@section('content')
    <div id="carousel-generic" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="/image/join01.jpg" class="img-responsive" width="100%" alt="...">
                <div class="carousel-caption">
                </div>
                <div class="carousel-join text-right hidden-xs hidden-sm">
                    <p class="h1 text-lighter">
                        一个好玩的公司
                    </p>
                    <p>
                        我们是一个，青春向上，欢乐的团队，各种坚持以互联网的思维来创新发展，<br>
                         用眼看世界、用芯走未来，为智慧城市、智慧生活贡献力量。我们期待您的加入
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        @foreach($careerjobs as $careerjob)
            <div class="col-sm-12 col-md-8 col-lg-4 col-md-offset-2 col-lg-offset-4 margin-middle">
                <p class="h3 text-lighter text-center">
                    {{ $careerjob->title }}
                </p>
                <div class="col-md-6 margin-middle">
                    部门: {{ $careerjob->department }}
                </div>
                <div class="col-md-6 margin-middle">
                    工作地点: {{ $careerjob->location }}
                </div>
                <div class="col-md-12">
                    {!! $careerjob->description !!}
                </div>
            </div>
        @endforeach
    </div>
    <div class="row">
        <div class="col-md-12 margin-middle">
            <p class="h3 text-lighter text-center">
                招聘邮箱：hr@visiondk.com
            </p>
        </div>
    </div>
    <div id="carousel-generic" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="/image/join02.jpg" class="img-responsive" width="100%" alt="...">
                <div class="carousel-caption">
                    <!-- 快来加入我们吧！来啊！来啊！ -->
                </div>
                <div class="carousel-come text-right hidden-xs hidden-sm">
                    <p class="h1 text-lighter">
                        快来加入我们吧！来啊！来啊！
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection