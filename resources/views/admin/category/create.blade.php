@extends('admin.master')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="{{ route('categories.store') }}" autocomplete="off" class="form-horizontal">
                    @csrf
                    <div class="card ">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Thêm mới danh mục</h4>
                            <p class="card-category">Thông tin danh mục</p>
                        </div>


                        {{-- {!! Toastr::message() !!} --}}
                        <div class="card-body ">
                            <div class="row">
                                <label class="col-sm-2 col-form-label">Tên danh mục</label>
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <input class="form-control" name="name" id="input-name" type="text" placeholder="Nhập tên danh mục" value="{{ old('name') }}"   aria-required="true"/>
                                        @error('name')
                                            <span class="text-danger">
                                                <span class="mess-error"><i class="fas fa-exclamation-triangle"></i> {{ $message }}</span>
                                            </span>
                                        @enderror
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
@endsection

