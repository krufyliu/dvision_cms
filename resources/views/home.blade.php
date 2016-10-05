@extends('layouts.app')

@section('content')
    <div id="carousel-generic" class="carousel slide" data-ride="carousel">
        <!-- <ol class="carousel-indicators">
            <li data-target="#carousel-generic" data-slide-to="0" class="active"></li>
        </ol> -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="/image/home.jpg" class="img-responsive" width="100%" alt="...">
                <div class="carousel-caption">
                </div>
            </div>
        </div>
        <!-- <a class="left carousel-control" href="#carousel-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
        </a> -->
    </div>
    <div class="row video">
        @foreach($videos as $video)
            <div class="col-xs-12 col-sm-6 col-md-4 video-item">
                <a href="{{ url('/video') . '/' . $video->id }}">
                <img src="{{ '/storage/' . $video->cover_image }}" class="img-responsive" alt="Responsive image"/>
                <div>
                    <p class="text-center">
                        <span class="play"></span>
                        <span class="h5 text-lighter">{{ $video->title }}</span>
                    </p>
                </div>
                </a>
            </div>
        @endforeach
    </div>
    <br>
    <br>
@endsection

@section('script')
    <script type="text/javascript">
    $(document).ready(function() {
        if(document.documentElement.clientWidth > 768) {
            $('.video > .video-item ').each(function() {
                $(this).hoverdir({
                    hoverDelay: 75
                });
            });
        }
    });
    </script>
@endsection