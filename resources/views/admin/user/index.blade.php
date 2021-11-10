@extends('admin.master')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Users</h4>
                        <p class="card-category"> Here you can manage users</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 text-right">
                                <a href="#" class="btn btn-sm btn-primary">Add user</a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="TableUsers" class="table">
                                <thead class=" text-primary">
                                    <tr>
                                        <th>Id</th>
                                        <th>Họ tên tài khoản</th>
                                        <th>Email</th>
                                        <th>Điện thoại</th>
                                        <th class="text-right">Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="alert alert-danger">
                    <span style="font-size:18px;">
                        <b> </b> This is a PRO feature!
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
    $(function () {
         var table = $('#TableUsers').DataTable({
             processing: true,
             serverSide: true,
             ajax:"{{ route('users.index') }}",

             columns: [
                    {
                        data: 'id',
                        name: 'id',
                        searchable: true
                    },

                    {
                        data: 'name',
                        name: 'name',
                        searchable: true
                    },

                    {
                        data: 'email',
                        name: 'email',
                        searchable: true
                    },

                    {
                        data: 'phone',
                        name: 'phone',
                        searchable: true
                    },

                    {
                        data: 'action',
                        name: 'action',
                        orderable: true,
                        searchable: false
                    },
             ]
         });
     });
</script>
@endsection
