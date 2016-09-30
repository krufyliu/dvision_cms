@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-sm-10 col-sm-offset-1">
        <h1 class="title text-lighter">
      创建文章
        <a href="{{ url('/admin/posts') }}" class="btn btn-default btn-xs"><i class="fa fa-mail-reply"></i></a>
        </h1>
        <hr>
        <div class="well">
            <form>
                <div class="form-group has-error">
                    <label class="control-label">标题</label>
                    <input class="form-control" type="text" required></input>
                    <span class="help-block">标题不能为空</span>
                </div>
                <div class="form-group">
                    <label class="control-label">封面图片(尺寸必须为 360*280)</label>
                    <div class="fileUpload" name="image">
                        <span class="btn btn-default btn-file btn-xs">
                          选择文件 <input type="file">
                        </span>
                        <div class="progress"><div class="progress-bar progress-bar-striped active" style="width: 10%"></div></div>
                        <div class="preview">
                            <p><i class="fa fa-file-o"></i></p>
                            <p><a href="/gridfs/data/id/27266b79ad7c3d555cec5684" target="_blank">/gridfs/data/id/27266b79ad7c3d555cec5684</a></p>
                        </div>
                        <button type="button" class="btn btn-danger btn-remove btn-xs">删除</button>
                      </div>
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