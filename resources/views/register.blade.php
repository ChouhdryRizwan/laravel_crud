<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    
    <h1>Register User</h1>
    <form action="/save" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="name">Name: </label>
        <input type="text" name="username">
        <br><br>

        <label for="email">Email: </label>
        <input type="email" name="useremail">
        <br><br>

        <label for="age">Age: </label>
        <input type="age" name="userage">
        <br><br>

        <label for="age">Image: </label>
        <input type="file" name="userimage">
        <br><br>

        <input type="submit" value="Submit">

    </form>

</body>
</html>