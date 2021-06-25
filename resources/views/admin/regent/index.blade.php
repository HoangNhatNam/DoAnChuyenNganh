@extends('layouts.admin')

@section('title')
    <title>Trang chu</title>
@endsection

@section('js')
    <script src="{{asset('vendor/sweetalert2/sweetalert2@10.js')}}"></script>
    <script src="{{ asset('admins/main.js') }}"></script>
@endsection

@section('content')
    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'Hội đồng', 'key' => 'Danh sách'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        @can('regents-add')
                        <a href="{{route('regents.create')}}" class="btn btn-success float-right m-2">Add</a>
                        @endcan
                    </div>
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Tên hội đồng</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($regents as $regent)
                                <tr>
                                    <td>{{$regent->RegentName}}</td>
                                    <td>
                                        @can('regents-edit')
                                            <a href="{{route('regents.edit', ['id' => $regent->id])}}"
                                               class="btn btn-default">Edit</a>
                                        @endcan
                                        @can('regents-delete')
                                            <a href="{{route('regents.delete', ['id' => $regent->id])}}"
                                               class="btn btn-danger action_delete"
                                               data-url="{{route('regents.delete', ['id' => $regent->id])}}">Delete</a>
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        {{$regents->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


