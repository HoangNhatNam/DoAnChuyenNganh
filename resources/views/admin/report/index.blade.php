@extends('layouts.admin')

@section('title')
    <title>Trang chu</title>
@endsection

@section('js')
    <script src="{{asset('vendor/sweetalert2/sweetalert2@10.js')}}"></script>
    <script src="{{ asset('admins/main.js') }}"></script>
    <script>
        $(document).ready(function(){
            $("input:checkbox").change(function() {
                let id = $(this).attr('id');
                let urlRequest = window.location.href + '/activation';
                $.ajax({
                    type:'POST',
                    url: urlRequest,
                    headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}' },
                    data: { "id" : id },
                    success: function(data){
                        if(data.code == 200){
                        }
                    }
                });
            });
        });
    </script>
@endsection

@section('content')
    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'bài nộp', 'key' => 'Danh sách'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Tiêu đề</th>
                                <th scope="col">Từ khóa</th>
                                <th scope="col">Người nộp</th>
                                @can('report-edit')
                                <th scope="col" style="text-align: center">Active</th>
                                @endcan
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($reports as $report)
                                <tr>
                                    <td>{{$report->ReportTitle}}</td>
                                    <td>{{$report->Keyword}}</td>
                                    <td>{{optional($report->user)->FullName}}</td>
                                    @can('report-edit')
                                    <td style="text-align: center">
                                        <input type="checkbox" name="Active" style="transform: scale(1.4)"
                                               id="{{$report->id}}" @if($report->Active == 1) checked @endif>
                                    </td>
                                    @endcan
                                    <td>
                                        @can('report-delete')
                                        <a href="{{route('report.delete', ['id' => $report->id])}}"
                                           class="btn btn-danger action_delete"
                                           data-url="{{route('report.delete', ['id' => $report->id])}}">Delete</a>
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        {{$reports->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


