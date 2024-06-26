@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Đăng nhập</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">Địa chỉ Email</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email"
                                           value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Mật khẩu</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Ghi nhớ tài khoản này trên máy
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">

                                    <button type="submit" class="btn btn-warning">
                                        Đăng nhập
                                    </button>

                                    <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                        Quên mật khẩu?
                                    </a>
                                </div>
                            </div>
                        </form>
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-6">
                            <a href="{{ route('google.login')}}" style="padding: 20px;text-wrap: normal">
                                <button type="button" class="btn btn-secondary btn-block">Đăng nhập bằng Google</button>
                            </a>
                            <a href="{{ route('facebook.login')}}" style="padding: 20px">
                                <button type="button" class="btn btn-primary btn-block">Đăng nhập bằng Facebook</button>
                            </a>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
