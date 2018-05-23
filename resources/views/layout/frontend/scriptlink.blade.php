<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<meta name="csrf-token" content="{{ csrf_token() }}">
<style type="text/css">
    #panelHeading{
        background-color: #537171;
        color: white;
        font-size: 18px;
        border-bottom: 3px solid #786fad;
    }
    .mark {
        color: red !important;
        font-weight: bolder;
    }

    #particles {
        width: 100%;
        height: 100%;
        overflow: hidden;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        position: absolute;
        z-index: -2;
    }
    body{
        background-color:#b38484;
    }
    a{
        color:#537171;
    }
</style>