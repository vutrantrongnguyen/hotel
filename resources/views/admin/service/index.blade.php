@extends('layouts.admin.app')
@section('content')

    <div style="margin-top: 20px">

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2> Quản lý các dịch vụ</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="table-responsive">
                            <table id="form-table" class="table table-striped jambo_table bulk_action">
                                <thead>
                                <tr class="headings">
                                    <th class="column-title">Tên dịch vụ</th>
                                    <th class="column-title">Giá ($)</th>

                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($services as $service)
                                    <tr class="even pointer">
                                        <form method="post"
                                              action="{{url('/admin/service/'.$service->id.'/update')}}">
                                            {{csrf_field()}}
                                            {{method_field('put')}}
                                            <td><input type="text" value="{{$service->name}}" name="name"></td>
                                            <td><input type="text" value="{{$service->price}}" name="price"></td>
                                            <td>
                                                <button type="submit" class="btn btn-default">
                                                    <i class="glyphicon glyphicon-pencil"></i> Lưu lại
                                                </button>

                                            </td>

                                        </form>

                                        <td>
                                            <form method="post"
                                                  action="{{url('/admin/service/'.$service->id.'/delete')}}">
                                                {{csrf_field()}}
                                                {{method_field('delete')}}
                                                <button type="submit" class="btn btn-default">
                                                    <i class="glyphicon glyphicon-trash"></i> Xóa
                                                </button>
                                            </form>

                                        </td>

                                    </tr>
                                @endforeach
                                <tr class="even pointer">
                                    <form method="post"
                                          action="{{url('/admin/service/save')}}">
                                        {{csrf_field()}}
                                        {{method_field('post')}}
                                        <td><input required type="text" name="name"></td>
                                        <td><input type="text" required name="price"></td>
                                        <td>
                                            <button type="submit" class="btn btn-default">
                                                <i class=" glyphicon glyphicon-plus"></i> Thêm
                                            </button>
                                        </td>
                                        <td></td>
                                    </form>

                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection