@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-sm-10 col-sm-offset-1">
        <h1 class="title text-lighter">
      创建职位
        <a href="{{ url('/admin/videos') }}" class="btn btn-default btn-xs"><i class="fa fa-mail-reply"></i></a>
        </h1>
        <hr>
        <div class="well">
            <form role="form" method="post" action="{{ url('/career_jobs') }}">
                {{ csrf_field() }}

                <div class="form-group">
                    <label class="control-label">职位名称</label>
                    <input class="form-control" type="text" required></input>
                    <span class="help-block"></span>
                </div>

                <div class="form-group">
                    <label class="control-label">部门</label>
                    <input class="form-control" type="text" required></input>
                    <span class="help-block"></span>
                </div>

                <div class="form-group">
                    <label class="control-label">工作地点</label>
                    <input class="form-control" type="text" required></input>
                    <span class="help-block"></span>
                </div>
                <div class="form-group">
                    <label class="control-label">内容</label>
                    <div id="summernote"></div>
                    <span class="help-block"></span>
                </div>
            </form>
            <br>
            <div class="buttons text-right">
              <a class="btn btn-default" href="/admin/posts">取消</a>
              <a class="btn btn-primary create-btn">创建</a>
              <a class="btn btn-danger" href="">删除</a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    <script type="text/javascript" src="/vendor/summernote/summernote.min.js"></script>
    <script type="text/javascript">
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
    </script>
@endsection