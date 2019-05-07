<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<?php
$data=request()->route()->parameters;
?>

<form action="http://evrica.local/backend/api/auth/reset" method="POST">
    <input type="text" name="email" value="test@mail.com">
    <input type="text" name="token" value="{{$data['token']}}">
    <input type="text" name="password" value="password">
    <input type="text" name="password_confirmation" value="password">
    <button type="submit">Set</button>
</form>


</body>
</html>
