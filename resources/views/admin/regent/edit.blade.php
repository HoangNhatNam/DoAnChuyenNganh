@extends('layouts.admin')

@section('title')
    <title>Trang chu</title>
@endsection

@section('content')
    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'Hội đồng', 'key' => 'Sửa'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{route('regents.update', ['id' => $regentFollowIdEdit->id])}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label class="form-label">Tên hội đồng</label>
                                <input type="text" class="form-control"
                                       name="RegentName" value="{{$regentFollowIdEdit->RegentName}}">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


