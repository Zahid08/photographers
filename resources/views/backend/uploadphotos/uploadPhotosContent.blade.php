@extends('layout.backend.master')
@section('content')
    <style type="text/css">
        .modal-dialog {
            margin-top: 55px;
        }
        .popUpDashboard .modal-header {
            padding: 10px 15px;
            background-color: #537171;
            border-bottom: 1px solid #9CB770;
            color: #fff;
        }
        .popUpDashboard .modal-body {
            padding: 20px 10px 2px;
        }
        .popUpDashboard .close {
            color: #fff;
            opacity: .8;
        }
        .popUpDashboard .small-box h3 {
            font-size: 12px;
        }
        .popUpDashboard .small-box p {
            font-size: 12px;
        }
        .popUpDashboard .small-box .icon {
            font-size: 70px;
        }
        .popUpDashboard .small-box:hover .icon {
            font-size: 75px;
        }
        .small-box p{
            font-size: 14px;
        }
    </style>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <div class="content-wrapper">
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel-group">
                        <!--Dashboard Section-->
                        <div class="panel panel-primary">
                            <div class="panel-heading panel-style"><i class="fa fa-upload"></i> <span>   Upload Photos</span></div>
                            <fieldset style="border: 1px solid #537171 !important;border-radius: 0px;">
                                <div class="panel-body" id="testApp">


                                    <div class="panel-body">
                                        <form id="loginForm" method="POST" action="{{url('/portal/uploadphotos/savephotos')}}" enctype="multipart/form-data">
                                            {{csrf_field()}}
                                            @if (session('success'))
                                                <div class="alert alert-success" id="success-alert">
                                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                    <strong>{{ session('success') }}</strong>
                                                </div>
                                            @endif

                                             <input type="hidden" class="form-control" name="users_track_id" value="{{ \Illuminate\Support\Facades\Session::get('users_track_id')}}">
                                            <div class="form-group col-sm-6 col-sm-offset-2">
                                                <label for="photo_title">Photo Title :<span class="mark">*</span> </label>
                                                <input type="text" class="form-control requiredOL" name="photo_title" id="photo_title"  value=""  />
                                                <small class="text-danger">{{$errors->first('photo_title')}}</small>
                                            </div>

                                            <div class="form-group col-sm-6 col-sm-offset-2">
                                                <label for="photo_description">Photo Description :<span class="mark">*</span> </label>
                                                <textarea class="form-control" rows="3" placeholder="Enter photo description........." name="photo_description"></textarea>
                                                <small class="text-danger">{{$errors->first('photo_description')}}</small>
                                            </div>


                                            <div class="form-group col-sm-6 col-sm-offset-2">
                                                <label for="image">Image :<span class="mark">*</span></label>
                                                <input type="file" id="image" name="image" value="" class="form-control" />
                                                <small class="text-danger">{{$errors->first('image')}}</small>
                                            </div>

                                            <div class="form-group col-sm-6 col-sm-offset-2">
                                                <label for="sel1">Select Visibility:</label>
                                                <select class="form-control" id="sel1" name="visisbility">
                                                    <option value="NULL">Select Visibilty------</option>
                                                    <option value="ON">ON</option>
                                                    <option value="OFF">OFF</option>
                                                </select>
                                                <small class="text-danger">{{$errors->first('visisbility')}}</small>
                                            </div>

                                            <div class="form-group col-sm-6 col-sm-offset-2" style="margin-top: 30px;">
                                                <button class="btn btn-default btn-block " style="background-color: #537171;border-color: #537171;color: white" type="submit" id="btnLogin" name="btnLogin"> Submit</button>
                                            </div>
                                            <div class="form-group col-sm-6">

                                            </div>

                                        </form>
                                    </div>


                                </div>
                            </fieldset>
                        </div>
                        <!--Dashboard Section end-->
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!--All Script/Js File-->

    <script>
        $("#success-alert").fadeTo(3000, 500).slideUp(700, function(){
            $("#success-alert").slideUp(500);
        });
    </script>

@endsection
