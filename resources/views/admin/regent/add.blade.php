@extends('layouts.admin')

@section('title')
    <title>Trang chu</title>
@endsection

@section('css')
    <link href="{{asset('admins/user/add/add.css')}}" rel="stylesheet" />
@endsection

@section('content')
    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'Hội đồng', 'key' => 'Thêm'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{route('regents.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label class="form-label">Tên hội đồng</label>
                                <input type="text"
                                       class="form-control @error('RegentName') is-invalid @enderror"
                                       placeholder="Nhập tên hội đồng"
                                       name="RegentName"
                                       value="{{old('RegentName')}}">
                                @error('RegentName')
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


