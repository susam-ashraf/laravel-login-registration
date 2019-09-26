<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Login register</title>
</head>
<body>
    <h1>Register</h1>

    <form action="/register" method="post">
        @csrf
        <lebel for="name">Name</lebel>
        <input type="text" name="name" id="name" required>

        <lebel for="email">Email</lebel>
        <input type="email" name="email" id="email" required>

        <lebel for="password">Password:</lebel>
        <input type="password" name="password" id="password" required>

        <button type="submit">Register</button>

    </form>

</body>
</html>