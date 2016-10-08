@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <h1 class="title text-lighter">
                @if(isset($career_job))
                更新职位
                @else
                创建职位
                @endif
                <a href="{{ url('/admin/career_jobs') }}" class="btn btn-default btn-xs"><i class="fa fa-mail-reply"></i></a>
            </h1>
            <hr>
            <div class="well">
                @include('admin.career_job._form')
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript" src="/vendor/summernote/summernote.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#summernote').summernote({
                height: '300px',
                callbacks: {
                    onImageUpload: function(files) {
                        var $summernote = $(this);
                        sendFile(files[0],$summernote);
                    }
                }
            });
            function sendFile(file, $summernote) {
                data = new FormData();
                data.append("file", file);
                $.ajax({
                    data: data,
                    type: "POST",
                    url: "/admin/upload/image",
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(url) {
                        $summernote.summernote('insertImage', url);
                    }
                });
            }
        });
    </script>
@endsection