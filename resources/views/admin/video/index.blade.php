@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-sm-10 col-sm-offset-1">
        <h1 class="title text-lighter">
      视频
        <a href="{{ url('/admin/videos/create') }}" class="btn btn-default btn-xs"><i class="fa fa-plus"></i></a>
        </h1>
        <hr>
        <div class="well">
            <div class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                <div class="row">
                    <div class="col-sm-12">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>标题</th>
                                    <th>视频封面</th>
                                    <th>分类</th>
                                    <th>创建时间</th>
                                    <th>更新时间</th>
                                    <th>创建人</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($videos as $video)
                                <tr class="{{ $loop->iteration % 2 == 0 ? 'even' : 'odd' }}" data-href="{{ $video->path('admin').'/edit' }}">
                                    <td>{{ $video->title }}</td>
                                    <td><a href="{{ '/storage/'.$video->cover_image }}">{{ '/storage/'.$video->cover_image }}</a></td>
                                    <td>{{ $video->category->title }}</td>
                                    <td>{{ $video->created_at }}</td>
                                    <td>{{ $video->updated_at }}</td>
                                    <td>{{ $video->creator->name }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="dataTables_info" id="dataTables-example_info" role="status" aria-live="polite">
                            {{ paginate_conclusion($videos) }}
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
                            {{ $videos->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection