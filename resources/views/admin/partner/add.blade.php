@extends('layouts.admin')

@section('title')
    <title>Trang chu</title>
@endsection

@section('css')
    <link href="{{asset('vendor/select2/select2.min.css')}}" rel="stylesheet" />
    <link href="{{asset('admins/user/add/add.css')}}" rel="stylesheet" />
@endsection

@section('content')
    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'Đối tác', 'key' => 'Thêm'])
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{route('partner.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="form-label">Tên đối tác</label>
                                <input type="text"
                                       class="form-control @error('PartnerName') is-invalid @enderror"
                                       placeholder="Nhập tên đối tác"
                                       name="PartnerName"
                                       value="{{old('PartnerName')}}">
                                @error('PartnerName')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label">Link đối tác</label>
                                <input type="text"
                                       class="form-control"
                                       placeholder="Nhập link đối tác"
                                       name="link_partner"
                                       value="{{old('link_partner')}}">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Hình ảnh</label>
                                <input type="file" class="form-control-file"
                                       name="image_path">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{asset('vendor/select2/select2.min.js')}}"></script>
@endsection
