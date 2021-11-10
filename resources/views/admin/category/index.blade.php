@extends('admin.master')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Danh sách danh mục</h4>
                        <p class="card-category"> Quản lý danh mục</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 text-right">
                                <a href="{{ route('categories.create') }}" class="btn btn-sm btn-primary">Thêm danh mục</a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="TableCategory" class="table">
                                <thead class=" text-primary">
                                    <tr>
                                        <th>Id</th>
                                        <th>Tên danh mục</th>
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
         var table = $('#TableCategory').DataTable({
             processing: true,
             serverSide: true,
             ajax:"{{ route('categories.index') }}",

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
                        data: 'action',
                        name: 'action',
                        orderable: true,
                        searchable: false
                    },
             ]
         });
     });
</script>
<script>
    $(document).ready(function(){
        $.ajaxSetup({
        headers:
            { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
    });
    $(document).on('click', '.notificationDelete', function(){
        event.preventDefault();
        var delete_id = $(this).attr('id');
        swal({
                title: "Bạn có chắc chắc?",
                text: "Muốn xóa danh mục này",
                icon: "warning",
                buttons: true,
                // dangerMode: true,
            })
            .then((willDelete) => {
                    if (willDelete) {
                        var data = {
                            "_token": $('input[name="csrf-token"]').val(),
                            "id": delete_id,
                        };
                        $.ajax({
                            type: "DELETE",
                            url: '/categories/'+delete_id,
                            data: data,
                            dataType: "json",
                            success: function(response){
                                $('#TableCategory').DataTable().ajax.reload();
                                swal(response.status, {
                                    title: "Thành công",
                                    icon: "success",
                                    button: "Xác nhận",
                                    timer: 2000,
                            })
                        }
                    });
                }
            });
        });
    });
</script>
@endsection
