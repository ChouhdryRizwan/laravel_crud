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
    <form action="/login" method="POST">
        @csrf       
        <label for="email">Email: </label>
        <input type="email" name="email" id="email">
        <br><br>

        <label for="password">Password: </label>
        <input type="password" name="password" id="password">
        <br><br>

    

        <input type="submit" value="Submit">

    </form>

</body>
</html>