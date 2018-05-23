<?php
echo header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
echo header("Cache-Control: post-check=0, pre-check=0", false);
echo header("Pragma: no-cache");
echo header('Content-Type: text/html');
?>

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
    <div class="content-wrapper">
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel-group">
                        <!--Dashboard Section-->
                        <div class="panel panel-primary">
                            <div class="panel-heading panel-style"><i class="fa fa-user"></i> <span>Photos</span></div>
                            <fieldset style="border: 1px solid #537171 !important;border-radius: 0px;">
                                <div class="panel-body" id="testApp">

                                    <div class="box box-danger">
                                        <div class="box-header with-border">
                                            <h3 class="box-title">My Photos</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body no-padding">
                                            <ul class="users-list clearfix">
                                                @foreach($datalist as  $data)
                                                <li>
                                                    <img src="{{asset('/upload')}}/myphotos/{{$data->image}}" alt="User Image">
                                                    <a class="users-list-name" href="#">{{$data->photo_title}}</a> <br/>
                                                    <a type="button" class="btn btn-default" style="padding: 0px 6px;font-size: 12px;" href="" download="{{$data->image}}"><span style="color: #2FADD3"><i class="fa fa-download"></i></span> Download </a>
                                                        <!--  Model For Inactive Any user Admin-->
                                                    <a type="button" class="btn btn-default" style="padding: 0px 6px;font-size: 12px;" href="{{ URL::to('portal/myphotos/invite/'.$data->phototrack_id) }}"><span style="color: #2FADD3"><i class="fa fa-plus"></i></span>Invite</a>
                                                </li>
                                                @endforeach

                                            </ul>
                                            <!-- /.users-list -->
                                        </div>
                                    </div>

                                    <div class="box box-danger">
                                        <div class="box-header with-border">
                                            <h3 class="box-title">Others Members</h3>

                                            <div class="box-tools pull-right">
                                                <span class="label label-danger">8 New Members</span>
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body no-padding">
                                            <ul class="users-list clearfix">
                                                  @foreach($datalistothers as $data1)
                                                    <li>
                                                        <form method="post" action="{{url('/portal/mail')}}">
                                                            {{csrf_field()}}
                                                            <input type="hidden" name="users_track_id" value="{{$data1->another_usertrack_id}}">
                                                            <input type="hidden" name="image" value="{{$data1->image}}">
                                                            <img src="{{asset('/upload')}}/myphotos/{{$data1->image}}" alt="User Image">
                                                            <a class="users-list-name" href="#">{{$data1->photo_title}}</a> <br/>
                                                            <button class="btn btn-default"  style="padding: 0px 6px;font-size: 12px;"  type="submit" id="btnLogin" name="btnLogin"> <span style="color: #2FADD3"><i class="fa fa-download"></i></span> Download</button>

                                                        </form>
                                                @endforeach
                                            </ul>
                                            <!-- /.users-list -->
                                        </div>
                                        <!-- /.box-body -->
                                        <div class="box-footer text-center">
                                            <a href="javascript:void(0)" class="uppercase">View All Users</a>
                                        </div>
                                        <!-- /.box-footer -->
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
@endsection

