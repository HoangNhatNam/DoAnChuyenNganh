@extends('layouts.admin')

@section('title')
    <title>Setting</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('admins/setting/index.css') }}">
@endsection

@section('js')
    <script src="{{asset('vendor/sweetalert2/sweetalert2@10.js')}}"></script>
    <script src="{{ asset('admins/main.js') }}"></script>
@endsection

@section('content')
    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'cài đặt', 'key' => 'Danh sách'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    @can('setting-add')
                    <div class="col-md-12">
                        <div class="btn-group float-right">
                            <button class="btn">Add setting</button>
                            <button class="btn dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('settings.create') . '?type=Text'}}">Text</a></li>
                                <li><a href="{{route('settings.create') . '?type=Textarea'}}">Textarea</a></li>
                            </ul>
                        </div>
                    </div>
                    @endcan
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Config key</th>
                                <th scope="col">Config value</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($settings as $setting)
                                <tr>
                                    <td>{{$setting->config_key}}</td>
                                    <td>{{$setting->config_value}}</td>
                                    <td>
                                        @can('setting-edit')
                                        <a href="{{route('settings.edit', ['id' => $setting->id]) . '?type=' . $setting->type}}" class="btn btn-default">Edit</a>
                                        @endcan
                                            @can('setting-delete')
                                        <a href="{{route('settings.delete', ['id' => $setting->id])}}"
                                           class="btn btn-danger action_delete"
                                           data-url="{{route('settings.delete', ['id' => $setting->id])}}">Delete</a>
                                            @endcan
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
{{--                        {{$regents->links()}}--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


