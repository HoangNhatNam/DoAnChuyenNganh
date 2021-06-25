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
        @include('partials.content-header', ['name' => 'Học hàm', 'key' => 'Danh sách'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        @can('level-add')
                        <a href="{{route('levels.create')}}" class="btn btn-success float-right m-2">Add</a>
                        @endcan
                    </div>
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Tên học hàm</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($levels as $level)
                                <tr>
                                    <td>{{$level->LevelName}}</td>
                                    <td>
                                        @can('level-edit')
                                        <a href="{{route('levels.edit', ['id' => $level->id])}}" class="btn btn-default">Edit</a>
                                        @endcan
                                            @can('level-delete')
                                        <a href="{{route('levels.delete', ['id' => $level->id])}}"
                                           class="btn btn-danger action_delete"
                                           data-url="{{route('levels.delete', ['id' => $level->id])}}">Delete</a>
                                            @endcan
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        {{$levels->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


