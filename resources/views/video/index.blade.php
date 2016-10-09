@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row margin-middle">
        <div class="col-md-12 text-center">
            <p class="h1 text-lighter">
                走进虚拟世界
            </p>
            <p>
                DKVISION 让虚拟变成现实颠覆传统影视观影体验
            </p>
        </div>
    </div>
    <div class="row margin-middle">
        <div class="col-md-12">
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
                    选择类别
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                    @foreach(App\Models\VideoCategory::all() as $category)
                        <li role="presentation">
                            <a role="menuitem" tabindex="-1" href="{{ url('video?category_id=').$category->id }}">{{$category->title}}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
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