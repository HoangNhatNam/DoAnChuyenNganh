@extends('layouts.admin')

@section('title')
    <title>Trang chu</title>
@endsection

@section('css')
    <link href="{{asset('admins/user/add/add.css')}}" rel="stylesheet" />
@endsection

@section('js')

@endsection

@section('content')
    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'thông báo', 'key' => 'Sửa'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{route('callforpaper.update', ['id' => $callforpaper->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Tiêu đề</label>
                                <input type="text"
                                       class="form-control"
                                       placeholder="Nhập tên tiêu đề"
                                       name="title"
                                       value="{{$callforpaper->title}}">
                            </div>

                            <div class="form-group">
                                <label class="form-label">File pdf</label>
                                <input type="file" class="form-control-file"
                                       name="path">
                                <div class="col-md-12">
                                    <div class="row">
                                        <embed src="{{$callforpaper->path}}" alt="">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


