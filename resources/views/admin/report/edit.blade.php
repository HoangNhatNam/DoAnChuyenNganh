@extends('layouts.admin')

@section('title')
    <title>Trang chu</title>
@endsection

@section('css')
    <link href="{{asset('admins/user/add/add.css')}}" rel="stylesheet" />
@endsection

@section('js')
    <script>
        $("input[type='checkbox']").on('change', function(){
            $(this).val(this.checked ? 1 : 0);
        })
    </script>
@endsection

@section('content')
    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'bài nộp', 'key' => 'sửa'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{route('report.update', ['id' => $report->id])}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label class="form-label">Tiêu đề</label>
                                <input type="text"
                                       class="form-control"
                                       placeholder="Nhập tiêu đề"
                                       name="ReportTitle"
                                       value="{{$report->ReportTitle}}">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Tóm tắt</label>
                                <textarea class="form-control" name="Summarize" rows="4">
                                    {{$report->Summarize}}
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Ngày nộp</label>
                                <input type="datetime-local"
                                       class="form-control"
                                       name="DateSubmit" value="{{$date . 'T' . $time}}">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Kích hoạt</label>
                                <input type="checkbox"
                                       name="Active"
                                       value="0">
                            </div>
                            <div class="form-group">
                                <label>Người nộp</label>
                                <select class="form-control" name="User_id">
                                    @foreach($users as $user)
                                        <option value="{{$user->id}}">{{$user->FullName}}̣</option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


