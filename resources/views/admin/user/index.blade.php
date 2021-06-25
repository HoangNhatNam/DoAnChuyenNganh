@extends('layouts.admin')

@section('title')
    <title>Trang chu</title>
@endsection

@section('css')

@endsection

@section('js')
    <script src="{{asset('vendor/sweetalert2/sweetalert2@10.js')}}"></script>
    <script src="{{ asset('admins/main.js') }}"></script>
    <script>
        $(document).ready(function(){
            $("input:checkbox").change(function() {
                let id = $(this).attr('id');
                let urlRequest = window.location.href + '/activation';
                $.ajax({
                    type:'POST',
                    url: urlRequest,
                    headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}' },
                    data: { "id" : id },
                    success: function(data){
                        if(data.code == 200){
                        }
                    }
                });
            });
        });
    </script>
    <script type="text/javascript">
        $('#search').on('keyup',function(){
            $value = $(this).val();
            let urlRequest = window.location.href + '/search';
            $.ajax({
                type: 'get',
                url: urlRequest,
                data: {
                    'search': $value
                },
                success:function(data){
                    $('tbody').html(data);
                }
            });
        })
        $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
    </script>
@endsection

@section('content')
    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'Người dùng', 'key' => 'Danh sách'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        @can('user-add')
                        <a href="{{route('users.create')}}" class="btn btn-success float-right m-2" id="add">Add</a>
                        @endcan
                    </div>
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Họ tên</th>
                                <th scope="col">Email</th>
                                <th scope="col">Vai trò</th>
                                @can('user-edit')
                                <th scope="col" style="text-align: center">Active</th>
                                @endcan
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->FullName}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>
                                        @foreach($user->roles as $roleItem)
                                            {{optional($roleItem)->name}},
                                        @endforeach
                                    </td>
                                    @can('user-edit')
                                    <td style="text-align: center">
                                        <input type="checkbox" name="Active" style="transform: scale(1.4)"
                                               id="{{$user->id}}" @if($user->Active == 1) checked @endif>
                                    </td>
                                    @endcan
                                    <td>
                                        @can('user-edit')
                                        <a href="{{route('users.edit', ['id' => $user->id])}}" class="btn btn-default">Edit</a>
                                        @endcan
                                            @can('user-delete')
                                        <a href="{{route('users.delete', ['id' => $user->id])}}"
                                           class="btn btn-danger action_delete"
                                           data-url="{{route('users.delete', ['id' => $user->id])}}">Delete</a>
                                            @endcan
                                            @can('user-profile')
                                        <a href="{{route('users.profile', ['id' => $user->id])}}" class="btn btn-default">Profile</a>
                                            @endcan
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        {{$users->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


