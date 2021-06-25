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
        @include('partials.content-header', ['name' => 'thời gian nộp', 'key' => 'sửa'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{route('time.update', ['id' => $times->id])}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label class="form-label">Hạn tóm tắt</label>
                                <input type="datetime-local"
                                       class="form-control"
                                       name="reportSub" value="{{$dateSub . 'T' . $timeSub}}">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Hạn toàn văn</label>
                                <input type="datetime-local"
                                       class="form-control"
                                       name="reportMoreFull" value="{{$dateMoreFull . 'T' . $timeMoreFull}}">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Thời gian tuyển chọn</label>
                                <input type="datetime-local"
                                       class="form-control"
                                       name="selection" value="{{$dateSelection . 'T' . $timeSelection}}">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Thời gian hội thảo</label>
                                <input type="datetime-local"
                                       class="form-control"
                                       name="workshop" value="{{$dateWorkshop . 'T' . $timeWorkshop}}">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


