@extends('admin.master')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Danh sách sản phẩm</h4>
                        <p class="card-category"> Quản lý sản phẩm</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 text-right">
                                <a href="{{ route('products.create') }}" class="btn btn-sm btn-primary">Thêm sản phẩm</a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="product_table" class="table">
                                <thead class=" text-primary">
                                    <tr>
                                        <th>Id</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Danh mục</th>
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
         var table = $('#product_table').DataTable({
             processing: true,
             serverSide: true,
             ajax:"{{ route('products.index') }}",

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
                        data: 'category_id',
                        name: 'category_id',
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
