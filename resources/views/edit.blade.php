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
    <form action="/update/{{$student->id}}" method="POST">
        @csrf
        <label for="name">Name: </label>
        <input type="text" name="username" value="{{$student->name}}">
        <br><br>

        <label for="email">Email: </label>
        <input type="email" name="useremail" value="{{$student->email}}">
        <br><br>

        <label for="age">Age: </label>
        <input type="age" name="userage" value="{{$student->age}}">
        <br><br>

        <input type="submit" value="Update">

    </form>

</body>
</html>