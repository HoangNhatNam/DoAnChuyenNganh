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
        @include('partials.content-header', ['name' => 'bài nộp', 'key' => 'Thêm'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{route('reportfile.update', ['id' => $reportFile->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Tiêu đề</label>
                                <select class="form-control" name="Report_id">
                                    @foreach($reports as $report)
                                        <option value="{{$report->id}}">{{$report->ReportTitle}}̣</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">File</label>
                                <input type="file" class="form-control-file"
                                       name="FilePath">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Kích hoạt</label>
                                <input type="checkbox"
                                       name="Active"
                                       value="0">
                            </div>


                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


