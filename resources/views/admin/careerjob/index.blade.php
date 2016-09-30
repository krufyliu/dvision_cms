@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-sm-10 col-sm-offset-1">
        <h1 class="title text-lighter">
      职位
        <a href="{{ url('/admin/career_jobs/create') }}" class="btn btn-default btn-xs"><i class="fa fa-plus"></i></a>
        </h1>
        <hr>
        <div class="well">
            <div class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                <div class="row">
                    <div class="col-sm-12">
                        <table width="100%" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>标题</th>
                                    <th>部门</th>
                                    <th>工作地点</th>
                                    <th>创建时间</th>
                                    <th>更新时间</th>
                                    <th>创建人</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($careerjobs as $careerjob)
                                    <tr data-href="{{ $careerjob->path() . '/edit' }}">
                                        <td>{{ $careerjob->title }}</td>
                                        <td>{{ $careerjob->department }}</td>
                                        <td>{{ $careerjob->location }}</td>
                                        <td>{{ $careerjob->created_at }}</td>
                                        <td>{{ $careerjob->updated_at }}</td>
                                        <td>{{ $careerjob->creator->name }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="dataTables_info" id="dataTables-example_info" role="status" aria-live="polite">
                            Showing {{ ($careerjobs->currentPage()-1)*$careerjobs->perPage() + 1 }} to {{ ($careerjobs->currentPage()-1)*$careerjobs->perPage() + $careerjobs->count() }} of {{ $careerjobs->total() }} entries
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
                            {{ $careerjobs->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection