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
    <?php
    $baseUrl ='http://localhost:8000';
    ?>
    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'file nộp', 'key' => 'Danh sách'])
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Tên file</th>
                                <th scope="col">Ngày nộp</th>
                                @can('reportfile-edit')
                                <th scope="col" style="text-align: center">Active</th>
                                @endcan
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($reportfiles as $reportfile)
                                <tr>
                                    <td>{{$reportfile->FileName}}</td>
                                    <td>{{$reportfile->DateSubmit}}</td>
                                    @can('reportfile-edit')
                                    <td style="text-align: center">
                                        <input type="checkbox" name="Active" style="transform: scale(1.4)"
                                               id="{{$reportfile->id}}" @if($reportfile->Active == 1) checked @endif>
                                    </td>
                                    @endcan
                                    <td>
                                        @can('reportfile-delete')
                                        <a href="{{route('reportfile.delete', ['id' => $reportfile->id])}}"
                                           class="btn btn-danger action_delete"
                                           data-url="{{route('reportfile.delete', ['id' => $reportfile->id])}}">Delete</a>
                                        @endcan
                                            @can('reportfile-download')
                                        <a href="{{$baseUrl . $reportfile->FilePath}}" class="btn btn-default">Download</a>
                                            @endcan
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        {{$reportfiles->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


