<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    
    <h1>User</h1>
    <form action="/saveUserdata" method="POST">
        @csrf
        <label for="name">Name: </label>
        <input type="text" name="username">
        <br><br>

        <label for="email">Email: </label>
        <input type="email" name="useremail">
        <br><br>

        <label for="age">Password: </label>
        <input type="password" name="userpassword">
        <br><br>

    

        <input type="submit" value="Submit">

    </form>

</body>
</html>