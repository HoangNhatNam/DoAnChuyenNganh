@extends('layouts.admin')

@section('title')
    <title>Thêm đối tác</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('admins/partner/index/list.css') }}">

@endsection

@section('js')
    <script src="{{asset('vendor/sweetalert2/sweetalert2@10.js')}}"></script>
    <script src="{{ asset('admins/main.js') }}"></script>
@endsection

@section('content')
    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'Đối tác', 'key' => 'Danh sách'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        @can('partner-add')
                        <a href="{{route('partner.create')}}" class="btn btn-success float-right m-2">Add</a>
                        @endcan
                    </div>
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Tên đối tác</th>
                                <th scope="col">Hình ảnh</th>
                                <th scope="col">Link đối tác</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($partners as $partnerItem)
                                <tr>
                                    <th scope="row">{{$partnerItem->PartnerName}}</th>
                                    <td>
                                        <img class="partner_image" src="{{$partnerItem->image_path}}" alt="">
                                    </td>
                                    <th scope="row">{{$partnerItem->link_partner}}</th>
                                    <td>
                                        @can('partner-edit')
                                        <a href="{{route('partner.edit', ['id' => $partnerItem->id])}}" class="btn btn-default">Edit</a>
                                        @endcan
                                            @can('partner-delete')
                                        <a href="{{route('partner.delete', ['id' => $partnerItem->id])}}"
                                           class="btn btn-danger action_delete"
                                            data-url="{{route('partner.delete', ['id' => $partnerItem->id])}}">Delete</a>
                                            @endcan
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        {{$partners->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


