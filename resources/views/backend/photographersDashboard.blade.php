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
                            <div class="panel-heading panel-style"><i class="fa fa-dashboard"></i> <span> Dashboard </span></div>
                            <fieldset style="border: 1px solid #537171 !important;border-radius: 0px;">
                                <div class="panel-body" id="testApp">

                                    <h1>Welcome  Photographers {{\Illuminate\Support\Facades\Session::get('name')}}</h1>

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

