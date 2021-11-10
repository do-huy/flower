@extends('admin.master')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="{{ route('products.store') }}" autocomplete="off" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <div class="card ">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Thêm mới sản phẩm</h4>
                            <p class="card-category">Thông tin sản phẩm</p>
                        </div>


                        {{-- {!! Toastr::message() !!} --}}
                        <div class="card-body ">
                            <div class="row">

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Tên sản phẩm</label>
                                        <input class="form-control" name="name" id="input-name" type="text" placeholder="Nhập tên sản phẩm" value="{{ old('name') }}"   aria-required="true"/>
                                        @error('name')
                                            <span class="text-danger">
                                                <span class="mess-error"><i class="fas fa-exclamation-triangle"></i> {{ $message }}</span>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Danh mục</label>
                                        <select id="category_id" class="form-control" name="category_id">
                                            <option value="">Vui lòng chọn danh mục</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                            <span class="text-danger">
                                                <span class="mess-error"><i class="fas fa-exclamation-triangle"></i> {{ $message }}</span>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Số lượng</label>
                                        <input class="form-control" name="amount" id="input-name" type="number" placeholder="Nhập số lượng" value="{{ old('amount') }}"   aria-required="true"/>
                                        @error('amount')
                                            <span class="text-danger">
                                                <span class="mess-error"><i class="fas fa-exclamation-triangle"></i> {{ $message }}</span>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}" />
                                    <div class="form-group">
                                        <label class="col-form-label">Hình ảnh mô tả thêm cho sản phẩm (Tối đa 4 ảnh)</label>
                                        <input type="file" name="src[]" value="{{ old('src') }}" id="file-1" multiple class="file" data-overwrite-initial="false" data-max-file-count="4" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="col-form-label">Mô tả sản phẩm</label>
                                        <textarea id="editor" type="text" name="description" class="form-control">{{ old('description') }}</textarea>
                                        @error('description') <span class="text-danger">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card-footer ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary">Thêm mới</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div>
@endsection
@section('js')
<script>
    @if(count($errors) > 0)
        @foreach($errors->all() as $error)
            toastr.error("{{ $error }}");
        @endforeach
    @endif
</script>
<script>
    var options = {
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
    };
</script>
<script>
    CKEDITOR.replace('editor', options);
</script>
@endsection

