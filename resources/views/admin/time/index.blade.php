@extends('layouts.admin')

@section('title')
    <title>Thêm đối tác</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('admins/partner/index/list.css') }}">

@endsection

@section('js')
    <script src="{{asset('vendor/sweetalert2/sweetalert2@10.js')}}"></script>
    <script src="{{ asset('admins/main.js') }}"></script>
@endsection

@section('content')
    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'thời gian hội thảo', 'key' => 'Danh sách'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Hạn tóm tắt</th>
                                <th scope="col">Hạn toàn văn</th>
                                <th scope="col">Thời gian tuyển chọn</th>
                                <th scope="col">Thời gian hội thảo</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($times as $time)
                                <tr>
                                    <td>{{$time->reportSub}}</td>
                                    <td>{{$time->reportMoreFull}}</td>
                                    <td>{{$time->selection}}</td>
                                    <td>{{$time->workshop}}</td>
                                    <td>
                                        @can('time-edit')
                                        <a href="{{route('time.edit', ['id' => $time->id])}}" class="btn btn-default">Edit</a>
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


