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
                            <div class="panel-heading panel-style"><i class="fa fa-user"></i> <span>Invites </span></div>
                            <fieldset style="border: 1px solid #537171 !important;border-radius: 0px;">
                                <div class="panel-body" id="testApp">
                                    @if (session('success'))
                                        <div class="alert alert-success" id="success-alert">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            <strong>{{ session('success') }}</strong>
                                        </div>
                                    @endif
                                    @if (session('error'))
                                        <div class="alert alert-danger"  id="error">
                                            <strong><i class="fa fa-warning icon-padding"></i> {{ session('error') }}</strong>
                                        </div>
                                    @endif

                                    <div class="box-body chat" id="chat-box">
                            @foreach($dataList as $data)
                                              <div class="item">
                                                  @if(empty($data->image))
                                                      <img src="{{asset('backend')}}/images/user.jpg" alt="user image" class="online">
                                                  @else
                                            <img src="{{asset('upload')}}/myphotos/{{$data->image}}" alt="user image" class="online">
                                            @endif
                                                      <p class="message">
                                                <a href="#" class="name">
                                                    <small class="text-muted pull-right"><i class=""></i>   @if (session('count')) {{session('count')}} times invite @endif</small>
                                                   {{$data->users_name}}
                                                </a>
                                                {{$data->address}}
                                            </p>
                                                <div class="pull-right">
                                                    <form method="POST" action="{{ URL::to('/portal/invitaiondon') }}">
                                                        {{ csrf_field() }}
                                                        <input type="hidden" name="image" value="{{$image}}">
                                                        <input type="hidden" name="users_track_id" value="{{$data->users_track_id}}">
                                                        <button class="btn btn-default" style="background-color: #537171;border-color: #537171;color: white" type="submit" id="btnLogin" name="btnLogin"> Invite</button>
                                                    </form>
                                                </div>
                                              </div>
                                            <hr/>
                                        @endforeach

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

