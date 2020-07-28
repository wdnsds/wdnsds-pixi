<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WDNSDS | Web Developer</title>

    <link rel="stylesheet" href="{{asset('css/landing_wbk.css')}}" type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pixi.js/4.7.1/pixi.min.js"></script>
    <script src="{{asset('js/TweenMax.min.js')}}"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>
<div id="pixiCanvas"></div>


<h1 class="title">
    <img src="{{asset('assets/black.png')}}" alt="">
</h1>
<h4 class="subtitle">WDNSDS</h4>


<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
</body>

<script src="{{asset('js/js.js')}}"></script>
</html>