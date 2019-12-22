@extends('layouts.admin.app')
@section('content')
    <div>
        <div class="page-title">
            <div class="title_left">
                <h2>Tạo phòng mới</h2>
            </div>
        </div>

        <div class="clearfix"></div>
        <div class="x_content">
            <form action="/admin/room/store" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Tên phòng</label>
                    <input type="text" class="form-control" id="name" placeholder="Nhập tên phòng" name="name">
{{--                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>--}}
                </div>
                <div class="form-group">
                    <label for="type">Loại phòng</label>
                    <select id="type" class="form-control" name="type_id">
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="description">Mô tả</label>
                    <input type="text" class="form-control" id="description" placeholder="..." name="description">
                </div>
                <div class="form-group">
                    <label for="price">Giá</label>
                    <input type="number" class="form-control" id="price" placeholder="0" name="price">
                </div>
                <div class="form-group">
                    <label for="total">Tổng số phòng</label>
                    <input type="number" class="form-control" id="total" placeholder="" name="total">
                </div>
                <div class="form-group">
                    <label for="available">Số phòng còn lại</label>
                    <input type="number" class="form-control" id="available" placeholder="" name="available">
                </div>
                <button type="submit" class="btn btn-primary">Tạo</button>
            </form>
        </div>
    </div>
@endsection