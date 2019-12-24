@extends('layouts.admin.app')
@section('content')
    <div>
        <div class="page-title">
            <div class="title_left">
                <h2>Chỉnh sủa thông tin phòng</h2>
            </div>
        </div>

        <div class="clearfix"></div>
        <div class="x_content">
            <form action="/admin/room/{{$room->id}}/update" method="POST">
                {{ csrf_field() }}
                {{method_field('put')}}
                <div class="form-group">
                    <label for="name">Tên phòng</label>
                    <input type="text" class="form-control" id="name" placeholder="Nhập tên phòng" name="name"
                           value="{{$room->name}}">
                    {{--                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>--}}
                </div>
                <div class="form-group">
                    <label for="type">Loại phòng</label>
                    <select id="type" class="form-control" name="type_id">
                        <option value="1" {{$room->type_id == 1 ? 'selected' : ''}}>1</option>
                        <option value="2" {{$room->type_id == 2 ? 'selected' : ''}}>2</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="description">Mô tả</label>
{{--                    <textarea class="form-control" id="description" placeholder="..." name="description">--}}
{{--                        {{$room->description}}--}}
{{--                    </textarea>--}}
                    <textarea class="form-control" name="description" id="editor" required placeholder="Nhập phần nội dung bài viết">
                       {{$room->description}}
                        </textarea>
                </div>
                <script>
                    ClassicEditor
                        .create(document.querySelector('#description'))
                        .catch(error => {
                            console.error(error);
                        });
                </script>
                <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                <script> CKEDITOR.replace('editor', {
                        filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
                        filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
                        filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
                        filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
                        filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
                        filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
                    } );
                </script>

                <div class="form-group">
                    <label for="price">Giá</label>
                    <input type="number" class="form-control" id="price" placeholder="0" name="price"
                           value="{{$room->price}}">
                </div>
                <div class="form-group">
                    <label for="total">Tổng số phòng</label>
                    <input type="number" class="form-control" id="total" placeholder="" name="total"
                           value="{{$room->total}}">
                </div>
                <div class="form-group">
                    <label for="available">Số phòng còn lại</label>
                    <input type="number" class="form-control" id="available" placeholder="" name="available"
                           value="{{$room->available}}">
                </div>
                <button type="submit" class="btn btn-primary">Cập nhật</button>
            </form>
        </div>
    </div>
@endsection
@section('miniscript')
{{--    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>--}}
{{--    <script>--}}
{{--        CKEDITOR.replace( 'description' );--}}
{{--    </script>--}}
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'description' );
    </script>
    @endsection