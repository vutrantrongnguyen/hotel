@extends('layouts.admin.app')
@section('content')
    <script>
        $(document).ready(function () {
            $("#find-button").click(function (e) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                })
                e.preventDefault();
                var formData = {
                    order_id: $('#order-id').val(),

                }
                var type = "POST";

                $.ajax({
                    type: type,
                    url: '/getCheckoutOrderInfo',
                    data: formData,
                    dataType: 'json',
                    success: function (data) {
                        console.log(data);
                        var htmlResult = '<div id="info">\
                                <h3>Thông tin đặt phòng</h3></br>\
                                <h4>Tên phòng: '+data.room.name+'</h4></br>\
                        <h4>Tên người đặt phòng: '+data.user.name+'</h4></br>\
                        <h4>Địa chỉ người đặt phòng: '+data.user.address+'</h4></br>\
                        <h4>Số điện thoại người đặt phòng: '+data.user.mobile+'</h4></br>\
                        <h4>Ngày bắt đầu đặt phòng: '+data.order.begin+'</h4></br>\
                        <h4>Ngày trả phòng: '+data.order.end+'</h4></br>\
                        <h4>Tổng tiền: $'+data.price+'</h4></br>\
                        <form method="post" style="text-align: center" action="{{url('/admin/commitcheckout')}}">\
                                {{csrf_field()}}\
                                {{method_field('put')}}\
                                <input  type="hidden" value="'+data.order.id+'" name="order_id" >\
                        <input type="submit" class="btn btn-danger" value="Check out">\
                                </form>\
                                </div>';
                        $('#info').replaceWith(htmlResult);

                    },
                    error: function (data) {
                        alert('Không tìm thấy thông tin đặt phòng')
                    }
                });
            });
        });
    </script>



    <p>Order ID: <input type="text" id="order-id">
        <button style="margin-left: 20px" class="btn btn-default" id="find-button">Tìm thông tin
        </button>
    </p>

    <div id="info">

    </div>
@endsection