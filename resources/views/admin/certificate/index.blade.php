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
        @include('partials.content-header', ['name' => 'Học vị', 'key' => 'Danh sách'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        @can('certificate-add')
                        <a href="{{route('certificates.create')}}" class="btn btn-success float-right m-2">Add</a>
                        @endcan
                    </div>
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Tên học vị</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($certificates as $certificate)
                                <tr>
                                    <td>{{$certificate->CertificateName}}</td>
                                    <td>
                                        @can('certificate-edit')
                                        <a href="{{route('certificates.edit', ['id' => $certificate->id])}}" class="btn btn-default">Edit</a>
                                        @endcan
                                        @can('certificate-delete')
                                        <a href="{{route('certificates.delete', ['id' => $certificate->id])}}"
                                           class="btn btn-danger action_delete"
                                           data-url="{{route('certificates.delete', ['id' => $certificate->id])}}">Delete</a>
                                            @endcan
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        {{$certificates->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


