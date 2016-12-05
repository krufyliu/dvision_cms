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
    <script type="text/javascript" src="/vendor/jquery-upload-file/jquery.form.min.js"></script>
    <script type="text/javascript" src="/vendor/jquery-upload-file/jquery.uploadfile.min.js"></script>
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

            $("#fileuploader").uploadFile({
                url: "/admin/upload/file",
                fileName: "myfile",
                multiple: false,
                maxFileCount: 1,
                acceptFiles: "image/*",
                showPreview: true,
                showDelete: true,
                deleteCallback: function (data, pd) {
                    var data = JSON.parse(data);
                    for (var i = 0; i < data.length; i++) {
                        $.post("/admin/upload/delete", {op: "delete",name: data[i]});
                    }
                    $("input[name='cover_image']").val('');
                    pd.statusbar.hide(); //You choice.

                },
                onSuccess:function(files,data,xhr,pd) {
                    $("input[name='cover_image']").val(JSON.parse(data)[0]);
                },
            });
        });
    </script>
@endsection