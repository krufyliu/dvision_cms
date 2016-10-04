@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-sm-10 col-sm-offset-1">
        <h1 class="title text-lighter">
      文章
        <a href="{{ url('/admin/posts/create') }}" class="btn btn-default btn-xs"><i class="fa fa-plus"></i></a>
        </h1>
        <hr>
        <div class="well">
            <div class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="table-responsive">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>标题</th>
                                        <th>封面图片</th>
                                        <th>创建时间</th>
                                        <th>更新时间</th>
                                        <th>创建人</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($posts as $post)
                                        <tr class="{{ $loop->iteration % 2 == 0 ? 'even' : 'odd' }}" data-href="{{ $post->path() . '/edit' }}">
                                            <td>{{ $post->title }}</td>
                                            <td>
                                                <a class="text-muted" href="{{ '/storage/' . $post->cover_image }}" target="_blank">
                                                    {{ '/storage/' . $post->cover_image }}
                                                </a>
                                            </td>
                                            <td>{{ $post->created_at }}</td>
                                            <td>{{ $post->updated_at }}</td>
                                            <td>{{ $post->creator->name }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="dataTables_info" id="dataTables-example_info" role="status" aria-live="polite">
                            Showing {{ ($posts->currentPage()-1) * $posts->perPage() + 1 }} to {{ ($posts->currentPage()-1) * $posts->perPage() + $posts->count() }} of {{ $posts->total() }} entries
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
                            {{ $posts->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection