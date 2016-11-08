@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <h1 class="title text-lighter">
                留言
            </h1>
            <hr>
            <div class="well">
                <div class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                    <div class="row">
                        <div class="col-sm-12">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th>名称</th>
                                    <th>邮箱</th>
                                    <th>电话</th>
                                    <th>留言时间</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($feedbacks as $feedback)
                                    <tr class="{{ $loop->iteration % 2 == 0 ? 'even' : 'odd' }}">
                                        <td>{{ $feedback->name }}</td>
                                        <td>{{ $feedback->email }}</td>
                                        <td>{{ $feedback->phone }}</td>
                                        <td>{{ $feedback->created_at }}</td>
                                        <td>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#feedback_{{ $feedback->id }}">
                                                查看详情
                                            </button>
                                            <button class="btn btn-danger btn-xs delete" data-target="{{ url('/admin/feedbacks', [$feedback->id]) }}">删除</button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="feedback_{{ $feedback->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                            <h4 class="modal-title" id="myModalLabel">查看详情</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <table class="table table-bordered">
                                                                <tbody>
                                                                <tr>
                                                                    <td class="text-right">名称</td>
                                                                    <td>{{ $feedback->name }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-right">邮箱</td>
                                                                    <td>{{ $feedback->email }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-right">电话</td>
                                                                    <td>{{ $feedback->phone }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-right">留言时间</td>
                                                                    <td>{{ $feedback->created_at }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-right">留言内容</td>
                                                                    <td>{{ $feedback->content }}</td>
                                                                </tr>
                                                                </tbody>
                                                            </table>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="dataTables_info" id="dataTables-example_info" role="status" aria-live="polite">
                                {{ paginate_conclusion($feedbacks) }}
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
                                {{ $feedbacks->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function () {
            $('button.delete').on('click', function () {
                if(confirm("确定要删除数据吗？"))
                {
                    var url = $(this).data('target');
                    $.ajax({
                        url: url,
                        type: 'DELETE',
                        dataType: 'json',
                        data: {
                            _method: 'delete'
                        },
                        success: function(data) {
                            if(data.err_code == '0') {
                                window.location.reload();
                            } else {
                                alert("糟糕", data.err_msg, "error");
                            }
                        }
                    });
                }

            });
        });
    </script>
@endsection