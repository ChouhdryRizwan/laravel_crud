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
    <form action="/update/{{$student->id}}" method="POST" enctype="multipart/form-data">
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

        <label for="age">Image: </label>
        <input type="file" name="userimage">
        <br><br>

        <img src="{{ asset('storage/' . $student->image) }}" alt={{ $student->name }} height="100" width="auto">
        <br><br>

        <input type="submit" value="Update">

    </form>

</body>
</html>