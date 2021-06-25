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
        @include('partials.content-header', ['name' => 'Người dùng', 'key' => 'Sửa'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{route('users.update', ['id' => $user->id])}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label class="form-label">Họ tên người dùng</label>
                                <input type="text" class="form-control" placeholder="Nhập tên người dùng"
                                       name="FullName" value="{{$user->FullName}}">
                            </div>
                            <div class="form-group">
                                <label>Học vị</label>
                                <select class="form-control" name="Certificate" id="certificateSelect">
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
                                       class="form-control"
                                       placeholder="Email"
                                       name="email"
                                       value="{{$user->email}}">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Địa chỉ</label>
                                <input type="text"
                                       class="form-control"
                                       placeholder="Địa chỉ"
                                       name="Address"
                                       value="{{$user->Address}}">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Số điện thoại</label>
                                <input type="text"
                                       class="form-control"
                                       placeholder="Số điện thoại"
                                       name="Phone"
                                       value="{{$user->Phone}}">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Cơ quan/ tổ chức</label>
                                <input type="text"
                                       class="form-control"
                                       placeholder="Cơ quan/ tổ chức"
                                       name="Org"
                                       value="{{$user->Org}}">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Phòng ban</label>
                                <input type="text"
                                       class="form-control"
                                       placeholder="Phòng ban"
                                       name="Office"
                                       value="{{$user->Office}}">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Vị trí công tác</label>
                                <input type="text"
                                       class="form-control"
                                       placeholder="Vị trí công tác"
                                       name="Position"
                                       value="{{$user->Position}}">
                            </div>
                            <div class="form-group">
                                <label class="form-label ">Chọn vai trò</label>
                                <select name="role_id[]" class="form-control select2_init" multiple>
                                    <option value=""></option>
                                    @foreach($roles as $role)
                                        <option
                                            {{$rolesOfUser->contains('id', $role->id) ? 'selected' : ''}}
                                            value="{{$role->id}}">{{$role->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


