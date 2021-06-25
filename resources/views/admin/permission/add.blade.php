@extends('layouts.admin')

@section('title')
    <title>Trang chu</title>
@endsection

@section('css')
    <link href="{{asset('admins/user/add/add.css')}}" rel="stylesheet" />
@endsection

@section('content')
    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'permission', 'key' => 'Add'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{route('permissions.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Chọn tên modlue</label>
                                <select class="form-control" name="module_parent">
                                    <option value="">Chọn tên modlue</option>
                                    @foreach(config('permissions.table_model') as $moduleItem)
                                    <option value="{{$moduleItem}}">{{$moduleItem}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    @foreach(config('permissions.module_childrent') as $moduleItemChildrent)
                                        <div class="col-md-3">
                                            <label for="">
                                                <input type="checkbox" value="{{$moduleItemChildrent}}" name="module_chidrent[]">
                                                {{$moduleItemChildrent}}
                                            </label>
                                        </div>
                                    @endforeach
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


