<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="{{ route('store') }}" method="post">
    @csrf
    @foreach($errors->all() as $error)
        {{ $error }}
    @endforeach
    name
    <input type="text" name="name">
    lastname
    <input type="text" name="lastname">
    birthday
    <input type="date" name="birthday">
    email
    <input type="text" name="email">
    phoneNumber
    <input type="text" name="phoneNumber">
    gender
    <input type="text" name="gender">


    <input type="submit" name="submit">


</form>

</body>
</html>
