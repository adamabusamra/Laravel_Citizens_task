<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>

<form method="post" action="{{Route('citizen.edit.submit',$citizen->id)}}">
    @csrf
    @error('NID')
    <div style="color: red; font-weight:500">{{ $message }}</div>
    @enderror
    <div><label for="NID">NID</label><br>
        <input type="text" name="NID" value="{{$citizen->NID}}"></div>

    @error('fullName')
    <div style="color: red; font-weight:500">{{ $message }}</div>
    @enderror
    <div><label for="fullName">Full Name</label><br>
        <input type="text" name="fullName" value="{{$citizen->fullName}}"></div>

    @error('city')
    <div style="color: red; font-weight:500">{{ $message }}</div>
    @enderror
    <div><label for="city">City</label><br>
        <select name="city" id="">
            <option value="{{$citizen->city}}" selected hidden>{{$citizen->city}}</option>
            <option value="amman">Amman</option>
            <option value="irbid">Irbid</option>
            <option value="aqaba">Aqaba</option>
        </select></div>

    @error('mobile')
    <div style="color: red; font-weight:500">{{ $message }}</div>
    @enderror
    <div><label for="moblie">Mobile</label><br>
        <input type="text" name="mobile" value="{{$citizen->mobile}}"></div>

    @error('address')
    <div style="color: red; font-weight:500">{{ $message }}</div>
    @enderror
    <div><label for="address">Address</label><br>
        <input type="text" name="address" value="{{$citizen->address}}"></div>

    @error('gender')
    <div style="color: red; font-weight:500">{{ $message }}</div>
    @enderror
    <div>
        <label for="gender">Gender: </label><br>
        <input type="radio" name="gender" value="male" @if( $citizen->gender =="male"){{ 'checked='.'"'.'checked'.'"'}}@endif>
        <label for="gender=">Male</label>
        <input type="radio" name="gender" value="female" @if( $citizen->gender =="female"){{ 'checked='.'"'.'checked'.'"'}}@endif>
        <label for="gender=">Female</label>
    </div>
    <br>
    <div><input type="submit" value="Register"></div>


</form>

</body>
</html>
