<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Account confirmation</title>
</head>
<body>
    <h2>Hey {{$user->name}}, welcome to NBA internet database!</h2>
    <p>Please click the link bellow to verify your account:<br/>
    <a href="{{url('/account-verification/' . $user->id)}}">Verify account</a>
    </p>
</body>
</html>