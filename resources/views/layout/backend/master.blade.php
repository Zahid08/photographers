<?php
echo header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
echo header("Cache-Control: post-check=0, pre-check=0", false);
echo header("Pragma: no-cache");
echo header('Content-Type: text/html');
?>
        <!DOCTYPE html>
<html>
<head>
    <title>Photographers | Profile </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="_token" content="{{ csrf_token() }}" />
    @include('layout/backend/headerScript')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    @include('layout/backend/header')
    @include('layout/backend/sidebar')
       @yield('content')
        @include('layout/backend/footerScript')
        <script type="text/javascript">
            $("#dashActive").addClass("active");
            $("#dashActive").parent().parent().addClass("treeview active");
            $("#dashActive").parent().addClass("in");
        </script>

    @include('layout/backend/footer')
</div>
</body>
</html>
