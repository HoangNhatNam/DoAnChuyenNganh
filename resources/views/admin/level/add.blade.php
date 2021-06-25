@extends('layouts.admin')

@section('title')
    <title>Trang chu</title>
@endsection

@section('css')
    <link href="{{asset('admins/user/add/add.css')}}" rel="stylesheet" />
@endsection

@section('content')
    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'Học hàm', 'key' => 'Thêm'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{route('levels.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label class="form-label">Tên học hàm</label>
                                <input type="text"
                                       class="form-control @error('LevelName') is-invalid @enderror"
                                       placeholder="Nhập tên học hàm"
                                       name="LevelName"
                                       value="{{old('LevelName')}}">
                                @error('LevelName')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


