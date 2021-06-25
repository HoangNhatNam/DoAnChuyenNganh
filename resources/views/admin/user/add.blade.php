@extends('layouts.admin')

@section('title')
    <title>Trang chu</title>
@endsection

@section('css')
    <link href="{{asset('vendor/select2/select2.min.css')}}" rel="stylesheet" />
    <link href="{{asset('admins/user/add/add.css')}}" rel="stylesheet" />
@endsection

@section('js')
    <script src="{{asset('vendor/select2/select2.min.js')}}"></script>
    <script src="{{asset('admins/user/add/add.js')}}"></script>
@endsection

@section('content')
    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'Người dùng', 'key' => 'Thêm'])
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{route('users.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label class="form-label">Họ tên người dùng</label>
                                <input type="text"
                                       class="form-control @error('FullName') is-invalid @enderror"
                                       placeholder="Nhập tên người dùng"
                                       name="FullName"
                                       value="{{old('FullName')}}">
                                @error('FullName')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Học vị</label>
                                <select class="form-control" name="Certificate">
                                    <option value="">Chọn học vị</option>
                                    {!! $htmlOptionCertificate !!}
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Học hàm</label>
                                <select class="form-control" name="Level">
                                    {!! $htmlOptionLevel !!}
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Hội đồng</label>
                                <select class="form-control" name="Regent">
                                    {!! $htmlOptionRegent !!}
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Email</label>
                                <input type="email"
                                       class="form-control @error('email') is-invalid @enderror"
                                       placeholder="Email"
                                       name="email"
                                       value="{{old('email')}}">
                                @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label">Địa chỉ</label>
                                <input type="text"
                                       class="form-control @error('Address') is-invalid @enderror"
                                       placeholder="Địa chỉ"
                                       name="Address"
                                       value="{{old('Address')}}">
                                @error('Address')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label">Số điện thoại</label>
                                <input type="text"
                                       class="form-control @error('Phone') is-invalid @enderror"
                                       placeholder="Số điện thoại"
                                       name="Phone"
                                       value="{{old('Phone')}}">
                                @error('Phone')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label">Cơ quan/ tổ chức</label>
                                <input type="text"
                                       class="form-control @error('Org') is-invalid @enderror"
                                       placeholder="Cơ quan/ tổ chức"
                                       name="Org"
                                       value="{{old('Org')}}">
                                @error('Org')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label">Phòng ban</label>
                                <input type="text"
                                       class="form-control @error('Office') is-invalid @enderror"
                                       placeholder="Phòng ban"
                                       name="Office"
                                       value="{{old('Office')}}">
                                @error('Office')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label">Vị trí công tác</label>
                                <input type="text"
                                       class="form-control"
                                       placeholder="Vị trí công tác"
                                       name="Position"
                                       value="{{old('Position')}}">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Mật khẩu</label>
                                <input type="text"
                                       class="form-control @error('password') is-invalid @enderror"
                                       placeholder="Mật khẩu"
                                       name="password"
                                       value="{{old('password')}}">
                                @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label ">Chọn vai trò</label>
                                <select name="role_id[]" class="form-control select2_init" multiple>
                                    <option value=""></option>
                                    @foreach($roles as $role)
                                        <option value="{{$role->id}}">{{$role->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Active: </label>
                                <label class="form-label">Có: </label>
                                <input type="radio" name="Active" value="1" checked>
                                <label class="form-label">Không: </label>
                                <input type="radio" name="Active" value="0">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


