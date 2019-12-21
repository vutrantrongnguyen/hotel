@extends('layouts.admin.app')
@section('content')
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
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection