@extends('layouts.admin.app')
@section('content')
    <div>
        <div class="page-title">
            <div class="title_left">
                <h2>Danh sách các phòng đang đặt </h2>
            </div>
        </div>

        <div class="clearfix"></div>
        <div class="x_content">
            <div class="table-responsive">
                <table id="form-table" class="table table-striped jambo_table bulk_action">
                    <thead>
                    <tr class="headings">
                        <th class="column-title">Order ID</th>
                        <th class="column-title">Room ID</th>
                        <th class="column-title">Tên phòng</th>
                        <th class="column-title">Ngày đến</th>
                        <th class="column-title">Ngày đi</th>
                        <th class="column-title">Tên người đặt</th>
                        <th class="column-title">Số điện thoại người đặt</th>
                        <th class="column-title">Trạng thái</th>
                    </tr>
                    </thead>

                    <tbody id="form-body">
                    @foreach($orders as $order)
                        <tr class="even pointer">
                            <td>{{$order->id}}</td>
                            <td>{{$order->room_id}}</td>
                            <td>{{$order->room->name}}</td>
                            <td>{{$order->begin}}</td>
                            <td>{{$order->end}}</td>
                            <td>{{$order->user->name}}</td>
                            <td>{{$order->user->mobile}}</td>
                            <td>{{$order->status}}</td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection