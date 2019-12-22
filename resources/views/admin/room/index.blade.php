@extends('layouts.admin.app')
@section('content')
    <div>
        <a href="/admin/room/create" role="button" class="btn btn-primary">Tạo phòng mới</a>
    </div>
    <div>
        <div class="page-title">
            <div class="title_left">
                <h2>Danh sách các phòng trong hệ thống </h2>
            </div>
        </div>

        <div class="clearfix"></div>
        <div class="x_content">
            <div class="table-responsive">
                <table id="form-table" class="table table-striped jambo_table bulk_action">
                    <thead>
                    <tr class="headings">
                        <th class="column-title">Room ID</th>
                        <th class="column-title">Kiểu</th>
                        <th class="column-title">Tên phòng</th>
                        <th class="column-title">Mô tả</th>
                        <th class="column-title">Giá</th>
                        <th class="column-title">Số phòng còn</th>
                        <th class="column-title">Tổng sổ phòng</th>
                        <th class="column-title">Thao tác</th>
                    </tr>
                    </thead>

                    <tbody id="form-body">
                    @foreach($rooms as $index => $room)
                        <tr>
                            <td>{{$room->id}}</td>
                            <td>{{$room->type_id}}</td>
                            <td>{{$room->name}}</td>
                            <td>{{$room->description}}</td>
                            <td>{{$room->price}}</td>
                            <td>{{$room->available}}</td>
                            <td>{{$room->total}}</td>
                            <td>
                                <a href="/admin/room/{{$room->id}}/edit" class="btn btn-success" role="button">Sửa</a>
                                <form action="/admin/room/{{$room->id}}/delete" method="POST">
                                    {{csrf_field()}}
                                    {{method_field('delete')}}
                                    <button class="btn btn-danger" type="submit">Xóa</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $rooms->links() }}
            </div>
        </div>
    </div>
@endsection