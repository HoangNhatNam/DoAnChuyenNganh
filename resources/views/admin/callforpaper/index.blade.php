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
    <script>
        $(document).ready(function () {
            $("input:checkbox").change(function () {
                let id = $(this).attr('id');
                let urlRequest = window.location.href + '/activation';
                $.ajax({
                    type: 'POST',
                    url: urlRequest,
                    headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'},
                    data: {"id": id},
                    success: function (data) {
                        if (data.code == 200) {
                        }
                    }
                });
            });
        });
    </script>
@endsection

@section('content')
    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'thông báo', 'key' => 'Danh sách'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        @can('callforpaper-add')
                        <a href="{{route('callforpaper.create')}}" class="btn btn-success float-right m-2">Add</a>
                        @endcan
                    </div>
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Tiêu đề</th>
                                <th scope="col">Nội dung</th>
                                <th scope="col">File pdf</th>
                                @can('callforpaper-edit')
                                <th scope="col" style="text-align: center">Active</th>
                                @endcan
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($callforpapers as $callforpaper)
                                <tr>
                                    <td>{{$callforpaper->title}}</td>
                                    <td>{{$callforpaper->content}}</td>
                                    <td>
                                        <embed src="{{$callforpaper->path}}" alt="">
                                    </td>
                                    @can('callforpaper-edit')
                                    <td style="text-align: center">
                                        <input type="checkbox" name="active" style="transform: scale(1.4)"
                                               id="{{$callforpaper->id}}"
                                               @if($callforpaper->active == 1) checked @endif>
                                    </td>
                                    @endcan
                                    <td>
                                        @can('callforpaper-edit')
                                        <a href="{{route('callforpaper.edit', ['id' => $callforpaper->id])}}" class="btn btn-default">Edit</a>
                                        @endcan
                                            @can('callforpaper-delete')
                                        <a href="{{route('callforpaper.delete', ['id' => $callforpaper->id])}}"
                                           class="btn btn-danger action_delete"
                                           data-url="{{route('callforpaper.delete', ['id' => $callforpaper->id])}}">Delete</a>
                                            @endcan
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        {{--                        {{$partners->links()}}--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


