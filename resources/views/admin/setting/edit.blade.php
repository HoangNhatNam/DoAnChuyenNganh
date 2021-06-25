@extends('layouts.admin')

@section('title')
    <title>Setting</title>
@endsection

@section('css')
    <link href="{{asset('admins/user/add/add.css')}}" rel="stylesheet"/>
@endsection


@section('content')
    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'cài đặt', 'key' => 'Thêm'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{route('settings.update', ['id' => $setting->id])}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label class="form-label">Config key</label>
                                <input type="text"
                                       class="form-control @error('config_key') is-invalid @enderror"
                                       placeholder="Nhập config key"
                                       name="config_key"
                                       value="{{$setting->config_key}}">
                                @error('config_key')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            @if(request()->type === "Text")
                                <div class="form-group">
                                    <label class="form-label">Config value</label>
                                    <input type="text"
                                           class="form-control @error('config_value') is-invalid @enderror"
                                           placeholder="Nhập config value"
                                           name="config_value"
                                           value="{{$setting->config_value}}">
                                    @error('config_value')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            @elseif(request()->type === "Textarea")
                                <div class="form-group">
                                    <label class="form-label">Config value</label>
                                    <textarea
                                        class="form-control @error('config_value') is-invalid @enderror"
                                        placeholder="Nhập config value"
                                        name="config_value"
                                        rows="5">
                                        {{$setting->config_value}}
                                    </textarea>
                                    @error('config_value')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            @endif

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


