<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home</title>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css" />

    <script src="https://kit.fontawesome.com/5a9b023f7c.js" crossorigin="anonymous"></script>
</head>
<body>
{{--@if()--}}
{{--<script>--}}
{{--    alert('You Have Successfully Registered');--}}
{{--</script>--}}
<div class="row mt-5">
@foreach($citizens as $citizen)
<ul>
    <li>{{$citizen->fullName}}</li>
    <li>{{$citizen->NID}}</li>
    <li>{{$citizen->address}}</li>
    <li><a href="{{Route('citizen.edit',$citizen->id)}}">Edit</a></li>
    <li><a href="{{Route('citizen.delete',$citizen->id)}}">Delete</a></li>
</ul>

@endforeach
</div>
</body>
</html>
