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
        @include('partials.content-header', ['name' => 'Vai trò', 'key' => 'Danh sách'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        @can('role-add')
                        <a href="{{route('roles.create')}}" class="btn btn-success float-right m-2">Add</a>
                        @endcan
                    </div>
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Tên vai trò</th>
                                <th scope="col">Mô tả vai trò</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($roles as $role)
                                <tr>
                                    <td>{{$role->name}}</td>
                                    <td>{{$role->display_name}}</td>
                                    <td>
                                        @can('role-edit')
                                        <a href="{{route('roles.edit', ['id' => $role->id])}}" class="btn btn-default">Edit</a>
                                        @endcan
                                            @can('role-delete')
                                        <a href="{{route('roles.delete', ['id' => $role->id])}}"
                                           class="btn btn-danger action_delete"
                                           data-url="{{route('roles.delete', ['id' => $role->id])}}">Delete</a>
                                            @endcan
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        {{$roles->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


