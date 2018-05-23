<?php
echo header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
echo header("Cache-Control: post-check=0, pre-check=0", false);
echo header("Pragma: no-cache");
echo header('Content-Type: text/html');
?>
        <!DOCTYPE html>
<html lang="en">
<head>
    <title>Photographers | registration </title>
    @include('layout.frontend.scriptlink')
</head>
<body style="margin-top: 130px">
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading" id="panelHeading" style="	font-family:Pompiere;">Registration Panel Photographers
                    <span class="glyphicon glyphicon-hand-down" aria-hidden="true" style="float:right;"></span>
                </div>
                <div class="panel-body">
                    <form id="loginForm" method="POST" action="{{url('/register')}}">
                        {{csrf_field()}}
                        @if (session('success'))
                            <div class="alert alert-success" id="success-alert">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong>{{ session('success') }}</strong>
                            </div>
                        @endif

                        <div class="form-group {{ $errors->has('users_name') ? ' has-error' : '' }}">
                            <label for="users_name">Full Name :<span class="mark">*</span> </label>
                            <input type="text" class="form-control requiredOL" name="users_name" id="users_name" value=""  />
                            <small class="text-danger">{{ $errors->first('users_name') }}</small>
                        </div>

                        <div class="form-group {{ $errors->has('users_email') ? ' has-error' : '' }}">
                            <label for="users_email">Email Address<span class="mark">*</span> </label>
                            <input type="text" class="form-control requiredOL" name="users_email" id="users_email" value="" />
                            <small class="text-danger">{{ $errors->first('users_email') }}</small>
                        </div>

                        <div class="form-group {{ $errors->has('mobile_number') ? ' has-error' : '' }}">
                            <label for="mobile_number">Mobile Number<span class="mark">*</span></label>
                            <input type="text" class="form-control requiredOL" name="mobile_number" id="mobile_number" value="" />
                            <small class="text-danger">{{ $errors->first('mobile_number') }}</small>
                        </div>

                        <div class="form-group {{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="address">Address<span class="mark">*</span></label>
                            <textarea name="address" class="form-control requiredOL"></textarea>
                            <small class="text-danger">{{ $errors->first('re_password') }}</small>
                        </div>

                        <button class="btn btn-default" style="background-color: #537171;border-color: #537171;color: white" type="submit" id="btnRegister"><i class="fa fa-check"></i> Registration </button>
                         </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="particles"></div>
<div class="clearfix"></div>
</body>
</html>