<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
</head>
<body>
    <h1>User View</h1>
    <h2>UserName: {{ $name }}</h2>
    <p>{{ $users['name'] }}</p>
    <p>{{ $users['email'] }}</p>
    <p>{{ $users['phone'] }}</p>
</body>
</html>